<?php

require_once __DIR__ . '/../includes/app.php';


use MVC\Router;
use Controllers\MainPageController;

$router = new Router();



$router->get('/',[MainPageController::class,'index']);



$router->comprobarRutas();