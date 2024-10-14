<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - Referencias</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    <?php
    // Definir variables
    $a = 22;
    $b = &$a; // $b es una referencia a $a

    // Mostrar valores de ambas variables
    echo "La variable \$a vale: " . $a . "<br>";
    echo "La variable \$b vale: " . $b . "<br>";

    // Eliminar la referencia
    unset($b);

    // Mostrar valores de ambas variables nuevamente
    echo "Después de eliminar la referencia:<br>";
    echo "La variable \$a sigue valiendo: " . $a . "<br>";
    echo "La variable \$b no existe más.";
    ?>
</body>
</html>
