<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Models\RoleModel;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modules = [
            'users',
            'dashboard',
            'projects',
            'gallary',
            'solutions',
            'services',
            'careers',
            'news',
            'testimonials',
            'tools',
            'partners',
            'clients',
            'settings',
            'compnay_profile',
            'offers',
            'particular',
            'home',
            'footer',
            'message',      
            'roles',
        ];

        foreach ($modules as $module) {
            $perm = Permission::where('module', $module);
            if ($perm->count() == 0) {
                $permissions = ['create', 'read', 'update', 'delete', 'approve', 'all'];
                $mappedPermissions = collect($module)->map(function ($module) use ($permissions) {
                    $arr = [];
                    foreach ($permissions as $permission) {
                        array_push($arr, ['name' => "$permission-$module", 'module' => $module, 'guard_name' => 'web']);
                    }
                    return $arr;
                })->flatten(1)->toArray();
                Permission::insert($mappedPermissions);
                $permissions = Permission::where('module', $module)->get();
                $roles = RoleModel::all();
                foreach ($roles as $role) {
                    $role->syncPermissions($permissions);
                }
                // dd($roles);
                $users = User::all();
                foreach ($users as $user) {
                    $user->syncRoles([]);
                    $user->assignRole('CEO');
                }
            }
        }
    }
}
