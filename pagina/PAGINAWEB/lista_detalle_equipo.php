<?php  
require_once("Clases/clase_equipo.php");
$equipo=new Equipo();

$registros=$equipo->mostrar_detalles();
 ?>
 <!DOCTYPE html> 
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
 	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
 	<meta charset="utf-8">

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


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

 	<script type="text/javascript">$(document).ready(function() {
    $('#example').DataTable();} );</script>
 	<div class="container">
 		

 		<table id="example" class="table table-striped table-bordered" style="width:100%">
 			<thead>
 				<th>Tipo De Equipo</th>
 				<th>Nombre</th>
 				<th>Estado</th>
 				<th>Marca</th>
 				<th>Modelo</th>
 				<th>Total</th>
 				<th>Localizacion</th>
 				<th>Codigo De Identificacion</th>
 				<th>Opciones</th>
 			</thead>
 			<tbody>
 				<?php 
 					while($fila=mysqli_fetch_array($registros)){
 				 ?>
 				<tr>
 					<td><?=$fila["tipo_equipo"]?></td>
 					<td><?=$fila["nombre_persona"]?></td>
 					<td><?=$fila["tipo_estado"]?></td>
 					<td><?=$fila["nombre_marca"]?></td>
 					<td><?=$fila["modelo"]?></td>
 					<td><?=$fila["total"]?></td>
 					<td><?=$fila["nombre"]?></td>
 					<td><?=$fila["codigo_id"]?></td>
 					<td>
 						<a href="editar_usuario.php?iddetalle_equipo=<?=$fila['iddetalle_equipo']?>"><button class="btn btn-outline-dark">Editar</button></a>
 						<a href="baja_equipo.php?iddetalle_equipo=<?=$fila['iddetalle_equipo']?>"><button class="btn btn-outline-dark">Dar de baja</button></a>
 						<a href="eliminar_equipo.php?iddetalle_equipo=<?=$fila['iddetalle_equipo']?>"><button class="btn btn-outline-danger">Eliminar</button></a>
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