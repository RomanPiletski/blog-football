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
                'slug' => 'post-1',
                'content' => 'Контент пост 1',
                'category_id' => 1,
                'user_id' => 1,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 10,
                "image" => "uploads/ins-1.jpg"
            ],
            [
                'title' => 'Пост 2',
                'slug' => 'post-2',
                'content' => 'Контент пост 2',
                'category_id' => 2,
                'user_id' => 2,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 10,
                "image" => "uploads/ins-2.jpg"
            ],
            [
                'title' => 'Пост 3',
                'slug' => 'post-3',
                'content' => 'Контент пост 3',
                'category_id' => 3,
                'user_id' => 3,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 10,
                "image" => "uploads/ins-3.jpg"
            ],
            [
                'title' => 'Пост 4',
                'slug' => 'post-4',
                'content' => 'Контент пост 4',
                'category_id' => 4,
                'user_id' => 4,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 10,
                "image" => "uploads/ins-4.jpg"
            ],
            [
                'title' => 'Пост 5',
                'slug' => 'post-5',
                'content' => 'Контент пост 5',
                'category_id' => 5,
                'user_id' => 5,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 10,
                "image" => "uploads/ins-5.jpg"
            ],
        ]);
    }
}
