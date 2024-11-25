
<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Contacto</title>
</head>
<body>
    <h2>Formulario de Contacto</h2>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recoger los datos del formulario
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $mensaje = $_POST['mensaje'];
        
        // Configurar el correo
        $para = "tucorreo@ejemplo.com"; // Cambia esto por tu correo
        $asunto = "Nuevo mensaje de contacto de $nombre";
        
        // Crear el cuerpo del mensaje
        $contenido = "Nombre: $nombre\n";
        $contenido .= "Email: $email\n\n";
        $contenido .= "Mensaje:\n$mensaje";
        
        // Cabeceras del correo
        $cabeceras = "From: $email\r\n";
        $cabeceras .= "Reply-To: $email\r\n";
        $cabeceras .= "X-Mailer: PHP/" . phpversion();
        
        // Enviar el correo
        if(mail($para, $asunto, $contenido, $cabeceras)) {
            echo "<p style='color: green;'>Mensaje enviado correctamente</p>";
        } else {
            echo "<p style='color: red;'>Error al enviar el mensaje</p>";
        }
    }
    ?>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div>
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        
        <div>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required>
        </div>
        
        <div>
            <label for="mensaje">Mensaje:</label><br>
            <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
        </div>
        
        <div>
            <input type="submit" value="Enviar Mensaje">
        </div>
    </form>
</body>
</html>

