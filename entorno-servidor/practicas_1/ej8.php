<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario</title>
</head>
<body>
    <h1>Calculo de Salario</h1>
    
    <form method="post" action="">
        <label for="salario">Ingrese el salario:</label>
        <input type="number" name="salario" required>
        <br>
        <label for="impuesto">Ingrese el porcentaje de impuesto:</label>
        <input type="number" name="impuesto" required>
        <br>
        <input type="submit" name="mostrar1" value="Mostrar Salario Sin Descuento">
        <input type="submit" name="mostrar2" value="Mostrar Salario Con Descuento">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $salario = $_POST['salario'];
        $impuesto = $_POST['impuesto'];
        $resultado = $salario - ($salario * ($impuesto / 100));

        if (isset($_POST['mostrar1'])) {
            echo "El salario sin descontar el impuesto: \"$salario\"";
        } elseif (isset($_POST['mostrar2'])) {
            echo "El salario \"$salario\" una vez descontado: \"$resultado\"";
        }
    }
    ?>
</body>
</html>
