document.addEventListener("DOMContentLoaded", () => {
  const formulario = document.getElementById("formulario");
  const inputTexto = document.getElementById("textoUsuario");
  const mensaje = document.getElementById("mensaje");

  formulario.addEventListener("submit", (e) => {
    e.preventDefault(); // Evita que la página se recargue

    const valorTexto = inputTexto.value.trim();

    if (valorTexto !== "") {
      mensaje.textContent = `¡Hola ${valorTexto}! Gracias por visitar mi página 💜`;
      inputTexto.value = "";
    } else {
      mensaje.textContent = "Por favor, escribe algo 🙂";
    }
  });
});
