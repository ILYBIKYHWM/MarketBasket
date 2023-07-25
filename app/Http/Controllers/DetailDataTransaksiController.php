<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailDataTransaksiController extends Controller
{
    public function index(){
        return view('detaildatatransaksi.index');
    }
}
