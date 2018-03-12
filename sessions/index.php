
<?php
  // Una sesión es una variable que podemos utilizar en diferentes páginas
  session_start();
  // crea la sesion
  $_SESSION['nombre'] = 'Felipe Patiño';

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Sessions</title>
   </head>
   <body>
     <h1>Página de inicio</h1>
     <p></p>
     <a href="pagina2.php">Ir a la página 2</a>
   </body>
 </html>
