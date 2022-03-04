<?php

require "." . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";


//common
define('ROOT', $_SERVER['DOCUMENT_ROOT']); //корень сайта
define('SITE_URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME']); //адрес сайта

define('CONFIG_ROOT', ROOT . "/config/"); //папка с настройками сайта
define('COMPONENTS_ROOT', ROOT . "/app/components/"); //папка с компонентами
define('CONTROLLERS_ROOT', ROOT . "/app/controllers/"); //папка с контроллерами
define('VIEW_ROOT', ROOT . "/views/"); //папка с шаблонами
define('MODELS_ROOT', ROOT . "/app/models/"); //папка с моделями для системы
define('TEMPLATE_ROOT', "/template/"); //Папка со всякими статическими данными - файлы скриптов и стилей


use App\Components\Router;

$router = new Router();
$router->run();

