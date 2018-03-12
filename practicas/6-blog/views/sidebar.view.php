
<?php
  //Obtiene los Post
  $posts = obtener_post($blog_config['post_sidebar'] , $conexion);
  if (!$posts) {
    header('Location : error.php');
  }
?>

<div class="col-md-4">
  <div class="sidebar busqueda">
    <h2>Búscar artículos</h2>
    <form class="buscar" name="busqueda" action="<?php echo RUTA; ?>/buscar.php" method="GET">
      <input type="text" name="busqueda" placeholder="Buscar">
      <button type="submit" class="icono fa fa-search"></button>
    </form>
  </div>
  <div class="sidebar">
    <h2>Últimos artículos</h2>
      <?php foreach ($posts as $post): ?>
        <article class="post-small">
          <div class="post-small-image">
            <a href="#">
              <img src="<?php echo RUTA; ?>/imagenes/<?php echo $post['thumb'] ?>" class="post-image" alt="">
            </a>
          </div>
          <div class="post-small-content">
            <h4 class="post-small-title">
              <a href="single.php?id=<?php echo $post['id'] ?>"><?php echo $post['titulo']; ?></a>
            </h4>
            <div class="post-small-entry"><span><?php echo fecha($post['fecha']); ?></span></div>
          </div>
        </article>
      <?php endforeach; ?>
  </div>
</div>
