<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $promo = [
            [
                'image' => 'promo/remboelan.png',
                'restaurant_id' => '1',
            ],
            [
                'image' => 'promo/remboelan2.png',
                'restaurant_id' => '1',
            ],
        ];
        DB::table('promos')->insert($promo);

    }
}
