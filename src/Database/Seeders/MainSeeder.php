<?php

namespace Incadev\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class MainSeeder extends Seeder
{
    public function run(): void
    {
        $userModelClass = config('auth.providers.users.model', 'App\Models\User');

        $superAdmin = $userModelClass::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@incadev.com',
            'password' => 'password',
            'dni' => '00000001',
            'fullname' => 'Administrator',
        ]);

        Role::create(['name' => 'super_admin']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'teacher']);
        Role::create(['name' => 'student']);
        Role::create(['name' => 'support']);
        Role::create(['name' => 'auditor']);

        $superAdmin->assignRole('super_admin');
    }
}
