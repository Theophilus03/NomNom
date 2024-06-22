<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order = [
            [
                'transaction_id' => '1',
                'menu_id' => 1,
                'quantity' =>2,
            ],
            [
                'transaction_id' => '2',
                'menu_id' => 1,
                'quantity' =>1,
            ],
            [
                'transaction_id' => '2',
                'menu_id' => 2,
                'quantity' =>2,
            ],
        ];
        DB::table('orders')->insert($order);
    }
}
