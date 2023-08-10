<?php

$temperatura = $_GET['temp'];
$humedad = $_GET['hum'];

echo "La temperatura es: ".$temperatura." <br>La humedad es: ".$humedad;

$usuario = "root";
$contrasena = "";
$servidor = "localhost";
$basededatos = "esp32mysql";

$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");

$db = mysqli_select_db( $conexion, $basededatos ) or die ( "No se ha podido seleccionar la base de datos" );

//$num = time();
//$consulta = "INSERT INTO datos ( temperatura, humedad) VALUES ( ".$temperatura.", ".$humedad.")";

$consulta = "UPDATE esp32_table  SET temperature='$temperatura', humidity = '$humedad' WHERE num = 1  ";
$resultado = mysqli_query( $conexion, $consulta );

?>