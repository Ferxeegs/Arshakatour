<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyDestinasiWisatasTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('destinasi_wisatas', function (Blueprint $table) {
            $table->string('tujuan_wisata1')->nullable()->change();
            $table->string('tujuan_wisata2')->nullable()->change();
            $table->string('tujuan_wisata3')->nullable()->change();
            $table->string('tujuan_wisata4')->nullable()->change();
            $table->string('tujuan_wisata5')->nullable()->change();
            $table->unsignedBigInteger('durasi')->change();
            $table->text('deskripsi')->change();
            $table->unsignedBigInteger('harga')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Jika Anda ingin mengembalikan perubahan, Anda dapat menuliskan kode untuk rollback di sini
        // Namun, dalam contoh ini, kita tidak akan menulis kode untuk rollback karena kita tidak akan membuat perubahan permanen
    }
}
