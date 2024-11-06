<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negación de Bits</title>
</head>
<body>
    <?php
    // Función para generar una secuencia de bits aleatoria
    function generarBitsAleatorios($longitud = 8) {
        $bits = '';
        for ($i = 0; $i < $longitud; $i++) {
            $bits .= rand(0, 1); // Genera un 0 o un 1 aleatoriamente
        }
        return $bits;
    }

    // Función para obtener el complemento de una secuencia de bits
    function complementoBits($bits) {
        $complemento = '';
        for ($i = 0; $i < strlen($bits); $i++) {
            // Cambia 0 a 1 y 1 a 0
            $complemento .= ($bits[$i] === '0') ? '1' : '0';
        }
        return $complemento;
    }

    // Generar la secuencia aleatoria de bits y su complemento
    $bits = generarBitsAleatorios();
    $complemento = complementoBits($bits);

    // Mostrar los resultados
    echo "<p>Secuencia de bits: <strong>$bits</strong></p>";
    echo "<p>Complemento de bits: <strong>$complemento</strong></p>";
    ?>
</body>
</html>
