<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password1 = Hash::make('user@2024');
        $password2 = Hash::make('admin@2024');

        $usersRecords = [
            // user
            [
                'id'=>1,
                'name'=> 'Edgar Amedeus',
                'email'=> 'edgar@email.com',
                'password'=> $password1,
                'type'=> 0,
            
            ],

            // Admin
            [
                'id'=>2,
                'name'=> 'Davies Amedeus',
                'email'=> 'davies@email.com',
                'password'=> $password2,
                'type'=> 1,
            
            ]
        ];

        User::insert($usersRecords);
    }
}

