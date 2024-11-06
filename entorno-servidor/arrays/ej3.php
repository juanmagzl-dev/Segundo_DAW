<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Aleatorios en Array</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid #555;
            padding: 10px;
        }
        th {
            background-color: #444;
        }
    </style>
</head>
<body>
    <h1>Ejercicio de Números Aleatorios en Array</h1>

    <?php
        // Generar un array con 6 números aleatorios de 1 al 6
        $numeros = [];
        for ($i = 0; $i < 6; $i++) {
            $numeros[] = rand(1, 6);
        }

        // Contar las veces que aparece cada número del 1 al 6
        $conteo = array_count_values($numeros);

        echo "<h2>Números generados: " . implode(", ", $numeros) . "</h2>";
        echo "<h3>Conteo de apariciones del 1 al 6:</h3>";
        echo "<table><tr><th>Número</th><th>Frecuencia</th></tr>";
        for ($num = 1; $num <= 6; $num++) {
            $cantidad = isset($conteo[$num]) ? $conteo[$num] : 0;
            echo "<tr><td>$num</td><td>$cantidad</td></tr>";
        }
        echo "</table>";

        // Generar otro número al azar entre 1 y 6 y buscarlo en el array
        $numero_aleatorio = rand(1, 6);
        echo "<h3>Número aleatorio generado para búsqueda: $numero_aleatorio</h3>";
        
        // Comprobar si el número está en el array y mostrar índices si lo está
        $indices = array_keys($numeros, $numero_aleatorio);
        if (!empty($indices)) {
            echo "<p>El número $numero_aleatorio se encuentra en los índices: " . implode(", ", $indices) . "</p>";
        } else {
            echo "<p>El número $numero_aleatorio no se encuentra en el array.</p>";
        }

        // Mostrar el array ordenado de mayor a menor
        $array_ordenado = $numeros;
        rsort($array_ordenado);
        echo "<h3>Array ordenado de mayor a menor:</h3>";
        echo "<p>" . implode(", ", $array_ordenado) . "</p>";

        // Eliminar valores duplicados y reindexar el array
        $array_sin_duplicados = array_values(array_unique($numeros));
        echo "<h3>Array sin duplicados y sin huecos en los índices:</h3>";
        echo "<p>" . implode(", ", $array_sin_duplicados) . "</p>";
    ?>
</body>
</html>
