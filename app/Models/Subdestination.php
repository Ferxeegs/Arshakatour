<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subdestination extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'subdestinasi',
        'paketwisatas_id',
        
    ];

    public function paketWisatas()
    {
        return $this->belongsTo(PaketWisata::class, 'paketwisatas_id');
    }
}
