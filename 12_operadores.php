<?php
echo '<h1>Tipos de peradores en PHP</h1>';

# Operadores Aritméticos:
/* --
+	Suma
-	Resta
*	Multiplicación
/	División
% permite sacar la diferencia
-- */

$aritmeticos_numero = 10;
$aritmeticos_numero2 = 6;
$resultado_aritmeticos = $aritmeticos_numero + $aritmeticos_numero2;
echo '<b>Resultado operador aritmetico:</b> ' . $resultado_aritmeticos . '<br>';

# Operadores de Asignación:
/*--

=
+=
-=
*=
/=

-- */

$asignacion_numero = 10;
$asignacion_numero2 = 5;

// $asignacion_numero = $asignacion_numero + 7;
$asignacion_numero += 7;
echo '<b>Operador de asignaci&oacute;n:</b> ' . $asignacion_numero . '<br>';

# Operadores de Comparación:
/*--
==
===
!=, <>
!==
>
<
>=
<=
-- */
$numero = '10'; // String
//$variable = 'true';

if ($numero == 10) {
	echo '<b>Operador de comparaci&oacute;n:</b> ' . "La condici&oacute;n se cumple, es = a 10" . '<br>';
}

# Operadores Lógicos:
/*
and, &&
or, ||
xor
!
-- */
$numero = 10;

if ($numero >= 10 && $numero < 20) {
	echo '<b>Operador logico:</b> ' . "La condicion se ejecuta. es >= 10 y < 20" . '<br>';
}

# Operadores de Incremento / Decremento:
/*
++$x
$x++
--$x
$x--

-- */

$numero = 10;
$numero = $numero + 1;
$numero += 1;
echo '<b>Operador de decremento</b>: ' . '11 - 1 =' . $numero-- . '<br>';

echo '<b>Operador de incremento: </b>' . '10 + 1 =' . $numero . '<br>';

# Operadores de Cadenas:

/*
.
.=

-- */

$texto = 'Cadena de Texto';
$texto .= ' Una segunda Cadena de Texto';

echo '<b>Operadores de cadenas:</b> ' . $texto;

?>
