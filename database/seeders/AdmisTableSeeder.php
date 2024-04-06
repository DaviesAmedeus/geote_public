<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Hash;

class AdmisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Hash::make('admin@2024');
        $adminRecords = [
            [
                'id'=>1,
                'name'=> 'Admin',
                'type'=> 'admin',
                'mobile'=> '0767238976',
                'email'=> 'admin@geote.org',
                'password'=> $password,
                'image'=> '',
                'status'=> 1
            ]
        ];

        Admin::insert($adminRecords);
    }
}
