<?php
$host = "127.0.0.1:3000";
$user = "root";
$pass = "danielMyAdmin23";
$db = "d7";

$conexion = new mysqli($host, $user, $pass, $db);
if ($conexion->connect_errno) {
	echo "falló conexion MYSQL: (" . $conexion->connect_errno .")" . $conexion->connect_error;
} return $conexion;
?>