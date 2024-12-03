<?php

require_once 'Serie.php';
require_once 'Videojuego.php';
require_once 'Entregable.php';

// Crear arrays de Series y Videojuegos
$series = array();
$videojuegos = array();

// Crear objetos Serie
$series[0] = new Serie("Breaking Bad", 5, "Drama");
$series[1] = new Serie("Game of Thrones", 8, "Fantasía");
$series[2] = new Serie("Friends", 10, "Comedia");
$series[3] = new Serie("The Crown", 4, "Drama histórico");
$series[4] = new Serie("Stranger Things", 4, "Ciencia ficción");

// Crear objetos Videojuego
$videojuegos[0] = new Videojuego("The Last of Us", 20, "Acción/Aventura");
$videojuegos[1] = new Videojuego("Red Dead Redemption 2", 60, "Acción/Aventura");
$videojuegos[2] = new Videojuego("FIFA 23", 15, "Deportes");
$videojuegos[3] = new Videojuego("The Witcher 3", 100, "RPG");
$videojuegos[4] = new Videojuego("Minecraft", 50, "Sandbox");

// Entregar algunos videojuegos y series
$series[0]->entregar();
$series[2]->entregar();
$series[4]->entregar();
$videojuegos[1]->entregar();
$videojuegos[3]->entregar();

// Contar entregados y devolverlos
$seriesEntregadas = 0;
$videojuegosEntregados = 0;

foreach ($series as $serie) {
    if ($serie->isEntregado()) {
        $seriesEntregadas++;
        $serie->devolver();
    }
}

foreach ($videojuegos as $videojuego) {
    if ($videojuego->isEntregado()) {
        $videojuegosEntregados++;
        $videojuego->devolver();
    }
}

// Encontrar serie con más temporadas y videojuego con más horas
$serieMasTemporadas = $series[0];
$videojuegoMasHoras = $videojuegos[0];

foreach ($series as $serie) {
    if ($serie->getNumeroTemporadas() > $serieMasTemporadas->getNumeroTemporadas()) {
        $serieMasTemporadas = $serie;
    }
}

foreach ($videojuegos as $videojuego) {
    if ($videojuego->getHorasEstimadas() > $videojuegoMasHoras->getHorasEstimadas()) {
        $videojuegoMasHoras = $videojuego;
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Series y Videojuegos</title>
    <style>
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
        h1, h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Información de Series y Videojuegos</h1>

    <h2>Series Entregadas: <?= $seriesEntregadas ?></h2>
    <h2>Videojuegos Entregados: <?= $videojuegosEntregados ?></h2>

    <h2>Serie con más temporadas</h2>
    <table>
        <tr>
            <th>Título</th>
            <th>Temporadas</th>
            <th>Género</th>
        </tr>
        <tr>
            <td><?= $serieMasTemporadas->getTitulo() ?></td>
            <td><?= $serieMasTemporadas->getNumeroTemporadas() ?></td>
            <td><?= $serieMasTemporadas->getGenero() ?></td>
        </tr>
    </table>

    <h2>Videojuego con más horas estimadas</h2>
    <table>
        <tr>
            <th>Título</th>
            <th>Horas Estimadas</th>
            <th>Género</th>
        </tr>
        <tr>
            <td><?= $videojuegoMasHoras->getTitulo() ?></td>
            <td><?= $videojuegoMasHoras->getHorasEstimadas() ?></td>
            <td><?= $videojuegoMasHoras->getGenero() ?></td>
        </tr>
    </table>

    <h2>Lista de Series</h2>
    <table>
        <tr>
            <th>Título</th>
            <th>Temporadas</th>
            <th>Género</th>
            <th>Entregado</th>
        </tr>
        <?php foreach ($series as $serie): ?>
            <tr>
                <td><?= $serie->getTitulo() ?></td>
                <td><?= $serie->getNumeroTemporadas() ?></td>
                <td><?= $serie->getGenero() ?></td>
                <td><?= $serie->isEntregado() ? "Sí" : "No" ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Lista de Videojuegos</h2>
    <table>
        <tr>
            <th>Título</th>
            <th>Horas Estimadas</th>
            <th>Género</th>
            <th>Entregado</th>
        </tr>
        <?php foreach ($videojuegos as $videojuego): ?>
            <tr>
                <td><?= $videojuego->getTitulo() ?></td>
                <td><?= $videojuego->getHorasEstimadas() ?></td>
                <td><?= $videojuego->getGenero() ?></td>
                <td><?= $videojuego->isEntregado() ? "Sí" : "No" ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
