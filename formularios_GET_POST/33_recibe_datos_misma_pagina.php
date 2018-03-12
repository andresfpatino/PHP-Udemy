<?php
if ($_POST) {
  echo $_POST['nombre'];
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formularios</title>
  </head>
  <body>
    <!-- El metodo GET envía los parametros por la url -->
    <!-- El metodo POST envía los parametros detras del navegador (no son visibles) -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
      <input type="text" placeholder="Nombre:" name="nombre">
      <input type="text" placeholder="Apellido:" name="apellido">
      <br>
      <label for="hombre">Hombre</label>
      <input type="radio" name="sexo" value="hombre" id="hombre">
      <label for="mujer">Mujer</label>
      <input type="radio" name="sexo" value="mujer" id="mujer">
      <br>
      <label for="year">Selecciones su año de nacimiento</label>
      <select name="year" id="year">
        <?php
        	$tope = date("Y");
        	$edad_max = 25;
        	$edad_min = 18;
        	for($a= $tope - $edad_max; $a<=$tope - $edad_min; $a++)
        		echo "<option value='$a'>$a</option>";
        ?>
      </select>
      <br>
      <input type="checkbox" name="terminos" id="terminos" value="ok">
      <label for="terminos">Acepta los terminos</label>
      <br>
      <input type="submit" value="Enviar">
    </form>
  </body>
</html>
