<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SubscriptionSeeder extends Seeder
{
    public function run()
    {
        DB::table('subscriptions')->insert([
            [
                'email' => 'admin@mail.ru',
                'token' => Str::random(48),
            ],
            [
                'email' => 'User1@mail.ru',
                'token' => Str::random(48),
            ],
            [
                'email' => 'User2@mail.ru',
                'token' => Str::random(48),
            ],
            [
                'email' => 'User3@mail.ru',
                'token' => Str::random(48),
            ],
            [
                'email' => 'User4@mail.ru',
                'token' => Str::random(48),
            ],
        ]);
    }
}
