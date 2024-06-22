<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Genre;
use App\Models\City;
use App\Models\Promo;
use App\Models\Detail;
use App\Models\Menu;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'logo',
        'rating',
        'genre_id',
        'city_id',
    ];

    public function genres()
    {
        return $this->belongsTo(Genre::class, 'genre_id', 'id');
    }

    public function cities()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }

    public function promos()
    {
        return $this->hasMany(Promo::class);
    }

    public function details()
    {
        return $this->hasOne(Detail::class);
    }
    public function menus()
    {
        return $this->hasOne(Menu::class);
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
