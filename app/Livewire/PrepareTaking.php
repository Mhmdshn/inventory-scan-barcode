<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\MenuOptions;
use App\Exports\ExportStockTaking;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class PrepareTaking extends Component
{
    public $statusActive, $date, $id, $canOpen, $user_id, $dataStatus, $dataStock=[], $pluckStock=[];



    public function changeStatusActive()
    {
    }

    public function open()
    {
        sleep(0.5);
        $data = MenuOptions::find($this->dataStatus->id);
        $this->date = $this->date ?? now();
        $data->update([
            'status' => 0,
            'date_end' => date('Y-m-d H:i:s', strtotime($this->date))
        ]);
    }
    public function lock()
    {
        $qry = DB::table('material_in_stock')
            ->where('is_taking', '0')
            ->selectRaw('material_no, sum(picking_qty) as qty,locate')->groupBy(['material_no','locate'])->orderBy('locate');
        $this->dataStock = $qry->get();
        $this->pluckStock = $qry->pluck('material_no');

        $this->date = $this->date ?? now();
        MenuOptions::create([
            'status' => 1,
            'user_id' => $this->user_id,
            'date_start' => date('Y-m-d H:i:s', strtotime($this->date))
        ]);
    }

    public function exportPdf()
    {
        $update = DB::table('material_in_stock')
            ->whereIn('material_no', $this->pluckStock)
            ->where('is_taking', '0')
            ->update(['is_taking' => 1]);
            // {is taking 0 belum prepare}
            // {is taking 1 prepare}
            // {is taking 2 confirm}
            // {is taking 9 STO hasil confirm}
        
        $name = auth()->user()->username . date('d-m-Y H:i');
        return Excel::download(new ExportStockTaking($this->dataStock,$this->dataStatus->id), "Stock Taking - $name.pdf", \Maatwebsite\Excel\Excel::MPDF);
    }

    public function render()
    {
        $this->user_id = auth()->user()->id;

        $data = MenuOptions::where('status', 1);
        $this->canOpen = $data->exists();

        if ($this->canOpen) {
            $this->dataStatus = $data->first();
        }

        $qry = DB::table('material_in_stock')
            ->where('is_taking', '0')
            ->selectRaw('material_no, sum(picking_qty) as qty,locate')->groupBy(['material_no','locate'])->orderBy('locate');
        $this->dataStock = $qry->get();
        $this->pluckStock = $qry->pluck('material_no');

        return view('livewire.prepare-taking');
    }
}
