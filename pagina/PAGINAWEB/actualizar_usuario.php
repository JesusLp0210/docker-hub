
<?php


$nombre_usuario=$_POST["nombre_usuario"];
$contraseña=$_POST["contraseña"];
$fktipo_usuario=$_POST["fktipo_usuario"];
$idusuario=$_POST["idusuario"];

require_once("Clases/clase_usuario.php");
$usuario=new Usuario();

$resultado=$usuario->actualizar($nombre_usuario, $contraseña, $fktipo_usuario, $idusuario);

if ($resultado) {
	echo "<meta http-equiv='REFRESH' content='0; url=lista_usuario.php'>
  <script type='text/javascript'>
    alert('Se Han Actualizados Los Datos Del Usuario!')
  </script>";
}else {
	echo "<meta http-equiv='REFRESH' content='0; url=lista_computo.php'>
  <script type='text/javascript'>
    alert('ERROR!')
  </script>";
}
?>