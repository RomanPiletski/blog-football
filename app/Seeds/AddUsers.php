<?php

namespace App\Seeds;

use App\Components\Migration;
use App\Models\User;

class AddUsers extends Migration
{
    public static function AddUsers()
    {
        $names = array('Yana', 'Inna', 'Anna', 'Viktoria', 'Nadezhda', 'Marina', 'Yulia');
        $lastnames = array ('Nikolaenko', 'Bondarenko', 'Yakovleva', 'Kravtsova', 'Petrova', 'Ivanove', 'Sidorova');
        $emails = array('123aa@mail.ru', 'bla-bla@gmail.com', 'brs@index.ru', 'mamama@gmail.com', 'uaua@mail.ru', 'vvv@mail.ru', 'www123@gmail.com');
        $phones = array('+375445109267', '+375295109267', '+375336000000', '+375441054120', '+375290000000', '+375441329587', '+375332148596');

        for ($i=0; $i<count($emails);$i++)
        {
            User::create("$names[$i]", "$lastnames[$i]", "$emails[$i]", '123456789', "$phones[$i]");
        }
        echo "Users added successfully" . "<br>";
    }
}