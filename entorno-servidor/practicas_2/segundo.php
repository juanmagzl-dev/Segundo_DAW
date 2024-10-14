<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparación de Números</title>
</head>
<body>
    <h1>Comparación de Tres Números</h1>
    <form method="post" action="">
        <label for="numA">Número A:</label>
        <input type="number" name="numA" required>
        <br>
        <label for="numB">Número B:</label>
        <input type="number" name="numB" required>
        <br>
        <label for="numC">Número C:</label>
        <input type="number" name="numC" required>
        <br>
        <input type="submit" value="Comparar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numA = $_POST['numA'];
        $numB = $_POST['numB'];
        $numC = $_POST['numC'];

        // Comparación con estructura SWITCH
        switch (true) {
            case ($numA > $numB && $numA > $numC):
                echo "A es mayor que B y C.";
                break;
            case ($numB > $numA && $numB > $numC):
                echo "B es mayor que A y C.";
                break;
            case ($numC > $numA && $numC > $numB):
                echo "C es mayor que A y B.";
                break;
            default:
                echo "Hay números iguales.";
        }
    }
    ?>
</body>
</html>
