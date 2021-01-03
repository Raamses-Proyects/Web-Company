<?php

//Creando conexion y guardando en variable
$conexion = mysqlI_connect("localhost", "root", "", "creacion_proyectos_web");//esta variable tiene los datos para acceder a la BD, servidor, usuario, contraseña(en esta caso no hay) y el nombre de la BD

  //Verificando conexion a la base de datos
  if(!$conexion)
  {
    echo "Error al conectar base de datos";
  }
  else
  {
    echo '<script>console.log("Conectado a la base de datos")</script>';
  }

 ?>
