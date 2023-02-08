<?php

use App\Classes\View;
use App\Config\Route;

include("Config/HostConfig.php");
include("../vendor/autoload.php");

/**
 * Include do layout do software
 */
include("include/header.php");
include("include/footer.php");

/**
 * Monta o corpo web do software
 */
print View::render('index', [ 
    'route'      => Route::getRoute(),
    'header'     => $header,
    'footer'     => $footer,   
    'helloworld' => 'Hello world!',  
]);
    

