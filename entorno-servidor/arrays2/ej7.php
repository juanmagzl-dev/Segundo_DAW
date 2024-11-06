<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repartir Cartas</title>
</head>
<body>
    <?php
    // Generar un número par de cartas (entre 4 y 10)
    $numCartas = rand(2, 5) * 2; // Generar 2, 4, 6, 8 o 10

    // Crear un array de cartas únicas del 1 al 10
    $cartas = range(1, 10);
    
    // Barajar las cartas y seleccionar un número par aleatorio
    shuffle($cartas);
    $cartasSeleccionadas = array_slice($cartas, 0, $numCartas);

    // Repartir las cartas entre dos jugadores
    $jugador1 = [];
    $jugador2 = [];

    foreach ($cartasSeleccionadas as $index => $carta) {
        if ($index % 2 === 0) {
            $jugador1[] = $carta; // Jugador 1 recibe la carta
        } else {
            $jugador2[] = $carta; // Jugador 2 recibe la carta
        }
    }

    // Calcular las sumas de cada jugador
    $sumaJugador1 = array_sum($jugador1);
    $sumaJugador2 = array_sum($jugador2);

    // Mostrar las cartas de cada jugador
    echo "<h3>Cartas del Jugador 1:</h3>";
    foreach ($jugador1 as $carta) {
        echo "<img src='carpeta/cartas/corazon_$carta.png' alt='Corazón $carta' style='width: 50px; margin: 5px;'>";
    }
    echo "<p>Sumatoria: <strong>$sumaJugador1</strong></p>";

    echo "<h3>Cartas del Jugador 2:</h3>";
    foreach ($jugador2 as $carta) {
        echo "<img src='carpeta/cartas/corazon_$carta.png' alt='Corazón $carta' style='width: 50px; margin: 5px;'>";
    }
    echo "<p>Sumatoria: <strong>$sumaJugador2</strong></p>";

    // Determinar el ganador
    if ($sumaJugador1 > $sumaJugador2) {
        echo "<h3>¡El Jugador 1 gana!</h3>";
    } elseif ($sumaJugador1 < $sumaJugador2) {
        echo "<h3>¡El Jugador 2 gana!</h3>";
    } else {
        echo "<h3>¡Es un empate!</h3>";
    }
    ?>
</body>
</html>
