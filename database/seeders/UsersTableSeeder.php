<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //     User::createMany([
    //         'name' => 'Admin',
    //         'email' => 'muhamadhabibi14168@gmail.com',
    //         'npm' => '13119890',
    //         'role' => '2',
    //         // 'divisi' => 'MIB',
    //         'password' => Hash::make('cemara2077'), // Use Hash::make() to hash the password
    //     ],
    // [
    //         'name' => 'Habibi',
    //         'email' => 'habibi@gmail.com',
    //         'npm' => '12345678',
    //         'role' => '0',
    //         // 'divisi' => 'MIB',
    //         'password' => Hash::make('cemara2077'), // Use Hash::make() to hash the password
    //     ]);

    DB::table('users')->insert([
        [
            'name' => 'Habibi Pengurus',
            'email' => 'habibi@gmail.com',
            'npm' => '12345678',
            'role' => '0',
            // 'divisi' => 'MIB',
            'password' => Hash::make('cemara2077'),
        ],
        [
            'name' => 'Habibi Evaluator',
            'email' => 'habibi1@gmail.com',
            'npm' => '00000000',
            'role' => '1',
            // 'divisi' => 'MIB',
            'password' => Hash::make('cemara2077'),
        ],
        [
            'name' => 'Admin',
            'email' => 'muhamadhabibi14168@gmail.com',
            'npm' => '13119890',
            'role' => '2',
            // 'divisi' => 'MIB',
            'password' => Hash::make('cemara2077'),
        ],
    ]);

    }
}
