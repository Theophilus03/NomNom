<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;
use App\Models\Genre;
use App\Models\City;

use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    //
    public function getHomePage(){
        $promos=Promo::all();
        $genres=Genre::all();
        $cities=City::all();


        return view('home', compact('promos', 'genres', 'cities'));
    }
}
