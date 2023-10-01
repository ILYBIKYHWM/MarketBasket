<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataTransaksiController;
use App\Http\Controllers\DataProsesController;
use App\Http\Controllers\DataHasilController;
use App\Http\Controllers\DataBarangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();

// Route::resource('/masterdatabarang', MasterDataBarangController::class);
// Route::get('/masterdatabarang', [MasterDataBarangController::class, 'index'])->name('masterdatabarang.index');

// Route::resource('/inputtransaksi', InputTransaksiController::class);
// Route::get('/inputtransaksi', [InputTransaksiController::class, 'index'])->name('inputtransaksi.index');

// Route::resource('/detaildatatransaksi', DetailDataTransaksiController::class);
// Route::get('/detaildatatransaksi', [DetailDataTransaksiController::class, 'index'])->name('detaildatatransaksi.index');

// Route::resource('/riwayattransaksi', RiwayatTransaksiController::class);
// Route::get('/riwayattransaksi', [RiwayatTransaksiController::class, 'index'])->name('riwayattransaksi.index');


Route::get('/', [HomeController::class, 'index'])->name('dashboard');

Route::resource('/datatransaksi', DataTransaksiController::class);
Route::get('/datatransaksi', [DataTransaksiController::class, 'index'])->name('datatransaksi.index');
Route::post('/datatransaksi/manualInput', [DataTransaksiController::class, 'manualInput'])->name('manual.input');

Route::resource('/dataproses', DataProsesController::class);
Route::get('/dataproses', [DataProsesController::class, 'index'])->name('dataproses.index');
Route::post('/dataproses/searchData', [DataProsesController::class, 'searchData'])->name('search.data');

Route::resource('/datahasil', DataHasilController::class);
Route::get('/datahasil', [DataHasilController::class, 'index'])->name('datahasil.index');

Route::resource('/databarang', DataBarangController::class);
Route::get('/databarang', [DataBarangController::class, 'index'])->name('databarang.index');