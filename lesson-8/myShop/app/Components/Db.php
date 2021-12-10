<?php

namespace App\Components;

use PDO;

/**
 * Класс конектор с БД
 * Class Db
 * @package components
 */
class Db
{
    static $connect = null;

    public static function getConnection()
    {
        $paramsPath =  './config/db_params.php';

        $params = include($paramsPath);

        //PDO
        if (self::$connect === null) {
            $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
            $db = new PDO($dsn, $params['user'], $params['password']);
            $db->exec("set names utf8");
            self::$connect = $db;
        }

        return self::$connect;
    }

}
