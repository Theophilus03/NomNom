<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Genre;
use App\Models\City;

class RestaurantController extends Controller
{
    //
    public function getRestaurantPage(Request $request){
        
        $restaurants=Restaurant::all();

        $genres=Genre::all();
        $cities=City::all();
        return view('restaurant', compact('restaurants', 'genres', 'cities'));
    }

    public function filter(Request $request)
    {
        $genres = Genre::all();
        $cities=City::all();
        $restaurants = Restaurant::query();

        $genre_id = $request->input('genre_id');
        $city_id = $request->input('city_id');

        if ($genre_id) {
            $restaurants -> where('genre_id', $genre_id);
        }
        if ($city_id) {
            $restaurants -> where('city_id', $city_id);
        }
        $restaurants = $restaurants->get();

        return view('restaurant', compact('restaurants', 'genres', 'cities', 'genre_id', 'city_id'));
    }
}
