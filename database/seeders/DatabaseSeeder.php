<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(GenreSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(RestaurantSeeder::class);
        $this->call(PromoSeeder::class);
        $this->call(DetailSeeder::class);
        $this->call(MenuSeeder::class);
        
        $this->call(UserSeeder::class);
        $this->call(TransactionSeeder::class);
        $this->call(OrderSeeder::class);
    }
}
