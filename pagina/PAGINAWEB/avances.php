<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo2.css">
</head>
<body>
	<div id="formulario">
<a href="index.php">PAGINA PRINCIPAL</a><br>
<a href="login.php">LOGIN</a><br>
<a href="formulario_usuario.html">REGISTRAR NUEVO USUARIO</a><br>
<a href="formulario_equipo.php">REGISTRAR NUEVO EQUIPO</a><br>
<a href="formulario_localizacion.php">REGISTRAR NUEVA LOCALIZACION</a><br>
<a href="formulario_computadora.php">REGISTRAR NUEVO EQUIPO DE COMPUTADORA</a><br>
<a href="formulario_marca.php">REGISTRAR NUEVA MARCA</a><br>
<a href="lista_detalle_equipo.php">MOSTRAR LOS DETALLES DE LOS EQUIPOS</a><br>
<a href="lista_equipo.php">MOSTRAR LOS EQUIPOS REGISTRADOS</a><br>
<a href="lista_usuario.php">MOSTRAR LOS USUARIOS REGISTRADOS</a><br>
<a href="lista_localizaciones.php">MOSTRAR LAS LOCALIZACIONES</a><br>
<a href="lista_registrar.php">DISEÑÒ PARA REGISTRAR</a>
<a href=""></a>
</div>
<?php  
require_once("Clases/clase_equipo.php");
$equipo=new Equipo();

$registros=$equipo->mostrar();
 ?>
  <div class="row">
      <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-md-8 offset-md-2 col-lg-6 offset-lg-3 alert alert-secondary">
    <table border="5" class="table-primary" >
      <thead>
        <th class="table-info">Tipo</th>
        <th>Modelo</th>
        <th>Marca</th>
        <th>Estado</th>
        <th>Localizacion</th>
        <th>Codigo De identificacion</th>
        <th>Total</th>
        <th>estatus</th>
        <th>Opciones</th>
      </thead>
      <tbody>
        <?php 
          while($fila=mysqli_fetch_array($registros)){
         ?>
        <tr class="table-info">
          <td class="table-info"><?=$fila["tipo"]?></td>
          <td><?=$fila["modelo"]?></td>
          <td><?=$fila["marca"]?></td>
          <td><?=$fila["estado"]?></td>
          <td><?=$fila["localizacion"]?></td>
          <td><?=$fila["codigo_id"]?></td>
          <td><?=$fila["total"]?></td>
          <td><?=$fila["estatus"]?></td>
                  <td>
            <a href="editar_equipo.php?idcomputo=<?=$fila['idcomputo']?>"><button class="btn btn-outline-dark">Editar</button></a>
            <a href="baja_equipo.php?idcomputo=<?=$fila['idcomputo']?>"><button class="btn btn-outline-dark">Dar de baja</button></a>
            <a href="eliminar_equipo.php?idcomputo=<?=$fila['idcomputo']?>"><button class="btn btn-outline-danger">Eliminar</button></a>
          </td>
        </tr>
        <?php 
        }
         ?>
      </tbody>
    </table>
  </div>
          </div>
  </div>
</body>
</html>