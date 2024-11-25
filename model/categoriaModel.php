<?php
require_once "../librerias/conexion.php";

class categoriaModel
{
    private $conexion;
    function __construct()
    {
        $this->conexion = new conexion();
        $this->conexion =  $this->conexion -> connect();
    }
    
    public function obtener_categorias()
    {
        $arrRespuesta = array();
        $sql = $this->conexion->query("SELECT * FROM categoria");
        while ($objeto = $sql->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }
    public function obtener_categoria($id) // recien agregado
    {
        $respuesta = $this->conexion->query("SELECT * FROM categoria WHERE id='{$id}'"); 
        $objeto = $respuesta->fetch_object();
        return $objeto;
    }
}
