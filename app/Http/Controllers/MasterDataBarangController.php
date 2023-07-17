<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterDataBarangController extends Controller
{
    public function index(){
        return view('masterdatabarang.index');
    }
}
