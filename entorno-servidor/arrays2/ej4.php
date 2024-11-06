<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Valores Repetidos</title>
</head>
<body>
    <?php
    // Generar un grupo de cartas aleatorias de corazones (de 5 a 15 cartas)
    $numCartas = rand(5, 15); // Número de cartas entre 5 y 15
    $cartas = [];

    for ($i = 0; $i < $numCartas; $i++) {
        $cartas[] = rand(1, 10); // Cada carta es un número entre 1 y 10
    }

    // Mostrar el grupo inicial de cartas
    echo "<h3>Grupo inicial de cartas:</h3>";
    foreach ($cartas as $carta) {
        echo "<img src='carpeta/cartas/c1.svg' alt='Corazón $carta' style='width: 50px; margin: 5px;'>";
        echo "<img src='carpeta/cartas/c2.svg' alt='Corazón $carta' style='width: 50px; margin: 5px;'>";
        echo "<img src='carpeta/cartas/c3.svg' alt='Corazón $carta' style='width: 50px; margin: 5px;'>";
    }

    // Eliminar valores repetidos usando array_unique
    $cartasUnicas = array_unique($cartas);

    // Mostrar el grupo de cartas sin valores repetidos
    echo "<h3>Grupo de cartas sin valores repetidos:</h3>";
    foreach ($cartasUnicas as $carta) {
        
        echo "<img src='carpeta/cartas/c4.svg' alt='Corazón $carta' style='width: 50px; margin: 5px;'>";
        echo "<img src='carpeta/cartas/c5.svg' alt='Corazón $carta' style='width: 50px; margin: 5px;'>";
        echo "<img src='carpeta/cartas/c6.svg' alt='Corazón $carta' style='width: 50px; margin: 5px;'>";
        echo "<img src='carpeta/cartas/c7.svg' alt='Corazón $carta' style='width: 50px; margin: 5px;'>";
    }
    ?>
</body>
</html>
