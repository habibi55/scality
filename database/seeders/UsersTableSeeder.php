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

    DB::table('users')->insert([
        // Ketua dan Wakil Ketua
        [
            'name' => 'Rafi',
            'email' => 'rafi@gmail.com',
            'npm' => '11111111',
            'role' => '1',
            'jabatan' => '3',
            'departemen' => NULL,
            'bidang' => NULL,
            'password' => Hash::make('cemara2077'),
        ],

        [
            'name' => 'Ruben',
            'email' => 'ruben@gmail.com',
            'npm' => '22222222',
            'role' => '1',
            'jabatan' => '3',
            'departemen' => NULL,
            'bidang' => NULL,
            'password' => Hash::make('cemara2077'),
        ],


        // Supervisor
        [
            'name' => 'Admin Habibi',
            'email' => 'muhamadhabibi14168@gmail.com',
            'npm' => '13119890',
            'role' => '2',
            'jabatan' => '2',
            'departemen' => '0',
            'bidang' => NULL,
            'password' => Hash::make('cemara2077'),
        ],

        [
            'name' => 'Raisya',
            'email' => 'raisya@gmail.com',
            'npm' => '33333333',
            'role' => '1',
            'jabatan' => '2',
            'departemen' => '0',
            'bidang' => NULL,
            'password' => Hash::make('cemara2077'),
        ],

        [
            'name' => 'Tifa',
            'email' => 'tifa@gmail.com',
            'npm' => '44444444',
            'role' => '1',
            'jabatan' => '2',
            'departemen' => '1',
            'bidang' => NULL,
            'password' => Hash::make('cemara2077'),
        ],

        [
            'name' => 'Cloud',
            'email' => 'cloud@gmail.com',
            'npm' => '55555555',
            'role' => '1',
            'jabatan' => '2',
            'departemen' => '1',
            'bidang' => NULL,
            'password' => Hash::make('cemara2077'),
        ],

        // Kepala
        [
            'name' => 'Aska',
            'email' => 'aska@gmail.com',
            'npm' => '66666666',
            'role' => '0',
            'jabatan' => '1',
            'departemen' => '0',
            'bidang' => '0',
            'password' => Hash::make('cemara2077'),
        ],

        [
            'name' => 'Raymond',
            'email' => 'raymond@gmail.com',
            'npm' => '77777777',
            'role' => '1',
            'jabatan' => '1',
            'departemen' => '0',
            'bidang' => '1',
            'password' => Hash::make('cemara2077'),
        ],

    ]);

    }
}
