<?php 
include_once('conexion.php');

$cedula = $_GET['cedula'];

// Consulta SQL para obtener datos usando la cedula
$query = "SELECT * FROM generales WHERE cedula = '$cedula'";

$resultado = $conexion->query($query);

if ($resultado->num_rows > 0) {
    
    $fila = $resultado->fetch_assoc();

    echo json_encode($fila);
} else {
    echo "No se encontraron resultados para cedula proporcionada";
}

?>