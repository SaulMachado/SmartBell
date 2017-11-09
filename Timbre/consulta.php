<?php
include "conexion.php";
$nombre = $_POST['usuario']; 
$password = $_POST['clave']; 


$consulta= "SELECT * FROM usuarios WHERE usuario='$nombre' AND contrasena='$password' ";
$resultado= $con->query($consulta);

	if ($resultado->num_rows>0) {
		echo "Bienvenido";
		# code...
	}else{
		echo "Datos incorrectos";
	}
?>
