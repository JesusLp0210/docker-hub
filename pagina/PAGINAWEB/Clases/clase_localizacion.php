<?php
class Localizacion{
    function __construct(){
        require_once("conexion.php");
        $this->conexion=new Conexion();
    }

    function insertar($fktipo_empresa, $nombre, $area, $direccion1, $direccion2, $ciudad, $fkestados){
 		$consulta="INSERT INTO localizacion(idlocalizacion, fktipo_empresa, nombre, area, direccion1, direccion2, ciudad, fkestados, estatus) VALUES (NULL,'{$fktipo_empresa}', '{$nombre}','{$area}', '{$direccion1}', '{$direccion2}', '{$ciudad}', '{$fkestados}',1)";
 		$resultado=$this->conexion->insertarConsulta($consulta);
 		return $resultado;
 	}
 	function mostrar(){
		$consulta="SELECT * FROM localizacion ORDER BY nombre ASC";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function mostrar1(){
		$consulta="SELECT * FROM tipo_empresa ORDER BY nombre_empresa ASC";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function mostrar2(){
		$consulta="SELECT * FROM estados ORDER BY nombre_estados ASC";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
}
?>
