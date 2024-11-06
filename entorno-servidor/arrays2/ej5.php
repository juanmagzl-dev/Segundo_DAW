<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Dado</title>
</head>
<body>
    <?php
    // Generar una tirada inicial con entre 1 y 10 dados
    $numTiradas = rand(1, 10); // Número de tiradas aleatorio
    $tiradaInicial = [];

    for ($i = 0; $i < $numTiradas; $i++) {
        $tiradaInicial[] = rand(1, 6); // Cada dado es un número entre 1 y 6
    }

    // Mostrar la tirada inicial
    echo "<h3>Tirada inicial:</h3>";
    foreach ($tiradaInicial as $dado) {
        echo "<img src='carpeta/dados/dado_$dado.png' alt='Dado $dado' style='width: 50px; margin: 5px;'>";
    }

    // Seleccionar un dado al azar
    $dadoSuelto = rand(1, 6);
    echo "<h3>Dado suelto:</h3>";
    echo "<img src='carpeta/dados/dado_$dadoSuelto.png' alt='Dado $dadoSuelto' style='width: 50px; margin: 5px;'>";
    echo "<img src='carpeta/dados/dado_$dadoSuelto.png' alt='Dado $dadoSuelto' style='width: 50px; margin: 5px;'>";
    echo "<img src='carpeta/dados/dado_$dadoSuelto.png' alt='Dado $dadoSuelto' style='width: 50px; margin: 5px;'>";
    echo "<img src='carpeta/dados/dado_$dadoSuelto.png' alt='Dado $dadoSuelto' style='width: 50px; margin: 5px;'>";
    echo "<img src='carpeta/dados/dado_$dadoSuelto.png' alt='Dado $dadoSuelto' style='width: 50px; margin: 5px;'>";
    echo "<img src='carpeta/dados/dado_$dadoSuelto.png' alt='Dado $dadoSuelto' style='width: 50px; margin: 5px;'>";

    // Eliminar de la tirada inicial los dados que coincidan con el dado suelto
    $tiradaSinCoincidencias = array_filter($tiradaInicial, function($dado) use ($dadoSuelto) {
        return $dado !== $dadoSuelto;
    });

    // Mostrar la tirada después de eliminar los dados que coinciden con el dado suelto
    echo "<h3>Tirada sin los dados que coinciden con el dado suelto:</h3>";
    foreach ($tiradaSinCoincidencias as $dado) {
        echo "<img src='carpeta/dados/dado_$dado.png' alt='Dado $dado' style='width: 50px; margin: 5px;'>";
    }
    ?>
</body>
</html>
