<?php

use App\Classes\View;
use App\Config\Route;

include("../vendor/autoload.php");

$route = Route::getRoute();

$header = View::render('include/header', []);

