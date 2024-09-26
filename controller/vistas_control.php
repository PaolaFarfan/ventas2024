<?php

require_once "./model/vistas_model.php";

class vistasControlador extends vistaModelo{

    public function obtenerPlantillaControlador(){
        return require_once "./views/pantilla.php";
    }

    public function obtenerVistasControlador(){
        if (isset($_GET['views']))  {
            $ruta = explode("/", $_GET['views'] );
            $respuesta = vistaModelo::obtener_vista($ruta[0]);
        }else {
            $respuesta = "login";
        }
        return $respuesta;
    }
}

?>