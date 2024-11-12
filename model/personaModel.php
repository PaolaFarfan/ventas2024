<?php
require_once "../librerias/conexion.php";

class personaModel{
    private $conexion;
    
    public function obtener_persona(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT*FROM persona");
        while ($objeto = $respuesta->fetch_object()){
            array_push($arrRespuesta,$objeto);
            

        }
        return $arrRespuesta;
        
    }
}



?>