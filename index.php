<?php

include "./vendor/autoload.php";

use App\routes\Routes;

if (!isset($_SESSION['Language']))
{
    $_SESSION['Language'] = 'pt';
}

(new Routes())->run($_SERVER['REQUEST_URI']);
