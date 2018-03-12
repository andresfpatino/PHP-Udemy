<?php

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto',
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Meses del año</title>
  </head>
  <body>
    <h1>Meses del año</h1>
    <ul>
      <?php
      # Mediante el ciclo foreach podemos recorrer un arreglo y ejecutar determinadas instrucciones por cada elemento del arreglo.
      # Esta es la forma mas facil de recorrer arreglos en PHP.
        foreach ($meses as $mes) {
          echo '<li>' . $mes . '</li>';
        }
      ?>
    </ul>
  </body>
</html>
