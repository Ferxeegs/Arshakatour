<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyReservationsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->string('telepon', 15)->change(); // Mengubah tipe data kolom telepon menjadi string dengan panjang maksimum 15 karakter
            $table->unsignedBigInteger('jumlah_peserta')->change(); // Mengubah tipe data kolom jumlah_peserta menjadi unsignedBigInteger
            $table->text('pesan')->change(); // Mengubah tipe data kolom pesan menjadi text
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

