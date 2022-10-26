<?php 
$nombre_usuario=$_POST["nombre_usuario"];
$contraseña=$_POST["contraseña"];

require_once("Clases/clase_usuario.php");
$usuario=new Usuario();

$resultado=$usuario->buscar($nombre_usuario, $contraseña);

$validacion=mysqli_num_rows($resultado);

if($validacion==1){
	header("location: index.php");
} else if($validacion==0){
	header("location: login.php");
}
 ?>
