<?php
// Conexion
try {
  $conexion = new PDO('mysql:host=localhost;dbname=paginacion_udemy' , 'root' , '');
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
    die();
}

// condicional para la página
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
// # de publicaciones a mostrar por página
$postPorPagina = 4;
// calculos de articulos por pagina
$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;

//Consulta SQL
$articulos = $conexion->prepare("
  SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio , $postPorPagina
");

$articulos->execute();
$articulos = $articulos->fetchAll();
//print_r($articulos);

// comprueba si hay articulos en las paginas
if (!$articulos) {
  header('Location: index.php');
}

$totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total');
$totalArticulos = $totalArticulos->fetch()['total'];
//echo $totalArticulos;

$numeroPaginas = ceil($totalArticulos / $postPorPagina);
//echo $numeroPaginas;

require 'index.view.php';

 ?>
