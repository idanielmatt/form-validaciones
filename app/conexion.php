<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "d7";

$conexion = new mysqli($host, $user, $pass, $db);
if ($conexion->connect_error) {
	die("Error de conexion". $conexion->connect_error);
} else {
	echo "";
}
?>