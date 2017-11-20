<?php
include "conexion.php";
$nombre = $_POST['usuario']; 
$password = $_POST['clave']; 


$consulta= "SELECT * FROM login WHERE usuario='$nombre' AND pass='$password' ";
$resultado= $con->query($consulta);

	if ($resultado->num_rows>0) {
		
		header('Location:/Timbre/inicio.html');
	}else{
		echo '<script>alert("Datos incorrectos, Intentalo Nuevamente")</script>';
		include "index.html";
	}
?>