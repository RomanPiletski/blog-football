<?php

namespace App\Components;

use PDOException;

/**
 * Родительский класс всех миграций
 */
class Migration
{

    /**
     * Печать сообщения в консоль
     */
    static function consoleMessage($message): void
    {
        echo $message . "<br>";
    }

    /**
     * Проверка на существование таблицы по имени таблицы
     */
    static public function tableExist($name): bool
    {

        try {

            $results = (new Db)->getConnection()->query("SHOW TABLES LIKE '$name'");

        } catch (PDOException $exception) {

            echo $exception->getMessage() . "\n";
        }

        return $results->rowCount() > 0 ? true : false;
    }

    /**
     * Удаление таблицы по имени
     */
    static public function deleteTable($tableName)
    {

        try {

            (new Db)->getConnection()->query("DROP TABLE $tableName");

            self::consoleMessage("Table deleted successfully");

        } catch (PDOException $exception) {

            echo $exception->getMessage() . "\n";
        }

    }

    /**
     * Удаление всех таблиц с текущей активной БД
     */
    static public function deleteAllTables()
    {
        $params = Db::getParams();

        try {

            (new Db)->getConnection()->query("DROP DATABASE {$params['dbname']}; CREATE DATABASE {$params['dbname']}; USE {$params['dbname']};");

        } catch (PDOException $exception) {

            self::consoleMessage($exception->getMessage());
        }

    }

}
