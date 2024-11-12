<?php

namespace App\Http\Controllers;

use App\Models\Barang; 
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $barangs = Barang::all(); // Ambil semua data barang dari database
        return view('welcome', compact('barangs')); // Kirim data ke view
    }
}
