<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = barang::all();
        return view('barang.index', [
            'barangs' => $barangs
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            $request->validate([
                'nama_barang' => 'required|string|max:255',
                'stok_awal' => 'required|integer',
                'stok' => 'required|integer',
                'keterangan' => 'required|string|nullable',
                'tanggal' => 'required|date',
            ]);
        
            Barang::create([
                'nama_barang' => $request->name_barang,
                'stok_awal' => $request->stok_awal,
                'stok' => $request->stok,
                'keterangan' => $request->keterangan,
                'tanggal' => $request->tanggal,
            ]);
        
            return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        $validated = $request->validate([
            'nama_barang' => 'required',
            'stok_awal' => 'required',
            'stok' => 'required',
            'keterangan' => 'required',
            'tanggal' => 'required|date',
        ]);

        $barang->update($validated);
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
   /**
 * Remove the specified resource from storage.
 */
    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus.');
    }
}
