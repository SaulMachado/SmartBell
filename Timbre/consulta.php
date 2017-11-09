<?php
include("conexion.php");
$nombre = $_POST["usuario"]; 
$password = $_POST["clave"]; 

$consulta =("SELECT * FROM datos WHERE usuario = '.$nombre.' AND password = '.$password.'"); 

if(!$consulta){ 
    echo "usuario no existe"; 
} 
else{ 
    print "Bienvenido"; 
} 


?>