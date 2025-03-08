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
        Schema::create('transaksi_masuks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId(column: 'Id_Barang')->constrained()->onDelete('cascade');
            $table->foreignId(column: 'Id_Supplier')->constrained()->onDelete('cascade');
            $table->string(column: 'Tanggal');
            $table->string(column: 'Jumlah');
            $table->string(column: 'Harga Beli');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_masuks');
    }
};
