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
                'slug' => 'kommentariy-1',
                'user_id' => 1,
                'post_id' => 1,
                'is_publish' => 1,
                "created_at" => "2022-06-01 10:51:53",
            ],
            [
                'text' => 'Комментарий 2',
                'slug' => 'kommentariy-2',
                'user_id' => 2,
                'post_id' => 2,
                'is_publish' => 1,
                "created_at" => "2022-06-02 10:51:53",
            ],
            [
                'text' => 'Комментарий 3',
                'slug' => 'kommentariy-3',
                'user_id' => 1,
                'post_id' => 3,
                'is_publish' => 1,
                "created_at" => "2022-06-03 10:51:53",
            ],
            [
                'text' => 'Комментарий 4',
                'slug' => 'kommentariy-4',
                'user_id' => 2,
                'post_id' => 4,
                'is_publish' => 1,
                "created_at" => "2022-06-04 10:51:53",
            ],
            [
                'text' => 'Комментарий 5',
                'slug' => 'kommentariy-5',
                'user_id' => 1,
                'post_id' => 5,
                'is_publish' => 1,
                "created_at" => "2022-06-05 10:51:53",
            ],
            [
                'text' => 'Комментарий 6',
                'slug' => 'kommentariy-6',
                'user_id' => 1,
                'post_id' => 1,
                'is_publish' => 1,
                "created_at" => "2022-06-06 10:51:53",
            ],
            [
                'text' => 'Комментарий 7',
                'slug' => 'kommentariy-7',
                'user_id' => 2,
                'post_id' => 2,
                'is_publish' => 1,
                "created_at" => "2022-06-07 10:51:53",
            ],
            [
                'text' => 'Комментарий 8',
                'slug' => 'kommentariy-8',
                'user_id' => 1,
                'post_id' => 3,
                'is_publish' => 1,
                "created_at" => "2022-06-08 10:51:53",
            ],
            [
                'text' => 'Комментарий 9',
                'slug' => 'kommentariy-9',
                'user_id' => 2,
                'post_id' => 4,
                'is_publish' => 1,
                "created_at" => "2022-06-09 10:51:53",
            ],
            [
                'text' => 'Комментарий 10',
                'slug' => 'kommentariy-10',
                'user_id' => 1,
                'post_id' => 5,
                'is_publish' => 1,
                "created_at" => "2022-06-10 10:51:53",
            ],
        ]);
    }
}
