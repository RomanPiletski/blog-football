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
                "title" => "Чемпионат Мира 2022",
                "slug" => "chempionat-mira-2022",
            ],
            [
                "title" => "Лига чемпионов",
                "slug" => "liga-chempionov",
            ],
            [
                "title" => "Английская Премьер-Лига",
                "slug" => "anglijskaya-premьer-liga",
            ],
            [
                "title" => "Чемпионат Испании",
                "slug" => "chempionat-ispanii",
            ],
            [
                "title" => "Чемпионат Беларуси",
                "slug" => "chempionat-belarusi",
            ],
            [
                "title" => "Золотой мяч",
                "slug" => "zolotoj-myach",
            ],
        ]);
    }
}
