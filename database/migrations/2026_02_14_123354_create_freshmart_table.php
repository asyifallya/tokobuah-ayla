<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Pastikan isi tabel ada di DALAM kurung kurawal fungsi up
        Schema::create('fruits', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('slug')->unique(); // <--- PASTIKAN BARIS INI ADA
    $table->text('description');
    $table->integer('price');
    $table->string('image');
    $table->integer('stock')->default(0);
    $table->timestamps();
});
    }

    public function down(): void
    {
        Schema::dropIfExists('fruits');
    }
};