<?php

function generarSaludo(string $nombre): string
{
    $host = "localhost";
    $db = "saludos_db";
    $user = "sofia";
    $pass = "Contraseña_$123!";

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
        return "Error de conexión con la base de datos 😢";
    }

    $sql = "SELECT texto FROM saludos ORDER BY RAND() LIMIT 1";
    $result = $conn->query($sql);

    if ($result && $row = $result->fetch_assoc()) {
        $saludo = sprintf($row['texto'], htmlspecialchars($nombre));
    } else {
        $saludo = "¡Hola $nombre!";
    }

    $conn->close();
    return $saludo;
}
