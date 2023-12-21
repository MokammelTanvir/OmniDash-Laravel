<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\Permission;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Access Dashboard
        $adminPermissionArray = [
            'Access Dashboard',
        ];

        //Admin Module Permission
        $adminModulePermissionArray = [
            'Index Module',
            'Create Module',
            'Edit Module',
            'Delete Module',
        ];
        //Permission Module Permission
        $permissionModulePermissionArray = [
            'Index Permission',
            'Create Permission',
            'Edit Permission',
            'Delete Permission',
        ];

        //Role Module Permission
        $adminRolePermissionArray = [
            'Index Role',
            'Create Role',
            'Edit Role',
            'Delete Role',
        ];

        //User Role Permission
        $adminUserPermissionArray = [
            'Index User',
            'Create User',
            'Edit User',
            'Delete User',
        ];

        //Profile Module Permission
        $profileModulePermissionArray = [
            'Profile Update',
            'Password Update',
        ];

        //Page Module Permission
        $pageModulePermissionArray = [
            'Index Page',
            'Create Page',
            'Edit Page',
            'Delete Page',
        ];

        //Backup Module Permission
        $backupModulePermissionArray = [
            'Index Backup',
            'Create Backup',
            'Download Backup',
            'Delete Backup',
        ];

        //Setting Module Permission
        $settingModulePermissionArray = [
            'General Setting View',
            'General Setting Update',
            'Appearance Setting View',
            'Appearance Setting Update',
            'Mail Setting View',
            'Mail Setting Update',
            'Socialite Setting View',
            'Socialite Setting Update',
        ];




        // Access Dashboard
        $adminDashboardModule = Module::where('module_name', 'Admin Dashboard')
        ->select('id')
        ->first();

        Permission::updateOrCreate([
            'module_id' => $adminDashboardModule->id,
            'permission_name' => $adminPermissionArray[0],
            'permission_slug' => Str::slug($adminPermissionArray[0])
        ]);

        // Module Management
        $moduleManagementModule = Module::where('module_name', 'Module Management')
        ->select('id')
        ->first();

        for ($i=0; $i <count($adminModulePermissionArray); $i++) {
            Permission::updateOrCreate([
                'module_id' => $moduleManagementModule->id,
                'permission_name' => $adminModulePermissionArray[$i],
                'permission_slug' => Str::slug($adminModulePermissionArray[$i])
            ]);
        }

        // Permission Management
        $permissionManagementModule = Module::where('module_name', 'Permission Management')
        ->select('id')
        ->first();

        for ($i=0; $i <count($permissionModulePermissionArray); $i++) {
            Permission::updateOrCreate([
                'module_id' => $permissionManagementModule->id,
                'permission_name' => $permissionModulePermissionArray[$i],
                'permission_slug' => Str::slug($permissionModulePermissionArray[$i])
            ]);
        }


        // Role Management
        $roleManagementModule = Module::where('module_name', 'Role Management')
        ->select('id')
        ->first();

        for ($i=0; $i <count($adminRolePermissionArray); $i++) {
            Permission::updateOrCreate([
                'module_id' => $roleManagementModule->id,
                'permission_name' => $adminRolePermissionArray[$i],
                'permission_slug' => Str::slug($adminRolePermissionArray[$i])
            ]);
        }

        // User Management
        $userManagementModule = Module::where('module_name', 'User Management')
        ->select('id')
        ->first();

        for ($i=0; $i <count($adminUserPermissionArray); $i++) {
            Permission::updateOrCreate([
                'module_id' => $userManagementModule->id,
                'permission_name' => $adminUserPermissionArray[$i],
                'permission_slug' => Str::slug($adminUserPermissionArray[$i])
            ]);
        }

        // Profile Management
        $profileManagementModule = Module::where('module_name', 'Profile Management')
        ->select('id')
        ->first();

        for ($i=0; $i <count($profileModulePermissionArray); $i++) {
            Permission::updateOrCreate([
                'module_id' => $profileManagementModule->id,
                'permission_name' => $profileModulePermissionArray[$i],
                'permission_slug' => Str::slug($profileModulePermissionArray[$i])
            ]);
        }

        // Page Management
        $pageManagementModule = Module::where('module_name', 'Page Management')
        ->select('id')
        ->first();

        for ($i=0; $i <count($pageModulePermissionArray); $i++) {
            Permission::updateOrCreate([
                'module_id' => $pageManagementModule->id,
                'permission_name' => $pageModulePermissionArray[$i],
                'permission_slug' => Str::slug($pageModulePermissionArray[$i])
            ]);
        }

        // Backup Management
        $backupManagementModule = Module::where('module_name', 'Backup Management')
        ->select('id')
        ->first();

        for ($i=0; $i <count($backupModulePermissionArray); $i++) {
            Permission::updateOrCreate([
                'module_id' => $backupManagementModule->id,
                'permission_name' => $backupModulePermissionArray[$i],
                'permission_slug' => Str::slug($backupModulePermissionArray[$i])
            ]);
        }

        // Setting Management
        $settingManagementModule = Module::where('module_name', 'Setting Management')
        ->select('id')
        ->first();

        for ($i=0; $i <count($settingModulePermissionArray); $i++) {
            Permission::updateOrCreate([
                'module_id' => $settingManagementModule->id,
                'permission_name' => $settingModulePermissionArray[$i],
                'permission_slug' => Str::slug($settingModulePermissionArray[$i])
            ]);
        }



    }
}
