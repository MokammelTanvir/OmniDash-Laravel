<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1. Create an admin role
        // 2. and assign all permission on it
        $adminPermissions = Permission::select('id')->get();


        Role::updateOrCreate([
            'role_name' => 'Admin',
            'role_slug' => 'admin',
            'role_note' => 'admin has all permissions',
            'is_deletable' => false,
        ])->permissions()->sync($adminPermissions->pluck('id'));



        //1. Create a customer user role
        Role::updateOrCreate([
            'role_name' => 'Customer',
            'role_slug' => 'customer',
            'role_note' => 'customer has limited permissions',
            'is_deletable' => true,
        ]);

        //1 Create a manager role
        // 2. and assign some permission on it
        $managerPermissions = Permission::select('id')->where('permission_slug', 'like', 'view_%')->get();

        Role::updateOrCreate([
            'role_name' => 'Manager',
            'role_slug' => 'manager',
            'role_note' => 'manager has limited permissions',
            'is_deletable' => true,
        ])->permissions()->sync($managerPermissions->pluck('id'));
    }
}
