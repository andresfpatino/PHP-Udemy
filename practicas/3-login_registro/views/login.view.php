<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Iniciar sesión</title>
  </head>
  <body>
    <div class="contenedor">
      <h1 class="titulo">Iniciar sesión</h1>
      <hr class="border">
      <form class="formulario" name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="form-group">
          <i class="icono izquierda fa fa-user"></i><input class="usuario" type="text" name="usuario" placeholder="Usuario">
        </div>

        <div class="form-group">
          <i class="icono izquierda fa fa-lock"></i><input class="password_btn" type="password" name="password" placeholder="Contraseña">
          <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
        </div>

        <?php if(!empty($errores)): ?>
          <div class="error">
            <ul>
              <?php echo $errores; ?>
            </ul>
          </div>
        <?php endif; ?>

      </form>
      <p class="texto-registrate">
        ¿ Aun no tienes cuenta?
        <a href="registrate.php">Registrate</a>
      </p>
    </div>

  </body>
</html>
