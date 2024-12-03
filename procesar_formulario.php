<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    // Configurar destinatario y asunto
    $destinatario = "manuecoelena@gmail.com";
    $asunto = "Formulario pagina web de $nombre";

    // Crear el cuerpo del mensaje
    $mensaje = "Has recibido un nuevo mensaje desde el formulario:\n\n";
    $mensaje .= "Nombre: $nombre\n";
    $mensaje .= "Email: $email\n";

    // Cabeceras del correo
    $cabeceras = "From: noreply@tu-dominio.com\r\n"; 
    $cabeceras .= "Reply-To: $email\r\n";

    // Enviar el correo
    if (mail($destinatario, $asunto, $mensaje, $cabeceras)) {
        echo "Correo enviado con éxito.";
    } else {
        echo "Error al enviar el correo.";
    }
}
?>
