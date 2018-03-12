<?php

//===================================================================
// count();    permite conocer cuantos elementos tenemos en un arreglo
// sort();     Permite ordenar un arreglo
// rsort();    Permite desordenar un arreglo
// var_dump(); Permite conocer el tipo de dato y sus propiedades
// print_r();  Permite conocer la propiedad del dato
//===================================================================

// function saludo(PARAMETRO){
//   #CODE
// }

function saludo($nombre){
  echo 'Saludo, ' . $nombre . '<br>';
}
saludo('Felipe');
saludo('Jose');
saludo('Cesar');


function sumar($num1 , $num2){
  $resultado = $num1 + $num2;
  echo 'Resultado de suma: ' . $resultado . '<br>';
}
sumar(10 , 15);
sumar(100 , 100);
sumar(5 , 5);

 ?>
