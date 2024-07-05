<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::factory(10)->create();

    }
}
