<?php
session_start();
class vistaModelo{

    protected static function obtener_vista($vista){
        $palabras_permitidas =['usuarios','nuevo-usuario','usuario', 'producto','mujeres','hombres','niños','bebes','megusta','carrito','detalle-producto','inicio','nuevo-producto','nueva-persona','nueva-categoria','nueva-compra','producto1','categoria1','persona1'];
       /*       
        if (isset($_SESSION['sesion_ventas_id'])) {
            return "login";
        } */
        
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