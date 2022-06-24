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
                "name" => "Admin",
                "email" => "romchikdcclub@gmail.com",
                "password" => bcrypt("123"),
                "avatar" => "uploads/super_admin.jpg",
                "is_admin" => true
            ],
            [
                "name" => "Roman Piletsky",
                "email" => "blender-04@yandex.com",
                "password" => bcrypt("123"),
                "avatar" => "uploads/admin.jpg",
                "is_admin" => true
            ],
        ]);
    }
}
