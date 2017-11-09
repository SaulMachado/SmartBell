<?php
	//Conectar a la BD
	$con = new mysqli("localhost","root","","datos");

	if (mysqli_connect_errno()) {

		echo "Conexion Fallida: ", mysqli_connect_error();
		exit();
	}
	
?>

