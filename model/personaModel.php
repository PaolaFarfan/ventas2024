<?php
require_once "../librerias/conexion.php";

class personaModel{
    private $conexion;
    
    public function obtener_categorias(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT*FROM categoria");
        while ($objeto = $respuesta->fetch_object()){
            array_push($arrRespuesta,$objeto);
            

        }
        return $arrRespuesta;
        
    }
}



?>