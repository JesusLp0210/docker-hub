<?php
require_once("Clases/clase_marca.php");
//variable de instancia
$marca=new Marca();

//recibir valores de input de formulario
$nombre_marca=$_POST["nombre_marca"];


$resultado=$marca->insertar($nombre_marca);
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
    alert("Se Ha Registrado La Marca")
  </script>
  <?php
} else{
  echo "No se pudo guardar el registro de la marca <b>"
.$nombre_marca." </b>.";
  }

?>

  </div>
</body>
</html>