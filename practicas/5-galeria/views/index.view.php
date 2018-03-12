<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Galeria</title>
  </head>
  <body>
    <header>
      <div class="contenedor">
        <div class="paginacion"><a href="subir.php">Subir Fotos <i class="fa fa-file-image-o"></i></a></div>
      </div>
      <h1 class="titulo">Galería en PHP y MYSQL</h1>
    </header>
    <section class="fotos">
      <div class="contenedor">

        <?php foreach ($fotos as $foto): ?>
            <div class="thumb">
                <a href="foto.php?id=<?php echo $foto['id'] ?>">
                  <img src="fotos/<?php echo $foto['imagen'] ?>" alt="<?php echo $foto['titulo'] ?>" />
                </a>
            </div>
        <?php endforeach; ?>

        <div class="paginacion">
          <!-- <a href="#" class="izquierda"><i class="fa fa-long-arrow-left"></i>Página Anterior</a>
          <a href="#" class="derecha">Página Siguiente<i class="fa fa-long-arrow-right"></i></a> -->
          <?php if ($pagina_actual > 1): ?>
              <a href="index.php?p=<?php echo $pagina_actual -1 ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i>Página Anterior</a>
          <?php endif; ?>

          <?php if ($total_paginas != $pagina_actual): ?>
              <a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha">Página Siguiente<i class="fa fa-long-arrow-right"></i></a>
          <?php endif; ?>

        </div>

      </div>
    </section>
    <footer>
      <p class="copyright"> Galería creada por Andrés Felipe Patiño - 2016</p>
    </footer>

  </body>
</html>
