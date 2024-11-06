<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diccionario de Meses</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 60%;
        }
        th, td {
            border: 1px solid #555;
            padding: 10px;
        }
        th {
            background-color: #444;
        }
        select, button {
            padding: 5px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Traducción de Meses a Distintos Idiomas</h1>
    <form method="post">
        <label for="idioma_origen">Idioma de Origen:</label>
        <select name="idioma_origen" id="idioma_origen">
            <option value="espanol">Español</option>
            <option value="ingles">Inglés</option>
            <option value="frances">Francés</option>
            <option value="aleman">Alemán</option>
        </select>

        <label for="idioma_destino">Idioma de Destino:</label>
        <select name="idioma_destino" id="idioma_destino">
            <option value="espanol">Español</option>
            <option value="ingles">Inglés</option>
            <option value="frances">Francés</option>
            <option value="aleman">Alemán</option>
        </select>

        <button type="submit">Traducir</button>
    </form>

    <?php
        // Diccionario de meses en distintos idiomas
        $meses = [
            "espanol" => ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
            "ingles" => ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            "frances" => ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"],
            "aleman" => ["Januar", "Februar", "März", "April", "Mai", "Juni", "Juli", "August", "September", "Oktober", "November", "Dezember"]
        ];

        // Mostrar la tabla de traducción si se ha enviado el formulario
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $idioma_origen = $_POST["idioma_origen"];
            $idioma_destino = $_POST["idioma_destino"];

            // Evitar que se traduzca al mismo idioma
            if ($idioma_origen !== $idioma_destino) {
                echo "<h2>Traducción de $idioma_origen a $idioma_destino</h2>";
                echo "<table>";
                echo "<tr><th>" . ucfirst($idioma_origen) . "</th><th>" . ucfirst($idioma_destino) . "</th></tr>";

                // Mostrar los meses en ambos idiomas
                for ($i = 0; $i < 12; $i++) {
                    echo "<tr><td>{$meses[$idioma_origen][$i]}</td><td>{$meses[$idioma_destino][$i]}</td></tr>";
                }
                echo "</table>";
            } else {
                echo "<p style='color: #f00;'>El idioma de origen y el idioma de destino no pueden ser el mismo.</p>";
            }
        }
    ?>
</body>
</html>
