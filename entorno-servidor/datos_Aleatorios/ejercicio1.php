<?php
// Función para generar un número aleatorio entre 0 y 255
function generarColorAleatorio() {
    return rand(0, 255);
}

// Generar los valores RGB
$rojo = generarColorAleatorio();
$verde = generarColorAleatorio();
$azul = generarColorAleatorio();

// Mostrar el código RGB
echo "rgb($rojo, $verde, $azul)";
?>
