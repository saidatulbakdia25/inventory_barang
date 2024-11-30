<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\BarangStokController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Exports\BarangsExport;
use Maatwebsite\Excel\Facades\Excel;


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
    return redirect()->route('welcome'); // Mengarahkan ke rute welcome
});

// Rute untuk halaman welcome
Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome');

// Rute untuk logout
Route::post('/logout', [HomeController::class, 'logout'])->name('logout');

// Rute untuk tampilan admin barang (CRUD)
Route::middleware(['auth'])->group(function () {
    // Rute untuk halaman home setelah login
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Rute untuk resource barang
    Route::resource('barang', BarangController::class);
    Route::resource('barangmasuk', BarangMasukController::class);
    Route::resource('barangkeluar', BarangKeluarController::class);
    Route::resource('barangstok', BarangStokController::class);

    Route::get('/barangs/export', function () {
        return Excel::download(new BarangsExport, 'barangs.xlsx');
    })->name('barangs.export');
});