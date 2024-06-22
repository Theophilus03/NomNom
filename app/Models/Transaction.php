<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'people',
        'datetime',
        'status',
        'request',
        'user_id',
        'restaurant_id',
    ];
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function users()
    {
        return $this->belongsTo(User2::class, 'user_id', 'id');
    }
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id', 'id');
    }

    // Define an accessor for the formatted time
    public function getFormattedTimeAttribute()
    {
        return Carbon::parse($this->attributes['datetime'])->format('H:i');
    }

    // Define an accessor for the formatted date
    public function getYearAttribute()
    {
        return Carbon::parse($this->attributes['datetime'])->year;
    }

    public function getMonthAttribute()
    {
        return Carbon::parse($this->attributes['datetime'])->format('F');
    }

    public function getDayAttribute()
    {
        return Carbon::parse($this->attributes['datetime'])->day;
    }
}
