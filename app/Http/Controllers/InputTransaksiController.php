<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputTransaksiController extends Controller
{
    public function index(){
        return view('inputtransaksi.index');
    }
}
