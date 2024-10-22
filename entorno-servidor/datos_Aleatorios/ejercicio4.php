<?php
// Array de ocho ciudades de España
$ciudades = [
    "Madrid",
    "Barcelona",
    "Valencia",
    "Sevilla",
    "Bilbao",
    "Zaragoza",
    "Málaga",
    "Granada"
];

// Eliminar una ciudad al azar
$indiceAleatorio = array_rand($ciudades); // Obtener un índice aleatorio
unset($ciudades[$indiceAleatorio]); // Eliminar la ciudad en el índice aleatorio

// Reindexar el array para que no queden índices vacíos
$ciudades = array_values($ciudades);

// Mostrar el nuevo array de ciudades
echo "Ciudades restantes: " . implode(", ", $ciudades);
?>
