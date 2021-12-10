<?php

namespace App\Models;

use App\Components\Db;
use App\Components\Session;
use PDO;

/**
 * Class User
 * @package App\Models
 */
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
