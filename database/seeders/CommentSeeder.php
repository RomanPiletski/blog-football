<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    public function run()
    {
        DB::table('comments')->insert([
            [
                'text' => 'Комментарий 1',
                'slug' => 'kommentariy_1',
                'user_id' => 1,
                'post_id' => 1,
                'is_publish' => 1,
            ],
            [
                'text' => 'Комментарий 2',
                'slug' => 'kommentariy_2',
                'user_id' => 2,
                'post_id' => 2,
                'is_publish' => 1,
            ],
            [
                'text' => 'Комментарий 3',
                'slug' => 'kommentariy_3',
                'user_id' => 3,
                'post_id' => 3,
                'is_publish' => 1,
            ],
            [
                'text' => 'Комментарий 4',
                'slug' => 'kommentariy_4',
                'user_id' => 4,
                'post_id' => 4,
                'is_publish' => 1,
            ],
            [
                'text' => 'Комментарий 5',
                'slug' => 'kommentariy_5',
                'user_id' => 5,
                'post_id' => 5,
                'is_publish' => 1,
            ],
        ]);
    }
}
