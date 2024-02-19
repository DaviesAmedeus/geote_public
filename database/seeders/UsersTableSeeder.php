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
        $password = Hash::make('admin@2024');
        $usersRecords = [
            [
                'id'=>1,
                'user_name'=> 'Erick Mnyali',
                'email'=> 'erick@geote.org',
                'password'=> $password,
                'image'=> '',
            ]
        ];

        User::insert($usersRecords);
    }
}

