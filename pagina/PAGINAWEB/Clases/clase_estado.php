<?php
class Estado{
    function __construct(){
        require_once("conexion.php");
        $this->conexion=new Conexion();
    }
 	function insertar($nombre_marca){
 		$consulta="INSERT INTO marca(idmarca, nombre_marca, estatus) VALUES (NULL, '{$nombre_marca}' ,1)";
 		$resultado=$this->conexion->insertarConsulta($consulta);
 		return $resultado;
 	}
	function mostrar(){
 		$consulta="SELECT * FROM estado WHERE estatus=1 ORDER BY tipo_estado ASC";
 		$resultado=$this->conexion->returnConsulta($consulta);
 		return $resultado;
 	}
}
?>