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
                'id'=>1,
                'category_name'=> 'blog'
            ],

            [
                'id'=>2,
                'category_name'=> 'update'
            ]
            ];

            Category::insert($categoriesRecord);
    }
}
