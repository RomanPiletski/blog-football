<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{

    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'Пост 1',
                'slug' => 'post_1',
                'content' => 'Контент пост 1',
                'category_id' => 1,
                'user_id' => 1,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 10,
            ],
            [
                'title' => 'Пост 2',
                'slug' => 'post_2',
                'content' => 'Контент пост 2',
                'category_id' => 2,
                'user_id' => 2,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 10,
            ],
            [
                'title' => 'Пост 3',
                'slug' => 'post_3',
                'content' => 'Контент пост 3',
                'category_id' => 3,
                'user_id' => 3,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 10,
            ],
            [
                'title' => 'Пост 4',
                'slug' => 'post_4',
                'content' => 'Контент пост 4',
                'category_id' => 4,
                'user_id' => 4,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 10,
            ],
            [
                'title' => 'Пост 5',
                'slug' => 'post_5',
                'content' => 'Контент пост 5',
                'category_id' => 5,
                'user_id' => 5,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 10,
            ],
        ]);
    }
}
