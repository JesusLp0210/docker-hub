<?php
require_once("Clases/clase_usuario.php");
//variable de instancia
$usuario=new Usuario();

//recibir valores de input de formulario
$nombre_usuario=$_POST["nombre_usuario"];
$contraseña=$_POST["contraseña"];
$fktipo_usuario=$_POST["fktipo_usuario"];


$resultado=$usuario->insertar($nombre_usuario, $contraseña, $fktipo_usuario);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <meta charset="utf-8">
<style type="text/css">
		.cajita{
	font-size: 30px;
  width: 700px;
  background: #24303c;
  padding: 20px;
  margin: auto;
  margin-top: 100px;
  border-radius: 4px;
  font-family: 'calibri';
  color: white;
  box-shadow: 7px 13px 37px #000;
  text-align:center;
}
</style>
<div class="cajita">

<?php
if ($resultado){
	?>
  <meta http-equiv='REFRESH' content="0; url=login.php">
  <script type="text/javascript">
    alert("Se Ha Registrado El Usuario")
  </script>
  <?php
} else{
	echo "No se pudo guardar el registro de la carrera <b>"
.$nombre_usuario." (".$fktipo_usuario.")</b>.";
	}

?>

 	</div>
</body>
</html>