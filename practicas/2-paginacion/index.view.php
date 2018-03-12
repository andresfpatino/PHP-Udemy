<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Páginación</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
    <div class="contenedor">
      <h1>Artículos</h1>
      <section class="articulos">
        <ul>
          <?php foreach ($articulos as $articulo): ?>
            <li> <?php echo $articulo['id'] . '.-' . $articulo['articulo'] ?> </li>
          <?php endforeach; ?>
        </ul>
      </section>
      <section class="paginacion">
        <ul>
          <!-- establecemos el boton anterior esta deshabilitado -->
          <?php if ($pagina == 1): ?>
            <li class="disabled">&laquo;</li>
          <?php else: ?>
            <li><a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li>
          <?php endif; ?>

          <!-- se ejecuta el ciclo para mostrar el numeros de la páginacion-->
          <?php
            for ($i=1 ; $i <= $numeroPaginas ; $i++) {
              if ($pagina == $i) {
                echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
              } else{
                echo "<li><a href='?pagina=$i'>$i</a></li>";
              }
            }
           ?>
           <!-- se establece cuando el boton siguiente esta deshabilitado -->
           <?php if ($pagina == $numeroPaginas): ?>
             <li class="disabled">&raquo;</li>
           <?php else: ?>
             <li><a href="?pagina=<?php echo $pagina + 1 ?>">&raquo;</a></li>
           <?php endif; ?>

        </ul>
      </section>
    </div>
  </body>
</html>
