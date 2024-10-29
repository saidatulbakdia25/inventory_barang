<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('barang', BarangController::class);
Route::get('/barangkeluar', [App\Http\Controllers\BarangKeluarController::class, 'index'])->name('barangkeluar');
Route::get('/barangmasuk', [App\Http\Controllers\BarangMasukController::class, 'index'])->name('barangmasuk');
