let cheque = document.getElementById("cheque");
cheque.addEventListener("keypress", (event) => {
  event.preventDefault();
  let codigokey = event.keyCode;
  let valorkey = String.fromCharCode(codigokey);
  let valor = parseInt(valorkey);
  if (valor) {
    cheque.value += valor;
  }
});

cheque.addEventListener('input', function(){
  if(this.value.length > 6){
    this.value = this.value.slice(0,6);
  }
  console.log("valor ", this.value);
})

let monto2 = document.getElementById("monto");
monto2.addEventListener("input", () => {
  console.log(monto2.value != "");
  if (monto2.value != "") {
    $.ajax({
      type: "POST",
      url: "converMoneda.php",
      data: {
        monto: monto2.value,
      },
      success: function (resp) {
        document.getElementById("dinero").value = resp;
        console.log(resp);
      },
    });
  }
});

