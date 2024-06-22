<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Theo',
                'email' =>'theo@gmail.com',
                'password' => Hash::make('1234'),
                'phone' =>"0812345"
            ],
        ];
        DB::table('users2')->insert($user);
    }
}
