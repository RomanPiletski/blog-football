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
                'title' => 'Тег 1',
                'slug' => 'teg_1',
            ],
            [
                'title' => 'Тег 2',
                'slug' => 'teg_2',
            ],
            [
                'title' => 'Тег 3',
                'slug' => 'teg_3',
            ],
            [
                'title' => 'Тег 4',
                'slug' => 'teg_4',
            ],
            [
                'title' => 'Тег 5',
                'slug' => 'teg_5',
            ],
        ]);
    }
}
