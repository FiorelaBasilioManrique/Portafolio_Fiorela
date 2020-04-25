<?php

    // saltos de linea \n

    $destino = 'fbasiliomanrique@gmail.com';
    $nombre  = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    $contenido = "Nombre: " . $nombre . "\nCorreos: " . $correo . "\nMensajes: " . $mensaje;

    mail($destino, "Servicio Web", $contenido);
    header("Location:enviado.html");

?>