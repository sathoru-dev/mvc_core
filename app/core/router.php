<?php
    class router {

        private $_length_route, $_routes, $_igniters, $_name, $params, $cod_rut, $host;
        private $controller, $method;

        private function definirRutas() {
            require PATH_CONFIG . 'web.php'; //Cargamos las rutas
            $this->cod_rut = 0;
        }

        function __construct() {
            $this->definirRutas();
        }

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

        
    }
?>