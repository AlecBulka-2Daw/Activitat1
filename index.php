<?php

    session_start();
    define('APP', __DIR__);
    require 'config.php';
    require 'src/router.php';
    require 'src/routes.php';

    $controlador = getRoute($routes);
    
    require 'src/controllers/' . $controlador . '.php';