<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salon_businesses')->truncate();

        DB::table('salon_businesses')->insert([
            'user_id' => 'c6fb50d0-6199-11e8-b227-1109c80dff9a',
            'name' => 'The Saloon',
        ]);
    }
}
