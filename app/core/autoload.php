<?php

    spl_autoload_register(function($class) {
        $route_controller = PATH_CONTROLLER . "{$class}_controller.php"; //CONTROLADOR
        $route_core = PATH_CORE . "{$class}.php"; //MOTOR
        $route_model_venta = PATH_MODEL_VENTA . "{$class}.php";
        $route_model_compra = PATH_MODEL_COMPRA . "{$class}.php";
        $route_model = PATH_MODEL . "{$class}.php";

        if( file_exists($route_controller) ) { require "{$route_controller}"; }
        else if( file_exists($route_core) ) { require "{$route_core}"; }
        else if( file_exists($route_model_venta) ) { require "{$route_model_venta}"; }
        else if( file_exists($route_model_compra) ) { require "{$route_model_compra}"; }
        else if( file_exists($route_model) ) { require "{$route_model}"; }
        else { echo "Archivo '{$class}' no se ha localizado!"; exit(); }

	});
?>