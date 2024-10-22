<?php
require_once "conexion.php";
class ModeloProductos{
    /** Registrar categorias */
    static public function mdlMostrarCategorias($tabla,$item,$valor){
        if($item !=null){
            $query = "SELECT * FROM $tabla WHERE $item=:$item";
            $stmt=Conexion::conectar()->prepare($query);
            $stmt ->bindParam(":".$item , $valor , PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();//fetch para devuelva una linea de info
        }else{
            // devuelve todo
            $query = "SELECT * FROM $tabla";
            $stmt=Conexion::conectar()->prepare($query);
            $stmt->execute();
	        return $stmt->fetchAll();
        }
        $stmt->close();
        $stmt = null;
    }

    /** Registrar subcategorias */
    static public function mdlMostrarSubcategorias($tabla,$item,$valor){
        $query = "SELECT * FROM $tabla WHERE $item=:$item";
        $stmt=Conexion::conectar()->prepare($query);
        $stmt->bindParam(':'.$item,$valor,PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }
}
?>