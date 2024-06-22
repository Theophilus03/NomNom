<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transaction = [
            [
                'name'=>'theo',
                'phone'=>'081231123',
                'people'=>3,
                'datetime'=>Carbon::now(),
                'status'=>1,
                'request'=>'',
                'user_id'=>1,
                'restaurant_id'=>1,
            ],
            [
                'name'=>'theophilus',
                'phone'=>'0812345678',
                'people'=>2,
                'datetime'=>Carbon::now(),
                'status'=>0,
                'request'=>'saya mau ada esbatu di meja',
                'user_id'=>1,
                'restaurant_id'=>1,
            ],
        ];
        DB::table('transactions')->insert($transaction);

    }
}
