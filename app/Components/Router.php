<?php

namespace App\Components;

/**
 * Класс маршрутизатор ROUTER
 *
 */
class Router
{

    private $routes; //массив где хранятся все маршруты

    public function __construct()
    {
        $this->routes = include(CONFIG_ROOT . "routes.php");
    }


    /**
     *Метод  возвращает строку запроса
     *return string or null if indexpage
     */
    private function getURI()
    {
        //проверим наличие запроса и возвратим его если есть, иначе возвратим NULL
        //пример если ссылка - http://site.com/sliders/1 - то на выходе эта функция вернет sliders/1
        return (!empty($_SERVER['REQUEST_URI'])) ? trim($_SERVER['REQUEST_URI'], '/') : NULL;
    }


    //метод для запуска маршрутизатора
    public function run()
    {

        //1. получить строку запроса
        $uri = $this->getURI();

        $result = null;

        //2. проверить наличие данного запроса в марштрутах routes.php
        //'login' => 'auth/login',
        foreach ($this->routes as $uriPattern => $path) {

            //проверим с помощью шаблона регулярного выражения, если в маршрутах есть данный $url то true, иначе 404
            if (preg_match("~$uriPattern~", $uri)) {

                //например - users/([0-9]+)/store/([0-9]+)' => 'user/list/$1/$2', - в данном роуте ([0-9]+) из первой части добавляется вместе маркера $1 и $2 из второй части в итоге получаем user/list/([0-9]+)/([0-9])+
                //то есть  -  если ссылка -  users/1/store/2 - по итогу получаем - 'user/list/2/1'
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri); //по какому признаку, где меняем, на что меняем (берем только группы с маркерами)

                // var_dump($internalRoute);die;


                //определить какой контроллер и action обрабатывают запрос и подключим контроллер и запустим нужный метод action

                //формируем имя контроллера
                $segments = explode('/', $internalRoute); //получим массив из двух элементов [0]-контроллер, [1] - экшен
                $controllerName = array_shift($segments) . 'Controller'; //Формируем имя контроллера. Функция array_shift — Извлекает первый элемент массива, и возвращает его сокращая размер array на один элемент.
                $controllerName = ucfirst($controllerName);//Формируем имя контроллера. Функция ucfirst — Преобразует первый символ строки в верхний регистр


                //формируем имя экшена
                $actionName = array_shift($segments);

                //в массиве $segments остались только параметры которые мы можем передать в функцию action
                $parameters = $segments; //массив с параметрами

                //подключить файл класса контроллера
                $controllerFile = "App\\Controllers\\" . $controllerName;

                //cоздаем экземпляр класса контроллера и запускаем нужный action
                $controllerObject = new $controllerFile;


                /*передача управления>>>функция*/
                call_user_func_array(array($controllerObject, $actionName), $parameters);

                break;

            }else{

                //логика по 404 страницы
            }



        }
    }
}