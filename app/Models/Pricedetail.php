<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pricedetail extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'jumlah_peserta',
        'harga',
        'paketwisatas_id',
        
    ];

    public function paketWisata()
    {
        return $this->belongsTo(PaketWisata::class, 'paketwisatas_id');
    }
}
