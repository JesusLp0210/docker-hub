<?php  
require_once("Clases/clase_localizacion.php");
$localizacion=new Localizacion();

$registros=$localizacion->mostrar();
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
		.btn-primary{
			margin-top: 25px;
		}
		body{
			background-color: grey;
		}
	</style>
 	 	 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

 	<script type="text/javascript">$(document).ready(function() {
    $('#example').DataTable();} );</script>
 	<div class="container">
 		

 		<table id="example" class="table table-striped table-bordered" style="width:100%">
 			<thead>
 				<th>Tipo</th>
 				<th>Nombre</th>
 				<th>Area</th>
 				<th>Direccion1</th>
 				<th>Direccion2</th>
 				<th>Ciudad</th>
 				<th>Estado</th>
 				<th>estatus</th>
 				<th>Opciones</th>
 			</thead>
 			<tbody>
 				<?php 
 					while($fila=mysqli_fetch_array($registros)){
 				 ?>
 				<tr>
 					<td><?=$fila["tipo"]?></td>
 					<td><?=$fila["nombre"]?></td>
 					<td><?=$fila["area"]?></td>
 					<td><?=$fila["direccion1"]?></td>
 					<td><?=$fila["direccion2"]?></td>
 					<td><?=$fila["ciudad"]?></td>
 					<td><?=$fila["estado"]?></td>
 					<td><?=$fila["estatus"]?></td>
 									<td>
 						<a href="editar_localizacion.php?idlocalizacion=<?=$fila['idlocalizacion']?>"><button class="btn btn-outline-dark">Editar</button></a>
 						<a href="baja_localizacion.php?idlocalizacion=<?=$fila['idlocalizacion']?>"><button class="btn btn-outline-dark">Dar de baja</button></a>
 						<a href="eliminar_localizacion.php?idlocalizacion=<?=$fila['idlocalizacion']?>"><button class="btn btn-outline-danger">Eliminar</button></a>
 					</td>
 				</tr>
 				<?php 
 				}
 				 ?>
 			</tbody>
 		</table>
 	</div>
 </body>
 </html>