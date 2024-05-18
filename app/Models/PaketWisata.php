<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paketwisata extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_paket',
        'durasi',
        'gambar',
        'destinations_id',
        
    ];

    public function destinasi()
    {
        return $this->belongsTo(Destination::class, 'destinations_id');
    }
    public function subdestinasi()
    {
        return $this->hasMany(Subdestination::class, 'paketwisatas_id', 'id');
    }
    public function priceDetails()
    {
        return $this->hasMany(PriceDetail::class, 'paketwisatas_id', 'id');
    }
}
