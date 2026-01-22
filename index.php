<?php
require_once __DIR__ . '/src/saludo.php';

$mensaje = "¡Bienvenid@ a mi página web!";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nombre = trim($_POST["nombre"] ?? "");

  if ($nombre !== "") {
    $mensaje = generarSaludo($nombre);
  } else {
    $mensaje = "Por favor, escribe tu nombre 🙂";
  }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Página de Sofía</title>
  <link rel="stylesheet" href="./CSS/style.css" />
</head>

<body>
  <div class="container">
    <h1>Sofía Z</h1>

    <!-- Mensaje generado en el servidor -->
    <p id="mensaje"><?php echo htmlspecialchars($mensaje); ?></p>

    <!-- Formulario -->
    <form method="POST" action="">
      <input type="text" name="nombre" placeholder="Escribe tu nombre" required />
      <button type="submit">Enviar</button>
    </form>

    <!-- Imagen -->
    <img src="./imagenes/perro.jpg" alt="Imagen decorativa" class="imagen">
  </div>
</body>

</html>