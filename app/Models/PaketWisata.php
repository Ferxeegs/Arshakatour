<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaketWisata extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'harga',
        'tujuan_wisata1',
        'tujuan_wisata2',
        'tujuan_wisata3',
        'tujuan_wisata4',
        'tujuan_wisata5',
        'durasi',
        'gambar',
        'destinasi_id',
        'detail1',
        'detail2',
        'detail3',
        'detail4',
        'detail5',
        'detail6',
    ];

    /**
     * Relationship with DestinasiWisata model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function destinasi()
    {
        return $this->belongsTo(DestinasiWisata::class, 'destinasi_id');
    }
}
