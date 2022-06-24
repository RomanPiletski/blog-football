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
                "description" => "Описание пост 1",
                'content' => 'Контент пост 1',
                'category_id' => 1,
                'user_id' => 1,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 0,
                "created_at" => "2022-05-01 08:02:51",
                "image" => "uploads/ins-1.jpg"
            ],
            [
                'title' => 'Пост 2',
                'slug' => 'post-2',
                "description" => "Описание пост 2",
                'content' => 'Контент пост 2',
                'category_id' => 2,
                'user_id' => 2,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 0,
                "created_at" => "2022-05-02 08:02:51",
                "image" => "uploads/ins-2.jpg"
            ],
            [
                'title' => 'Пост 3',
                'slug' => 'post-3',
                "description" => "Описание пост 3",
                'content' => 'Контент пост 3',
                'category_id' => 3,
                'user_id' => 1,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 0,
                "created_at" => "2022-05-03 08:02:51",
                "image" => "uploads/ins-3.jpg"
            ],
            [
                'title' => 'Пост 4',
                'slug' => 'post-4',
                "description" => "Описание пост 4",
                'content' => 'Контент пост 4',
                'category_id' => 4,
                'user_id' => 2,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 0,
                "created_at" => "2022-05-04 08:02:51",
                "image" => "uploads/ins-4.jpg"
            ],
            [
                'title' => 'Пост 5',
                'slug' => 'post-5',
                "description" => "Описание пост 5",
                'content' => 'Контент пост 5',
                'category_id' => 5,
                'user_id' => 1,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 0,
                "created_at" => "2022-05-05 08:02:51",
                "image" => "uploads/ins-5.jpg"
            ],
            [
                'title' => 'Инопланетный волшебник: Месси - 35 лет!',
                'slug' => 'lionelyu-messi-35-let',
                "description" => "Форварду «ПСЖ» Лионелю Месси исполнилось 35 лет",
                'content' => 'Сегодня, 24 июня, нападающий «ПСЖ» Лионель Месси празднует свой день рождения. Аргентинцу исполнилось 35 лет.<br><br>
                В прошедшем сезоне 35-летний аргентинец забил 11 мячей и отдал 15 результативных передач в 34 матчах за «ПСЖ» во всех турнирах.<br><br>
                Ранее футболист выступал за «Барселону», в составе которой десять раз выиграл чемпионат Испании, четырежды — Лигу чемпионов. Шесть раз он становился обладателем Кубка Испании, восемь раз — Суперкубка страны. Трижды он выигрывал Суперкубок УЕФА и клубный чемпионат мира. В каталонском клубе он провел 19 лет, после чего перешел в «ПСЖ» летом 2021 года.<br><br>
                Месси также является олимпийским чемпионом 2008 года в составе сборной Аргентины. Вместе с командой он трижды занимал второе место на Кубке Америки, стал вице-чемпионом мира-2014. Он также шестикратный обладатель «Золотого мяча» и считается одним из лучших игроков в истории футбола.',
                'category_id' => 2,
                'user_id' => 1,
                'is_publish' => 1,
                'is_recommended' => 1,
                'views' => 0,
                "created_at" => "2022-06-24 13:02:51",
                "image" => "uploads/ins-9.jpg"
            ],
        ]);
    }
}
