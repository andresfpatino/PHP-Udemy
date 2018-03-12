<?php

// extract Sirve para extraer los elementos de un arreglo asociativo como si fuesen variables
$amigo = array('telefono' => 3771253 , 'edad'=> 20 , 'pais'=> 'mexico' );
extract($amigo);
echo $telefono . '<br>' . $edad . '<br>' . $pais;

echo "<hr>";

// array_pop permite extraer el ultimo elemento al final de un arreglo
$semana = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
$ultimo_dia = array_pop($semana);
foreach ($semana as $dia) {
  echo $dia . '<br>';
}
echo 'El ultimo dia es: '. $ultimo_dia ;

echo "<hr>";

// join recibe dos parametros el primero cualquier cosa el segundo es el arreglo.
// en pantalla separa y muestra cada elemento del array separado por el primer parametro
echo join(' - ' , $semana);

echo "<hr>";

// permite conocer cuantos elementos tiene un arreglo
echo count ($semana);

echo "<hr>";

// sort permite mostrar el arreglo en orden ascendente alfabetico
sort($semana);
echo join(',' , $semana);

echo "<hr>";

// rsort permite mostrar el arreglo en orden descendente  alfabetico
rsort($semana);
echo join(',' , $semana);

echo "<hr>";
// array_reverse invierte el array_pop
$semana_reversa = array_reverse($semana);
echo join(',' , $semana_reversa);



 ?>
