<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario
    $tipo_identificacion = $_POST['tipo_identificacion'];
    $dni = $_POST['dni'];
    $fecha_alta = $_POST['fecha_alta'];
    $nombre = $_POST['nombre'];
    $primer_apellido = $_POST['primer_apellido'];
    $segundo_apellido = $_POST['segundo_apellido'];
    $nacionalidad = $_POST['nacionalidad'];
    $numero_seguridad_social = $_POST['numero_seguridad_social'];
    $telefono = $_POST['telefono'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $emancipado = isset($_POST['emancipado']) ? 'Sí' : 'No'; // Check if checkbox is checked
    $pais = $_POST['pais'];
    $provincia = $_POST['provincia'];
    $municipio = $_POST['municipio'];
    $tipo_via = $_POST['tipo_via'];
    $direccion = $_POST['direccion'];
    $numero = $_POST['numero'];
    $escalera = $_POST['escalera'];
    $piso = $_POST['piso'];
    $letra = $_POST['letra'];
    $cp = $_POST['cp'];
    $observaciones = $_POST['observaciones']; // Aquí recogemos el contenido del textarea

    // Configuración del correo
    $to = "tu_correo@example.com"; // Cambia esto por tu dirección de correo
    $subject = "Datos del formulario";
    $message = "
        <h2>Datos Recogidos:</h2>
        <p><strong>Tipo de identificación:</strong> $tipo_identificacion</p>
        <p><strong>DNI:</strong> $dni</p>
        <p><strong>Fecha de alta:</strong> $fecha_alta</p>
        <p><strong>Nombre:</strong> $nombre</p>
        <p><strong>Primer Apellido:</strong> $primer_apellido</p>
        <p><strong>Segundo Apellido:</strong> $segundo_apellido</p>
        <p><strong>Nacionalidad:</strong> $nacionalidad</p>
        <p><strong>Número de la seguridad social:</strong> $numero_seguridad_social</p>
        <p><strong>Teléfono:</strong> $telefono</p>
        <p><strong>Fecha de nacimiento:</strong> $fecha_nacimiento</p>
        <p><strong>Edad:</strong> $edad</p>
        <p><strong>Sexo:</strong> $sexo</p>
        <p><strong>Emancipado:</strong> $emancipado</p>
        <p><strong>País de nacimiento:</strong> $pais</p>
        <p><strong>Provincia:</strong> $provincia</p>
        <p><strong>Municipio:</strong> $municipio</p>
        <p><strong>Tipo de vía:</strong> $tipo_via</p>
        <p><strong>Dirección:</strong> $direccion</p>
        <p><strong>Número:</strong> $numero</p>
        <p><strong>Escalera:</strong> $escalera</p>
        <p><strong>Piso:</strong> $piso</p>
        <p><strong>Letra:</strong> $letra</p>
        <p><strong>Código Postal:</strong> $cp</p>
        <p><strong>Observaciones:</strong> $observaciones</p>
    ";

    // Para enviar correos HTML
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: <$to>" . "\r\n";

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "<h2>Correo enviado con éxito.</h2>";
    } else {
        echo "<h2>Hubo un error al enviar el correo.</h2>";
    }
}
?>
