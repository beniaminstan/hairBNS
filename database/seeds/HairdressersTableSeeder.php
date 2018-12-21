<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HairdressersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hairdressers')->truncate();

        DB::table('hairdressers')->insert([
            'user_id' => '9abb6fd0-61c3-11e8-896e-95ba78983153',
            'salon_business_id' => 1,
        ]);

        DB::table('hairdressers')->insert([
            'user_id' => '9ae1cf60-61c3-11e8-814a-57bef28e0c9c',
            'salon_business_id' => 1,
        ]);
    }
}
