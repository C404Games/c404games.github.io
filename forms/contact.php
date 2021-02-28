<?php

  $destinatario = 'c404games@gmail.com';
  $titulo    = $_POST['subject'];
  $mensaje   = 'Mensaje de: '.$_POST['name']."\r\n";
  $mensaje  .= $_POST['message'];
  $cabeceras = 'From: Formulario web' . "\r\n" .
    'Reply-To: '. $_POST['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  mail($destinatario, $titulo, $mensaje, $cabeceras);
  echo "Gracias por contactarnos";
  
?>
