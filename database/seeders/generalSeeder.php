<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles with guard_name
        $role_pustakawan = Role::create([
            'name' => 'pustakawan',
        ]);

        $role_anggota = Role::create([
            'name' => 'anggota',
        ]);

        // Create permissions with guard_name
        $permission_create = Permission::create([
            'name' => 'create',
        ]);

        $permission_update = Permission::create([
            'name' => 'update',
        ]);

        $permission_read = Permission::create([
            'name' => 'read',
        ]);

        $permission_delete = Permission::create([
            'name' => 'delete',
        ]);

        // Create a user
        $admin = User::create([
            'name' => 'pustakawan',
            'email' => 'pustakawan@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Assign roles to the user
        $admin->assignRole($role_pustakawan);
        $admin->assignRole($role_anggota);

        // Assign permissions to the roles
        $role_pustakawan->givePermissionTo($permission_create);
        $role_pustakawan->givePermissionTo($permission_update);
        $role_pustakawan->givePermissionTo($permission_delete);
        $role_pustakawan->givePermissionTo($permission_read);
        $role_anggota->givePermissionTo($permission_read);
    }
}
