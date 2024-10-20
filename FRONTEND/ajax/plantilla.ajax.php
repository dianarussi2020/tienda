<?php
require_once "../controladores/plantilla.controlador.php";
require_once "../modelos/plantilla.modelo.php";
class AjaxPlantilla{
    public function ajaxEstiloPlantilla(){
        $rta = ControladorPlantilla::ctrEstiloPlantilla();
        echo json_encode($rta);
    }
}
$obj = new AjaxPlantilla();
$obj->ajaxEstiloPlantilla();
?>