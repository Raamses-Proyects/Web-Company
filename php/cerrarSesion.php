<?php
  session_start();

  error_reporting(0);//metodo para quitar los informes de los errores
  $session = $_SESSION['txtNombre'];

  if($session == null || $session == '')
  {
    echo "Usted no tiene autorización";
    die();
  }

  session_destroy();
  header("Location: ../index.php");
 ?>
