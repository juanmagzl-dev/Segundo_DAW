<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $edad = htmlspecialchars($_POST['edad']);

    // Mostrar los datos
    echo "<h1>Datos Recibidos</h1>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Edad: $edad</p>";
} else {
    echo "No se han recibido datos.";
}
?>
