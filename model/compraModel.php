<?php
require_once "../librerias/conexion.php";

class compraModel{
    private $conexion;
    
    public function obtener_compra(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT*FROM compra");
        while ($objeto = $respuesta->fetch_object()){
            array_push($arrRespuesta,$objeto);
            

        }
        return $arrRespuesta;
        
    }
}



?>