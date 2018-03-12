<?php
header('Content-Type: text/html; charset=UTF-8');

//METODO POST
print_r ($_POST);
if (!$_POST) {
  header('Location: http://localhost/PHP_udemy/formularios_GET_POST/32_get_post.php');
}

$nombre       = $_POST['nombre'];
$apellido     = $_POST['apellido'];
$sexo         = $_POST['sexo'];
$nacimiento   = $_POST['year'];
$terminos     = $_POST['terminos'];

echo 'Hola, ' . $nombre . '&nbsp;' . $apellido . '<br>';
echo 'Eres: ' . $sexo . 'y naciste en: ' . $nacimiento;


//METODO GET
//print_r ($_GET);

/*if (!$_GET) {
  header('Location: http://localhost/PHP_udemy/formularios_GET_POST/32_get_post.php');
}

$nombre       = $_GET['nombre'];
$apellido     = $_GET['apellido'];
$sexo         = $_GET['sexo'];
$nacimiento   = $_GET['year'];
$terminos     = $_GET['terminos'];

if ($nombre) {
  echo $nombre;
}else{
  echo "El usuario no establecio su nombre";
}

echo 'Hola, ' . $nombre . '&nbsp;' . $apellido . '<br>';
echo 'Eres: ' . $sexo . 'y naciste en: ' . $nacimiento;
*/

 ?>
