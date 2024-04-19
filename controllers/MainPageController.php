<?php

namespace Controllers;

use MVC\Router;




class MainPageController{

    public static function index(Router $router){
        $router->render('main/index',[]);
    }



}