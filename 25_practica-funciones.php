<?php

function calcular_area_triangulo($base , $altura){
  $resultado = ($base * $altura) / 2;
  return $resultado;
}
$area_triangulo = calcular_area_triangulo(15 , 30);
echo 'El triangulo tiene un area de ' . $area_triangulo . 'm<sup>3</sup>';

 ?>
