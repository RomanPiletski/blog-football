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
                'is_publish' => 0,
            ],
            [
                'text' => 'Комментарий 2',
                'slug' => 'kommentariy-2',
                'user_id' => 2,
                'post_id' => 2,
                'is_publish' => 0,
            ],
            [
                'text' => 'Комментарий 3',
                'slug' => 'kommentariy-3',
                'user_id' => 1,
                'post_id' => 3,
                'is_publish' => 0,
            ],
            [
                'text' => 'Комментарий 4',
                'slug' => 'kommentariy-4',
                'user_id' => 2,
                'post_id' => 4,
                'is_publish' => 0,
            ],
            [
                'text' => 'Комментарий 5',
                'slug' => 'kommentariy-5',
                'user_id' => 1,
                'post_id' => 5,
                'is_publish' => 0,
            ],
        ]);
    }
}
