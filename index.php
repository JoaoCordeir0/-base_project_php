<?php

include "./vendor/autoload.php";

use App\controllers\Router;

$router = new Router();
$router->run($_SERVER['REQUEST_URI']);
