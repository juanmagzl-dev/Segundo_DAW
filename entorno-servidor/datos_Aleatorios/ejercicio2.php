<?php
// Función para generar un emoticono aleatorio
function generarEmoticonoAleatorio() {
    // Rango de emoticonos Unicode
    $min = 128512; // Primer emoticono
    $max = 128586; // Último emoticono

    // Generar un número aleatorio dentro del rango
    $codigoEmoticono = rand($min, $max);

    // Devolver el emoticono en formato HTML
    return "&#$codigoEmoticono;";
}

// Mostrar el emoticono
echo generarEmoticonoAleatorio();
?>
