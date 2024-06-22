<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User2 extends Authenticatable
{
    protected $table = 'users2';
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
    ];
    public $timestamps = false;

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
