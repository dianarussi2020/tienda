<?php
class ControladorPlantilla{
    /** Llamar la plantilla */
    public function plantilla(){
        include "vistas/plantilla.php";
    }

    /**Traer estilos dinamicos de la plantilla  */
    static public function ctrEstiloPlantilla(){
        $tabla = "plantilla";
        $rta =ModeloPlantlla::mdlEstiloPlantilla($tabla);
        return $rta;
    }
}
?>