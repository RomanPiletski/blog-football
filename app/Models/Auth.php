<?php

namespace App\Models;

use App\Components\Db;
use App\Components\Session;
use PDO;


class Auth
{

    public static function logout()
    {
        Session::delete('email');
        header('Location: login');
    }


    public static function getUser()
    {
        return User::selectByEmail(Session::get('email'));
    }
}
