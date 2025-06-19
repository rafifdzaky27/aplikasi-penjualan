<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('barang', BarangController::class);
Route::resource('pelanggan', PelangganController::class);
Route::resource('penjualan', PenjualanController::class);
