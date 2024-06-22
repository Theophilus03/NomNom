<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'transaction_id',
        'menu_id', 
        'quantitity',
    ];
    public function transactions()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    }
    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id', 'id');
    }
}
