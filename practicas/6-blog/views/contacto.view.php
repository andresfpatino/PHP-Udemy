<?php  require 'header.php'; ?>

<div class="intro-small ">
  <div class="contenedor">
    <h1 class="caption">Contacto</h1>
  </div>
</div>

<div class="contenedor">
  <div class="post">
    <article>
      <form class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Nombre" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
        <input type="text" id="correo" class="form-control" name="correo" placeholder="Correo" value="<?php if(!$enviado && isset($correo)) echo $correo ?>">
        <input type="text" id="telefono" class="form-control" name="telefono" placeholder="Telefono" value="<?php if(!$enviado && isset($telefono)) echo $telefono ?>">
        <textarea id="mensaje" class="form-control" placeholder="Mensaje" name="mensaje"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>

        <?php if (!empty($errores)): ?>
          <div class="alert error">
            <?php echo $errores ?>
          </div>
        <?php elseif($enviado): ?>
          <div class="alert success">
              <p>Mensaje enviado correctamente</p>
          </div>
        <?php endif ?>

        <input type="submit" class="btn btn-primary" name="submit" value="Enviar">
      </form>
    </article>
  </div>
</div>

<?php require 'footer.php'; ?>
