<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterDataBarangController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('masterdatabarang.index');
    }
}
