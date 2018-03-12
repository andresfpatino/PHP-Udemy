<?php

$mes = 'Febrero';

// El SWITCH Es una manera alternativa de trabajar condicionales if , else if , else.

switch($mes){
	case 'Diciembre':
		echo "Feliz Navidad";
	break;

	case 'Enero':
		echo "Feliz Año Nuevo";
	break;

	default:
		echo "En este mes no se celebra nada";
	break;
}

// Hace lo mismo pero con condicionales if, else if, else

if ($mes == 'Diciembre') {
	echo "Feliz Navidad";
} else if ($mes == 'Enero') {
	echo "Feliz Año Nuevo";
} else {
	echo "En este mes no se celebra nada";
}

?>
