<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <h1>Ejercicio 3</h1>
    <?php
    // Definir variables
    $a = 10;
    $b = 5;

    // Operaciones y mostrar resultados
    echo "El resultado de sumar \$a y \$b es: " . ($a + $b) . "<br>";
    echo "El resultado de restar \$a y \$b es: " . ($a - $b) . "<br>";
    echo "El resultado de multiplicar \$a y \$b es: " . ($a * $b) . "<br>";
    echo "El resultado de dividir \$a y \$b es: " . ($a / $b) . "<br>";

    // Usando printf
    printf("El resultado de sumar \$a y \$b es: %.2f<br>", $a + $b);
    printf("El resultado de restar \$a y \$b es: %.2f<br>", $a - $b);
    printf("El resultado de multiplicar \$a y \$b es: %.2f<br>", $a * $b);
    printf("El resultado de dividir \$a y \$b es: %.2f<br>", $a / $b);
    ?>
</body>
</html>
