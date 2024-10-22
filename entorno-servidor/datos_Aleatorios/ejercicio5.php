<?php
// Array asociativo de países
$paises = [
    "España" => [
        "capital" => "Madrid",
        "poblacion" => 47_000_000,
        "idiomas" => ["Español"],
        "tieneCosta" => true
    ],
    "Francia" => [
        "capital" => "París",
        "poblacion" => 67_000_000,
        "idiomas" => ["Francés"],
        "tieneCosta" => true
    ],
    "Alemania" => [
        "capital" => "Berlín",
        "poblacion" => 83_000_000,
        "idiomas" => ["Alemán"],
        "tieneCosta" => true
    ],
    "Suiza" => [
        "capital" => "Berna",
        "poblacion" => 8_000_000,
        "idiomas" => ["Alemán", "Francés", "Italiano", "Romanche"],
        "tieneCosta" => false
    ],
    "Italia" => [
        "capital" => "Roma",
        "poblacion" => 60_000_000,
        "idiomas" => ["Italiano"],
        "tieneCosta" => true
    ],
    "Canadá" => [
        "capital" => "Ottawa",
        "poblacion" => 38_000_000,
        "idiomas" => ["Inglés", "Francés"],
        "tieneCosta" => true
    ],
    "Argentina" => [
        "capital" => "Buenos Aires",
        "poblacion" => 45_000_000,
        "idiomas" => ["Español"],
        "tieneCosta" => true
    ]
];

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $paisSeleccionado = $_POST['pais'];
    $infoPais = $paises[$paisSeleccionado];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Países</title>
</head>
<body>
    <h1>Seleccione un país</h1>
    <form method="POST">
        <label for="pais">País:</label>
        <select name="pais" id="pais" required>
            <option value="">Seleccione un país</option>
            <?php foreach ($paises as $pais => $info): ?>
                <option value="<?php echo $pais; ?>"><?php echo $pais; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Ver</button>
    </form>

    <?php if (isset($infoPais)): ?>
        <h2>Información de <?php echo $paisSeleccionado; ?></h2>
        <p><strong>Capital:</strong> <?php echo $infoPais['capital']; ?></p>
        <p><strong>Población:</strong> <?php echo number_format($infoPais['poblacion']); ?></p>
        <p><strong>Idiomas:</strong> <?php echo implode(", ", $infoPais['idiomas']); ?></p>
        <p><strong>¿Tiene costa?</strong> <?php echo $infoPais['tieneCosta'] ? "Sí" : "No"; ?></p>
    <?php endif; ?>
</body>
</html>
