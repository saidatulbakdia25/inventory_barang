<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangkeluars = BarangKeluar::with('barang')->get(); // Mengambil data barang keluar beserta relasi barang
        $barangs = Barang::all(); // Mengambil semua barang untuk dropdown

        return view('barangkeluar.index', compact('barangkeluars', 'barangs')); // Menggunakan nama variabel yang benar
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barangs = Barang::all(); // Ambil semua barang
        return view('barangkeluar.index.create', compact('barangs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'barang_id' => 'required|exists:barang,id',
            'stok' => 'required|integer',
            'tgl_keluar' => 'required|date',
            'keterangan' => 'nullable|string',
        ]);

        // Mengurangi stok barang
        $barang = Barang::find($request->barang_id);
        if ($barang->stok < $request->stok) {
            return redirect()->back()->withErrors(['stok' => 'Stok tidak cukup']);
        }

        $barang->stok -= $request->stok; // Kurangi stok barang
        $barang->save();

        // Simpan data barang keluar
        BarangKeluar::create($request->all());

        return redirect()->route('barangkeluar.index')->with('success', 'Barang keluar berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(BarangKeluar $barangKeluar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BarangKeluar $barangKeluar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BarangKeluar $barangKeluar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        BarangKeluar::where('barang_id', $id)->delete();
        
        $barang = Barang::findOrFail($id);
        $barang->delete();

        return redirect()->route('barang.index')->with('success', 'Data berhasil dihapus.');
    }
}
