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
                "slug" => "category_1",
            ],
            [
                "title" => "Категория 2",
                "slug" => "category_2",
            ],
            [
                "title" => "Категория 3",
                "slug" => "category_3",
            ],
            [
                "title" => "Категория 4",
                "slug" => "category_4",
            ],
            [
                "title" => "Категория 5",
                "slug" => "category_5",
            ],
        ]);
    }
}
