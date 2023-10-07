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
        
        $request->session()->put('dataSort', $dataSort);
        $request->session()->put('startDate', $startDate);
        $request->session()->put('endDate', $endDate);

        
        return view('dataproses.index', ['dataSort' => $dataSort]);
    }

    public function prosesData(Request $request)
    {
        $support = $request->input('support');
        $confidence = $request->input('confidence');

        $dataSort = $request->session()->get('dataSort');
        $startDate = $request->session()->get('startDate');
        $endDate = $request->session()->get('endDate');

        return view('dataproses.index', [
            'startDate' => $startDate,
            'endDate' => $endDate,
            'dataSort' => $dataSort,
            'support' => $support,
            'confidence' => $confidence,
        ]);
    }
}
