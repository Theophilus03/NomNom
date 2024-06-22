<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $detail = [
            [
                'address' => "Mall Kelapa Gading",
                'time_open' => 10,
                'time_close' => 20,
                'price' => '$$$',
                'address_detail' => 'Jl. Boulevard Raya Unit I - 47, RT.13/RW.18, East Kelapa Gading, Kelapa Gading, North Jakarta City, Jakarta 14240',
                'phone' => '(021) 45864948',
                'price_range' => 'Rp.70.000 - Rp.150.000 / person',
                'award' => 'Best Indonesian Restaurant 2022',
                'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.8043969693717!2d106.90755667475007!3d-6.156946493830192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f534f7debe61%3A0x215a9c413ca04294!2sREMBOELAN!5e0!3m2!1sen!2sid!4v1717823127316!5m2!1sen!2sid',
                'restaurant_id' => 1,
            ],
            [
                'address' => "MD Place Mezzanine",
                'time_open' => 11,
                'time_close' => 23,
                'price' => '$$$$$',
                'address_detail' => 'Jl. Setia Budi Selatan No.7, RT.5/RW.1, Kuningan, Setiabudi, South Jakarta City, Jakarta 12910',
                'phone' => '087722783257',
                'price_range' => 'Rp.300.000 - Rp.500.000 / person',
                'award' => "Nom Nom Food Awards 2024",
                'gmaps' => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4211072585085!2d106.82575837475041!3d-6.208055593779778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4054728e417%3A0xce1edf5afd2a61b4!2sAged%20%2B%20Butchered!5e0!3m2!1sen!2sid!4v1718164564502!5m2!1sen!2sid",
                'restaurant_id' => 2,
            ],
            [
                'address' => "Menteng",
                'time_open' => 10,
                'time_close' => 22,
                'price' => '$$$$',
                'address_detail' => 'Jl. HOS. Cokroaminoto No.42 6, RT.6/RW.4, Gondangdia, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota',
                'phone' => '(021) 29627771',
                'price_range' => 'Rp.150.000 - Rp.200.000 / person',
                'award' => "-",
                'gmaps' => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5425951292523!2d106.82600627475026!3d-6.191901493795701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f423590651f7%3A0x983424b56075bd8!2sPlataran%20Menteng!5e0!3m2!1sen!2sid!4v1718194492282!5m2!1sen!2sid",
                'restaurant_id' => 3,
            ],
            [
                'address' => "SCBD",
                'time_open' => 11,
                'time_close' => 23,
                'price' => '$$$$$',
                'address_detail' => 'ELYSEE SCBD Jakarta, Level 6 Rooftop, Lot 21 SCBD RT.7/RW.1, Senayan, Kota Jakarta Selatan, Jakarta, Daerah Khusus Ibukota Jakarta',
                'phone' => '(021) 50110955',
                'price_range' => 'Rp.200.000 - Rp.500.000 / person',
                'award' => "-",
                'gmaps' => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15773.724938455101!2d115.16317571447539!3d-8.745432387179093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd243a5002fbff1%3A0xb8d72eeb064782fb!2sWolfgang%20Puck%20Kitchen%20%2B%20Bar!5e0!3m2!1sen!2sid!4v1718199409129!5m2!1sen!2sid",
                'restaurant_id' => 4,
            ],
            [
                'address' => "Senayan City",
                'time_open' => 10,
                'time_close' => 22,
                'price' => '$$$',
                'address_detail' => 'Senayan City LG Floor, Jalan Asia Afrika No. Lot 19, Senayan, Jakarta 10270',
                'phone' => '085210067377',
                'price_range' => 'Rp.100.000 - Rp.1500.000 / person',
                'award' => "-",
                'gmaps' => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31730.231701332235!2d106.7596669743164!3d-6.226903399999978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1885f5f5887%3A0x89d9239e9334fa20!2sOma%20Elly%20Tratoria%20-%20Senayan%20City!5e0!3m2!1sen!2sid!4v1718195102151!5m2!1sen!2sid",
                'restaurant_id' => 5,
            ],
            [
                'address' => "Kusuma",
                'time_open' => 7,
                'time_close' => 22,
                'price' => '$$$',
                'address_detail' => 'Jl. Kusuma Bangsa no. 3A, Surabaya 60272 Indonesia',
                'phone' => '0831531300',
                'price_range' => 'Rp.70.000 - Rp.150.000 / person',
                'award' => "-",
                'gmaps' => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63320.351831877546!2d112.69610069255656!3d-7.295096734288278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f97b35223aa7%3A0x431ce026cf122eb4!2sAyam%20Bakar%20Primarasa!5e0!3m2!1sen!2sid!4v1718199488227!5m2!1sen!2sid",
                'restaurant_id' => 6,
            ],
            [
                'address' => "Pregolan",
                'time_open' => 10,
                'time_close' => 22,
                'price' => '$$$$',
                'address_detail' => 'Jl. Pregolan No.2, Tegalsari, Kec. Tegalsari, Surabaya, Jawa Timur 60262',
                'phone' => '081133330252',
                'price_range' => 'Rp.150.000 - Rp.250.000 / person',
                'award' => "-",
                'gmaps' => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63320.35235978573!2d112.69610062824643!3d-7.29509300287184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbdff0da1b6b%3A0x8445a0ff1627a868!2sBoncaf%C3%A9%20-%20Pregolan!5e0!3m2!1sen!2sid!4v1718199565246!5m2!1sen!2sid",
                'restaurant_id' => 7,
            ],
        ];
        DB::table('details')->insert($detail);
    }
}
