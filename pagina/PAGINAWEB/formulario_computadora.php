<?php
require_once("Clases/clase_marca.php");
require_once("Clases/clase_varios.php");
require_once("Clases/clase_estado.php");
require_once("Clases/clase_localizacion.php");
//instancia de la clase carrera
$marca=new Marca();
$varios=new Varios();
$estado=new Estado();
$localizacion=new Localizacion();

//mandar a llamar metodo mostrar de la clase carrera y depositarlos en una variable
$registros=$marca->mostrar();
$registros1=$varios->mostrar();
$registros2=$estado->mostrar();
$registros3=$localizacion->mostrar();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrar Usuario</title>
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
    table{
      text-align: center;
    }

	</style>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary"></nav>
	<div class="container" align="center">
		<br><br>
		<div class="row">
			<div class="col-10 offset-1 col-sm-8 offset-sm-2 col-md-8 offset-md-2 col-lg-6 offset-lg-3 alert alert-secondary">
			<form class="row g-3" action="insertar_computadora.php" method="POST">
				<h2>Registrar Ordenador</h2>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Tipo De Computadora</label>
     <select class="form-select" name="fktipo">
            <option value="">Seleccione Una Opcion</option>
            <?php
              while ($fila=mysqli_fetch_array($registros1)){
                ?>
                <option value="<?=$fila['idtipo_compu']; ?>"><?=$fila['tipo_co']?></option>
                <?php
              }
                ?>
          </select>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Modelo</label>
    <input type="text" class="form-control" id="inputEmail4" name="modelo">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Marca</label>
    <select class="form-select" name="fkmarca">
            <option value="">Seleccione Una Marca</option>
            <?php
              while ($fila=mysqli_fetch_array($registros)){
                ?>
                <option value="<?=$fila['idmarca']; ?>"><?=$fila['nombre_marca']?></option>
                <?php
              }
                ?>
          </select>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Estado</label>
       <select class="form-select" name="fkestado">
            <option value="">Seleccione Una Opcion</option>
            <?php
              while ($fila=mysqli_fetch_array($registros2)){
                ?>
                <option value="<?=$fila['idestado']; ?>"><?=$fila['tipo_estado']?></option>
                <?php
              }
                ?>
          </select>
  </div>
  <div class="col-12">
  <label for="inputAddress2" class="form-label">Localizacion</label>
       <select class="form-select" name="fklocalizacion">
            <option value="">Seleccione Una Opcion</option>
            <?php
              while ($fila=mysqli_fetch_array($registros3)){
                ?>
                <option value="<?=$fila['idlocalizacion']; ?>"><?=$fila['nombre']?></option>
                <?php
              }
                ?>
          </select>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Codigo De Identificacion</label>
    <input type="text" class="form-control" id="inputEmail4" name="codigo_id">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Total</label>
    <input type="number" class="form-control" id="inputPassword4" name="total">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">GUARDAR</button>
  </div>
</form>
			</div>
		</div>
	</div>
 
  </div>
          </div>
  </div>
</body>
</html>