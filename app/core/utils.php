<?php
    class utils {
        /**
         * Genera un string aleatorio el cual se utilizar para generar id's on codigos de identiicacion
         * @param Int $size Cantidad de caracteres de largo del id
         * @return String Devuelve el id
         */
        public static function generate_id( $size = 8 ) {
            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $random_string = '';
            for ($i = 0; $i < $size; $i++) {
                $random_character = $permitted_chars[random_int(0, strlen($permitted_chars) - 1)];
                $random_string .= $random_character;
            }
            return $random_string;
        }
    }