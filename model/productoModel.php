<?php
require_once "../librerias/conexion.php";
class productoModel{

    private $conexion;
function __construct()
{
    $this->conexion = new conexion();
    $this->conexion =  $this->conexion -> connect();
}

public function obtener_productos(){
    $arrRespuesta = array();
    $sql = $this->conexion->query("SELECT * FROM producto");
    while ($objeto = $sql->fetch_object()){
        array_push($arrRespuesta,$objeto);
    }
    return $arrRespuesta;
    

}
    public function registrar_Producto($codigo,$nombre,$detalle,$precio,$stock,$categoria,$fecha_v,$imagen,$proveedor){
        $sql =$this->conexion->query("CALL insertproducto('{$codigo}','{$nombre}','{$detalle}','{$precio}','{$stock}','{$categoria}','{$fecha_v}','{$imagen}','{$proveedor}')");
        $sql = $sql-> fetch_object();
        return $sql;
    }
    public function actualizar_imagen($id, $imagen){
        $sql = $this->conexion->query("UPDATE producto SET imagen='{$imagen}' WHERE id='{$id}'");
        return 1;
    }
    public function verProducto($id){
        $sql = $this->conexion->query("SELECT * FROM producto WHERE id='$id");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function actualizarProducto($id,$codigo,$nombre,$detalle,$precio,
    $categoria,$imagen,$proveedor,$tipoArchivo){

        $sql =$this->conexion->query ("CALL actualizarProducto('{$id}','{$nombre}','{$detalle}','{$precio}',
        '{$categoria}','{$imagen}','{$proveedor}','{$tipoArchivo}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function eliminar_producto($id){
        $sql =$this->conexion->query ("CALL eliminarproducto('{$id}')");
        $sql = $sql->fetch_object();
        return $sql;
        
    
    }
}

?>
