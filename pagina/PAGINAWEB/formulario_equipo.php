<?php
require_once("Clases/clase_estado.php");
require_once("Clases/clase_equipo.php");
require_once("Clases/clase_localizacion.php");
require_once("Clases/clase_marca.php");
//instancia de la clase carrera
$estado=new Estado();
$equipo=new Equipo();
$localizacion=new Localizacion();
$marca=new Marca();
//mandar a llamar metodo mostrar de la clase carrera y depositarlos en una variable
$registros=$estado->mostrar();
$registros1=$equipo->mostrar2();
$registros2=$localizacion->mostrar();
$registros3=$marca->mostrar();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrar Equipo</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<style type="text/css">
		.btn-primary{
			margin-top: 25px;
		}
		body{
			background-color: grey;
		}
	</style>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary"></nav>
	<div class="container" >
		<br><br>
		<div class="row">
			<div class="col-10 offset-1 col-sm-8 offset-sm-2 col-md-8 offset-md-2 col-lg-6 offset-lg-3 alert alert-secondary">
				<H2>REGISTRAR EQUIPO</H2>
	<form class="row g-3" action="insertar_equipo.php" method="POST">
    <div class="col-12">
    <label class="form-label">Tipo De Equipo A Registrar</label>
      <select class="form-select" name="fkequipo">
            <option>Seleccione Una Opcion</option>
          <?php
              while ($fila=mysqli_fetch_array($registros1)){
                ?>
                <option value="<?=$fila['idequipo']; ?>"><?=$fila['tipo_equipo']?></option>
                <?php
              }
                ?>
        </select> 
  </div>
      <div class="col-12">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" id="inputEmail4" name="nombre">
  </div>
    <div class="col-12">
    <label class="form-label">Estado</label>
      <select class="form-select" name="fkestado">
            <option>Seleccione Una Opcion</option>
          <?php
              while ($fila=mysqli_fetch_array($registros)){
                ?>
                <option value="<?=$fila['idestado']; ?>"><?=$fila['tipo_estado']?></option>
                <?php
              }
                ?>
        </select> 
  </div>
  <div class="col-12">
    <label class="form-label">Marca</label>
   <select class="form-select" name="fkmarca">
            <option>Seleccione Una Opcion</option>
          <?php
              while ($fila=mysqli_fetch_array($registros3)){
                ?>
                <option value="<?=$fila['idmarca']; ?>"><?=$fila['nombre_marca']?></option>
                <?php
              }
                ?>
        </select> 
      </div>
  <div class="col-12">
    <label class="form-label">Modelo</label>
    <input type="text" class="form-control" id="inputAddress" name="modelo">
  </div>
  <div class="col-12">
    <label class="form-label">Total</label>
    <input type="number" class="form-control" id="inputAddress2" name="total">
  </div><br>
  <div class="col-12">
    <label class="form-label">Localizacion</label>
      <select class="form-select" name="fklocalizacion">
            <option>Seleccione Una Opcion</option>
          <?php
              while ($fila=mysqli_fetch_array($registros2)){
                ?>
                <option value="<?=$fila['idlocalizacion']; ?>"><?=$fila['nombre']?></option>
                <?php
              }
                ?>
        </select> 
  </div><br>
  <div class="col-12">
   <label class="form-label">Codigo De Identificacion</label>
    <input type="text" class="form-control" id="inputEmail4" name="codigo_id">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
</form>

</body>
</html>