<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->truncate();

        DB::table('users')->insert([
            'id' => 'c6dfc020-6199-11e8-83ac-bfb7d9d98ada',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);

        DB::table('users')->insert([
            'id' => 'c6ed52c0-6199-11e8-bd12-2d70d3e90aba',
            'email' => 'client@client.com',
            'password' => bcrypt('user'),
        ]);

        DB::table('users')->insert([
            'id' => 'c6fb50d0-6199-11e8-b227-1109c80dff9a',
            'email' => 'salon@salon.com',
            'password' => bcrypt('saloon'),
        ]);

        DB::table('users')->insert([
            'id' => '9abb6fd0-61c3-11e8-896e-95ba78983153',
            'email' => 'hairdresser1@hairdresser1.com',
            'password' => bcrypt('user'),
        ]);

        DB::table('users')->insert([
            'id' => '9ae1cf60-61c3-11e8-814a-57bef28e0c9c',
            'email' => 'hairdresser2@hairdresser2.com',
            'password' => bcrypt('user'),
        ]);
    }
}
