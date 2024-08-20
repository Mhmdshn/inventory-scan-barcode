<?php

namespace App\Livewire;

use App\Exports\PaletRegisterExport;
use App\Models\PaletRegister;
use App\Models\PaletRegisterDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;
use Picqer\Barcode\BarcodeGeneratorHTML;
use Picqer\Barcode\BarcodeGeneratorPNG;

class CreateNewPalet extends Component
{
    public $listLocation = [], $data;
    public $lineSelected, $scanMaterial, $material_name, $palet_no, $inputQty;

    public function mount()
    {
        $month = date('m');
        $count = PaletRegister::selectRaw('count(*)+1 as no')->whereRaw('MONTH(created_at) = ' . $month)->where('is_done', 1)->first();
        $number = str_pad($count->no, 4, "0", STR_PAD_LEFT);
        $this->palet_no = "C2-$month-$number";

        $this->listLocation = DB::select("EXEC sp_Line_CD");
    }
    public function updated($props, $s)
    {
        if ($props === 'scanMaterial') {
            $getMaterial = DB::table('material_mst')->where('matl_no', $this->scanMaterial)->select('matl_nm')->first();
            if (!$getMaterial) {
                $this->scanMaterial = null;
                return;
            }
            $this->material_name = $getMaterial->matl_nm;
            $this->dispatch('addMaterial', ['material_name' => $getMaterial->matl_nm, 'material_no' => $this->scanMaterial]);
        }
    }

    #[On('savingMaterial')]
    public function savingMaterial($qty)
    {
        $checkingPaletNo = PaletRegister::where('palet_no', $this->palet_no)->exists();
        if (!$checkingPaletNo) {
            PaletRegister::create([
                'palet_no' => $this->palet_no,
                'line_c' => $this->lineSelected
            ]);
        }
        PaletRegisterDetail::create([
            'palet_no' => $this->palet_no,
            'material_no' => $this->scanMaterial,
            'material_name' => $this->material_name,
            'qty' => $qty,
        ]);
        $this->scanMaterial = null;
    }

    public function savePallet()
    {
        PaletRegister::where('palet_no',$this->palet_no)->where('is_done',0)->update(['is_done' => 1]);
        PaletRegisterDetail::where('palet_no',$this->palet_no)->where('is_done',0)->update(['is_done' => 1]);
        $generator = new BarcodeGeneratorPNG();
        $barcode = $generator->getBarcode($this->palet_no, $generator::TYPE_CODE_128);
        Storage::put('public/barcodes/' . $this->palet_no . '.png', $barcode);

        $dataExport = [
            'data' => $this->data,
            'palet_no' => $this->palet_no,
            'line' => $this->lineSelected
        ];
        redirect(route('register_palet'));
        return Excel::download(new PaletRegisterExport($dataExport), "Scanned Items_" . $this->palet_no . "_" . date('YmdHis') . ".pdf", \Maatwebsite\Excel\Excel::MPDF);
    }

    public function deleteMaterial($id = null){
        PaletRegisterDetail::destroy($id);
    }

    public function render()
    {

        $this->data = PaletRegisterDetail::where('palet_no', $this->palet_no)->get();
        return view('livewire.create-new-palet');
    }
}
