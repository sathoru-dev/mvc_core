<?php
    /** CONFIGURACION DE ENTORNO */
    define('ENVIRONMENT', 'dev'); //dev o produccion
    define('PORT_USING', $_SERVER["SERVER_PORT"] == 80 ? '' : ":{$_SERVER['SERVER_PORT']}");