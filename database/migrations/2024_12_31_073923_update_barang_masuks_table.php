<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('barang_masuks', function (Blueprint $table) {
            // Hapus kunci asing yang ada
            $table->dropForeign(['barang_id']);
            
            // Tambahkan kunci asing dengan ON DELETE CASCADE
            $table->foreign('barang_id')->references('id')->on('barang')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('barang_masuks', function (Blueprint $table) {
            // Hapus kunci asing yang ada
            $table->dropForeign(['barang_id']);
            
            // Kembalikan ke kondisi sebelumnya (jika perlu)
            $table->foreign('barang_id')->references('id')->on('barang');
        });
    }
};
