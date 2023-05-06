<?php
$to = "anthony.mamani@ucsp.edu.pe"; // Dirección de correo electrónico a la que se enviará el mensaje
$subject = "Nuevo mensaje del formulario de contacto"; // Asunto del mensaje
$message = $_POST["message"]; // Cuerpo del mensaje
$headers = "From: " . $_POST["first_name"] . " <" . $_POST["email"] . ">"; // Cabecera del mensaje

mail($to, $subject, $message, $headers); // Envía el mensaje

echo "Mensaje enviado con éxito"; // Mensaje que se muestra al usuario después de enviar el formulario
?>