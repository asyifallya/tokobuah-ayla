<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migration untuk membuat tabel orders.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name'); // Untuk menyimpan nama pembeli
            $table->string('phone');         // Untuk nomor HP
            $table->text('address');         // Untuk alamat lengkap
            $table->integer('total_price');  // Untuk total harga belanjaan
            $table->timestamps();            // Otomatis membuat created_at dan updated_at
        });
    }

    /**
     * Batalkan migration (hapus tabel).
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};