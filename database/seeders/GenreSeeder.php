<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genre = [
            [
                'name' => 'Italian Food',
                'image' => '1.png',
            ],
            [
                'name' => 'Western Food',
                'image' => '2.png',
            ],
            [
                'name' => 'Indonesian Food',
                'image' => '3.png',
            ],
        ];
        DB::table('genres')->insert($genre);
    }
}
