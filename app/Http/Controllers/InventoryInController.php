<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class InventoryInController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.list-product');
        
    }

    public function materialRegistrasi() {
        return view('pages.materialRegis');
    }
    public function po()
    {
        return view('pages.po');
    }
    
    public function abnormal() {
        return view('pages.abnormal-item');
    }
    

    public function instock() {
        return view('pages.material-instock');
    }
    public function checking() {
        return view('pages.checking-stock');
    }
    public function detail()
    {
        return view('pages.list-product');
    }
    public function prepareStockTaking()
    {
        return view('pages.prepare-taking');
    }

    public function inputStockTaking(){
        return view('pages.input-taking');
    }
    public function resultStockTaking(){
        return view('pages.result-taking');
    }
    
    public function confStockTaking(){
        return view('pages.taking-conf');
    }

    public function reportStockTaking(){
        return view('pages.report-taking');
    }

}
