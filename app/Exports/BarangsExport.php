<?php

namespace App\Exports;

use App\Models\Barang;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BarangsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Barang::with(['barangmasuks', 'barangkeluars'])->get()->map(function($barang, $index) {
            $totalBarangMasuk = $barang->barangmasuks->sum('stok'); 
            $totalBarangKeluar = $barang->barangkeluars->sum('stok'); 

            return [
                'No.' => $index + 1,
                'Nama Barang' => $barang->nama_barang, 
                'Stok' => $barang->stok, 
                'Keterangan' => $barang->keterangan, 
                'Barang Masuk' => $totalBarangMasuk,
                'Barang Keluar' => $totalBarangKeluar,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'No.',
            'Nama Barang',
            'Stok',
            'Keterangan',
            'Barang Masuk',
            'Barang Keluar',
        ];
    }
}