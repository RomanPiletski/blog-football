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
                "name" => "super_admin",
                "email" => "romchikdcclub@gmail.com",
                "password" => "super_admin",
                "avatar" => "uploads/super_admin.jpg",
                "is_admin" => true
            ],
            [
                "name" => "super_admin jr",
                "email" => "1romchikdcclub@gmail.com",
                "password" => "super_admin_jr",
                "avatar" => "uploads/super_admin_jr.jpg",
                "is_admin" => true
            ],
            [
                "name" => "admin",
                "email" => "2romchikdcclub@gmail.com",
                "password" => "admin",
                "avatar" => "uploads/admin.jpg",
                "is_admin" => true
            ],
            [
                "name" => "User1",
                "email" => "3romchikdcclub@gmail.com",
                "password" => "password",
                "avatar" => "uploads/user1-128x128.jpg",
                "is_admin" => false
            ],
            [
                "name" => "User2",
                "email" => "4romchikdcclub@gmail.com",
                "password" => "password",
                "avatar" => "uploads/user2-160x160.jpg",
                "is_admin" => false
            ],
            [
                "name" => "User3",
                "email" => "5romchikdcclub@gmail.com",
                "password" => "password",
                "avatar" => "uploads/user3-128x128.jpg",
                "is_admin" => false
            ],
            [
                "name" => "User4",
                "email" => "6romchikdcclub@gmail.com",
                "password" => "password",
                "avatar" => "uploads/user4-128x128.jpg",
                "is_admin" => false
            ],
        ]);
    }
}
