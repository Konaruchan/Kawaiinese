<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $palabraEspañol = $_POST["inputEspañol"];
    $palabraKawaiinés = $_POST["inputKawaiinés"];
    $comentario = $_POST["inputComentario"];
    $email = $_POST["inputEmail"];
    $apodo = $_POST["inputApodo"];

    // Configurar el correo electrónico
    $destinatario = "santiolol568@gmail.com"; // Cambiar por tu dirección de correo electrónico
    $asunto = "Nueva petición de palabra";
    $mensaje = "Palabra en Español: $palabraEspañol\n";
    $mensaje .= "Palabra en Kawaiinés: $palabraKawaiinés\n";
    $mensaje .= "Comentario adicional: $comentario\n";
    $mensaje .= "Apodo del usuario: $apodo\n";
    $mensaje .= "Correo electrónico del usuario: $email\n";

    // Enviar el correo electrónico
    if (mail($destinatario, $asunto, $mensaje)) {
        echo "Correo electrónico enviado correctamente";
    } else {
        echo "Error al enviar el correo electrónico";
    }
}
?>
