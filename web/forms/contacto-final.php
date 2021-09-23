<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$asunto = $_POST['asunto'];
$mailheader = "From: $email \r\n";

$formcontent=" De: $nombre \n Apellido: $apellido \n Email: $email \n Asunto: $asunto \n Mensaje: $mensaje";
$recipient = "scastro@smash.com.uy";
$subject = "Contact Form";
$mailheader = "De: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("ERROR!");

//echo $nombre . " " . $apellido .  " " . $email . " " . $asunto . " " . $mensaje;

?>