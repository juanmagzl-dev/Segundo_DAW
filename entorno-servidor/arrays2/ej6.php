<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar Cartas</title>
</head>
<body>
    <?php
    // Generar un grupo de cartas aleatorias de corazones (de 10 a 20 cartas)
    $numCartas = rand(10, 20); // Número de cartas entre 10 y 20
    $cartas = [];

    for ($i = 0; $i < $numCartas; $i++) {
        $cartas[] = rand(1, 10); // Cada carta es un número entre 1 y 10
    }

    // Mostrar el grupo de cartas
    echo "<h3>Grupo de cartas:</h3>";
    foreach ($cartas as $carta) {
        echo "<img src='carpeta/cartas/corazon_$carta.png' alt='Corazón $carta' style='width: 50px; margin: 5px;'>";
    }

    // Contar las ocurrencias de cada carta
    $conteoCartas = array_count_values($cartas);

    // Mostrar el conteo de cada carta
    echo "<h3>Conteo de cada carta:</h3>";
    for ($i = 1; $i <= 10; $i++) {
        $cantidad = isset($conteoCartas[$i]) ? $conteoCartas[$i] : 0;
        echo "<p>Carta $i: <strong>$cantidad</strong> veces</p>";
    }
    ?>
</body>
</html>
