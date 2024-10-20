<?php
require_once "conexion.php";
class ModeloPlantlla{
    static public function mdlEstiloPlantilla($tabla){
        $query = "SELECT * FROM $tabla";
        $stmt=Conexion::conectar()->prepare($query);
	    $stmt->execute();
	    return $stmt->fetch();
        $stmt->close();
    }
}
?>