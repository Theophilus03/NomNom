<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant;

class Promo extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'restaurant_id',
    ];

    public function restaurants()
    {
        return $this->belongsTo(Location::class, 'restaurant_id', 'id');
    }

}
