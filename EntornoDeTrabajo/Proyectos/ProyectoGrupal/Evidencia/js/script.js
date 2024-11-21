// Almacenar comentarios en localStorage
let comentarios = JSON.parse(localStorage.getItem("comentarios")) || [];

// Función para agregar un comentario
function agregarComentario(nombre, texto) {
  const fecha = new Date().toLocaleString();
  const comentario = {
    id: Date.now(), // Generar un ID único basado en la fecha actual
    nombre: nombre,
    texto: texto,
    fecha: fecha,
  };

  comentarios.unshift(comentario); // Agregar al inicio del array
  localStorage.setItem("comentarios", JSON.stringify(comentarios));
  mostrarComentarios();
}

// Función para mostrar comentarios
function mostrarComentarios() {
  const container = document.getElementById("comentariosContainer");
  container.innerHTML = ""; // Limpiar contenedor

  comentarios.forEach((comentario) => {
    const div = document.createElement("div");
    div.className = "comentario mb-3 p-3 bg-light position-relative";
    div.innerHTML = `
      <button onclick="eliminarComentario(${comentario.id})" 
              class="close-btn position-absolute top-0 end-0 m-2">×</button>
      <h4 class="h6 mb-2">${comentario.nombre}</h4>
      <p class="mb-1">${comentario.texto}</p>
      <small class="text-muted">Publicado el ${comentario.fecha}</small>
    `;
    container.appendChild(div);
  });
}

// Función para eliminar comentario
function eliminarComentario(id) {
  comentarios = comentarios.filter((comentario) => comentario.id !== id); // Filtrar el comentario por su ID
  localStorage.setItem("comentarios", JSON.stringify(comentarios)); // Actualizar en localStorage
  mostrarComentarios(); // Actualizar la visualización
}

// Manejar el envío del formulario
document.getElementById("commentForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const nombre = document.getElementById("nombre").value.trim();
  const comentario = document.getElementById("comentario").value.trim();

  if (nombre && comentario) {
    agregarComentario(nombre, comentario);
    this.reset(); // Limpiar formulario
  } else {
    alert("Por favor, complete todos los campos");
  }
});

// Mostrar comentarios al cargar la página
mostrarComentarios();
