<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataTransaksi;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use Spatie\SimpleExcel\SimpleExcelReader;

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

                $dataFile = Storage::path('public/datatransaksi/' . $filename);
                // dd($dataFile);
                $data = SimpleExcelReader::create($dataFile)->getRows();

                $data = $data->toArray();

                $this->saveData($data);

                return redirect()->back()->with('succes', 'file berhasil di upload');
            } catch (\Throwable $th) {
                return redirect()->back()->with('error', 'terjadi kesalahan saat upload file');
            }
        }

        return redirect()->back()->with('error', 'fle tidak ditemukan');
    }

    private function saveData($data) {
        $dataBarang = [];
        foreach($data as $rows) {
            $dataBarang[] = [ 
                'id_transaksi' => $rows['id_transaksi'],
                'tanggal' => $rows['tanggal_pembelian'],
                'products' => $rows['produk_terjual'],
            ];
        }
        //kode untuk menyimpan
        foreach($dataBarang as $dataTransaksi) {
            DataTransaksi::create($dataTransaksi);
        }
    }

    public function manualInput(Request $request) {
        $lastTransaksi = DataTransaksi::latest()->get();
        
        $nomor = $lastTransaksi ? (intval(substr($lastTransaksi->id_transaksi, 2)) + 1) : 1;
        $kode = 'T0' . $nomor;

        $request->validate([
            'date' => 'required',
            'product' => 'required'
        ]);

        $manual = new DataTransaksi([
            'id_transaksi' => $kode,
            'tanggal' => $request->date,
            'products' => $request->product
        ]);

        $manual->save();

        return redirect()->back()->with('succes', 'Data berhasil di input');
    }
}