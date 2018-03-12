<?php

require 'admin/config.php';


$errores = '';
$enviado = '';
$mincaracteres= 6;

if (isset($_POST['submit'])) {
  $nombre   = $_POST['nombre'];
  $correo   = $_POST['correo'];
  $telefono = $_POST['telefono'];
  $mensaje  = $_POST['mensaje'];

  //valida nombre
  if (!empty($nombre)) {
    $nombre = trim($nombre);
    $nombre = filter_var($nombre , FILTER_SANITIZE_STRING);
  }else{
    $errores .= 'Por favor ingresa un nombre <br>';
  }

  //Valida correo
  if (!empty($correo)) {
    $correo = filter_var($correo , FILTER_SANITIZE_EMAIL);
    if(!filter_var($correo , FILTER_VALIDATE_EMAIL)){
      $errores .= 'Por favor ingrese un correo válido (@)<br>';
    }
  }else{
    $errores .= 'Por favor ingresa un correo <br>';
  }

  //valida telefono
  if (!empty($telefono)) {
    $telefono = trim($telefono);
    $telefono = filter_var($telefono , FILTER_SANITIZE_STRING);
    //valida si es numerico
    if (!is_numeric($telefono)) {
      $errores .= 'Por favor ingrese un teléfono válido (númerico)<br>';
    }
    // valida el minimo de caracteres
    if (strlen($telefono)<=$mincaracteres) {
      $errores .= 'Por favor ingrese un teléfono válido (mínimo 7 caracteres)<br>';
    }
  }else{
    $errores .= 'Por favor ingresa un teléfono <br>';
  }

  // valida mensaje
  if (!empty($mensaje)) {
    $mensaje = htmlspecialchars($mensaje);
    $mensaje = trim($mensaje);
    $mensaje = stripslashes($mensaje);
  }else {
    $errores .= 'Por favor ingresa el mensaje <br>';
  }

  //verificando si no hay errores para enviar el formulario
  if (!$errores) {
    $enviar_a = 'andresfelipepatino5@gmail.com';
    $asunto = 'Solicitud de contacto';
    $mensaje_preparado = "De: $nombre \n";
    $mensaje_preparado .= "Correo: $correo \n";
    $mensaje_preparado .= "Teléfono: $telefono \n";
    $mensaje_preparado .= "Mensaje: " . $mensaje;

    mail($enviar_a , $asunto , $mensaje_preparado);
    $enviado = true;
  }
}
require 'views/contacto.view.php';



?>
