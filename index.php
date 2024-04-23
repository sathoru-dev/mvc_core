<?php
    session_start();

    require 'app/config/config.php';
    require PATH_CORE . 'autoload.php';

    $router = new router();

    $router->prepare();
    $router->fire();
?>
