<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $detail = [
            [
                'name' => 'Remboelan',
                'image' => 'Remboelan/banner.png',
                'logo'=>'Remboelan/logo.png',
                'rating' => '4.6',
                'genre_id'=>3,
                'city_id'=>1,
            ],
            [
                'name' => 'Aged + Butchered',
                'image' => 'AgedButchered/banner.png',
                'logo'=>'AgedButchered/logo.png',
                'rating' => '4.8',
                'genre_id'=>2,
                'city_id'=>1,
            ],
            [
                'name' => 'Platera',
                'image' => 'Platera/banner.png',
                'logo'=>'Platera/logo.png',
                'rating' => '4.7',
                'genre_id'=>1,
                'city_id'=>1,
            ],
            [
                'name' => 'Wolfgang Steakhouse',
                'image' => 'Wolfgang/banner.png',
                'logo'=>'Wolfgang/logo.png',
                'rating' => '4.5',
                'genre_id'=>2,
                'city_id'=>1,
            ],
            [
                'name' => 'Oma Elly',
                'image' => 'OmaElly/banner.png',
                'logo'=>'OmaElly/logo.png',
                'rating' => '4.5',
                'genre_id'=>3,
                'city_id'=>1,
            ],
            [
                'name' => 'Ayam Bakar Primarasa',
                'image' => 'Primarasa/banner.png',
                'logo'=>'Primarasa/logo.png',
                'rating' => '4.5',
                'genre_id'=>1,
                'city_id'=>2,
            ],
            [
                'name' => 'Boncafe Pregolan',
                'image' => 'Boncafe/banner.png',
                'logo'=>'Boncafe/logo.png',
                'rating' => '4.7',
                'genre_id'=>2,
                'city_id'=>2,
            ],
        ];
        DB::table('restaurants')->insert($detail);
    }
}
