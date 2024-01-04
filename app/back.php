<?php
include_once('conexion.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $cheque = $_POST['cheque'] ?? null;
    $fecha = $_POST['fecha'] ?? null;
    $beneficiario = $_POST['beneficiario'] ?? null;
    $monto = $_POST['monto'] ?? null;
    $descripcion = $_POST['descripcion'] ?? null;
    
    if (is_numeric($cheque) && $cheque >= 0 && $cheque <= 999999) {
        if ($cheque !== null && $fecha !== null && $beneficiario !== null && $monto !== null && $descripcion !== null) {
            echo "<h3>Recibido: $monto</h3>";
            
            $query = "SELECT * FROM cheque WHERE num_cheque = '$cheque'";
            $result = $conexion->query($query);
            if ($result->num_rows > 0) {
                echo "el cheque $cheque ya existe en la base de datos";
            }else{
                $insert = "INSERT INTO cheque VALUES ('$cheque', '$fecha', '$beneficiario', '$monto', '$descripcion')";
                $result = $conexion->query($insert);
                $conexion->close();
            }

        }
    } else {
        echo "<script> alert('El número de cheque debe ser máximo de 6 dígitos')</script>";
    }
}
?>