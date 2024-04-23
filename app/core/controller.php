<?php
    class controller extends router {

        /**
         * Funcion que retorna los valores solocitados que se enviaron por medio de POST
         * desde la vista
         * @param string $nombre Nombre del parametro que se envio por POST
         * @param bool $vacio Indica si el campo piede estar vacio
         * @return string
         */
        public function obtener_parametros($nombre, $vacio = false) {
            #se verifica si se ha pasado un POST con ese nombre
            if( !isset($_POST["{$nombre}"]) ) {  $this->disparar_error("Parametro no pasado '{$nombre}'"); exit(); }

            #se guarda el contenido en una vaiable
            $data = $_POST["{$nombre}"];

            #Se verifica si esta permitido el parametro vacio
            if( ( $vacio == false &&  $data == '') ) {  $this->disparar_error("Parametro '{$nombre}' vacio!"); exit(); }

            #se elimina el formato de codigo html
            $data = htmlentities($data);

            #se limpian los caracteres inesesarios
            $data = filter_var($data, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            #se retorna el valor listo
            return $data;
        }

        //En caso de cualquier error nosotros disparamos un error 500
        public function disparar_error($mensaje) {
            header("HTTP/1.1 500 {$mensaje}"); exit();
        }

        /**
         * Funcion que devuelve el id unico de la sesion
         * @return mixed devuelve el codigo
         */
        private function obtener_id_sesion() {
            return $_SESSION["codigo_sesion"];
        }

        /**
         * Funcion que registra $_SESSION
         * @param mixed $nombre Nombre de la sesion a registrar
         * @param mixed $valor El valor que se le asignara a la sesion
         */
        public function nueva_sesion($nombre, $valor) {
            $_SESSION["{$this->obtener_id_sesion()}{$nombre}"] = $valor;
        }

        

        /**
         * Funcion para obtener el valor de una SESION previamente registrada
         * @param mixed $nombre Nombre de la sesion a obtener
         * @return mixed Devuelve el valor de la sesion
         */
        public function obtener_sesion($nombre) {
            return $_SESSION["{$this->obtener_id_sesion()}{$nombre}"];
        }

        /**
         * Funcion para destruir una SESION previamente registrada
         * @param mixed $nombre Nombre de la sesion a destruir
         */
        public function destruir_sesion($nombre) {
            unset($_SESSION["{$this->obtener_id_sesion()}{$nombre}"]);
        }

        /**
         * Funcion para validar si una SESION esta registrada
         * @param mixed $nombre Nombre de la sesion a validar
         * @return bool Devuelve el resultado de isset
         */
        public function comprobar_sesion($nombre) {
            return isset($_SESSION["{$this->obtener_id_sesion()}{$nombre}"]);
        }

        /**
         * Funcion para redireccionar
         * @param string $ruta Nombre de la ruta a redireccionar
         */
        public function redireccionar($ruta) {
            header("Location: {$this->get_link($ruta)}");
        }

        public function cifrar($cadena) {
            $clave = $this->obtener_sesion('clave_cifrado_temporal');
            $textoEncriptado = '';
            settype($cadena, "string");

            $i = strlen($cadena) - 1;
            $j = strlen($clave);

            if (strlen($cadena) <= 0) {
                return '';
            }

            do {
                $textoEncriptado .= ($cadena[$i] ^ $clave[$i % $j]);
            } while ($i--);

            $textoEncriptado = base64_encode(base64_encode(strrev($textoEncriptado)));
            return $textoEncriptado;
        }

        public function descifrar($cadena) {
            $clave = $this->obtener_sesion('clave_cifrado_temporal');

            $textoPlano = '';

            settype($cadena, "string");

            $cadena = base64_decode(base64_decode($cadena));

            $i = strlen($cadena) - 1;
            $j = strlen($clave);

            if (strlen($cadena) <= 0) { return ''; }
            
            do {
                $textoPlano .= ($cadena[$i] ^ $clave[$i % $j]);
            } while ($i--);

            $textoPlano = strrev($textoPlano);

            return $textoPlano;
        }

        #Funcion que limita el acceso al usuario comun a areas protegidas
        public function vista_protegida() {
            if( $this->obtener_sesion('tipo_usuario') !== 'Admin' ) {
                $this->redireccionar('inicio');
            }
        }

        //Verificamos si se ha inicioado sesion para las consultas ajax
        public function proteger_ajax() {
            if( !$this->comprobar_sesion('axd_3dx-4') ) { #Validamos si existe la sesion
                #Disparamos un error para mostrar en el ajax
                $this->disparar_error("No hay permisos suficientes para acceder");
                exit(); #Si no existe matamos la ejecucion
            }
        }


        public function validarLogin( $page = null ) {
            if( $page == 'login' ) {
                if( $this->comprobar_sesion('axd_3dx-4') ) {
                    $this->redireccionar('inicio');
                }
            } else {
                if( !$this->comprobar_sesion('axd_3dx-4') ) {
                    $this->redireccionar('login');
                }
            }
        }

        #Validamos si la contraseña introducida es correcta
        public function validar_contraseña($contraseña) {
            #obtenemos el id del usuario logueado
            $usuario = $this->obtener_sesion('id_usuario');

            #desciframos el id
            $usuario = $this->descifrar($usuario);

            #se instancia el modelo
            $modelo = new usuarios_model();

            #obtenemos los datos del usuario logueado
            $datos_db = $modelo->validar_usuario($usuario);

            #validamos el estado del usuario
            if( $datos_db['estado'] !== 'activo' ) { $this->disparar_error('Usuario desactivado'); }

            #validamos si la contraseña NO coincide
            if( ! password_verify($contraseña, $datos_db['contraseña']) ) {
                $this->disparar_error('Oh :0 la clave es incorrecta');
            }

        }
        


        public function generar_codigo($longitud) {
            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $input_length = strlen($permitted_chars);
            $random_string = '';
            
            for($i = 0; $i < $longitud; $i++) {
                $random_character = $permitted_chars[mt_rand(0, $input_length - 1)];
                $random_string .= $random_character;
            }

            return $random_string;
        }


        public function getSo() {
            $cadena = explode('(', $_SERVER['HTTP_USER_AGENT']);
            $cadena = explode(')', $cadena[1]);
            return $cadena[0];
        }

        public function formatCedula($cedula) {
            if( is_numeric( substr($cedula, 1, strlen($cedula)) ) ) {
                if( substr($cedula, 0, 1) == 'J' ) {
                    $a = substr($cedula, 1, 8);
                    $b = substr($cedula, 9, strlen($cedula));
                    return "J-{$a}-$b";
                } else if( substr($cedula, 0, 1) == 'V' ||  substr($cedula, 0, 1) == 'E' ) {
                    $a = substr($cedula, 0, 1);
                    $b = number_format(substr($cedula, 1, strlen($cedula)), 0, ',', '.');
                    return "{$a}-{$b}";
                } else {
                    return $cedula;
                }
            } else {
                return $cedula;
            }
        }

        public function formatTelefono($telefono) {
            $codigo = substr($telefono, 0, 4);
            $telefono = substr($telefono, 4, strlen($telefono));
            return "({$codigo})-{$telefono}";
        }

        public function capitalizar($texto) {
            return ucwords(strtolower($texto));
        }

        public function formato_cantidad($numero) {
            $tmps = explode(',', number_format($numero, 1, ',', '.'));
            if( $tmps[1] == 0 ) { return number_format($numero, 0, ',', '.');
            } else { return number_format($numero, 1, ',', '.'); }
        }

        public function formato_dolares($numero) {
            return number_format($numero, 2, ',', '.') . "$";
        }

        public function formato_numero($numero) {
            return number_format($numero, 2, ',', '.') ;
        }

        public function formato_fecha($fecha) {
            $dias = [ 'Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado' ][date('w', strtotime($fecha))];
            $mes = ["ene", "feb", "mar", "abr", "may", "jun", "jul", "ago", "sept", "oct", "nov", "dic"][abs(date("m", strtotime($fecha))) - 1];
            return "{$dias} ".date('d', strtotime($fecha))." de {$mes} del ".date('Y', strtotime($fecha));
        }

        public function obtener_dia_fecha($fecha) {
            return [ 'Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado' ][date('w', strtotime($fecha))];
        }

        public function fecha_compra($fecha) {
            $dia = [ 'Dom', 'Lun', 'Mar', 'Mier', 'Jue', 'Vie', 'Sab' ][date('w', strtotime($fecha))];
            $restante = $this->fecha_corta($fecha);

            return "{$dia}, {$restante}";
        }

        public function formato_fecha_factura($fecha) {
            $mes = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"][abs(date("m", strtotime($fecha))) - 1];
            return date('d', strtotime($fecha))." de {$mes} del ".date('Y', strtotime($fecha));
        }

        public function fecha_corta($fecha) {
            $mes = ["ene", "feb", "mar", "abr", "may", "jun", "jul", "ago", "sept", "oct", "nov", "dic"][abs(date("m", strtotime($fecha))) - 1];
            return date('d', strtotime($fecha))." de {$mes}";
        }

        public function obtenerPorcentaje($cantidad, $total) {
            $porcentaje = ((float)$cantidad * 100) / $total; // Regla de tres
            $porcentaje = round($porcentaje, 0);  // Quitar los decimales
            return $porcentaje;
        }

        #Funcuion para agregar el active en los dropdows del sidebar
        public function secciones_activas($seccion) {

            $ruta_actual = $this->obtener_sesion('ruta_usada');

            #Area de registro de sistema
            if( ( $ruta_actual == 'carga' || $ruta_actual == 'facturas' || $ruta_actual == 'abono' ) && $seccion == 'registro' ) { return 'active'; }
            else if( ( $ruta_actual == 'clientes' || $ruta_actual == 'rubros' || $ruta_actual == 'vehiculos' ) && $seccion == 'datos' ) { return 'active'; }
            else if( ( $ruta_actual == 'compra_clientes' ) && $seccion == 'compra' ) { return 'active'; }

            
            else { return ''; }

        }

        public function generar_enlace_whatsapp($numero) {
            $numero = substr($numero, 1, strlen($numero));

            $url = "https://wa.me/+58{$numero}";

            return $url;
        }

        public function generar_paginacion($pagina_actual, $cantidad_registros, $nombre_funcion){

            # Se calcula el total de paginas
            $total_paginas = ceil($cantidad_registros / REGISTROS);


            # Se genera una variable donde se almacenaran el html
            $salida = "";

            # Se verifica si la pagina es la primera se pasa el disabled al boton de anterior
            $anterior_disabled = $pagina_actual == 1 ? 'disabled' : '';

            # Se agrega el boton de regresar al html
            #$salida .= "<li class='page-item {$anterior_disabled}'> <a class='page-link' href='#'>Anterior</a> </li>";

            # Se crea un bucle para crear los botones de navegacion
            for ($i=0; $i < $total_paginas; $i++) {

                $pagina_ciclo = $i + 1;

                # Se genera el codigo de la funcion
                $funcion = "{$nombre_funcion}($pagina_ciclo)";
                
                # Se genera la etiqueta que contendra el active si la pagina es la actual
                $pagina_activa = $i+1 == $pagina_actual ? 'active' : '';

                $salida .= "<li class='page-item {$pagina_activa}' onclick=".'"'.$funcion.'"'."><a class='page-link' href='javascript:void(0)'>{$pagina_ciclo}</a></li>";

            }

            # Se verifica si la pagina es la primera se pasa el disabled al boton de anterior
            $siguiente_disabled = $pagina_actual == $total_paginas ? 'disabled' : '';

            # Se agrega el boton de siguiente
            #$salida .= "<li class='page-item {$siguiente_disabled}'> <a class='page-link' href='#'>Siguiente</a> </li>";

            return $salida;

        }

    }
?>