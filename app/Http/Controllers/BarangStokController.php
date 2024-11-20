<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarangStokController extends Controller
{
    public function index()
    {
        $barangs = Barang::with(['Barangmasuks', 'Barangkeluars'])->get();
        return view('barangstok.index', compact('barangs'));
    }
}
