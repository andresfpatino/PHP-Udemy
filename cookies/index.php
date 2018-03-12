<?php
//las cookies con pequeños archivos que crea el servidor en el pc para guardar pequeña información de preferencias
// guardan solamente hasta 4MB  de informacion

/* la cookie recibe varios parametros
1) el nombre
2) el valor
3) tiempo de duracion de la cookie
4) donde queremos que este disponible la cookie
*/
setcookie('font-size', '40px', time() + 60 * 60 * 24 * 30, '/');
// esta cookie guarda el tamaño de texto, durante 30 días en todo el sitio '/'

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Cookie Seteada</title>
   </head>
   <body>
     <h1>Cookie seteada</h1>
   </body>
 </html>
