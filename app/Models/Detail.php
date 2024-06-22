<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'time_open',
        'time_close',
        'price',
        'address_detail',
        'phone',
        'price_range',
        'award',
        'gmaps',
        'restaurant_id',
    ];

    public function restaurants()
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id', 'id');
    }
}
