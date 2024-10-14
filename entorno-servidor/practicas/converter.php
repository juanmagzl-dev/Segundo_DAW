<?php
$result = null; // Variable para almacenar el resultado de la conversión
$convertedCurrency = ""; // Variable para almacenar la moneda convertida

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = floatval($_POST['amount']);
    $currency = $_POST['currency'];

    if ($currency == "euros") {
        // 1 Euro = 166.386 Pesetas
        $result = $amount * 166.386;
        $convertedCurrency = "Pesetas";
    } else {
        // 1 Peseta = 0.00601056 Euros
        $result = $amount * 0.00601056;
        $convertedCurrency = "Euros";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Monedas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input, select, button {
            margin-top: 5px;
            padding: 10px;
            width: 100%;
            max-width: 300px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Conversor de Pesetas a Euros</h1>
    <form action="" method="post">
        <label for="amount">Cantidad:</label>
        <input type="number" id="amount" name="amount" required>
        
        <label for="currency">Convertir a:</label>
        <select id="currency" name="currency">
            <option value="euros">Euros</option>
            <option value="pesetas">Pesetas</option>
        </select>

        <button type="submit">Convertir</button>
    </form>

    <?php if ($result !== null): ?>
        <h2>Resultado de la Conversión</h2>
        <p><?php echo "La cantidad convertida es: " . round($result, 2) . " " . $convertedCurrency; ?></p>
        <a href="converter.php">Volver al conversor</a>
    <?php endif; ?>
</body>
</html>
