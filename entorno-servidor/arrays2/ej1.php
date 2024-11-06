<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestos de Manos Aleatorios</title>
</head>
<body>
    <?php
    // Array de entidades numéricas de emojis de gestos de manos
    $gestos_manos = [
        128070, 128071, 128072, 128073, 128074, 128075, 128076, 128077, 128078, 
        128079, 128080, 128133, 128170, 128400, 128405, 128406, 128588, 128591, 
        129295, 129304, 129305, 129306, 129307, 129308, 129310, 129311, 129330
    ];
    
    // Array de modificadores Fitzpatrick para los tonos de piel
    $tonos_piel = [127995, 127996, 127997, 127998, 127999];
    
    // Selecciona un emoji y un tono de piel al azar
    $emoji_random = $gestos_manos[array_rand($gestos_manos)];
    $tono_random = $tonos_piel[array_rand($tonos_piel)];

    // Muestra el emoji con un tamaño grande
    echo "<p><span style=\"font-size: 8em\">&#$emoji_random;&#$tono_random;</span></p>";
    ?>
</body>
</html>
