<?php
class Usuario{
    function __construct(){
        require_once("conexion.php");
        $this->conexion=new Conexion();
    }

    function insertar($nombre_usuario,$contraseña, $fktipo_usuario){
 		$consulta="INSERT INTO usuario (idusuario, nombre_usuario, contraseña, fktipo_usuario, estatus) VALUES (NULL,'{$nombre_usuario}', '{$contraseña}','{$fktipo_usuario}',1)";
 		$resultado=$this->conexion->insertarConsulta($consulta);
 		return $resultado;
 	}
	function buscar($nombre_usuario, $contraseña){
		$consulta="SELECT * FROM usuario WHERE nombre_usuario='{$nombre_usuario}' AND contraseña='{$contraseña}' AND estatus=1";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function mostrar(){
		$consulta="SELECT * FROM usuario u INNER JOIN tipo_usuario tp ON u.fktipo_usuario=tp.idtipo_usuario ORDER BY nombre_usuario ASC";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function mostrar1(){
		$consulta="SELECT * FROM tipo_usuario ORDER BY t_usuario ASC";
		$resultado=$this->conexion->returnConsulta($consulta);
		return $resultado;
	}
	function buscarId($idusuario){
 		$consulta="SELECT * FROM usuario u INNER JOIN tipo_usuario tp ON u.fktipo_usuario=tp.idtipo_usuario WHERE idusuario='{$idusuario}'";
 		$resultado=$this->conexion->returnConsulta($consulta);
 		return $resultado;

 	}
	function actualizar($nombre_usuario, $contraseña, $fktipo_usuario, $idusuario){
 		$consulta="UPDATE usuario SET nombre_usuario='{$nombre_usuario}', contraseña='{$contraseña}', fktipo_usuario='{$fktipo_usuario}' WHERE idusuario='{$idusuario}'";
 		$resultado=$this->conexion->returnConsulta($consulta);
 		return $resultado;
 	}
}
?>