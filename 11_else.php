<?php

$mes = 'Diciembre';
$verdadero = true;

// if ($verdadero){
// 	echo "Verdadero";
// }else {
// 	echo "Falso";
// }

if ($mes == 'Diciembre') {
	 echo "<h1>Feliz Navidad</h1>";
} else if($mes == "Enero") {
			echo "Feliz año nuevo";
}else if ($mes == "Julio"){
	echo "Feliz julio";
}else {
	echo "El mes que pusiste no tiene celebracion";
}

?>
