<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        //Declaring the Users
        $adminUser =User::factory()->create([
            'name'=> 'Admin',
            'email'=> 'admin@example.com',
            'password'=> bcrypt('123456'),
            'is_admin'=> 1,
        ]);
        $staffUser =User::factory()->create([
            'name'=> 'Staff',
            'email'=> 'staff@staff.com',
            'password'=> bcrypt('123456'),
            'is_admin'=> 0,
        ]);

        //Declaring the roles
        $adminRole = Role::create(['name' => 'admin']);
        $staffRole = Role::create(['name' => 'staff']);

        //Assigning the roles to Users
        $adminUser->assignRole($adminRole);
        $staffUser->assignRole($staffRole);


    }
}

