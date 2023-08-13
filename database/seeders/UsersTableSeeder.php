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
            'name' => 'Admin',
            'email' => 'muhamadhabibi14168@gmail.com',
            'npm' => '13119890',
            'role' => '2',
            // 'divisi' => 'MIB',
            'password' => Hash::make('cemara2077'), // Use Hash::make() to hash the password
        ]);
    }
}
