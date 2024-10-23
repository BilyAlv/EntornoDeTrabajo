function generarTabla() {
  let numero = parseInt(document.getElementById("numeroSelect").value);
  let tabla = "";
  for (let i = 1; i <= 12; i++) {
    tabla += i + " x " + numero + " = " + i * numero + "<br>";
  }
  document.getElementById("tablaResultado").innerHTML = tabla;
}
