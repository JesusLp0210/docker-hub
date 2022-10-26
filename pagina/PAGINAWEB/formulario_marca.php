<!DOCTYPE html>
<html>
<head>
	<title>Registrar Marca</title>
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
			<form class="row g-3" action="insertar_marca.php" method="POST">
				<h2>Registrar Marca Nueva</h2>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Nombre De La Marca</label>
    <input type="text" class="form-control" id="inputEmail4" name="nombre_marca">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">GUARDAR</button>
  </div>
</form>
			</div>
		</div>
	</div>
</body>
</html>