<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - Constantes</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <?php
    // Definir constantes
    define("NUM_CONSTANT", 100);
    define("STRING_CONSTANT", "Hola, mundo!");

    // Mostrar el tipo y valor de cada constante
    echo "La constante numérica es de tipo " . gettype(NUM_CONSTANT) . " y su valor es: " . NUM_CONSTANT . "<br>";
    echo "La constante de cadena es de tipo " . gettype(STRING_CONSTANT) . " y su valor es: " . STRING_CONSTANT;
    ?>
</body>
</html>
