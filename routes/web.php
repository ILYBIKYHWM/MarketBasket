<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterDataBarangController;

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
