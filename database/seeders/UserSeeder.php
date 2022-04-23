<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table("users")->insert([
            [
                "name" => "admin",
                "email" => "admin@mail.ru",
                "password" => "admin",
                "avatar" => "uploads/admin.jpg"
            ],
            [
                "name" => "User1",
                "email" => "User1@mail.ru",
                "password" => "password",
                "avatar" => "uploads/user1-128x128.jpg"
            ],
            [
                "name" => "User2",
                "email" => "User2@mail.ru",
                "password" => "password",
                "avatar" => "uploads/user2-160x160.jpg"
            ],
            [
                "name" => "User3",
                "email" => "User3@mail.ru",
                "password" => "password",
                "avatar" => "uploads/user3-128x128.jpg"
            ],
            [
                "name" => "User4",
                "email" => "User4@mail.ru",
                "password" => "password",
                "avatar" => "uploads/user4-128x128.jpg"

            ],
        ]);
    }
}
