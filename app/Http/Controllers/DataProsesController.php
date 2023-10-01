<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataTransaksi;

class DataProsesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dataproses.index');
    }

    public function searchData(Request $request)
    {
        $daterange = $request->input('daterange');        
        list($startDate, $endDate) = explode(' - ', $daterange);
        $startDate = date('Y-m-d', strtotime($startDate));
        $endDate = date('Y-m-d', strtotime($endDate));

        $dataSort = DataTransaksi::whereBetween('tanggal', [$startDate, $endDate])->get();
        
        return view('dataproses.index', ['dataSort' => $dataSort]);
    }
}
