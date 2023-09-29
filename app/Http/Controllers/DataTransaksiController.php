<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataTransaksi;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class DataTransaksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $transaksi = DataTransaksi::all();
        return view('datatransaksi.index', compact('transaksi'));
    }

    public function store(Request $request){
        // Validasi input dari request
        $request->validate([ // Pastikan kode_barang unik di tabel barangs
            'file' => 'required|mimes:xlsx,xls',
        ]);

        if ($request->file('file')) {
            try {
                $file_b = $request->file('file');
                $filename = 'file'."-".time().".{$file_b->extension()}";

                $file_b->storeAs('public/datatransaksi', $filename);
                $fullPath = '/storage/datatransaksi' . $filename;

                return redirect()->back()->with('succes', 'file berhasil di upload');
            } catch (\Throwable $th) {
                return redirect()->back()->with('error', 'terjadi kesalahan saat upload file');
            }
        }

        return redirect()->back()->with('error', 'fle tidak ditemukan');
    }
}
