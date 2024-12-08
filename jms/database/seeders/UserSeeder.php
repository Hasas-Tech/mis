<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => Hash::make('password123'),
            'role_type' => 'admin', // Ensure this matches the role in the RoleSeeder
            'image' => null,
        ]);
    }
}
