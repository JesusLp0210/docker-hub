<?php
class Varios{
    function __construct(){
        require_once("conexion.php");
        $this->conexion=new Conexion();
    }

    function insertar($tipo, $modelo, $fkmarca, $estado, $localizacion, $codigo_id, $total){
 		$consulta="INSERT INTO computo(idcomputo, tipo, modelo, fkmarca, estado, localizacion, codigo_id, total, estatus) VALUES (NULL,'{$tipo}', '{$modelo}','{$fkmarca}', '{$estado}', '{$localizacion}', '{$codigo_id}', '{$total}',1)";
 		$resultado=$this->conexion->insertarConsulta($consulta);
 		return $resultado;
 	}

	function mostrar(){
		$consulta="SELECT * FROM tipo_compu ORDER BY tipo_co ASC";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
}
?>