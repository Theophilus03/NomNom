<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menu = [
            [
                'image' => 'Remboelan/menu/1.png',
                'name' => 'Nasi Bakul Daun Jeruk',
                'desc' => 'Nasi liwet with teri ayu',
                'price'=>100000,
                'restaurant_id' => 1,
            ],
            [
                'image' => 'Remboelan/menu/2.png',
                'name' => 'Ice Tea',
                'desc' => 'Indonesian tea with ice',
                'price'=>15000,
                'restaurant_id' => 1,
            ],
            [
                'image' => 'AgedButchered/menu/1.png',
                'name' => '21 days - Prime Ribeye',
                'desc' => 'USDA Prime Certified Angus Ribeye ',
                'price'=>500000,
                'restaurant_id' => 2,
            ],
            [
                'image' => 'Platera/menu/1.png',
                'name' => 'Sate Ayam Plataran',
                'desc' => 'Sate ayam dengan kecap manis',
                'price'=>69000,
                'restaurant_id' => 3,
            ],
            [
                'image' => 'Platera/menu/2.png',
                'name' => 'Orange Squash',
                'desc' => 'Jeruk murni diperas langsung',
                'price'=>37000,
                'restaurant_id' => 3,
            ],
            [
                'image' => 'Wolfgang/menu/1.png',
                'name' => 'Porterhouse Steak for Two',
                'desc' => 'Dried aged steak with butter',
                'price'=>2300000,
                'restaurant_id' => 4,
            ],
            [
                'image' => 'OmaElly/menu/1.png',
                'name' => 'Lasagna al Forno',
                'desc' => 'Lasagna khas italia',
                'price'=>135000,
                'restaurant_id' => 5,
            ],
            [
                'image' => 'Primarasa/menu/1.png',
                'name' => 'Ayam Bakar 1 ekor',
                'desc' => 'Ayam yang dibakar dengan saus rahasi',
                'price'=>64000,
                'restaurant_id' => 6,
            ],
            
            [
                'image' => 'Boncafe/menu/1.png',
                'name' => 'Tenderloin Steak',
                'desc' => 'Australia Tenderloin Steak',
                'price'=>127000,
                'restaurant_id' => 7,
            ],

        ];
        DB::table('menus')->insert($menu);
    }
}
