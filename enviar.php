<?php
    $destino ='menagonzalezmoises@hotmail.com';
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];
    $contenido = 'Nombre: ' . $nombre . '\nCorreo: ' . $correo . '\nMensaje: ' . $mensaje;
    $enviado = mail($destino, 'Contacto', $contenido );
    if($enviado):
        echo "yes";
    header('Location:gracias.html');
    else:
        echo "no";
    endif;
?>