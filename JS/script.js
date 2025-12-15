document.addEventListener("DOMContentLoaded", () => {
  const boton = document.getElementById("cambiarMensaje");
  const mensaje = document.getElementById("mensaje");

  const mensajes = [
    "¡Gracias por visitar mi sitio, espero que te guste! 💜",
    "¡Que tengas un día maravilloso, lleno de energía positiva! ✨",
    "¡Explora, sonríe y disfruta tu visita! 🌸",
    "¡Bienvenida de nuevo, Sofía te saluda con alegría! 💫"
  ];

  boton.addEventListener("click", () => {
    const nuevoMensaje = mensajes[Math.floor(Math.random() * mensajes.length)];
    mensaje.textContent = nuevoMensaje;
  });
});
