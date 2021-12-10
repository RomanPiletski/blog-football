<?php

require "vendor\autoload.php";
require_once 'config\const.php';

use App\Components\Router;
use App\Models\User;

$router = new Router();
$router->run();

