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
                'name'=> 'projects',
                'slug'=> 'projects',
            ],

            [
                'name'=> 'publications',
                'slug'=> 'publications',
            ],

            [
                'name'=> 'GIS programs',
                'slug'=> 'gis-programs',
            ]
            ];



            Category::insert($categoriesRecord);
    }
}
