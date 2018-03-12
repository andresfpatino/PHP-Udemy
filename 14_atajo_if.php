<?php

  $edad = 18;
  $edad = (isset($edad)) ? $edad : 'El usuario no establecio su edad';
  echo 'Edad: '. $edad;

  // Lo anterior seria esto mismo
  // if (isset($edad)) {
  //     $edad = $edad;
  //   }else{
  //     $edad = 'El usuario no establecio su edad';
  // }

?>
