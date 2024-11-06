<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar Aleatoria</title>
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
    <h1>Tabla de Multiplicar Aleatoria</h1>
    <?php
        // Generar un número aleatorio entre 1 y 10
        $numero = rand(1, 10);
        
        // Crear la tabla de multiplicar utilizando range
        $tabla = [];
        foreach (range(1, 10) as $i) {
            $tabla[] = $numero * $i;
        }
        
        // Obtener el valor mínimo y máximo de la tabla
        $minimo = min($tabla);
        $maximo = max($tabla);

        // Mostrar el número y la tabla de multiplicar en HTML
        echo "<h2>Tabla del $numero</h2>";
        echo "<table>";
        echo "<tr><th>Multiplicación</th><th>Resultado</th></tr>";
        
        foreach ($tabla as $index => $resultado) {
            echo "<tr><td>$numero x " . ($index + 1) . "</td><td>$resultado</td></tr>";
        }
        
        echo "</table>";
        
        // Mostrar los valores mínimo y máximo
        echo "<p>Valor mínimo: $minimo</p>";
        echo "<p>Valor máximo: $maximo</p>";
    ?>
</body>
</html>
