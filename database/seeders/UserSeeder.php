<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);
    
        User::create([
            'name' => 'Abdul',
            'email' => 'abdul@gmail.com',
            'password' => Hash::make('abdul123'),
            'role' => 'user',
        ]);
    }
}
