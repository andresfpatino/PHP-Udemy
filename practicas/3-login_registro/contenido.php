<?php session_start();

// protege el contenido si no tiene sesion iniciada
if (isset($_SESSION['usuario'])) {
  require 'views/contenido.view.php';
}else{
  header('Location: login.php');
}

 ?>
