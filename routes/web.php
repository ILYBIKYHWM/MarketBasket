<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterDataBarangController;
use App\Http\Controllers\InputTransaksiController;
use App\Http\Controllers\DetailDataTransaksiController;
use App\Http\Controllers\RiwayatTransaksiController;

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

Route::get('/', function () {
    return view('dashboard');
});

Route::resource('/masterdatabarang', MasterDataBarangController::class);
Route::get('/masterdatabarang', [MasterDataBarangController::class, 'index'])->name('masterdatabarang.index');

Route::resource('/inputtransaksi', InputTransaksiController::class);
Route::get('/inputtransaksi', [InputTransaksiController::class, 'index'])->name('inputtransaksi.index');

Route::resource('/detaildatatransaksi', DetailDataTransaksiController::class);
Route::get('/detaildatatransaksi', [DetailDataTransaksiController::class, 'index'])->name('detaildatatransaksi.index');

Route::resource('/riwayattransaksi', RiwayatTransaksiController::class);
Route::get('/riwayattransaksi', [RiwayatTransaksiController::class, 'index'])->name('riwayattransaksi.index');
