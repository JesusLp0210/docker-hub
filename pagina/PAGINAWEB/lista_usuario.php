<?php  
require_once("Clases/clase_usuario.php");
$usuario=new Usuario();

$registros=$usuario->mostrar();
 ?>
 <!DOCTYPE html> 
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
 	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
 </head>
 <body>
<style type="text/css">
	thead{
		color: red;

	}
	th{
		background-color: grey;
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

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

 	<script type="text/javascript">$(document).ready(function() {
    $('#example').DataTable();} );</script>
 	<div class="container">
 		

 		<table id="example" class="table table-striped table-bordered" style="width:100%">
 			<thead>
 				<th>Nombre De Usario</th>
 				<th>Tipo De Usuario</th>
 				<th>estatus</th>
 				<th>Opciones</th>
 			</thead>
 			<tbody>
 				<?php 
 					while($fila=mysqli_fetch_array($registros)){
 				 ?>
 				<tr>
 					<td><?=$fila["nombre_usuario"]?></td>
 					<td><?=$fila["t_usuario"]?></td>
 					<td><?=$fila["estatus"]?></td>
 					<td>
 						<a href="editar_usuario.php?idusuario=<?=$fila['idusuario']?>"><button class="btn btn-outline-dark">Editar</button></a>
 						<a href="baja_equipo.php?idusuario=<?=$fila['idusuario']?>"><button class="btn btn-outline-dark">Dar de baja</button></a>
 						<a href="eliminar_equipo.php?idusuario=<?=$fila['idusuario']?>"><button class="btn btn-outline-danger">Eliminar</button></a>
 					</td>
 				</tr>
 				<?php 
 				}
 				 ?>
 			</tbody>
 		</table>
 		
 	</div>
<div class="btn-group">
  <button type="button" class="btn btn-danger">Action</button>
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
  </ul>
</div>
 </body>
 </html>