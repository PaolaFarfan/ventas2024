<?php
require_once "../librerias/conexion.php";

class compraModel{
    private $conexion;
    function __construct()
    {
        $this->conexion = new conexion();
        $this->conexion =  $this->conexion -> connect();
    }
    public function obtener_compra(){
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT*FROM compras");
        while ($objeto = $respuesta->fetch_object()){
            array_push($arrRespuesta,$objeto);
            

        }
        return $arrRespuesta;
        
    }
    
    public function registrar_Compra($id_producto,$cantidad,$precio,$id_trabajador){

        $sql =$this->conexion->query
        ("CALL insertcompra('{$id_producto}','{$cantidad}','{$precio}','{$id_trabajador}')");
        $sql = $sql-> fetch_object();
        return $sql;
    }
}



?>
