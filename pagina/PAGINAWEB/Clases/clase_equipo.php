<?php
class Equipo{
    function __construct(){
        require_once("conexion.php");
        $this->conexion=new Conexion();
    }

    function insertar($fktipo, $modelo, $fkmarca, $fkestado, $fklocalizacion, $codigo_id, $total){
 		$consulta="INSERT INTO computo(idcomputo, fktipo, modelo, fkmarca, fkestado, fklocalizacion, codigo_id, total, estatus) VALUES (NULL,'{$fktipo}', '{$modelo}','{$fkmarca}', '{$fkestado}', '{$fklocalizacion}', '{$codigo_id}', '{$total}',1)";
 		$resultado=$this->conexion->insertarConsulta($consulta);
 		return $resultado;
 	}
 	function insertar2($fkequipo, $nombre, $fkestado, $fkmarca, $modelo, $total, $fklocalizacion, $codigo_id){
 		$consulta="INSERT INTO detalles_equipo(iddetalle_equipo, fkequipo, nombre_persona, fkestado, fkmarca, modelo, total, fklocalizacion, codigo_id , estatus) VALUES (NULL,'{$fkequipo}','{$nombre_persona}', '{$fkestado}','{$fkmarca}', '{$modelo}', '{$total}', '{$fklocalizacion}', '{$codigo_id}' ,1)";
 		$resultado=$this->conexion->insertarConsulta($consulta);
 		return $resultado;
 	}

	function mostrar(){
		$consulta="SELECT * FROM computo ORDER BY modelo ASC";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function mostrar2(){
 		$consulta="SELECT * FROM equipo WHERE estatus=1 ORDER BY tipo_equipo ASC";
 		$resultado=$this->conexion->returnConsulta($consulta);
 		return $resultado;
 	}
function mostrar_detalles(){
 	$consulta=" SELECT * FROM detalles_equipo de INNER JOIN equipo e ON de.fkequipo=e.idequipo INNER JOIN estado es ON es.idestado=de.fkestado INNER JOIN localizacion l ON l.idlocalizacion=de.fklocalizacion INNER JOIN marca m ON m.idmarca=de.fkmarca";
 		$resultado=$this->conexion->returnConsulta($consulta);
 		return $resultado;
 	}
 function mostrar3(){
 	$consulta=" SELECT * FROM computo c INNER JOIN tipo_compu tc ON c.fktipo=tc.idtipo_compu INNER JOIN estado es ON es.idestado=c.fkestado INNER JOIN localizacion l ON l.idlocalizacion=c.fklocalizacion INNER JOIN marca m ON m.idmarca=c.fkmarca";
 		$resultado=$this->conexion->returnConsulta($consulta);
 		return $resultado;
 	}
}
?>