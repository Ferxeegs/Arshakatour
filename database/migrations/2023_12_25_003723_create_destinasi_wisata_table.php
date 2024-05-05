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
        Schema::create('destinasi_wisatas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tujuan_wisata1');
            $table->string('tujuan_wisata2');
            $table->string('tujuan_wisata3');
            $table->string('tujuan_wisata4');
            $table->string('tujuan_wisata5');
            $table->bigInteger('durasi');
            $table->longText('deskripsi');
            $table->bigInteger('harga');
            $table->string('gambar');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinasi_wisatas');
    }
};
