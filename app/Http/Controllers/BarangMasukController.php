<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangMasuk;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangmasuks = BarangMasuk::with('barang')->get(); 
        $barangs = Barang::all(); 

        return view('barangmasuk.index', compact('barangmasuks', 'barangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barangs = Barang::all(); 
        return view('barangmasuk.index.create', compact('barangs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'barang_id' => 'required|exists:barang,id',
            'stok' => 'required|integer',
            'tgl_masuk' => 'required|date',
        ]);

        $barang = Barang::find($request->barang_id);
        $barang->stok += $request->stok; 
        $barang->save();

        BarangMasuk::create($request->all());
        return redirect()->route('barangmasuk.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(BarangMasuk $barangMasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BarangMasuk $barangMasuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BarangMasuk $barangMasuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Cari data barang masuk berdasarkan ID
        $barangMasuk = BarangMasuk::findOrFail($id);
    
        // Kembalikan stok barang ke kondisi sebelum barang masuk ditambahkan
        $barang = $barangMasuk->barang;
        $barang->stok -= $barangMasuk->stok;
        $barang->save();
    
        // Hapus data barang masuk
        $barangMasuk->delete();
    
        return redirect()->route('barangmasuk.index')->with('success', 'Data barang masuk berhasil dihapus dan stok barang telah diperbarui.');
    }
}
