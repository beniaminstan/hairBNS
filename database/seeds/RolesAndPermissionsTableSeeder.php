<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsTableSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        DB::table('model_has_permissions')->truncate();
        DB::table('model_has_roles')->truncate();

        Permission::truncate();
        Role::truncate();

        $role_admin = Role::create(['name' => 'admin']);
        $role_client = Role::create(['name' => 'client']);
        $role_salon_manager = Role::create(['name' => 'salon-manager']);
        $role_salon_hairdresser = Role::create(['name' => 'salon-hairdresser']);

        User::find('c6dfc020-6199-11e8-83ac-bfb7d9d98ada')->assignRole($role_admin);
        User::find('c6ed52c0-6199-11e8-bd12-2d70d3e90aba')->assignRole($role_client);
        User::find('c6fb50d0-6199-11e8-b227-1109c80dff9a')->assignRole($role_salon_manager);
        User::find('9abb6fd0-61c3-11e8-896e-95ba78983153')->assignRole($role_salon_hairdresser);
        User::find('9ae1cf60-61c3-11e8-814a-57bef28e0c9c')->assignRole($role_salon_hairdresser);

    }
}