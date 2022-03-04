<?php

namespace App\Components;

use PDO;

/**
 * Класс для подключения Базы данных
 */
class Db
{
    private static $connect = null;

    static public function getParams()
    {
        return include_once realpath("./") . '/config/db.php';
    }

    static public function getConnection()
    {
        $params = self::getParams();

        //PDO
        if (self::$connect === null) {


            try {
                $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
                $db = new PDO($dsn, $params['user'], $params['password']);
                $db->exec("set names utf8");
                self::$connect = $db;
            } catch (\PDOException $exception) {
                echo $exception->getMessage();
            }


        }

        return self::$connect;
    }
}
