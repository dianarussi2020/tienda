<?php 
class Conexion{
    static public function conectar(){
        $server = "localhost";
	    $dbUsername = "root";
	    $dbPassword = "";
	    $dbName = "ecommerce";
        $conn = new PDO("mysql:host=$server;dbname=$dbName",$dbUsername,$dbPassword,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
        return $conn;
    }
}
?>
