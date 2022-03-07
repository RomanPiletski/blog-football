<?php

namespace App\Components;

use App\Controllers\HomeController;

/**
 * Класс маршрутизатор ROUTER
 *
 */
class Router
{

    /**
     *Метод  возвращает строку запроса
     *return string or null if indexpage
     */
    private function getURI()
    {

        //http://site.com = $_SERVER['REQUEST_URI'] = ""
        //http://site.com/users/1 = $_SERVER['REQUEST_URI'] = "/users/1"
        //http://site.com/users/1 = $_SERVER['REQUEST_URI'] = "/users/1"
        //после трим trim($_SERVER['REQUEST_URI'], '/') = users/all


        //проверим наличие запроса и возвратим его если есть, иначе возвратим NULL
        //пример если ссылка - http://site.com/sliders/1 - то на выходе эта функция вернет sliders/1
        return (!empty($_SERVER['REQUEST_URI'])) ? trim($_SERVER['REQUEST_URI'], '/') : NULL;
    }


    //метод для запуска маршрутизатора
    public function run()
    {

        //1. получить строку запроса
        $uri = $this->getURI();


        if (!empty($uri)) {


            //формируем имя контроллера
            $segments = explode('/', $uri); //users/all

            $controllerName = array_shift($segments) . 'Controller'; //Формируем имя контроллера. Функция array_shift — Извлекает первый элемент массива, и возвращает его сокращая размер array на один элемент.
            $controllerName = ucfirst($controllerName);//Формируем имя контроллера. Функция ucfirst — Преобразует первый символ строки в верхний регистр

            //подключить файл класса контроллера
            $controllerFile = "App\\Controllers\\" . $controllerName;

            if (class_exists($controllerFile)) {
                //cоздаем экземпляр класса контроллера и запускаем нужный action
                $controllerObject = new $controllerFile;


                $actionName = array_shift($segments);

                $controllerObject->{$actionName}($segments);
                
            } else {

                echo "404";
            }


        } else {

            //cоздаем экземпляр класса контроллера и запускаем нужный action
            $controllerObject = new HomeController();
            $actionName = 'index';
            $controllerObject->{$actionName}([]);
        }
    }

}
