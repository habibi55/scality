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
        [
            'name' => 'Admin',
            'email' => 'muhamadhabibi14168@gmail.com',
            'npm' => '13119890',
            'role' => '2',
            'jabatan' => '2',
            'departemen' => '0',
            'bidang' => NULL,
            'password' => Hash::make('cemara2077'),
        ],

        // Ketua dan Wakil Ketua
        [
            'name' => 'Rafi',
            'email' => 'rafi@gmail.com',
            'npm' => '99999999',
            'role' => '1',
            'jabatan' => '3',
            'departemen' => NULL,
            'bidang' => NULL,
            'password' => Hash::make('cemara2077'),
        ],

        [
            'name' => 'Ruben',
            'email' => 'ruben@gmail.com',
            'npm' => '88888888',
            'role' => '1',
            'jabatan' => '3',
            'departemen' => NULL,
            'bidang' => NULL,
            'password' => Hash::make('cemara2077'),
        ],


        // Supervisor
        [
            'name' => 'Wakil Ketua 0',
            'email' => 'habibi0@gmail.com',
            'npm' => '00000000',
            'role' => '1',
            'jabatan' => '2',
            'departemen' => '0',
            'bidang' => NULL,
            'password' => Hash::make('cemara2077'),
        ],

        [
            'name' => 'Kepala Bidang 0',
            'email' => 'habibi1@gmail.com',
            'npm' => '11111111',
            'role' => '1',
            'jabatan' => '1',
            'departemen' => '0',
            'bidang' => '0',
            'password' => Hash::make('cemara2077'),
        ],

        [
            'name' => 'Kepala Bidang 1',
            'email' => 'habibi2@gmail.com',
            'npm' => '22222222',
            'role' => '1',
            'jabatan' => '1',
            'departemen' => '0',
            'bidang' => '1',
            'password' => Hash::make('cemara2077'),
        ],

        [
            'name' => 'Staff 1 Bidang 0',
            'email' => 'habibi3@gmail.com',
            'npm' => '33333333',
            'role' => '0',
            'jabatan' => '0',
            'departemen' => '0',
            'bidang' => '0',
            'password' => Hash::make('cemara2077'),
        ],

                [
            'name' => 'Staff 2 Bidang 0',
            'email' => 'habibi4@gmail.com',
            'npm' => '44444444',
            'role' => '0',
            'jabatan' => '0',
            'departemen' => '0',
            'bidang' => '0',
            'password' => Hash::make('cemara2077'),
        ]

        // [
        //     'name' => 'Ke',
        //     'email' => 'habibi1@gmail.com',
        //     'npm' => '00000000',
        //     'role' => '0',
        //     'departemen' => '0',
        //     'bidang' => '0',
        //     'jabatan' => '0',
        //     'password' => Hash::make('cemara2077'),
        // ],


        // [
        //     'name' => 'Habibi Evaluator',
        //     'email' => 'habibi2@gmail.com',
        //     'npm' => '11111111',
        //     'role' => '1',
        //     'jabatan' => '2',
        //     'departemen' => '0',
        //     'bidang' => '0',
        //     'password' => Hash::make('cemara2077'),
        // ],
        // [
        //     'name' => 'Raisya Evaluator',
        //     'email' => 'habibi3@gmail.com',
        //     'npm' => '22222222',
        //     'role' => '1',
        //     'jabatan' => '2',
        //     'departemen' => '1',
        //     'bidang' => '4',
        //     'password' => Hash::make('cemara2077'),
        // ],

        // [
        //     'name' => 'Raisya Evaluator',
        //     'email' => 'habibi4@gmail.com',
        //     'npm' => '33333333',
        //     'role' => '1',
        //     'jabatan' => '1',
        //     'departemen' => '0',
        //     'bidang' => '0',
        //     'password' => Hash::make('cemara2077'),
        // ],
        //     [
        //     'name' => 'Raisya Evaluator',
        //     'email' => 'habibi5@gmail.com',
        //     'npm' => '44444444',
        //     'role' => '1',
        //     'jabatan' => '1',
        //     'departemen' => '0',
        //     'bidang' => '1',
        //     'password' => Hash::make('cemara2077'),
        // ],
        //     [
        //     'name' => 'Raisya Evaluator',
        //     'email' => 'habibi6@gmail.com',
        //     'npm' => '55555555',
        //     'role' => '1',
        //     'jabatan' => '1',
        //     'departemen' => '1',
        //     'bidang' => '2',
        //     'password' => Hash::make('cemara2077'),
        // ],
        // [
        //     'name' => 'Raisya Evaluator',
        //     'email' => 'habibi7@gmail.com',
        //     'npm' => '66666666',
        //     'role' => '1',
        //     'jabatan' => '1',
        //     'departemen' => '1',
        //     'bidang' => '3',
        //     'password' => Hash::make('cemara2077'),
        // ],
        // [
        //     'name' => 'Raisya Evaluator',
        //     'email' => 'habibi8@gmail.com',
        //     'npm' => '77777777',
        //     'role' => '1',
        //     'jabatan' => '1',
        //     'departemen' => '1',
        //     'bidang' => '4',
        //     'password' => Hash::make('cemara2077'),
        // ],




    ]);

    }
}
