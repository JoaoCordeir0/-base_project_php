<?php

include "./vendor/autoload.php";

use App\controllers\RouteController;

if (empty($_COOKIE['Language']) || !isset($_COOKIE['Language']))
{
    setcookie("Language", 'pt', time() + 3600 * 24, "/");
}

$router = new RouteController();
$router->run($_SERVER['REQUEST_URI']);
