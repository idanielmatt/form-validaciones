<?php 
$host ="localhost";
$user ="d72023"; 
$pass ="ds7";
$db   ="d7";
$est = mysqli_connect($host, $user,$pass, $db);
if ($est->connect_errno) {
die( utf8_decode("Fallo la conexion a MySQL: ".$est->connect_errno." ".mysqli_connect_error()));
}
$est->set_charset('utf8');
?>