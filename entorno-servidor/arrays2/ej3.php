<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partida de Dados</title>
</head>
<body>
    <?php
    // Inicialización de variables
    $jugador1 = [];
    $jugador2 = [];
    $rondasGanadasJugador1 = 0;
    $rondasGanadasJugador2 = 0;

    // Cada jugador lanza el dado 6 veces
    for ($i = 0; $i < 6; $i++) {
        $jugador1[] = rand(1, 6); // Lanzamiento para el jugador 1
        $jugador2[] = rand(1, 6); // Lanzamiento para el jugador 2
    }

    // Mostrar los resultados de los lanzamientos de cada jugador
    echo "<h3>Lanzamientos de Jugador 1:</h3>";
    foreach ($jugador1 as $dado) {
        echo "$dado ";
    }

    echo "<h3>Lanzamientos de Jugador 2:</h3>";
    foreach ($jugador2 as $dado) {
        echo "$dado ";
    }

    // Comparar los resultados de cada ronda
    for ($i = 0; $i < 6; $i++) {
        if ($jugador1[$i] > $jugador2[$i]) {
            $rondasGanadasJugador1++;
        } elseif ($jugador1[$i] < $jugador2[$i]) {
            $rondasGanadasJugador2++;
        }
    }

    // Mostrar el resumen de rondas ganadas
    echo "<h3>Resumen de la partida:</h3>";
    echo "<p>Rondas ganadas por Jugador 1: <strong>$rondasGanadasJugador1</strong></p>";
    echo "<p>Rondas ganadas por Jugador 2: <strong>$rondasGanadasJugador2</strong></p>";

    // Determinar y mostrar el ganador
    if ($rondasGanadasJugador1 > $rondasGanadasJugador2) {
        echo "<p><strong>Jugador 1 gana la partida!</strong></p>";
    } elseif ($rondasGanadasJugador1 < $rondasGanadasJugador2) {
        echo "<p><strong>Jugador 2 gana la partida!</strong></p>";
    } else {
        echo "<p><strong>La partida terminó en empate!</strong></p>";
    }
    ?>
</body>
</html>
