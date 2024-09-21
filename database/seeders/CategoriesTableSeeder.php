<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoriesRecord = [
            [
                'name'=> 'blog',
                'slug'=> 'blog',
            ],

            [
                'category_name'=> 'project',
                'slug'=> 'project',
            ]
            ];

            Category::insert($categoriesRecord);
    }
}
