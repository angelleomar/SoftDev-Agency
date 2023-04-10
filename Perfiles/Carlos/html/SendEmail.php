<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];

    $to = 'garciaq2608@gmail.com';
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $body = "Nombre: $name\nEmail: $email\nAsunto: $subject\nMensaje:\n$message";

    // Envía el correo electrónico
    if (mail($to, $subject, $body, $headers)) {
        // Si el correo se envió correctamente, redirecciona a una página de confirmación
        echo '<div class="alert alert-success" role="alert">Tu mensaje ha sido enviado correctamente.</div>';
        exit;
    } else {
        // Si hubo un error al enviar el correo, muestra un mensaje de error
        $error_message = 'Hubo un error al enviar el correo electrónico. Por favor, inténtalo de nuevo más tarde.';
    }
}
?>




