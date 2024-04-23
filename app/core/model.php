<?php
    class model {
        protected $db;

        /**Para facilitar el mantenimiento todas las tablas se declaran en este archivo */
        public $tabla_carga = "carga";
        public $tabla_productos_carga = "productos_carga";
        //public $tabla_inventario = "inventario";
        public $tabla_vehiculos_carga = "vehiculos_carga";
        public $tabla_rubros = "rubros";
        public $tabla_configuracion = "configuracion";
        public $tabla_factura = "factura";
        public $tabla_detalle_factura = "detalles_factura";
        public $tabla_usuarios = "usuarios";
        public $tabla_notificaciones = "notificaciones";
        public $tabla_vehiculos = "vehiculos";
        public $tabla_cambios_aceite = "cambios_aceite";    

        public $tabla_abonos_venta = "abonos";
        public $tabla_clientes_venta = "clientes";

        public $tabla_clientes_compra = "clientes_compra";
        public $tabla_compra = "compra";
        public $tabla_productos_compra = "productos_compra";
        public $tabla_clientes_detalle_compra = "clientes_detalle_compra";
        public $tabla_abonos_compra = "abonos_compra";

        public function __construct() {
            
            $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
            $this->db = new PDO($dsn, DB_USER, DB_PWD);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db->exec("SET CHARACTER SET utf8");
            $this->db->exec("SET NAMES utf8");
        }

        //En caso de cualquier error nosotros disparamos un error 500
        public function disparar_error($mensaje, $origen = null) {
            header("HTTP/1.1 500 Error en el modelo: {$mensaje}-> {$origen}"); exit();
        }

        public function preparar_consulta($sql) {
            return $this->db->prepare($sql);
        }

        public function devolver_objeto(){
            return $this->db;
        }
    }
?>