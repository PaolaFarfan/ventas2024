<?php
require_once('../model/compraModel.php');

$tipo = $_REQUEST['tipo'];

// Instanciar la clase proveedorModel
$objcompra = new compraModel();


if ($tipo == "listar") {
    // Respuestas
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arr_compras = $objproveedor->obtener_compra();
    
    
    if (!empty($arr_compras)) {
        for ($i = 0; $i < count($arr_compras); $i++) {
            $id_compra = $arr_compras[$i]->id;
            $compra = $arr_compras[$i]->razon_social;
            $opciones = '<a href="#" class="btn btn-success"><i class="fa fa-pencil"></i></a>';
            $arr_compras[$i]->opciones = $opciones; 
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_compras;
    }
    echo json_encode($arr_Respuesta);
}
?>