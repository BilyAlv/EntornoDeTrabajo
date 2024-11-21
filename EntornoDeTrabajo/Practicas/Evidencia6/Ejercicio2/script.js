function bienvenida() {
  let nombre = document.getElementById("nombre").value;
  document.getElementById("mensaje").innerText =
    "Bienvenido " + nombre + ", al sistema de consulta.";
}
