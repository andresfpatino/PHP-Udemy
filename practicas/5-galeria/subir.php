<?php
require 'funciones.php';
require 'views/subir.view.php';
// Conexión a la BD
$conexion = conexion('galeria_udemy' , 'root' , '');
if (!$conexion) {
  die();
}
// Comprueba si se enviaron los datos del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
  //Comprueba que el archivo es una imagen y la guarda
  $check = @getimagesize($_FILES['foto']['tmp_name']);
  if ($check !== false) {
    $carpeta_destino = 'fotos/';
    $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'] , $archivo_subido);
    // Ejecuta la consulta SQL - Inserta la ruta en la base de datos
    $statement = $conexion->prepare('
        INSERT INTO fotos (titulo , imagen , texto)
          VALUES (:titulo , :imagen , :texto)
    ');
    $statement->execute(array(
        ':titulo' => $_POST['titulo'],
        ':imagen' => $_FILES['foto']['name'],
        ':texto' => $_POST['texto']
    ));
    echo "<script type='text/javascript'>
      swal({
        type:'success',
        title: 'Buen trabajo!',
        text: 'Archivo subido con éxito!',
        timer: 3000,
        showConfirmButton: false
      });
    </script>";
    header("Refresh:3.3; URL=index.php");
  }else{
    echo "<script type='text/javascript'>
      swal({
        type:'error',
        title: 'Algo fallo!',
        text: 'El archivo no es una imagen o es muy pesado!',
        timer: 4000,
        showConfirmButton: false
      });
    </script>";
  }
}





 ?>
