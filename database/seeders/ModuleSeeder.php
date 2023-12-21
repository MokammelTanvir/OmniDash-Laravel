<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $moduleArray = [
            'Admin Dashboard',
            'Module Management',
            'Permission Management',
            'Role Management',
            'User Management',
            'Profile Management',
            'Page Management',
            'Backup Management',
            'Setting Management',
        ];

        foreach ($moduleArray as $module) {
            Module::updateOrCreate([
                'module_name' => $module,
                'module_slug' => Str::slug($module),
            ]);
        }
    }
}
