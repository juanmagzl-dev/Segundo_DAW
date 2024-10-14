<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 - Forzar Tipos</title>
</head>
<body>
    <h1>Ejercicio 7</h1>
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

    // Array de variables con sus tipos nuevos
    $tipos_nuevos = [
        '$a1' => ['valor' => $a1, 'tipo_nuevo' => 'double'],
        '$a2' => ['valor' => $a2, 'tipo_nuevo' => 'double'],
        '$a3' => ['valor' => $a3, 'tipo_nuevo' => 'double'],
        '$a4' => ['valor' => $a4, 'tipo_nuevo' => 'integer'],
        '$a5' => ['valor' => $a5, 'tipo_nuevo' => 'integer'],
        '$a6' => ['valor' => $a6, 'tipo_nuevo' => 'double'],
        '$a7' => ['valor' => $a7, 'tipo_nuevo' => 'integer'],
        '$a8' => ['valor' => $a8, 'tipo_nuevo' => 'double'],
        '$a9' => ['valor' => $a9, 'tipo_nuevo' => 'integer'],
    ];

    // Mostrar nombre, valor y tipo original de cada variable
    foreach ($tipos_nuevos as $name => $data) {
        echo "$name: Valor: {$data['valor']} - Tipo: " . gettype($data['valor']) . "<br>";
    }

    echo "<h2>Valores y tipos después de forzar el tipo:</h2>";

    //  tipos y mostrar resultados
    foreach ($tipos_nuevos as $name => $data) {
        settype($data['valor'], $data['tipo_nuevo']);
        echo "$name (forzado a {$data['tipo_nuevo']}): Valor: {$data['valor']} - Nuevo tipo: " . gettype($data['valor']) . "<br>";
    }
    ?>
</body>
</html>
