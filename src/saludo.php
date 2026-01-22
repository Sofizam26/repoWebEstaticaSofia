<?php

function generarSaludo(string $nombre): string
{
    $saludos = [
        "¡Hola $nombre! Gracias por visitar mi página 💜",
        "¡Bienvenida $nombre! Qué alegría verte por aquí 😊",
        "¡Hey $nombre! Espero que tengas un día genial ✨",
        "¡Hola $nombre! Me encanta que estés aquí 🐶💜",
        "¡Saludos $nombre! Disfruta la página 🌸"
    ];

    return $saludos[array_rand($saludos)];
}
