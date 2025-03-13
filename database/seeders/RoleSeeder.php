<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $employeeRole = Role::firstOrCreate(['name' => 'employee']);

        $user = User::factory()->create([
            //change to desired details
            'name' => 'Rune',
            'email' => 'rune@yrgo.se',
            'password' => Hash::make('12345678'),
            'role_id' => $adminRole->id,
        ]);
    }
}
