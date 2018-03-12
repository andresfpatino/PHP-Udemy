<?php

// Permite obtener el nombre del archivo y su extension
echo pathinfo('documento.txt' , PATHINFO_BASENAME);

echo "<br>";

// Permite obtener el nombre el directorio padre del archivo
echo pathinfo('usuario/carpeta/documento.txt' , PATHINFO_DIRNAME);

echo "<br>";

//permite obtener la extension del archivo
echo pathinfo('documento.txt' , PATHINFO_EXTENSION);

echo "<br>";

//permite obtener el nombre del archivo
echo pathinfo('documento.txt' , PATHINFO_FILENAME);

echo "<br>";
echo "<pre>";
// glob permite buscar archivos dentro de un directorio mediante un patron
// muestra los archivo que empiezen por 1 y en extension .php
$resultados = glob('1*.php');
print_r($resultados);

echo "<br>";
echo "<pre>";
// muestra los archivo que terminen en dif extensiones
// el * es para que muestre global
$resultados = glob('*.{php,html,txt,jpg,png,gif}', GLOB_BRACE);
print_r($resultados);

echo "<br>";

echo basename('carpeta1/carpeta2/archivo.php');

echo "<br>";

// muestra el directorio padre
echo dirname('carpeta1/carpeta2/archivo.php')


 ?>
