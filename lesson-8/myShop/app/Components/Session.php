<?php

namespace App\Components;

/**
 * Класс для работы с сессией
 * Class Session
 */
class Session
{

    /**
     * Устанавливаем ячейку по имени $name c содержимым $value.
     * @param string $name - имя ячейки
     * @param string $value - значение
     * @return string - возращается установленное значение
     */
    public static function set(string $name, string $value): string
    {
        $_SESSION[$name] = $value;
        return $_SESSION[$name];
    }

    /**
     * Получаем ячейку по имени $name из сессии.
     * @param $name
     * @return bool|mixed
     */
    public static function get($name)
    {
        return isset($_SESSION[$name]) ? $_SESSION[$name] : false;
    }

    /**
     * Удаляем ячейку по имени $name из сессии.
     * @param $name
     * @return bool
     */
    public static function delete($name): bool
    {
        unset($_SESSION[$name]);
        return true;
    }

    /**
     * Удалем всю сессию целиком
     * @return bool
     */
    public static function destroy(): bool
    {
        return session_destroy();
    }

}
