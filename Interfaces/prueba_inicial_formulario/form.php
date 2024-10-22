<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $password1 = $_POST['confirm_password1'];
    $password2 = $_POST['confirm_password2'];
    $genero = $_POST['gender'];
    $fecha_nacimiento = $_POST['birthdate'];
    $acepto_terminos = isset($_POST['terminos']) ? 'Sí' : 'No';

    // Verificar que las contraseñas coincidan
    if ($password1 !== $password2) {
        echo "Error: Las contraseñas no coinciden.";
        exit;
    }

    // Preparar el contenido del correo
    $destinatario = "correpruebadaw@gmail.com";
    $asunto = "Nuevo registro desde el formulario";
    
    $mensaje = "
    Nombre: $nombre\n
    Correo: $email\n
    Género: $genero\n
    Fecha de nacimiento: $fecha_nacimiento\n
    Acepto términos y condiciones: $acepto_terminos
    ";

    // Cabeceras del correo
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Enviar el correo
    if (mail($destinatario, $asunto, $mensaje, $headers)) {
        echo "El correo ha sido enviado con éxito.";
    } else {
        echo "Error: No se pudo enviar el correo.";
    }
} else {
    echo "Error: Método no permitido.";
}
?>
