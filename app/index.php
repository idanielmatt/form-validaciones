<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Planilla - Desarrollo VII</title>
    <link rel="stylesheet" href="../css/index.css">
    <script src="../jquery-3.7.1.min.js" type="text/javascript"></script>
</head>

<body>
    <nav class="border-body text-center pb-2">
        <a  href="index.php">Cheques</a>
        <a class="parinlef" href="creacion.php">Planilla</a>
    </nav>
    <main id="padre-form">
        <div class="content-wrapper">
            <div class="contact-form">
                <h1>Formulario de planilla</h1>
                <form action="index.php" method="post" id="miForm">
                    <p>
                        <label>Número de cheque</label>
                        <input type="number" name="num_cheque" id="cheque" min="0" max="999999" required>
                    </p>
                    <p>
                        <label>Fecha (MES/DIA/AÑO)</label>
                        <input type="date" name="fecha" id="fecha" value="<?php echo ($_POST) ? $fecha : null; ?>"
                            required>
                    </p>
                    <p class="block">
                        <label>Beneficiario</label>
                        <input oninput="this.value = this.value.replace(/[^a-zA-Z0-9 ]/,'')" id="beneficiario"
                            type="text" name="nombre" value="<?php echo ($_POST) ? $nombre : null; ?>" required>
                    </p>
                    <p>
                        <label>Monto a pagar</label>
                        <input id="monto" type="text" step="0.01" name="monto_pagar"
                            value="<?php echo ($_POST) ? $number : null; ?>" maxlength="9" min="1" required
                            onkeypress="return filterFloat(event,this);">
                    </p>
                    <p>
                        <label>dinero expresado en:</label>
                        <input type="text" name="letra_cheque" disabled id="dinero">
                    </p>
                    <p class="block">
                        <label>Descripción de gasto</label>
                        <input type="text" name="descripcion" id="textarea" maxlength="75" onblur="envio()"
                            oninput="this.value = this.value.replace(/[^a-zA-Z0-9 ]/,'')" required>
                    </p>
                    <input hidden type="submit" onclick="envio()" id="enviar" value="enviar">
                </form>
                <div id="respuesta"></div>
            </div>
        </div>
    </main>
    <script src="../Js/index.js"></script>
</body>

</html>

<script type="text/javascript">
    function filterFloat(evt, input) {
        // Backspace = 8, Enter = 13, ‘0′ = 48, ‘9′ = 57, ‘.’ = 46, ‘-’ = 43
        var key = window.Event ? evt.which : evt.keyCode;
        var chark = String.fromCharCode(key);
        var tempValue = input.value + chark;
        if (key >= 48 && key <= 57) {
            if (filter(tempValue) === false) {
                return false;
            } else {
                return true;
            }
        } else {
            if (key == 8 || key == 13 || key == 0) {
                return true;
            } else if (key == 46) {
                if (filter(tempValue) === false) {
                    return false;
                } else {
                    return true;
                }
            } else {
                return false;
            }
        }
    }
    function filter(__val__) {
        var preg = /^([0-9]+\.?[0-9]{0,2})$/;
        if (preg.test(__val__) === true) {
            return true;
        } else {
            return false;
        }
    }

</script>

<script type="text/javascript">

    $('form').on('submit', (e) => {
        e.preventDefault();
    })

    function envio() {
        let cheque = document.getElementById('cheque').value;
        let fecha = document.getElementById('fecha').value;
        let beneficiario = document.getElementById('beneficiario').value;
        let monto = document.getElementById('monto').value;
        let descripcion = document.getElementById('textarea').value;
        let enviar = document.getElementById('enviar')

        if (cheque.trim() != "" && fecha.trim() != "" && beneficiario.trim() != "" && monto.trim() != "" && descripcion.trim() != "") {
            $.ajax({
                type: "POST",
                url: "back.php",
                data: {
                    "cheque": cheque,
                    "fecha": fecha,
                    "beneficiario": beneficiario,
                    "monto": monto,
                    "descripcion": descripcion,
                },
                success: function (resp) {	// res, recibe el dato devuelto por el archivo PHP
                    document.getElementById('respuesta').innerHTML = resp;	// Se le asigna el valor devuelto a un input
                }
            });
        }
    }
</script>