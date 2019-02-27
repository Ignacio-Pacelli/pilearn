<?php

$para = 'ignacio.pacelli@gmail.com, pilarcamacho17@gmail.com';
$asunto = 'Mensaje desde pi-learn';

$mailheader = "From: ".$_POST["email"]."\r\n";
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n";
$mailheader .= "Content-type: text/html; charset=utf-8\r\n";
$MESSAGE_BODY = "Nombre: ".$_POST["name"]."\n";
$MESSAGE_BODY .= "\n<br>Email: ".$_POST["email"]."\n";
$MESSAGE_BODY .= "\n<br>Mensaje: ".nl2br($_POST["message"])."\n"; //el nl2br es porque enviamos una cadena de texto//

mail($para, $asunto, $MESSAGE_BODY, $mailheader) or die('Error al enviar ');

header('Location : http://http://localhost:63342/pilearn/index.html#')

?>