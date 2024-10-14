<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 - Tipos de Variables</title>
</head>
<body>
    <h1>Ejercicio 6</h1>
    <?php
    // Asignar valores a variables
    $a1 = 347;
    $a2 = 2147483647;
    $a3 = -2147483647;
    $a4 = 23.7678;
    $a5 = 3.1416;
    $a6 = "347";
    $a7 = "3.1416";
    $a8 = "Solo literal";
    $a9 = "12.3 Literal con número";

    // Crear un array para almacenar las variables
    $variables = [
        '$a1' => $a1,
        '$a2' => $a2,
        '$a3' => $a3,
        '$a4' => $a4,
        '$a5' => $a5,
        '$a6' => $a6,
        '$a7' => $a7,
        '$a8' => $a8,
        '$a9' => $a9,
    ];

    // Mostrar el nombre, valor y tipo de cada variable
    foreach ($variables as $name => $value) {
        echo "$name: $value - Tipo: " . gettype($value) . "<br>";
    }
    ?>
</body>
</html>
