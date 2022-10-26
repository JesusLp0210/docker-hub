
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<meta charset="utf-8">
<body>
	<style type="text/css">
		.card{
			width: 60%
		}
		.item1{
		display: inline-block;
		border: double green 3px;
		padding: 2px 12px;
		background-color: white;
		color: black;
		border-radius: 70px;

	}
.item1 img{
		height: 400px;
		width: 400px;
	}
	.item1:hover{
		background-color: green;
		border: double black 3px;
		box-shadow:3px 3px 3px black;
	}
	</style>

	<br><nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="index.php">JECA</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="lista_registro.php">Registros <span class="sr-only"></span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="lista_registrar.php">Registrar</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="lista_usuario.php">Usuarios</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="cerrar_sesion.php" tabindex="-1" aria-disabled="true">Cerrar Sesion</a>
		      </li>
		    </ul>
		    
		  </div>
		  <nav class="navbar navbar-light">
  	<div class="container-fluid">
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
		</nav>
  
		<div class="alert alert-dark" role="alert">
Empaque Cultivares
</div>
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">BIENVENID@ <?php echo $_SESSION["nombre_usuario"]; ?></h4>
  <p>Bienvenido al sistema de inventario "JECA" donde podras llevar acabo un control de bienes, ya que seran registrara todo aquello bienes que pertenencen al empaque</p>
  <hr>
  <p class="mb-0">Recuerda que los datos seran guardados en la base de datos</p>
</div>
	
	
</div>

<div align="center"> 
<section id="marcas" align="center">
		<h1>¿QUE DESEAS REGISTRAR?</h1><br>
		<a href="formulario_usuario.php"><div class="item1">
			<img src="POPO.PNG">
			<h3>Usuario</h3>
		</div></a>
		<a href="formulario_computadora.php"><div class="item1">
			<img src="YOYO.png">
			<h3>Equipo De Computo</h3>
		</div> </a><br><br>
		<a href="formulario_localizacion.php"><div class="item1">
			<img src="ubi.png">
			<h3>Localizacion</h3>
		</div></a>
		<a href="formulario_equipo.php"><div class="item1">
			<img src="papa.png">
			<h3>Equipos</h3>
		</div>
</section>
</div>
<br>
      <div>
      <div align="center"> 
<section id="marcas" align="center">
		<h1>¿QUE DESEAS REGISTRAR?</h1><br>
		<a href="lista_usuario.php"><div class="item1">
			<img src="1.PNG">
			<h3>Usuario</h3>
		</div></a>
		<a href="lista_equipo.php"><div class="item1">
			<img src="4.png">
			<h3>Equipo De Computo</h3>
		</div> </a><br><br>
		<a href="lista_localizacion.php"><div class="item1">
			<img src="3.png">
			<h3>Localizacion</h3>
		</div></a>
		<a href="lista_detalle_equipo.php"><div class="item1">
			<img src="2.png">
			<h3>Equipos</h3>
		</div>
</section>
</body>
</html>