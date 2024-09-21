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

        $usersRecords = [
            // user
            [
                'name'=> 'Staff',
                'email'=> 'staff@staff.com',
                'password'=> bcrypt('123456'),
                'is_admin'=> 0,

            ],

            // Admin
            [
                'name'=> 'Admin',
                'email'=> 'admin@example.com',
                'password'=> bcrypt('123456'),
                'is_admin'=> 1,

            ]
        ];

        User::insert($usersRecords);
    }
}

