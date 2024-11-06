<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Alumnos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        table {
            margin: 10px auto;
            border-collapse: collapse;
            width: 40%;
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
    <h1>Lista de Alumnos</h1>

    <?php
        // Datos de los alumnos de la clase de primero
        $alumnos_primero = [
            ["nombre" => "Juan", "edad" => 21],
            ["nombre" => "María", "edad" => 19],
            ["nombre" => "Pedro", "edad" => 24],
            ["nombre" => "Antonio", "edad" => 30],
            ["nombre" => "Carmen", "edad" => 24],
            ["nombre" => "Carlos", "edad" => 26],
            ["nombre" => "Lucía", "edad" => 22]
        ];

        // Datos de los alumnos de la clase de segundo
        $alumnos_segundo = [
            ["nombre" => "Jaime", "edad" => 27],
            ["nombre" => "Luisa", "edad" => 21],
            ["nombre" => "Aitor", "edad" => 33],
            ["nombre" => "Macarena", "edad" => 22],
            ["nombre" => "María", "edad" => 27],
            ["nombre" => "Pedro", "edad" => 28],
            ["nombre" => "Juan", "edad" => 24]
        ];

        // Función para mostrar una tabla de alumnos
        function mostrarTabla($titulo, $alumnos) {
            echo "<h2>$titulo</h2>";
            echo "<table>";
            echo "<tr><th>Nombre</th><th>Edad</th></tr>";
            foreach ($alumnos as $alumno) {
                echo "<tr><td>{$alumno['nombre']}</td><td>{$alumno['edad']}</td></tr>";
            }
            echo "</table>";
        }

        // Mostrar tabla de la clase de primero
        mostrarTabla("Alumnos de la clase de primero", $alumnos_primero);

        // Mostrar tabla de la clase de segundo
        mostrarTabla("Alumnos de la clase de segundo", $alumnos_segundo);

        // Unir ambas tablas y mostrar la tabla combinada
        $alumnos_combinados = array_merge($alumnos_primero, $alumnos_segundo);

        mostrarTabla("Alumnos combinados de ambas clases", $alumnos_combinados);
    ?>
</body>
</html>
