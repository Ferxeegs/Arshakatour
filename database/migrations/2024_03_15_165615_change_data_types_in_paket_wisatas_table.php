<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeDataTypesInPaketWisatasTable extends Migration
{
    public function up()
    {
        Schema::table('paket_wisatas', function (Blueprint $table) {
            // Ubah tipe data kolom 'durasi', 'destinasi_id', dan 'harga' menjadi unsignedBigInteger
            $table->unsignedBigInteger('durasi')->change();
            $table->unsignedBigInteger('destinasi_id')->change();
            $table->unsignedBigInteger('harga')->change();
            
            
        
            
            // Ubah tipe data kolom 'tujuan_wisata1' hingga 'tujuan_wisata5' menjadi nullable
            $table->string('tujuan_wisata1')->nullable()->change();
            $table->string('tujuan_wisata2')->nullable()->change();
            $table->string('tujuan_wisata3')->nullable()->change();
            $table->string('tujuan_wisata4')->nullable()->change();
            $table->string('tujuan_wisata5')->nullable()->change();
            
            // Ubah tipe data kolom 'detail1' hingga 'detail6' menjadi nullable
            $table->string('detail1')->nullable()->change();
            $table->string('detail2')->nullable()->change();
            $table->string('detail3')->nullable()->change();
            $table->string('detail4')->nullable()->change();
            $table->string('detail5')->nullable()->change();
            $table->string('detail6')->nullable()->change();
        });
    }

    public function down()
    {
        // Anda bisa membuat perintah untuk mengembalikan perubahan tipe data jika diperlukan
    }
}

