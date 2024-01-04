<?php
include ('conexion.php');
$bandera = 0;
$cedula         = $_POST['cedula'];
$informacion    = $_POST['informacion'];
$fecha = date("Y-m-d");
$hora  = date("H:i:s");
$actualiza_modi_docentes = mysqli_query ($est,"UPDATE tabla SET fecha_actualizacion='$fecha', hora_actualizacion='$hora', detalle_conexion_actualiza='$informacion' WHERE cedula='$cedula'");
$bandera = 1;
echo $bandera;
?>