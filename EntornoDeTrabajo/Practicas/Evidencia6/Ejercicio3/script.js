function verificarEdad() {
  let edad = parseInt(document.getElementById("edad").value);
  let mensaje;
  if (edad >= 18) {
    mensaje = "Usted tiene acceso a todos nuestros servicios.";
  } else {
    mensaje = "Usted tiene acceso a servicios limitados.";
  }
  document.getElementById("mensaje").innerText = mensaje;
}
