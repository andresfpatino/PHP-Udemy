<?php

/*
# La funcion htmlspecialchars permite convertir caracteres especiales en entidades HTML
# para que no se ejecuten en el navegador y evitar que puedan inyectar código el el sitio web
*/
$caracteres = '< > & "" ';
echo htmlspecialchars($caracteres) . '<br>';

// trim elmina los espacios en blanco al inicio y al final de una cadena de texto
$texto = ' Hola ';
echo trim($texto).'<br>';

// strlen permite calcular el tamaño de un string incluyendo los espacios (cadena de texto)
$texto2 = 'Felipe Patino';
echo strlen($texto2).'<br>';

/* substr permite retornar un pedazo de una linea de una cadena de texto
#  mediante sus parametros indicamos desde donde hasta donde va mostrar (caracteres)
*/
echo substr($texto2 , 0 , 4 ) . '<br>';

// strtoupper Permite convertir todos los caracteres en Mayusculas
echo strtoupper($texto2).'<br>';

// strtolower Permite convertir todos los caracteres en Minusculas
echo strtolower($texto2).'<br>';

/* strrpos Permite conocer en que posición se encuentra una letra mediante dos parametros
#  el primero es el texto y el segundo la letra que queremos encontrar
*/
echo strrpos($texto2 , 'P').'<br>';

 ?>
