<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Habibi',
            'email' => 'muhamadhabibi14168@gmail.com',
            'npm' => '13119890',
            'role' => 'admin',
            'divisi' => 'MIB',
            'password' => Hash::make('2077'), // Use Hash::make() to hash the password
        ]);
    }
}
