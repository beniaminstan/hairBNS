<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('profiles')->truncate();

        DB::table('profiles')->insert([
            'user_id' => 'c6dfc020-6199-11e8-83ac-bfb7d9d98ada',
            'first_name' => 'admin',
            'last_name' => 'istrator',
        ]);

        DB::table('profiles')->insert([
            'user_id' => 'c6ed52c0-6199-11e8-bd12-2d70d3e90aba',
            'first_name' => 'salon',
            'last_name' => 'client',
        ]);

        DB::table('profiles')->insert([
            'user_id' => 'c6fb50d0-6199-11e8-b227-1109c80dff9a',
            'first_name' => 'salon',
            'last_name' => 'manager',
        ]);

        DB::table('profiles')->insert([
            'user_id' => '9abb6fd0-61c3-11e8-896e-95ba78983153',
            'first_name' => 'hair',
            'last_name' => 'dresser1',
        ]);

        DB::table('profiles')->insert([
            'user_id' => '9ae1cf60-61c3-11e8-814a-57bef28e0c9c',
            'first_name' => 'hair',
            'last_name' => 'dresser2',
        ]);
    }
}
