<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        $totalBarang = Barang::count();
        $totalBarangMasuk = BarangMasuk::sum('stok'); 
        $totalBarangKeluar = BarangKeluar::sum('stok'); 
        
        //Debuging
        // dd($totalBarang, $totalBarangMasuk, $totalBarangKeluar);
        
        return view('home', compact('totalBarang', 'totalBarangMasuk', 'totalBarangKeluar'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Invalidate the session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect to the welcome view
        return redirect('/welcome');
    }
}