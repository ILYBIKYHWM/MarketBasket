<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataHasilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('datahasil.index');
    }

    public function show()
    {
        return view('datahasil.show');
    }
}
