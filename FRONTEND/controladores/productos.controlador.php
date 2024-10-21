<?php
class ControladorProductos{
    /** Registro de categorias */
    static public function ctrMostrarCategoria($item, $valor){
        $tabla = "categorias";
        $rta = ModeloProductos::mdlMostrarCategorias($tabla,$item,$valor);
        return $rta;
    }

    /** Registro de subcategorias */
    static public function ctrMostrarSubcategoria($item, $valor){
        $tabla = "subcategorias";
        $rta = ModeloProductos::mdlMostrarSubcategorias($tabla,$item,$valor);
        return $rta;
    }
}
?>