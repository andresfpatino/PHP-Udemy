<?php
/** El ciclo do while permite que se ejecute el código de la instruccion
    al menos una vez, asi falle
**/

$i = 1;

do {
  # Instrucciones
  echo $i . '<br>';
  $i++;
} while ($i <= 20);

?>
