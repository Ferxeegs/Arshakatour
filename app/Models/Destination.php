<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Destination extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_destinasi',
        'deskripsi',
        'gambar',
        
    ];

    public function paket()
    {
        return $this->hasMany(PaketWisata::class, 'destinations_id','id');
    }
}
