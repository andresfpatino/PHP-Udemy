<?php

//$id = $_GET['id'];

try {
	$conexion = new PDO('mysql:host=localhost;dbname=prueba_datos', 'root', '');
	// echo "Conexion OK";

	// Metodo Query
	// $resultados = $conexion->query("SELECT * FROM usuarios WHERE id = 5");

	// foreach ($resultados as $fila) {
	// 	echo $fila['ID'] . ' - ' . $fila['nombre'] . '<br />';
	// }

	// Prepared Statements
	//$statement = $conexion->prepare('INSERT INTO usuarios VALUES(null, "Jose")');
  $statement = $conexion->prepare('SELECT * FROM usuarios');
	$statement->execute();

	$resultados = $statement->fetchAll();
	foreach($resultados as $usuarios){
		echo $usuarios['nombre'] . '<br>';
	}


}catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}

?>
