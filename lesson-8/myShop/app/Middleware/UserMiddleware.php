<?php


namespace App\Middleware;


use App\Components\Session;

class UserMiddleware
{
    public static function isAuthorized(string $name)
    {
        if (!Session::get($name)) {
            redirectError(301);
        }
    }

}