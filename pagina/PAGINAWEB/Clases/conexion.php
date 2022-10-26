<?php

class conexion extends mysqli {

	function __construct(){
		parent::__construct("bolita","root","pass","inventario1");
		$this->set_charset("utf8");
		if ($this->connect_errno){
			echo "falla en la conexion";
			exit;
		}
	}
	function insertarConsulta($consulta){
		$resultado=$this->query($consulta);

		if(!$resultado){
			return false;
		}else{
			return $this->insert_id;		
		}
	}
	function returnConsulta($consulta){
		$datos=$this->query($consulta);
		return $datos;
	}
	function cerrarConexion(){
		$this->close();
	}
}
?>
