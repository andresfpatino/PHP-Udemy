<?php
//FORMA NO RECOMENDADA
/* esta funcion recibe varios parametros:
1) El servidor localhost
2) usuario
3) contraseña
*/
$conexion = @mysql_connect('localhost' , 'root' , '') or die('No se pudo conectar a la BD');

//seleccionar la BD con la que se quiere trabajar
mysql_select_db('prueba_datos' , $conexion);

// Ejecutar la consulta con mysql_query permite traer los datos de la BD
$resultados = mysql_query('SELECT * FROM usuarios');

// recupera una fila de los resultados y la trae como un objeto
while ($fila = mysql_fetch_array($resultados)) {
  echo $fila['nombre'];
  echo "<br>";
}


 ?>
