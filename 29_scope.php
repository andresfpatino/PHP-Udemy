<?php
// scope o ambito de las variables

// variable global se puede acceder desde cualquier lado menos de las funciones
$numero1 = 7;

// para trabajar variables en una funcion hay que pasarlas como parametros sino no funcionara
function mostrarNumero($numero1){
  echo $numero1;
}
mostrarNumero($numero1);


echo '<br>';

// lo mismo sucede al acceder a una variable en una funcion hay que usar la sentencia return.
function mostrarNumero2(){
  $numero2 = 10;
  return $numero2;
}
echo mostrarNumero2();


 ?>
