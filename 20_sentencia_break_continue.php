<?php

$paises = array (
  'Mexico', 'España','Colombia','Peru',
  'Argentina','Venezuela','Guatemala'
);

// La sentencia break permite parar la ejecucion de todo el ciclo
foreach ($paises as $pais) {
  echo $pais . '<br>';
  if ($pais == 'Venezuela') {
    break;
  }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sentencia Break</title>
  </head>
  <body>
    <h1>Paises de LatinoAmerica</h1>
    <?php
      // La sentencia continue permite saltar la ejecucion a la siguiente
      foreach ($paises as $pais) {
        if ($pais == 'España') {
          continue;
        }
        echo $pais . '<br>';
      }

     ?>
  </body>
</html>
