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
            ],
            [
                "name" => "User1",
                "email" => "User1@mail.ru",
                "password" => "password",
            ],
            [
                "name" => "User2",
                "email" => "User2@mail.ru",
                "password" => "password",
            ],
            [
                "name" => "User3",
                "email" => "User3@mail.ru",
                "password" => "password",
            ],
            [
                "name" => "User4",
                "email" => "User4@mail.ru",
                "password" => "password",
            ],
        ]);
    }
}
