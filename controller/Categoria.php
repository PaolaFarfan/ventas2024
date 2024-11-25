<?php
require_once('../model/categoriaModel.php');
require_once('../model/categoriaModel.php');
require_once('../model/personaModel.php');
$tipo = $_REQUEST['tipo'];
// instancio la clase modelproducto
$objProducto = new productoModel(); 
$objCategoria = new categoriaModel();
$objPersona = new personaModel();
if ($tipo == "registrar") {
    //respuesta
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arr_Categorias = $objCategoria->obtener_categorias();
    if (!empty($arr_Categorias)) {
        // recordemos el array para agregar las opciones de las categorias
        for ($i = 0; $i < count($arr_Categorias); $i++) {
            $id_categoria = $arr_Categorias[$i]->id_categoria; // recien agregado
            $r_categoria = $objCategoria->obtener_categoria($id_categoria); // recien agredago con listar productos
            $arr_Categorias[$i]->categoria=$r_categoria;
            $id_categoria = $arr_Categorias[$i]->id; // Obtener el id
            $nombre_producto = $arr_Categorias[$i]->nombre; // Obtener el nombre (sin sobrescribir el array)
            $opciones = ''; // Asignar opciones vacías
            $arr_Categorias[$i]->options = $opciones; // Agregar las opciones al objeto actual
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_Categorias;
    }
    echo  json_encode($arr_Respuesta);
}

$tipo = $_REQUEST['tipo'];

// instanciar la clase categoria model
$objCategoria = new categoriaModel();

if ($tipo=="listar") {
     //print_r($_POST);
     //echo $_FILES['imagen']['name'];
     
      if($_POST);
     $nombre= $_POST['nombre'];
     $detalles= $_POST['detalles'];
     
   
     if ($nombre=="" || $detalles=="" ) {
         $arr_Respuesta = array('status'=> false, 'mensaje'=>'error campos vacios');
     }else {
         $arr_Categorias= $objCategoria->obtener_categorias($nombre, $detalles);
         if ($arrCategoria-> id > 0) {
             $arr_Respuesta = array('status' => true, 'mensaje' =>'registro exitoso');
             //cargar archivos
            
         } else {
             $arr_Respuesta = array('status' => false, 'mensaje'=>'error al SUBIR producto');
         }
         echo json_encode($arr_Respuesta);
     } 
 
    
 }

?>