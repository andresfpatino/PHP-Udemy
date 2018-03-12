<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <!--Libreria alertas js-->
    <script src="lib/sweetalert/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="lib/sweetalert/sweetalert.css">
    <!---->
    <title>Galeria</title>
  </head>
  <body>
    <header>
      <div class="contenedor">
        <h1 class="titulo">Subir foto</h1>
      </div>
    </header>

    <div class="contenedor">
      <form class="formulario" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <label for="foto">Selecciona tu foto</label>
        <input type="file" id="foto" name="foto">
        <label for="titulo">Titulo de tu foto</label>
        <input type="text" id="titulo" name="titulo">
        <label for="texto">Descripción:</label>
        <textarea name="texto" id="texto" placeholder="Ingresa una descripción"></textarea>
        <input type="submit" class="submit" value="Subir foto">
      </form>
    </div>
    <footer>
      <p class="copyright"> Galería creada por Andrés Felipe Patiño - 2016</p>
    </footer>
  </body>
</html>
