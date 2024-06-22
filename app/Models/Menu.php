<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'name',
        'desc',
        'price',
        'restaurant_id',
    ];
    public function restaurants()
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id', 'id');
    }
    public function order()
    {
        return $this->hasMany(Order::class);
    }

}
