<?php
// Recopilar los datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

// Dirección de correo a la que se enviará el mensaje
$destinatario = 'info@shogunsentinel.com';

// Asunto del mensaje
$asunto = 'Nuevo mensaje de contacto desde tu sitio web';

// Construir el cuerpo del mensaje
$cuerpoMensaje = "Nombre: $nombre\n";
$cuerpoMensaje .= "Correo: $correo\n";
$cuerpoMensaje .= "Asunto: $asunto\n";
$cuerpoMensaje .= "Mensaje:\n$mensaje";

// Cabeceras del correo electrónico
$cabeceras = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Enviar el correo electrónico
if (mail($destinatario, $asunto, $cuerpoMensaje, $cabeceras)) {
    // Éxito al enviar el correo
    echo 'El mensaje se ha enviado correctamente.';
} else {
    // Error al enviar el correo
    echo 'Error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.';
}
?>