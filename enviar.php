<?php

$nombre = $_POST['nombre'];
$nombre = $_POST['email'];
$nombre = $_POST['mensaje'];


//datos para el correo

$destnatario = "vampiremusic90@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \"n;
$carta .="email: $email \n";
$carta .="Mensaje: $mensaje \n";



mail($destinatario, $asunto, $carta);
header('Location:mensajeconfrmacion.html')

?>
