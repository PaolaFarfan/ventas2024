<?php
require_once('../model/productoModel.php');
require_once('../model/categoriaModel.php');
require_once('../model/personaModel.php');
$tipo = $_REQUEST['tipo'];
// instancio la clase modelproducto
$objProducto = new ProductoModel();
$objCategoria = new categoriaModel();
$objPersona = new PersonaModel();
if ($tipo == "listar") {
    //respuesta
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arr_Productos = $objProducto->obtener_productos();
    if (!empty($arr_Productos)) {
        // recordemos el array para agregar las opciones de las categorias
        for ($i = 0; $i < count($arr_Productos); $i++) {
            $id_categoria = $arr_Productos[$i]->id_categoria; // recien agregado
            $r_categoria = $objCategoria->obtener_categoria($id_categoria); // recien agredago con listar productos
            $arr_Productos[$i]->categoria=$r_categoria;



            $id_producto = $arr_Productos[$i]->id; // Obtener el id
            $nombre_producto = $arr_Productos[$i]->nombre; // Obtener el nombre (sin sobrescribir el array)
            $opciones = '<a href="'.BASEE_URL.'editar-producto'.$id_producto.'">Editar</a>       <button onclick="eliminar_producto('.$id_producto.');">Eliminar</button>'; // Asignar opciones vacías
            $arr_Productos[$i]->options = $opciones; // Agregar las opciones al objeto actual
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_Productos;
    }
    echo  json_encode($arr_Respuesta);
}
if ($tipo == "registrar") {
    // print_r($_POST);
    // echo $_FILES['imagen'] ['name'];


    if ($_POST) {
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $categoria = $_POST['categoria'];
        $fecha_v = $_POST['fecha_v'];
        $imagen = 'imagen';
        $proveedor = $_POST['proveedor'];
        if ($codigo == "" || $nombre == "" || $detalle == "" || $precio == "" || $stock == "" || $categoria == "" || $fecha_v == "" || $imagen == "" || $proveedor == "") {

            //respuesta
            $arr_Respuesta = array(
                'status' => false,
                'mensaje' => 'Error, campos vacios'
            );
        } else {
            $arrProducto = $objProducto->registrar_Producto($codigo, $nombre, $detalle, $precio, $stock, $categoria, $fecha_v, $imagen, $proveedor);

            if ($arrProducto->id > 0) {
                $newid = $arrProducto->id_n;
                $arr_Respuesta = array('statud' => true, 'mensaje' => 'Registro Existoso');
                // carga archivos
                $archivo = $_FILES['imagen']['tmp_name'];
                $destino = './assets/img_productos/';
                $tipoArchivo = strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));
                

                $nombre = $arrProducto->id . "." . $tipoArchivo;
                if (move_uploaded_file($archivo, $destino . $nombre)) {
                    $arr_imagen = $objProducto->actualizar_imagen($id, $imagen);
                } else {
                    $arr_Respuesta = array('status' => true, 'mensaje' => 'Regisro Exitoso , error al subir imagen');
                }
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al registrar producto');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}

if ($tipo == "ver") {
  /*   print_r($_POST); */
    $id_producto =$_POST['id_producto'];
    $arr_Respuesta = $objProducto->verProducto($id_producto);
   /*  print_r($arr_Respuesta); */
   if (empty($arr_Respuesta)) {
       $response =array('status' => false, 'mensaje' => "error no hay informacion");
   }else{
    $response = array('status' => true ,'mensaje' => "datos encontrados", 'contenido' => $arr_Respuesta);
   }
   echo json_encode($response);
}

if ($tipo == "actualizar") {
  /*   print_r($_POST); */
}
if ($tipo == "eliminar") {
    /* print_r($_POST); */
}
