<?php
    /** MODULO DE GESTION DE URLS
     * Abstenerse de modificar sin tener el conocimiento suficiente
     */

    class router {
        /**Para optimizar y gestionar la busqueda interna de rutas, estan se registran con un id
         * unico el cual sirve para divirlas en diferentes arreglos los cuales contendran informacion de acceso
         * "$size_urls" optimiza la busqueda, filtrando las rutas por el tamaño
         */
        private $urls, $triggers, $names, $size_urls;

        function __construct() {
            $this->import_urls();
        }

        /** realiza la importacion de las rutas
         * definidas en el archivo "urls.php" */
        private function import_urls() {
            include PATH_CONFIG . "urls.php";
        }

        /**
         * Metodo para el registro de una nueva url
         * @param String $url Link de acceso ej. "home/pruebas"
         * @param String $triggers Clase y metodo de destino ej. "Home->saludo" "Clase: Home, Metodo: saludo"
         * @param String $name nombre de la url
         * @return void
         */
        private function new_url($url, $triggers, $name) {
            $id_url = utils::generate_id(); # Id de la url en los arreglos

            // Registro de url en sus respectivos arreglos
            $this->urls[$id_url] = $url;
            $this->triggers[$id_url] = $triggers;
            $this->names[$id_url] = $name;
            $this->size_urls[$id_url] = count(explode('/', $url));
        }

        /**
         * Metodo encargado de procesar, validar e interpretar las peticiones por medio
         * de la url que se le esta enviando
         * @return void
         */
        public function prepare() {
            # Captura la url actual del navegador
            $url = $_SERVER['REQUEST_URI'];
            # Prepara la ruta y elimina elementos insesarios de esta segun el entorno de trabajo que se ha definido
            $url = ENVIRONMENT == 'dev' ? str_replace("/".APP_FOLDER, '', $url) : implode('/', array_slice(explode('/', $url), 1));
            $size_url = count(explode('/', $url)); # Cuenta las partes de la url

            /** Se filtran las urls coincidentes en el tamaño obteniendo solo su id */
            $find_urls = array_keys(array_filter($this->size_urls, function($item) use ($size_url) { return $item === $size_url; }));
            # Se valida si se obtuvieron resultados
            if ( count($find_urls) == 0 ) { echo "No hay rutas"; exit(); } #TAG: AGREGAR ERROR

            $final_url = array_filter($find_urls, function($item) use($url) {
                $url_system = $this->urls[$item]; # Obtiene la ruta del arreglo para compararla
                if ($url_system == $url) { return $item; } # Comparacion estatoca, si las rutas coinciden no tienen parametros

                else if(str_contains($url_system, '<') || str_contains($url_system, '>')){ # Si contienen parametros
                    echo "Ruta con parametros";
                }


                    /*$url_query = explode('/', $url_query);
            $url_system = explode('/', $url_system);

            for ($i=0; $i < count($url_system); $i++) {
                
                if( substr($url_system[$i], 0, 1) == '?' ){
                    $valid_num = substr($url_system[$i], 1, strlen($url_system[$i])) == 'num' && is_numeric($url_query[$i]);
                    $valid_char = substr($url_system[$i], 1, strlen($url_system[$i])) == 'char' && is_string($url_query[$i]);

                    if( $valid_char || $valid_num ) {
                        $this->params[] .=  $url_query[$i];
                    } else {
                        return 'tipo parametro no coincide!';
                        break;
                    }
                }
                else if ( $url_system[$i] == $url_query[$i] ) {}
                else {
                    return 'No coincide!';
                    break;
                }
            }*/


                });

            print_r($final_url);

            /*foreach ( $rutas_coincidentes as $route ) {
                $ruta = $this->_routes[$route];
                if( $this->validar_ruta($url_query, $ruta) == '' ) { 
                    $ruta_coincidente = $route;
                    $_SESSION["{$_SESSION["codigo_sesion"]}ruta_usada"] = $this->_name[$route];
                    break;
                }
            }*/


            //print_r($urls);


/*
            $rutas_coincidentes = array();
            $ruta_coincidente = '';

            foreach( $this->_length_route as $key => $length ) { if( $length == $count_query ) { $rutas_coincidentes[] = $key; } }

            if( count($rutas_coincidentes) == 0 ) { echo "La ruta {$url_query} no se ha localizado"; exit(); }

            foreach ( $rutas_coincidentes as $route ) {
                $ruta = $this->_routes[$route];
                if( $this->validar_ruta($url_query, $ruta) == '' ) { 
                    $ruta_coincidente = $route;
                    $_SESSION["{$_SESSION["codigo_sesion"]}ruta_usada"] = $this->_name[$route];
                    break;
                }
            }
            
            if( $ruta_coincidente == '' ) { echo "La ruta {$url_query} no se ha localizado"; exit(); }

            $igniter = explode('::', $this->_igniters[$ruta_coincidente]);
            $this->controller = $igniter[0];
            $this->method = $igniter[1];
            */
        }








        public function test() {
            echo "<pre>";
            print_r($this->urls);
            print_r($this->triggers);
            print_r($this->names);
            print_r($this->size_urls);
        }












/*
        private $_length_route, $_routes, $_igniters, $_name, $params, $cod_rut, $host;
        private $controller, $method;

        

        public function prepare() {
            $url_query = explode('/', $_SERVER['REQUEST_URI']);
            $count_query =  HOST == 'local' ? count(array_slice($url_query, 2)) : count(array_slice($url_query, 1));
            $url_query = HOST == 'local' ? implode('/', array_slice($url_query, 2)) : implode('/', array_slice($url_query, 1));

            $rutas_coincidentes = array();
            $ruta_coincidente = '';

            foreach( $this->_length_route as $key => $length ) { if( $length == $count_query ) { $rutas_coincidentes[] = $key; } }

            if( count($rutas_coincidentes) == 0 ) { echo "La ruta {$url_query} no se ha localizado"; exit(); }

            foreach ( $rutas_coincidentes as $route ) {
                $ruta = $this->_routes[$route];
                if( $this->validar_ruta($url_query, $ruta) == '' ) { 
                    $ruta_coincidente = $route;
                    $_SESSION["{$_SESSION["codigo_sesion"]}ruta_usada"] = $this->_name[$route];
                    break;
                }
            }
            
            if( $ruta_coincidente == '' ) { echo "La ruta {$url_query} no se ha localizado"; exit(); }

            $igniter = explode('::', $this->_igniters[$ruta_coincidente]);
            $this->controller = $igniter[0];
            $this->method = $igniter[1];
            
        }

        public function fire() {

            $controller = new $this->controller;
            $method = $this->method;

            $controller->$method($this->params);

        }

        private function validar_ruta($url_query, $url_system){
            $url_query = explode('/', $url_query);
            $url_system = explode('/', $url_system);

            for ($i=0; $i < count($url_system); $i++) {
                
                if( substr($url_system[$i], 0, 1) == '?' ){
                    $valid_num = substr($url_system[$i], 1, strlen($url_system[$i])) == 'num' && is_numeric($url_query[$i]);
                    $valid_char = substr($url_system[$i], 1, strlen($url_system[$i])) == 'char' && is_string($url_query[$i]);

                    if( $valid_char || $valid_num ) {
                        $this->params[] .=  $url_query[$i];
                    } else {
                        return 'tipo parametro no coincide!';
                        break;
                    }
                }
                else if ( $url_system[$i] == $url_query[$i] ) {}
                else {
                    return 'No coincide!';
                    break;
                }
            }
        }

        public function get_link($name, $params = null) {
            if( array_search($name, $this->_name) === false ){ echo "La ruta con el nombre: {$name} no se ha localizado"; exit(); }

            $id_ruta = array_search($name, $this->_name);
            $ruta = $this->_routes[$id_ruta];

            if( $params != null ) {
                $ruta = explode('/', $ruta);
                for ($i=0; $i < count($ruta); $i++) {
                    if( $ruta[$i] == '?num' || $ruta[$i] == '?char' ) {
                        if( count($params) > 0 ) {
                            $ruta[$i] = $params[0];
                            array_splice($params, 0, 1);
                        } else {
                            echo 'Parametros insuficientes'; exit();
                        }
                    }
                }
                $ruta = implode('/', $ruta);
            } else if( strpos($ruta, '?') ) {
                echo 'La ruta lleva parametros y no se pasaron'; exit();
            }

            return 'http://'."{$_SERVER["SERVER_NAME"]}".PORT_USING.'/'.APP_FOLDER.$ruta;
        }

        public function base_url($route) {
            return 'http://'.$_SERVER["SERVER_NAME"].PORT_USING.'/'.APP_FOLDER.$route;
        }

        public function current_url() {
            return 'http://'."{$_SERVER["SERVER_NAME"]}".PORT_USING.$_SERVER['REQUEST_URI'];
        }

        public function register($to, $from, $name) {
            $this->cod_rut = $this->cod_rut + 1;
            $this->_routes[$this->cod_rut] = $to;
            $this->_igniters[$this->cod_rut] = $from;
            $this->_name[$this->cod_rut] = $name;
            $this->_length_route[$this->cod_rut] = count(explode('/', $to));
        }

        */
    }
?>