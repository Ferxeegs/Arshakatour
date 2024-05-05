<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DestinasiWisata extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'tujuan_wisata1',
        'tujuan_wisata2',
        'tujuan_wisata3',
        'tujuan_wisata4',
        'tujuan_wisata5',
        'deskripsi',
        'durasi',
        'harga',
        'gambar',
        
    ];

    public function paket()
    {
        return $this->hasMany(PaketWisata::class, 'destinasi_id','id');
    }
}

