<?php
require_once("Clases/clase_localizacion.php");
//instancia de la clase carrera
$localizacion=new Localizacion();
//mandar a llamar metodo mostrar de la clase carrera y depositarlos en una variable
$registros=$localizacion->mostrar1();
$registros1=$localizacion->mostrar2();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrar Localizacion</title>
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
	<div class="container" align="center">
		<br><br>
		<div class="row">
			<div class="col-10 offset-1 col-sm-8 offset-sm-2 col-md-8 offset-md-2 col-lg-6 offset-lg-3 alert alert-secondary">
				<H2>REGISTRAR LOCALIZACION NUEVA</H2>
	<form class="row g-3" action="insertar_localizacion.php" method="POST">
	<div class="col-12">
    <label for="inputAddress2" class="form-label">Tipo De Direccion</label>
      <select class="form-select" name="fktipo_empresa">
            <option>Seleccione Una Opcion</option>
          <?php
              while ($fila=mysqli_fetch_array($registros)){
                ?>
                <option value="<?=$fila['idtipo_empresa']; ?>"><?=$fila['nombre_empresa']?></option>
                <?php
              }
                ?>
        </select> 
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="inputEmail4" name="nombre">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Area</label>
    <input type="text" class="form-control" id="inputPassword4" name="area">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Direccion</label>
    <input type="text" class="form-control" id="inputAddress" name="direccion1">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Direccion 2 2</label>
    <input type="text" class="form-control" id="inputAddress2" name="direccion2">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Ciudad</label>
    <input type="text" class="form-control" id="inputCity" name="ciudad">
  </div>
  <div class="col-md-6">
    <label for="inputState" class="form-label">Estado</label>
   <select class="form-select" name="fkestados">
            <option>Seleccione Una Opcion</option>
          <?php
              while ($fila=mysqli_fetch_array($registros1)){
                ?>
                <option value="<?=$fila['idestados']; ?>"><?=$fila['nombre_estados']?></option>
                <?php
              }
                ?>
        </select> 
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
</form>

</body>
</html>