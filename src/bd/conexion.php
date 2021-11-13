<?php
    class Conexion {
        public static function Conectar(){
            define('servidor','localhost');
            define('nombre_bd', 'crudconvuejs');
            define('usuario', 'root');
            define('password', '');
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
            try{
                $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);
                return $conexion;
            }catch (Exeption $e){
                die("El error de Conexion es : " .$e->getMessage());
            }
        }
}