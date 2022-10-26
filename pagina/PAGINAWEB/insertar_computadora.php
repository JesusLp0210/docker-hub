<?php
require_once("Clases/clase_equipo.php");
//variable de instancia
$equipo=new Equipo();

//recibir valores de input de formulario
$fktipo=$_POST["fktipo"];
$modelo=$_POST["modelo"];
$fkmarca=$_POST["fkmarca"];
$fkestado=$_POST["fkestado"];
$fklocalizacion=$_POST["fklocalizacion"];
$codigo_id=$_POST["codigo_id"];
$total=$_POST["total"];

$resultado=$equipo->insertar($fktipo, $modelo, $fkmarca, $fkestado, $fklocalizacion, $codigo_id, $total);
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
  <meta http-equiv='REFRESH' content="0; url=lista_equipo.php">
  <script type="text/javascript">
    alert("Se Ha Registrado El equipo")
  </script>
  <?php
} else{
	echo "No se pudo guardar el registro de la computadora <b>"
.$marca." (".$tipo.")</b>.";
	}

?>

 	</div>
</body>
</html>