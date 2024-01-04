<?php
include_once('conexion.php');

if ($_POST) {

    $prefijo = $_POST['prefijo'] ?? null;
    $tomo = $_POST['tomo'] ?? null;
    $asiento = $_POST['asiento'] ?? null;
    $cedula = $_POST['cedula'] ?? null;
    $primer_nombre = $_POST['primer-nombre'] ?? null;
    $segundo_nombre = $_POST['segundo-nombre'] ?? null;
    $primer_apellido = $_POST['primer-apellido'] ?? null;
    $segundo_apellido = $_POST['segundo-apellido'] ?? null;
    $genero = $_POST['genero'] ?? null;
    $estado_civil = $_POST['estadoCivil'] ?? null;
    $switch = $_POST['check'] ?? 0;
    $apellido_casada = $_POST['apellido-casada'] ?? null;

    $nacimiento = $_POST['fecha-nacimiento'] ?? null;
    $peso = $_POST['peso'] ?? null;
    $estatura = $_POST['estatura'] ?? null;
    $sangre = $_POST['sangre'] ?? null;
    $condicion = $_POST['condicion'] ?? null;
    $pais = $_POST['pais'] ?? null;
    $provincia = $_POST['provincia'] ?? null;
    $distrito = $_POST['distrito'] ?? null;
    $corregimiento = $_POST['corregimiento'] ?? null;
    $comunidad = $_POST['comunidad'] ?? null;
    $calle = $_POST['calle'] ?? null;
    $casa = $_POST['casa'] ?? null;
    $estado = $_POST['activo'] ? 1 : 0;

    $query = "SELECT * FROM `generales` WHERE cedula =  '$cedula' ";
    $resultado = $conexion->query($query);
    $mensaje = "Esta cedula ya exite.";

    if ($resultado->num_rows > 0) {

        $update = "UPDATE generales 
        SET prefijo = '$prefijo',
            tomo = '$tomo',
            asiento = '$asiento',
            cedula = '$cedula',
            nombre1 = '$primer_nombre',
            nombre2 = '$segundo_nombre',
            apellido1 = '$primer_apellido',
            apellido2 = '$segundo_apellido',
            estado_civil = '$estado_civil',
            apellido_casada = '$apellido_casada',
            usa_apellido_casada = '$switch',
            provincia = '$provincia',
            distrito = '$distrito',
            corregimiento = '$corregimiento',
            comunidad = '$comunidad',
            calle = '$calle',
            casa = '$casa',
            estado = '$estado',
            pais = '$pais',
            peso = '$peso',
            estatura = '$estatura',
            condicion_fisica = '$condicion',
            tipo_sangre = '$sangre',
            fecha_nacimiento = '$nacimiento',
            genero = '$genero'
        WHERE cedula = '$cedula'";


        $resultado = $conexion->query($update);
        echo "actualizaste esta planilla";
        $conexion->close();


    } else {


        $insert = "INSERT INTO generales VALUES ('$prefijo', '$tomo', '$asiento', '$cedula', '$primer_nombre', '$segundo_nombre', '$primer_apellido',
            '$segundo_apellido', '$estado_civil', '$apellido_casada', '$switch', '$provincia', '$distrito', '$corregimiento', '$comunidad', '$calle',
            '$casa', '$estado', '$pais', '$peso', '$estatura', '$condicion', '$sangre', '$nacimiento', '$genero')";

        $resultado = $conexion->query($insert);
        echo "Form enviado";
        $conexion->close();


    }
}



?>