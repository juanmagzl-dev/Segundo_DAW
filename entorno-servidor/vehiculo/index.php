<?php
// index.php
require_once 'Vehiculo.php';
require_once 'Coche.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas de Vehículos y Coches</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

    <h2>Pruebas de la clase Vehículo</h2>

    <table>
        <thead>
            <tr>
                <th>Tipo</th>
                <th>Marca</th>
                <th>Color</th>
                <th>Plazas</th>
                <th>Aparcado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Crear objetos de Vehiculo
            $bicicleta = new Vehiculo("Orbea", "Rojo", 1);
            echo "<tr><td>Bicicleta</td><td>" . $bicicleta->getMarca() . "</td><td>" . $bicicleta->getColor() . "</td><td>" . $bicicleta->getPlazas() . "</td><td>" . ($bicicleta->isAparcado() ? "Sí" : "No") . "</td></tr>";

            $camion = new Vehiculo("Volvo", "Azul", 2);
            $camion->arrancar();
            echo "<tr><td>Camión</td><td>" . $camion->getMarca() . "</td><td>" . $camion->getColor() . "</td><td>" . $camion->getPlazas() . "</td><td>" . ($camion->isAparcado() ? "Sí" : "No") . "</td></tr>";
            ?>
        </tbody>
    </table>

    <h2>Pruebas de la clase Coche</h2>

    <table>
        <thead>
            <tr>
                <th>Marca</th>
                <th>Color</th>
                <th>Plazas</th>
                <th>Aparcado</th>
                <th>Matrícula</th>
                <th>Kilómetros</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            try {
                $coche1 = new Coche("Toyota", "Gris", 5, "1234 BCD");
                $coche1->arrancar();
                $coche1->viajar(150);
                echo "<tr><td>" . $coche1->getMarca() . "</td><td>" . $coche1->getColor() . "</td><td>" . $coche1->getPlazas() . "</td><td>" . ($coche1->isAparcado() ? "Sí" : "No") . "</td><td>" . $coche1->getMatricula() . "</td><td>" . $coche1->getKilometros() . "</td><td>Viaje realizado</td></tr>";

                $coche2 = new Coche("Ford", "Negro", 5, "5678 GHT");
                echo "<tr><td>" . $coche2->getMarca() . "</td><td>" . $coche2->getColor() . "</td><td>" . $coche2->getPlazas() . "</td><td>" . ($coche2->isAparcado() ? "Sí" : "No") . "</td><td>" . $coche2->getMatricula() . "</td><td>" . $coche2->getKilometros() . "</td><td>No ha viajado</td></tr>";

                // Intento de viajar con coche aparcado
                $coche2->viajar(50); // Esto lanzará un error porque el coche está aparcado
            } catch (Exception $e) {
                echo "<tr><td colspan='7'>Error: " . $e->getMessage() . "</td></tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>
