<?php

// if (file_exists('documento.txt')) {
//   echo "El archivo existe";
// }else{
//   echo "El archivo no existe";
// }

// Funcion para Leer el contenido del archivo
//echo file_get_contents('documento.txt');

// Funcion para ecribir en el documento
//file_put_contents('documento.txt' , "Escribiendo Felipe \n", FILE_APPEND);

// agrega los numero del 1 al 10 en el archivo
/*file_put_contents('documento.txt' , '');
for ($i=1; $i <= 10 ; $i++) {
  file_put_contents('documento.txt' , "$i \n" ,FILE_APPEND);
}*/

$archivo = file('documento.txt');
// echo "<pre>";
// print_r($archivo);
echo $archivo [7];

 ?>
