<?php
require_once "../librerias/conexion.php";
class personaModel{

    private $conexion;
function __construct()
{
    $this->conexion = new conexion();
    $this->conexion =  $this->conexion -> connect();
}
public function obtener_persona()
    {
        $arrRespuesta = array();
        $sql = $this->conexion->query("SELECT * FROM persona");
        while ($objeto = $sql->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }


    public function registrar_persona($nro_identidad,$razon_social,$telefono,$correo,$departamento,$distrito,$codPostal,$direccion,$rol, $password){

        $sql =$this->conexion->query
        ("CALL insertpersona('{$nro_identidad}','{$razon_social}','{$telefono}','{$correo}','{$departamento}','{$distrito}','{$codPostal}','{$direccion}','{$rol}'),'{ $password}')");
        $sql = $sql-> fetch_object();
        return $sql;
    }

    public function buscarPersonaPorDNI($usuario){
        $sql = $this->conexion->query("SELECT * FROM persona WHERE nro_identidad='{$usuario}'");
        $sql =$sql->fetch_object();
        return $sql;
    }
    
}

?>