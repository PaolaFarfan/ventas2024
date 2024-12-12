<?php
require_once('../model/compraModel.php');

# instacncion la clase model producto
$objCompra = new compraModel();
$tipo = $_REQUEST ['tipo'];

//instancio el clase modelopersona
if ($tipo == "listar") {

  //respuesta
  $arr_Respuesta = array('status' => false, 'contenido' => '');
  $arr_compra = $objCompra->obtener_compra();
  if (!empty($arr_compra)) {
    // recordemos el array para agregar las opciones de las personas
    for ($i = 0; $i < count($arr_compra); $i++) {
      $id_compra = $arr_compra[$i]->id;
      $r_compra = $objCompra->obtener_compra($id_compra);
      $arr_compra[$i]->compra = $r_compra;



      $id_compra = $arr_compra[$i]->id; // Obtener el id
      $nombre_compra = $arr_compra[$i]->nombre; // Obtener el nombre (sin sobrescribir el array)
      $opciones = '<a href="'.BASEE_URL.'editar-compra'.$id_compra.'">Editar</a>       <button onclick="eliminar_compra
      ('.$id_compra.');">Eliminar</button>'; // Asignar opciones vacías
      $arr_compra[$i]->options = $opciones; // Agregar las opciones al objeto actual

    }
    $arr_Respuesta['status'] = true;
    $arr_Respuesta['contenido'] = $arr_compra;
    #code...
  }
  echo json_encode($arr_Respuesta);
}

//para registrar la compra
if ($tipo == "registar") {
        //print_r($_POST);
    //echo $_FILES['imagen']['name'];    
    if($_POST);
    $id_producto= $_POST['id_producto'];
    $cantidad= $_POST['cantidad'];
    $precio= $_POST['precio'];
    $id_trabajador= $_POST['id_trabajador'];

    if ($id_producto=="" || $cantidad=="" || $precio=="" || $id_trabajador=="") {
        $arr_Respuesta = array('status'=> false, 'mensaje'=>'error campos vacios');
    }else {
        $arrCompras= $objcompra->obtener_compra($id_producto, $cantidad, $precio ,$id_trabajador);
        if ($arrCompra-> id > 0) {
            $arr_Respuesta = array('status' => true, 'mensaje' =>'registro exitoso');
            //cargar archivos
           
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje'=>'error al SUBIR producto');
        }
        echo json_encode($arr_Respuesta);
    } 

}


?>