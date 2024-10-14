<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área de un Triángulo</title>
    <style>
        body {
            background-color: #f0f8ff; 
            color: #2c3e50; 
        }
    </style>
</head>
<body>
    <h1>CALCULAR ÁREA TRIÁNGULO</h1>
    
    <form method="post" action="">
        <label for="base">Escribe la base:</label>
        <input type="number" name="base" required>
        <br>
        <label for="altura">Escribe la altura:</label>
        <input type="number" name="altura" required>
        <br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = $_POST['base'];
        $altura = $_POST['altura'];
        $area = ($base * $altura) / 2; // Cálculo del área

        // Mostrar resultado
        echo "El área del triángulo cuya base es $base y altura $altura es: $area.";
    }
    ?>
</body>
</html>
