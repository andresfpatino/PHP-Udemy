<?php

$meses = array (
  'Enero','Febrero','Marzo','Abril',
  'Mayo','Junio','Julio','Agosto',
  'Septiembre','Octubre','Noviembre','Diciembre'
);

//echo count($meses);

//Recorrer el Arreglo con FOR
for ($i=0; $i < count($meses); $i++ ) {
  echo 'Recorriendo el arreglo con for:' . $meses[$i] . '<br>';
}

echo "<hr>";

//Recorrer el Arreglo con WHILE
$contador = 0;
while ($contador < count($meses)) {
echo 'Recorriendo el arreglo con while ' . $meses [$contador] . '<br>';
  $contador++;
}

//Ambos tienen el mismo funcionamiento
?>
