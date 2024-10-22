<?php
// Función para convertir un número en letras
function numeroEnLetras($numero) {
    $numeros = [
        0 => "cero",
        1 => "uno",
        2 => "dos",
        3 => "tres",
        4 => "cuatro",
        5 => "cinco",
        6 => "seis",
        7 => "siete",
        8 => "ocho",
        9 => "nueve"
    ];

    return $numeros[$numero];
}

// Generar un número aleatorio entre 0 y 9
$numeroAleatorio = rand(0, 9);

// Obtener el número en letras
$numeroEnLetras = numeroEnLetras($numeroAleatorio);

// Mostrar el número y su representación en letras
echo "Número: $numeroAleatorio - En letras: $numeroEnLetras";
?>
