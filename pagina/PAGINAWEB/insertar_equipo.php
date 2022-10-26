<?php
require_once("Clases/clase_equipo.php");
//variable de instancia
$equipo=new Equipo();

//recibir valores de input de formulario
$fkequipo=$_POST["fkequipo"];
$nombre=$_POST["nombre"];
$fkestado=$_POST["fkestado"];
$fkmarca=$_POST["fkmarca"];
$modelo=$_POST["modelo"];
$total=$_POST["total"];
$fklocalizacion=$_POST["fklocalizacion"];
$codigo_id=$_POST["codigo_id"];

$resultado=$equipo->insertar2($fkequipo, $nombre, $fkestado, $fkmarca, $modelo, $total, $fklocalizacion, $codigo_id);
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
  <meta http-equiv='REFRESH' content="0; url=lista_detalle_equipo.php">
  <script type="text/javascript">
    alert("Se Ha Registrado El equipo")
  </script>
  <?php
} else{
	echo "No se pudo guardar el registro del equipo <b>"
.$nombre." (".$fkequipo.")</b>.";
	}

?>

 	</div>
</body>
</html>