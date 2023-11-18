<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create a admin
        $adminRoleId = Role::where('role_slug', 'admin')->first()->id;
        User::updateOrCreate([
            'role_id' => $adminRoleId,
            'name' => 'Admin',
            'email' => 'admin@laravel.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),


        ]);

        //create a user
        $userRoleId = Role::where('role_slug', 'user')->first()->id;
        User::updateOrCreate([
            'role_id' => $userRoleId,
            'name' => 'User',
            'email' => 'user@laravel.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
        ]);

    }
}
