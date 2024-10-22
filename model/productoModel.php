<?php
require_once "../librerias/conexion.php";
class ProductoModel{

    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this ->conexion->connect();
    }

    public function registarProducto 
    ( $codigo, $nombre, $detalle, $precio, $stock, $categoria, $fecha_v,
    $imagen, $proveedor){
        $sql=$this->conexion->query("CALL 
        insertproducto('{$codigo}','{$nombre}','{$detalle}','{$precio}','{$stock}',
        '{$categoria}','{$fecha_v}','{$imagen}','{$proveedor}')");
        
    }
}


?>