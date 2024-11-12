<?php
class vistaModelo{

    protected static function obtener_vista($vista){
        $palabras_permitidas =['usuarios','nuevo-usuario','usuario', 'producto','mujeres','hombres','niños','bebes','megusta','carrito','detalle-producto','inicio','nuevo-producto','nueva-persona'];
        if  (in_array($vista,$palabras_permitidas)) {
            if (is_file("./views/".$vista.".php")){
                $contenido = "./views/".$vista.".php";
            }else{
                $contenido ="404";
            }
        }elseif($vista=="login"|| $vista=="index"){
            $contenido = "login";
        }else{
            $contenido ="404";
        }
        return $contenido;
    }
}




?>