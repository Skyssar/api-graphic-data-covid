<?php //archivo que tiene la conexión con la base de datos

$host = "localhost";
$db = "datos_covid";
$usuariodb = "root";
$clave = "";

$tabla_db = "data_cordoba";

error_reporting(0);

$conexion = new mysqli($host, $usuariodb, $clave, $db);

if ($conexion->connect_errno){
    echo "NUESTRO SITIO EXPERMIENTA FALLOS...";
    exit();
}

/* class Conexion extends PDO {

   public function __construct (){ 
        try {
            parent:: __construct("mysql:host=localhost; dbname=tickets", "root", "");
            parent::exec("set names utf8");

        } catch (PDOException $e){
            echo "ESTAMOS EXPERIMENTANDO PROBLEMAS... " . $e->getMessage();
            exit;
        }

    } 
} */


?>