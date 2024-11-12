<?php
require_once "../librerias/conexion.php";
class productoModel{

    private $conexion;
function __construct()
{
    $this->conexion = new conexion();
    $this->conexion =  $this->conexion -> connect();
}


    public function registrar_Producto($codigo,$nombre,$detalle,$precio,$stock,$categoria,$fecha_v,$imagen,$proveedor){

        $sql =$this->conexion->query
        ("CALL insertproducto('{$codigo}','{$nombre}','{$detalle}','{$precio}','{$stock}','{$categoria}','{$fecha_v}','{$imagen}','{$proveedor}')");
        $sql = $sql-> fetch_object();
        return $sql;
    }
    public function actualizar_imagen($id, $imagen){
        $sql = $this->conexion->query("UPDATE producto SET imagen='{$imagen}' WHERE id='{$id}'");
        return 1;
    }
}
?>