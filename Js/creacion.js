const checkCasada = document.getElementById("flexSwitchCheckDefault");
const labelCasada = document.getElementById("label-casada");
let apellidoCasada = document.getElementById("apellidoCasada");
const checkActivo = document.getElementById("check-activo");

checkCasada.addEventListener("change", (event) => {
  //obtener el estado del check
  const seleccionado = event.target.checked;

  if (seleccionado) {
    console.log("switch: ", seleccionado.value != "");
    labelCasada.style.color = "#d63384";
    labelCasada.textContent = "Apellido de casada 💅💋";
  } else {
    console.log("switch: ", seleccionado.value == "");
    labelCasada.style.color = "#212529";
    labelCasada.textContent = "Apellido de casada";
    apellidoCasada.value = "";
  }
  // Establece el atributo disabled del input
  apellidoCasada.disabled = !seleccionado;
  apellidoCasada.required = seleccionado;
});

function verificar() {
  if (checkCasada.checked) {
    checkCasada.value = 1;
  } else {
    checkCasada.value = 0;
  }
}

function verificarEstado() {
  if (checkActivo.checked) {
    checkActivo.value = 1;
  } else {
    checkActivo.value = 0;
  }
}

let inputGenero = document.getElementById("select-genero");
inputGenero.addEventListener("change", () => {
  const selectValue = inputGenero.value;
  console.log("genero? ", selectValue);
  switch (selectValue) {
    case "m":
      inputEstadoCivil.disabled = false;
      checkCasada.disabled = true;
      apellidoCasada.disabled = true;
      labelCasada.textContent = "Apellido de casada";
      checkCasada.checked = false;
      checkCasada.value = 0;
      labelCasada.style.color = "#212529";
      apellidoCasada.value = "";
      checkbox.style.backgroundColor = "#ffffff";
      checkbox.style.borderColor = "#d8dee4ff";
      break;
    case "f":
      inputEstadoCivil.disabled = false;
      checkCasada.value = 0;
      break;
    default:
      inputEstadoCivil.disabled = true;
      checkCasada.disabled = true;
      apellidoCasada.disabled = true;
      labelCasada.textContent = "Apellido de casada";
      checkCasada.checked = false;
      labelCasada.style.color = "#212529";
      apellidoCasada.value = "";
      checkbox.style.backgroundColor = "#ffffff";
      checkbox.style.borderColor = "#d8dee4ff";
      inputEstadoCivil.disabled = true;
      break;
  }
});

let inputEstadoCivil = document.getElementById("estado-civil");
inputEstadoCivil.addEventListener("change", () => {
  const selectValue = inputEstadoCivil.value;
  if (selectValue === "casada") {
    checkCasada.disabled = false;
  } else {
    checkCasada.disabled = true;
    apellidoCasada.disabled = true;
    labelCasada.textContent = "Apellido de casada";
    checkCasada.checked = false;
    labelCasada.style.color = "#212529";
    apellidoCasada.value = "";
    checkbox.style.backgroundColor = "#ffffff";
    checkbox.style.borderColor = "#d8dee4ff";
  }
});

// Campos prefijo, tomo, asiento y cedula
function valideKey(evt) {
  var code = evt.which ? evt.keyCode : evt.keyCode;
  if (code == 8) {
    return true;
  } else if (code >= 48 && code <= 57) {
    return true;
  } else {
    return false;
  }
}

const inputPrefijo = document.getElementById("prefijo");
const inputTomo = document.getElementById("tomo");
const inputAsiento = document.getElementById("asiento");
let inputCedula = document.getElementById("cedula");

inputTomo.addEventListener("input", function () {
  this.value = this.value.slice(0, 4);
  if (this.value < 0) {
    this.value = "";
  }
});

inputAsiento.addEventListener("input", function () {
  this.value = this.value.slice(0, 5);
  if (this.value < 0) {
    this.value = "";
  }
});

let inputsCedula = document.querySelectorAll("#prefijo, #tomo, #asiento");
for (const input of inputsCedula) {
  input.addEventListener("blur", function () {
    let cedula =
      inputPrefijo.value + "-" + inputTomo.value + "-" + inputAsiento.value;
    if (cedula == cedula.slice(0, 6)) {
      inputCedula.value = "";
    } else {
      inputCedula.value = cedula;
    }
  });
}

const checkbox = document.querySelector("input[type='checkbox']");

checkbox.addEventListener("change", function () {
  if (checkbox.checked) {
    checkbox.style.backgroundColor = "#d63384";
    checkbox.style.borderColor = "#d63384";
  } else {
    checkbox.style.backgroundColor = "#ffffff";
    checkbox.style.borderColor = "#d8dee4ff";
  }
});

//peso en libras
const inputPeso = document.getElementById("peso");
inputPeso.addEventListener("input", function () {
  if (this.value < 0) {
    this.value = "";
  }
});

const inputEstatura = document.getElementById("estatura");
inputEstatura.addEventListener("input", function () {
  if (this.value < 0 || this.value > 2.99) {
    this.value = "";
  }
});

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

// inputs de las ubicaciones

const inputPais = document.getElementById("pais");
const inputProvincia = document.getElementById("provincia");
const inputDistrito = document.getElementById("distrito");
const inputCorregimiento = document.getElementById("corregimiento");
const inputComunidad = document.getElementById("comunidad");
const inputCalle = document.getElementById("calle");
const inputCasa = document.getElementById("casa");

inputPais.addEventListener("change", () => {
  const selectedPais = inputPais.value;
  const panama = "507";

  switch (selectedPais) {
    case panama:
      console.log(panama);
      inputProvincia.disabled = false;
      inputProvincia.required = true;
      break;
    case "belice":
      console.log("no es panama");
      inputProvincia.selectedIndex = 0;
      inputProvincia.disabled = true;
      inputProvincia.required = false;
      inputDistrito.selectedIndex = 0;
      inputDistrito.disabled = true;
      inputCorregimiento.selectedIndex = 0;
      inputCorregimiento.disabled = true;
      inputComunidad.disabled = true;
      inputCalle.disabled = true;
      inputCasa.disabled = true;
      break;
    default:
      inputProvincia.selectedIndex = 0;
      inputProvincia.disabled = true;
      inputProvincia.required = false;
      inputDistrito.selectedIndex = 0;
      inputDistrito.disabled = true;
      inputCorregimiento.selectedIndex = 0;
      inputCorregimiento.disabled = true;
      inputComunidad.disabled = true;
      inputCasa.disabled = true;
      inputCalle.disabled = true;
      break;
  }
});

inputProvincia.addEventListener("change", () => {
  const provincia = inputProvincia.value;
  if (provincia === "") {
    inputDistrito.selectedIndex = 0;
    inputDistrito.disabled = true;
    inputCorregimiento.selectedIndex = 0;
    inputCorregimiento.disabled = true;
    inputComunidad.disabled = true;
    inputCalle.disabled = true;
    inputCasa.disabled = true;
  } else {
    inputDistrito.disabled = false;
    inputDistrito.required = true;
  }
});

inputDistrito.addEventListener("change", () => {
  const distrito = inputDistrito.value;
  if (distrito === "") {
    inputCorregimiento.selectedIndex = 0;
    inputCorregimiento.disabled = true;
    inputComunidad.disabled = true;
    inputCalle.disabled = true;
    inputCasa.disabled = true;
  } else {
    inputCorregimiento.disabled = false;
    inputCorregimiento.required = true;
    inputComunidad.disabled = false;
    inputComunidad.required = true;
    inputCalle.disabled = false;
    inputCalle.required = true;
    inputCasa.disabled = false;
    inputCasa.required = true;
  }
});
