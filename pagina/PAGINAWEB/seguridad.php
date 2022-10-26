<?php 
session_start();

if (!isset($_SESSION["nombre_usuario"])) {
	header("location: login.php");
}
 ?>