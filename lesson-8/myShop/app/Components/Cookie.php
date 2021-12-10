<?php

/*
 * PHP Теория
 * Урок: Cookie
 * Задача 1: Создать класс обвертку для работы с куки
 */

namespace App\Components;


/**
 * Class Cookie
 * Класс для работы с куками
 */
class Cookie
{

    /**
     * Установка куки
     * @param $name - имя (идентификатор) куки
     * @param $value - значение
     * @param $time - время в секундах
     * @return bool - статус установки
     */
    public static function set($name, $value, $time): bool
    {
        $value = is_array($value) ? serialize($value) : $value;
        return setcookie($name, $value, time() + $time, '/');
    }

    /**
     * Получение куки по имени (идентификатору)
     * @param $name - имя (идентификатор)
     * @return bool|mixed - возвращается false если куки с идентификатором $name не найденно или пустое
     */
    public static function get($name)
    {
        if (empty($_COOKIE[$name])) return false;

        return is_array(unserialize($_COOKIE[$name])) ? unserialize($_COOKIE[$name]) : $_COOKIE[$name];
    }

    /**
     * Удаление куки по имени (идентификатору)
     * @param $name
     * @return bool
     */
    public static function delete($name): bool
    {
        return setcookie($name, '', time() - 30, '/');
    }

    public static function check ()
    {
        echo "it's ok!";
    }
}
