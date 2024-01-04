<?php
include ('conexion.php');
$user_crea=$_SESSION['username']; 
$fecha_crea = date("Y-m-d");
$hora_crea  = date("H:i:s");
$detalle_crea = conectado($user_crea);
$cheque  = $_POST['cheque'];
$fondo = $_POST['fondo'];
$fecha = $_POST['fecha'];
$beneficiario = $_POST['beneficiario'];
$monto  = $_POST['monto'];
$descripcion = $_POST['descripcion'];
$grabar = mysqli_query ($est,"INSERT INTO cheques  VALUES ('$cheque','$fondo','$fecha','$beneficiario','$monto','$descripcion',' ',' ',' ','$user_crea','$fecha_crea','$hora_crea','$detalle_crea',' ',' ',' ',' ') ");
echo 1;
?>