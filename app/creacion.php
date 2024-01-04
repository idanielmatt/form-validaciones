<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../jquery-3.7.1.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/creacion.css">
    <title>Creación</title>
</head>

<body>
    <?php
    include_once 'conexion.php';
    $query = "SELECT * FROM `paises` ORDER BY pais ASC";
    $result = $conexion->query($query);
    print_r($result);

    ?>
    <br>

    <nav class="border-body text-center pb-2">
        <a class="px-3 text-decoration-none fs-5 " href="index.php">Cheques</a>
        <a class="px-3 text-decoration-none fs-5" href="#" id="registrar" onclick="registrar()">Registrar</a>
        <a class="px-3 text-decoration-none fs-5" href="#" id="actualizar" onclick="actualizar()">Actualizar</a>
    </nav>

    <div class="container">
        <form action="creacion.php" method="post" class="form-control bg-light">
            <!-- buscar cedula -->

            <div class="grid gap-3">
                <div class="p-2 g-col-6">
                    <h3 class="text-dark-emphasis px-3 fw-bolder py-2">Datos personales 🦥</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="prefijo">Prefijo</label>
                    <select id="prefijo" class="form-select crear idupdate" disabled required name="prefijo"
                        value="<?php echo ($_POST) ? $prefijo : null; ?>">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="tomo">Tomo</label>
                    <input type="number" name="tomo" id="tomo" disabled class="form-control crear idupdate"
                        minlength="1" maxlength="4" pattern="[0-9]+" placeholder="escriba cuatro dígitos" required
                        step="1" onkeypress="return valideKey(event);" value="<?php echo ($_POST) ? $tomo : null; ?>">
                </div>
                <div class="col-md-3">
                    <label for="asiento">Asiento</label>
                    <input type="number" name="asiento" id="asiento" disabled class="form-control crear idupdate"
                        minlength="1" maxlength="5" pattern="[0-9]+" placeholder="escriba cinco dígitos" required
                        onkeypress="return valideKey(event);" value="<?php echo ($_POST) ? $asiento : null; ?>">
                </div>
                <div class="col-md-3">
                    <label for="cedula">Cedula</label>
                    <input type="text" name="cedula" id="cedula" disabled class="form-control actualizar idupdate"
                        value="<?php echo ($_POST) ? $cedula : null; ?>"
                        oninput="this.value = this.value.replace(/[^0-9-]/,'')" placeholder=""
                        onkeydown="setForm(event)">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <label for="primer-nombre">Primer nombre</label>
                    <input type="text" name="primer_nombre" id="primer-nombre" disabled class="form-control crear"
                        maxlength="15" value="<?php echo ($_POST) ? $primer_nombre : null; ?>"
                        oninput="this.value = this.value.replace(/[^a-zA-Záéíóú ]/,'')" required>
                </div>
                <div class="col-md-6">
                    <label for="segundo-nombre">Segundo nombre</label>
                    <input type="text" name="segundo_nombre" id="segundo-nombre" disabled class="form-control crear"
                        maxlength="15" value="<?php echo ($_POST) ? $segundo_nombre : null; ?>"
                        oninput="this.value = this.value.replace(/[^a-zA-Záéíóú ]/,'')" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="primer-apellido">Primer apellido</label>
                    <input type="text" name="primer_apellido" id="primer-apellido" disabled class="form-control crear"
                        maxlength="15" value="<?php echo ($_POST) ? $primer_apellido : null; ?>"
                        oninput="this.value = this.value.replace(/[^a-zA-Záéíóú ]/,'')" required>
                </div>
                <div class="col-md-6">
                    <label for="segundo-apellido">Segundo apellido</label>
                    <input type="text" name="segundo_apellido" id="segundo-apellido" disabled class="form-control crear"
                        maxlength="15" value="<?php echo ($_POST) ? $segundo_apellido : null; ?>"
                        oninput="this.value = this.value.replace(/[^a-zA-Záéíóú ]/,'')" required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label for="select-genero">Género</label>
                    <select class="form-select crear" disabled aria-label="Default select example" id="select-genero"
                        name="genero" value="<?php echo ($_POST) ? $genero : null; ?>" required
                        onchange="getGender(this.value)">
                        <option selected value="">selecciona un género</option>
                        <option value="m">Masculino</option>
                        <option value="f">Femenino</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="estado-civil">Estado civil</label>
                    <select class="form-select " name="estado_civil" id="estado-civil"
                        value="<?php echo ($_POST) ? $estado_civil : null; ?>" disabled required>
                    </select>
                </div>
                <div class="col-md-3">
                    <div class="form-check form-switch">
                        <input class="form-check-input deschekear" type="checkbox" role="switch"
                            id="flexSwitchCheckDefault" name="checkbox1" disabled name="switch"
                            value="0" onchange="verificar()">
                        <label class="form-check-label fw-semibold" for="flexSwitchCheckDefault"
                            id="label-casada">Apellido de casada</label>
                    </div>
                    <input type="text" name="apellido_casada" id="apellidoCasada" class="form-control" maxlength="15"
                        value="<?php echo ($_POST) ? $apellido_casada : null; ?>"
                        oninput="this.value = this.value.replace(/[^a-zA-Záéíóú ]/,'')" disabled>
                </div>





                <div class="form-check col-md-3 px-5 py-4">

                    <input type="checkbox" name="activo" value="0" class="form-check-input crear"
                        id="check-activo" onchange="verificarEstado()" disabled >

                    <label class="form-check-label" for="check-activo">
                        activo
                    </label>

                </div>
                







            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="fecha-nacimiento">Fecha de nacimiento</label>
                    <input type="date" name="nacimiento" value="<?php echo ($_POST) ? $nacimiento : null; ?>"
                        id="fecha-nacimiento" disabled class="form-control crear" required onchange="getDate()">
                </div>
                <div class="col-md-3">
                    <label for="peso">Peso en Lb</label>
                    <input type="number" name="peso" id="peso" disabled class="form-control crear" pattern="[0-9]+"
                        minlength="1" value="<?php echo ($_POST) ? $peso : null; ?>" maxlength="3" required
                        onkeypress="return filterFloat(event,this);">
                </div>
                <div class="col-md-3">
                    <label for="estatura">Estatura en metros</label>
                    <input type="text" name="estatura" id="estatura" disabled class="form-control crear" step="0.01"
                        maxlength="5" min="1" required value="<?php echo ($_POST) ? $estatura : null; ?>" required
                        onkeypress="return filterFloat(event,this);">
                </div>
                <div class="col-md-3">
                    <label for="tipo-sangre">Tipo de sangre</label>
                    <select class="form-select crear" disabled id="tipo-sangre" required name="sangre"
                        value="<?php echo ($_POST) ? $sangre : null; ?>">
                        <option selected>selecciona</option>
                        <option value="0-">O-</option>
                        <option value="0+">O+</option>
                        <option value="A-">A-</option>
                        <option value="A+">A+</option>
                        <option value="B-">B-</option>
                        <option value="B+">B+</option>
                        <option value="AB-">AB-</option>
                        <option value="AB+">AB+</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <br>
                    <label for="condicion-medica">Condición medica</label>
                    <input type="text" name="condicion" disabled id="condicion-medica" class="form-control crear"
                        maxlength="100" value="<?php echo ($_POST) ? $condicion : null; ?>"
                        oninput="this.value = this.value.replace(/[^a-zA-Záéíóú, ]/,'')" required>
                </div>
            </div>
            <br>
            <h3 class="text-dark-emphasis px-3 fw-bolder py-2">Ubicación 🗺️</h3>
            <div class="row">
                <div class="col-md-3">
                    <label for="pais">País</label>
                    <select name="pais" disabled value="<?php echo ($_POST) ? $pais : null; ?>" id="pais"
                        class="form-select crear ubi" onchange="enviarProvincia(this.value)" required>
                        <option value="" selected>seleccione un país</option>
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<option value=' . $row['codigo'] . ' >' . $row['pais'] . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="provincia">Provincia</label>
                    <select name="provincia" id="provincia" class="form-select ubi" disabled
                        value="<?php echo ($_POST) ? $provincia : null; ?>" onchange="enviarDistrito(this.value)">
                        <option selected value="">seleccione</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="distrito">Distrito</label>
                    <select name="distrito" id="distrito" class="form-select ubi" disabled
                        value="<?php echo ($_POST) ? $distrito : null; ?>" onchange="enviarCorregimiento(this.value)">
                        <option value="">distrito</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="corregimiento">Corregimiento</label>
                    <select name="corregimiento" value="<?php echo ($_POST) ? $corregimiento : null; ?>"
                        id="corregimiento" class="form-select ubi" disabled>
                        <option value="">seleccione</option>
                    </select>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="comunidad">Comunidad</label>
                    <input type="text" name="comunidad" value="<?php echo ($_POST) ? $comunidad : null; ?>"
                        id="comunidad" class="form-control ubi" disabled>
                </div>
                <div class="col-md-4">
                    <label for="calle">Calle</label>
                    <input type="text" name="calle" value="<?php echo ($_POST) ? $calle : null; ?>" id="calle"
                        class="form-control ubi" disabled>
                </div>
                <div class="col-md-4">
                    <label for="casa">Casa</label>
                    <input type="text" name="casa" value="<?php echo ($_POST) ? $casa : null; ?>" id="casa"
                        class="form-control ubi" disabled>
                </div>
            </div>
            <br>
            <input type="submit" value="envie" hidden>
        </form>
        <br>
        <div id="enviado"></div>
    </div>
    <script src="../Js/creacion.js"></script>
</body>

</html>
<script src="../Js/botones.js"></script>
<script type="text/javascript">

    function getDate() {
        console.log(inputFecha.value)
    }

    function enviarProvincia(id) {
        $('#provincia').html('');
        $('#distrito').html('');
        $.ajax({
            type: 'post',
            url: 'action.php',
            data: { pais_codigo: id },
            success: function (resp) {
                $('#provincia').html(resp);
            }
        })
    }

    function enviarDistrito(id) {
        $('#distrito').html('');
        $.ajax({
            type: 'post',
            url: 'action.php',
            data: { provincia_codigo: id },
            success: function (resp) {
                $('#distrito').html(resp);
            }
        })
    }

    function enviarCorregimiento(id) {
        $('#corregimiento').html('');
        $.ajax({
            type: 'post',
            url: 'action.php',
            data: { distrito_codigo: id },
            success: function (resp) {
                $('#corregimiento').html(resp);
            }
        })
    }
    function getGender(id) {
        $.ajax({
            type: 'post',
            url: 'action.php',
            data: { genero: id },
            success: function (resp) {
                $('#estado-civil').html(resp);
            }
        })
    }


    let inputPrimerNombre = document.getElementById("primer-nombre");
    let inputSegundoNombre = document.getElementById("segundo-nombre");
    let inputPrimerApellido = document.getElementById("primer-apellido");
    let inputSegundoApellido = document.getElementById("segundo-apellido");
    let inputFecha = document.getElementById('fecha-nacimiento');
    let inputSangre = document.getElementById('tipo-sangre');
    let inputCondicion = document.getElementById('condicion-medica');
    
    $('form').on('submit', (e) => {
        e.preventDefault();
        
        $.ajax({
            type: 'post',
            url: 'bdd.php',
            data: {
                'prefijo': inputPrefijo.value,
                'tomo': inputTomo.value,
                'asiento': inputAsiento.value,
                'cedula': inputCedula.value,
                'primer-nombre': inputPrimerNombre.value,
                'segundo-nombre': inputSegundoNombre.value,
                'primer-apellido': inputPrimerApellido.value,
                'segundo-apellido': inputSegundoApellido.value,
                'genero': inputGenero.value,
                'check': checkCasada.value,
                'estadoCivil': inputEstadoCivil.value,
                'apellido-casada': apellidoCasada.value,
                'activo': checkActivo.value,
                'fecha-nacimiento': inputFecha.value,
                'peso': inputPeso.value,
                'estatura': inputEstatura.value,
                'sangre': inputSangre.value,
                'condicion': inputCondicion.value,
                'pais': inputPais.value,
                'provincia': inputProvincia.value,
                'distrito': inputDistrito.value,
                'corregimiento': inputCorregimiento.value,
                'comunidad': inputComunidad.value,
                'calle': inputCalle.value,
                'casa': inputCasa.value

            },
            success: function (resp) {
                alert(resp);
            }
        })
    })
</script>