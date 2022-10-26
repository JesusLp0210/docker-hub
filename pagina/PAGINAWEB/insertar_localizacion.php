<?php
require_once("Clases/clase_localizacion.php");
//variable de instancia
$localizacion=new Localizacion();

//recibir valores de input de formulario
$fktipo_empresa=$_POST["fktipo_empresa"];
$nombre=$_POST["nombre"];
$area=$_POST["area"];
$direccion1=$_POST["direccion1"];
$direccion2=$_POST["direccion2"]; 
$ciudad=$_POST["ciudad"]; 
$fkestados=$_POST["fkestados"];


$resultado=$localizacion->insertar($fktipo_empresa, $nombre, $area, $direccion1, $direccion2, $ciudad, $fkestados);
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
  <meta http-equiv='REFRESH' content="0; url=lista_localizaciones.php">
  <script type="text/javascript">
    alert("Se Ha Registrado Una Nueva Localizacion")
  </script>
  <?php
} else{
	echo "No se pudo guardar el registro de la Localizacion <b>"
.$nombre." (".$fktipo_empresa.")</b>.";
	}

?>

 	</div>
</body>
</html>