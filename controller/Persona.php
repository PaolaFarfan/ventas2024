<?php
require_once('../model/personaModel.php');

$tipo = $_REQUEST['tipo'];

// instanciar la clase persona model
$objPersona = new personaModel();

if ($tipo=="listar") {
     //respuesta
     $arr_Respuesta =array('status' =>false,'contenido'=>'');
     $arr_Persona = $objPersona->obtener_categorias();
     
     if (!empty($arr_Persona)) {
          // recordemos el array para agregar las opciones de las personas
          for ($i=0; $i < count($arr_Persona); $i++) { 
               $id_persona = $arr_Persona[$i]-> id;
               $arr_Persona =$arr_Persona[$i]->nombre;
               $opciones = '';
               $arr_Persona[$i] ->options = $opciones;
          }
          $arr_Respuesta ['status'] = true;
          $arr_Respuesta ['contenido'] = $arr_Persona;
     }
     echo  json_encode($arr_Respuesta);

}

?>-