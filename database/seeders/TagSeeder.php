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
                'slug' => 'teg-1',
            ],
            [
                'title' => 'Тег 2',
                'slug' => 'teg-2',
            ],
            [
                'title' => 'Тег 3',
                'slug' => 'teg-3',
            ],
            [
                'title' => 'Тег 4',
                'slug' => 'teg-4',
            ],
            [
                'title' => 'Тег 5',
                'slug' => 'teg-5',
            ],
        ]);
    }
}
