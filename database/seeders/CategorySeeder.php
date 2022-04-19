<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table("categories")->insert([
            [
                "title" => "Категория 1",
                "slug" => "category-1",
            ],
            [
                "title" => "Категория 2",
                "slug" => "category-2",
            ],
            [
                "title" => "Категория 3",
                "slug" => "category-3",
            ],
            [
                "title" => "Категория 4",
                "slug" => "category-4",
            ],
            [
                "title" => "Категория 5",
                "slug" => "category-5",
            ],
        ]);
    }
}
