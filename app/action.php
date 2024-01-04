<?php

include_once('conexion.php');

if ($_POST['genero']) {
    if ($_POST['genero'] == 'm') {
        echo '<option value="">seleccionar estado civil</option>';
        echo '<option value="soltero">soltero</option>';
        echo '<option value="casado">casado</option>';
        echo '<option value="divorciado">divorciado</option>';
        echo '<option value="viudo">viudo</option>';
    } else {
        echo '<option value="">seleccionar estado civil</option>';
        echo '<option value="soltera">soltera</option>';
        echo '<option value="casada">casada</option>';
        echo '<option value="divorciada">divorciada</option>';
        echo '<option value="viuda">viuda</option>';
    }
}elseif ($_POST['pais_codigo'] === "507") {
    $query = "SELECT * FROM `provincia` ORDER BY `nombre_provincia` ASC";
    $result = $conexion->query($query);
    if ($result->num_rows > 0) {
        echo '<option value=""> selecciona provincia </option>';
        while ($row = $result->fetch_assoc()) {
            echo '<option value=' . $row['codigo_provincia'] . ' >' . $row['nombre_provincia'] . '</option>';
        }
    } else {
        echo '<option> no provincias </option>';
    }
} elseif ($_POST['provincia_codigo']) {

    $query = "SELECT * FROM `distrito` WHERE codigo_provincia =" . $_POST['provincia_codigo'];
    $result = $conexion->query($query);
    if ($result->num_rows > 0) {
        echo '<option value=""> selecciona distrito </option>';

        while ($row = $result->fetch_assoc()) {
            echo '<option value=' . $row['codigo_distrito'] . ' >' . $row['nombre_distrito'] . '</option>';
        }

    } else {
        echo '<option> no distritos </option>';
    }
} elseif ($_POST['distrito_codigo']) {
    $query = "SELECT * FROM `corregimiento` WHERE codigo_distrito =" . $_POST['distrito_codigo'];
    $result = $conexion->query($query);
    if ($result->num_rows > 0) {
        echo '<option value=""> selecciona corregimiento </option>';

        while ($row = $result->fetch_assoc()) {
            echo '<option value=' . $row['codigo_corregimiento'] . '>' . $row['nombre_corregimiento'] . '</option>';
        }
    } else {
        echo '<option> no corregimientos </option>';
    }
}

?>