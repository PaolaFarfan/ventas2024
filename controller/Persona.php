<?php
require_once('../model/personaModel.php');

$objPersona = new personaModel();
$tipo = $_REQUEST ['tipo'];
# instacncion la clase model producto
$objPersona = new personaModel();

//instancio el clase modelopersona
if ($tipo == "listar") {

  //respuesta
  $arr_Respuesta = array('status' => false, 'contenido' => '');
  $arr_persona = $objPersona->obtener_persona();
  if (!empty($arr_persona)) {
    // recordemos el array para agregar las opciones de las personas
    for ($i = 0; $i < count($arr_persona); $i++) {
      $id_persona = $arr_persona[$i]->id;
      $r_persona = $objPersona->obtener_persona($id_persona);
      $arr_persona[$i]->persona = $r_persona;

    }
    $arr_Respuesta['status'] = true;
    $arr_Respuesta['contenido'] = $arr_persona;
    #code...
  }
  echo json_encode($arr_Respuesta);
}



if ($tipo=="registrar") {
    //print_r($_POST);
    //echo $_FILES['imagen']['name'];
    
     if($_POST);
    $nro_identidad= $_POST['nro_identidad'];
    $razon_social= $_POST['razon_social'];
    $telefono= $_POST['telefono'];
    $correo= $_POST['correo'];
    $departamento= $_POST['departamento'];
    $provincia= $_POST['provincia'];
    $distrito= $_POST ['distrito'];
    $cod_postal= $_POST['cod_postal'];
    $direccion= $_POST['direccion'];
    $rol= $_POST['rol'];
    $secure_password=password_hash($nro_identidad,PASSWORD_DEFAULT);

    
    if ($nro_identidad=="" || $razon_social=="" || $telefono=="" || $correo==""|| $departamento==""|| $provincia=="" || $distrito=="" || $cod_postal==""|| $direccion==""|| $rol==""|| $secure_password=="") {
        $arr_Respuesta = array('status'=> false, 'mensaje'=>'error campos vacios');
    }else {
        $arrPersona= $objPersona->registrar_persona($nro_identidad, $razon_social, $telefono,$correo, $departamento, $provincia, $distrito, $cod_postal, $direccion, $rol, $secure_password);
        if ($arrPersona-> id > 0) {
            $arr_Respuesta = array('status' => true, 'mensaje' =>'registro exitoso');
            //cargar archivos
           
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje'=>'error al SUBIR producto');
        }
        echo json_encode($arr_Respuesta);
    } 

}
?>
