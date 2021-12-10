<?php

namespace App\Components;

/**
 * Класс марштуритизатор ROUTER
 *
 */
class Router
{

    private $routes; //массив где хранятся все маршруты

    public function __construct()
    {
        $routesPath = CONFIG_ROOT . "routes.php";
        /*передача управления>>>*/
        $this->routes = include($routesPath);
    }


    /**
     *Метод  возвращает строку запроса
     *return string or null if indexpage
     */
    private function getURI()
    {
        //проверим наличие запроса и возвратим его если есть, иначе возвратим NULL
        return (!empty($_SERVER['REQUEST_URI'])) ? trim($_SERVER['REQUEST_URI'], '/') : NULL;
    }


    //метод для запуска маршрутизатора
    public function run()
    {

        //1. получить строку запроса
        $uri = $this->getURI();

        $result = null;

        //2. проверить наличие данного запроса в марштрутах routes.php
        foreach ($this->routes as $uriPattern => $path) {

            //проверим с помощью шаблона регулярного выражения, если в маршрутах есть данный $url то true, иначе 404
            if (preg_match("~$uriPattern~", $uri)) {

                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                //var_dump($internalRoute);
                //определить какой контроллер и action обрабатывают запрос и подключим контроллер и запустим нужный метод action

                //формируем имя контроллера
                $segments = explode('/', $internalRoute); //получим массив из двух элементов [0]-контроллер, [1] - акшен
                $controllerName = array_shift($segments) . 'Controller';//формируем имя контроллера. Функция array_shift — Извлекает первый элемент массива, и возвращает его  сокращая размер array на один элемент.
                $controllerName = ucfirst($controllerName);//формируем имя контроллера. Функция ucfirst — Преобразует первый символ строки в верхний регистр


                //формируем имя экшена
                $actionName = array_shift($segments);

                //в массиве $segments остались только параменты которые мы можем передать в функцию action
                $parameters = $segments;//массив с параметрами

                //подключить файл класса контроллера
                $controllerFile = "App\\Controllers\\" . $controllerName;

                //cоздаем экземпляр класса контроллера и запускаем нужный action
                $controllerObject = new $controllerFile;


                /*передача управления>>>функция*/
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                //$controllerObject->$actionName($parameters); страый способ

                break;
            }



        }
    }
}
