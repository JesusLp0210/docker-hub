<?php
require_once("Clases/clase_usuario.php");

//instancia de la clase carrera
$usuario=new Usuario();
//mandar a llamar metodo mostrar de la clase carrera y depositarlos en una variable
$registros=$usuario->mostrar1();
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
   
    <link href="style.css" rel="stylesheet">

    <title>INICAR SESION</title>
  </head>
  <body>
    <style type="text/css">
        .selecionar{
            color: grey;
  background-color: var(--bs-dark);
  border-color: var(--bs-gray);

  background-color: var(--bs-dark);
 
  box-shadow: 0 0 0 .10rem rgba(255, 255, 255, .25);
  width: 770px;
  padding: 10px;
        }
    </style>
   <section class="contact-box">
       <div class="row no-gutters bg-dark">
           <div class="col-xl-5  register-bg">
            <div class="position-absolute testiomonial p-4">
                <h3 class="font-weight-bold text-light">Sistema De Inventario.</h3>
                <p class="lead text-light">Guarda Todo Tus Bienes De Manera Sencilla Y Rapida.</p>
            </div>
           </div>
           <div class="col-xl-7 col-lg-12 d-flex">
                <div class="container align-self-center p-6">
                    <h1 class="font-weight-bold mb-3">Registrar Nuevo Usuario</h1>
                    <p class="text-muted mb-5">Ingresa la siguiente información para crear un nuevo usuario.</p>

                    <form  action="insertar_usuario.php" method="POST">
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Nombre De Usuario<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Ingresa un nombre de usuario" name="nombre_usuario">
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Contraseña <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" placeholder="Ingresa una contraseña" name="contraseña" minlength="8" maxlength="20">
                        </div>
                          <div class="form-group mb-3">
                            <label class="font-weight-bold">Tipo De Usuario<span class="text-danger">*</span></label><br>
                             <select class="selecionar" name="fktipo_usuario">
            <option>Seleccione Una Opcion</option>
          <?php
              while ($fila=mysqli_fetch_array($registros)){
                ?>
                <option value="<?=$fila['idtipo_usuario']; ?>"><?=$fila['t_usuario']?></option>
                <?php
              }
                ?>
        </select> 
          </select>
                        </div>
                        <div class="form-group mb-5">
                           
                        </div>
                        <input class="btn btn-primary width-100" type="submit" value="Registrar">
                    </form>
                    <small class="d-inline-block text-muted mt-5">Todos los derechos reservados | © 2021 JECA</small>
                </div>
           </div>
       </div>
   </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
  </body>
</html>