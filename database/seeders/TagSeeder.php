<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    public function run()
    {
        DB::table('tags')->insert([
            [
                'title' => 'Анонс матча',
                'slug' => 'anons-matcha',
            ],
            [
                'title' => 'Интервью игрока',
                'slug' => 'intervyu-igroka',
            ],
            [
                'title' => 'Итог матча',
                'slug' => 'itog-matcha',
            ],
            [
                'title' => 'Золотой мяч',
                'slug' => 'zolotoj-myach',
            ],
            [
                'title' => 'Тренер',
                'slug' => 'trener',
            ],
        ]);
    }
}
