<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataBarang;


class DataBarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $barang = DataBarang::all();
        return view('databarang.index', compact('barang'));
    }

    public function store(Request $request)
    {
        // Validasi input dari request
        $request->validate([ // Pastikan kode_barang unik di tabel barangs
            'nama_barang' => 'required',
        ]);

        // Mengisi otomatis kode_barang dengan format "B-nomor"
        $lastBarang = DataBarang::latest()->first();
        $nomor = $lastBarang ? (intval(substr($lastBarang->kode_barang, 2)) + 1) : 1;
        $kode = 'B-00' . $nomor;

        // Membuat instance model Barang dengan data yang akan disimpan
        $barang = new DataBarang([
            'kode_barang' => $kode,
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
        ]);

        // Menyimpan data ke database
        $barang->save();

        // Redirect atau kirim pesan sukses
        return redirect()->route('databarang.index');
    }
}
