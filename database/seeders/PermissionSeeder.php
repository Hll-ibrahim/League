<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['superadmin', 'admin', 'user'];
        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
        $role = Role::findByName('superadmin');

        $permissions = ['crud league'];
        foreach ($permissions as $permission) {
            $perm = Permission::create(['name' => $permission]);
            $role->givePermissionTo($perm);
        }
    }
}
