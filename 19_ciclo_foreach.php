<?php

// El ciclo foreach se usa para recorrer arreglos asociativos

//Arreglo Asociativo
$felipe = array (
  'telefono' => 316243616,
  'Edad' => 20,
  'Pais' => 'Colombia'
);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ciclo Foreach</title>
  </head>
  <body>
    <ul>
        <?php
          foreach ($felipe as $dato => $valor) {
            echo '<li>' . $dato . ':' . $valor . '</li>';
          }
        ?>
    </ul>
  </body>
</html>
