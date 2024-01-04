function habilitar() {
  const active = document.querySelectorAll(".crear");
  active.forEach((input) => {
    input.disabled = false;
  });

  const idUpdate = document.querySelectorAll(".idupdate");
  idUpdate.forEach((input)=>{
    input.disabled = true;
  })
}

function registrar() {
  const active = document.querySelectorAll(".crear");
  active.forEach((input) => {
    input.disabled = false;
    input.value = "";
  });

  const unActive = document.querySelectorAll(".actualizar");
  unActive.forEach((input) => {
    input.disabled = true;
    input.selectedIndex = 0;
    input.value = "";
  });

  checkActivo.value = 0;
  checkCasada.value = 0;
  
  let inputGenero = document.getElementById("select-genero");
  inputGenero.selectedIndex = 0;

  let inputCivil = document.getElementById("estado-civil");
  inputCivil.selectedIndex = 0;
  inputCivil.disabled = true;
  checkCasada.disabled = true;
  apellidoCasada.disabled = true;
  labelCasada.textContent = "Apellido de casada";
  checkCasada.checked = false;
  labelCasada.style.color = "#212529";
  apellidoCasada.value = "";
  checkbox.style.backgroundColor = "#ffffff";
  checkbox.style.borderColor = "#d8dee4ff";

  let inputUbicaciones = document.querySelectorAll(
    "#provincia, #distrito, #corregimiento, #comunidad, #calle, #casa"
  );
  inputUbicaciones.forEach((input) => {
    input.disabled = true;
    input.selectedIndex = 0;
    input.value = "";
  });
}

// A C T U A L I Z A R

function actualizar() {
  const active = document.querySelectorAll(".actualizar");
  active.forEach((input) => {
    input.disabled = false;
  });

  const unActive = document.querySelectorAll(".crear");
  unActive.forEach((input) => {
    input.disabled = true;
    input.selectedIndex = 0;
    input.value = "";
  });

  checkActivo.value = 0;
  checkCasada.value = 0;

  let inputGenero = document.getElementById("select-genero");
  inputGenero.selectedIndex = 0;
  inputGenero.disabled = true;

  let inputCivil = document.getElementById("estado-civil");
  inputCivil.selectedIndex = 0;
  inputCivil.disabled = true;
  checkCasada.disabled = true;
  apellidoCasada.disabled = true;
  labelCasada.textContent = "Apellido de casada";
  checkCasada.checked = false;
  labelCasada.style.color = "#212529";
  apellidoCasada.value = "";
  checkbox.style.backgroundColor = "#ffffff";
  checkbox.style.borderColor = "#d8dee4ff";

  //PAISES
  const ubicaciones = document.querySelectorAll(".ubi");
  ubicaciones.forEach((input) => {
    input.disabled = true;
    input.selectedIndex = 0;
    input.value = "";
    input.required = false;
  });
}

function setForm(event) {
  if (event.key === "Enter") {
    event.preventDefault();
    habilitar();
    alert("Cedula enviada");

    var userId = $("#cedula").val();
    $.ajax({
      url: "actualizar.php",
      method: "GET",
      data: { cedula: userId }, 
      dataType: "json",
      success: function (data) {
        $("#prefijo").val(data.prefijo);
        $("#tomo").val(data.tomo);
        $("#asiento").val(data.asiento);
        $("#cedula").val(data.cedula);
        $("#primer-nombre").val(data.nombre1);
        $("#segundo-nombre").val(data.nombre2);
        $("#primer-apellido").val(data.apellido1);
        $("#segundo-apellido").val(data.apellido2);
        $("#select-genero").val(data.genero);
        $("#estado-civil").val(data.estado_civil);
        $("#flexSwitchCheckDefault").val(data.usa_apellido_casada);
        $("#apellidoCasada").val(data.apellido_casada);
        $("#check-activo").val(data.estado);
        $("#fecha-nacimiento").val(data.fecha_nacimiento);
        $("#peso").val(data.peso);
        $("#estatura").val(data.estatura);
        $("#tipo-sangre").val(data.tipo_sangre);
        $("#condicion-medica").val(data.condicion_fisica);
        $("#pais").val(data.pais);
        $("#provincia").val(data.provincia);
        $("#distrito").val(data.distrito);
        $("#corregimiento").val(data.corregimiento);
        $("#comunidad").val(data.comunidad);
        $("#calle").val(data.calle);
        $("#casa").val(data.casa);
      },
      error: function (error) {
        console.error("Error al obtener datos:", error);
        alert("cedula no encontrada");
      },
    });
  }
}

