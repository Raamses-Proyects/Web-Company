<?php
  session_start();
  error_reporting(0);
  $id = 1;//el id es uno porque quiero el ADMIN sea el 1

  //VARIABLES DE SESION (RECIVEN SUS VALORES EN validarLogin.php)
  $_SESSION['sess_nombre'];
  $_SESSION['sess_clave'];
  $_SESSION['sess_correo'];


  //______________________________________________Incluyendo conexion___________________________________________
  include "conexion.php";

  //__________________________________________Ejecutando y creando consulta__________________________________________
  $verificarAdmin = mysqli_query($conexion, "SELECT id, nombre, correo, contraseña FROM datos_usuarios WHERE id = $id");


  //__________________________________________VERIFICACION 1____________________________________________________
  //Buscando datos en la BD y comparandolos con variables para verificar que sean las del administrador
  while($reg = mysqli_fetch_array($verificarAdmin))//si ya hay un usuario
  {

    //Si alguno de estos es diferente no es el admin
    if($reg['id'] != $id || $reg['correo'] != $_SESSION['sess_correo'] || $reg['nombre'] != $_SESSION['sess_nombre'] || $reg['contraseña'] != $_SESSION['sess_clave'])
    {
      //echo "$reg[id] y el $reg[correo] y el nombre es: $reg[nombre]";
      echo '<script>alert("Página solo para Administrador (V1)")
                window.history.go(-1);
            </script>';
      die();//no ejecutar el codigo siguiente
    }

  }//fin del while



///////////////////////////////////////////////////////////////////////////////////////////////////////////////
//_______________________________VERIFICACION 2: Siginifica que no e iniciado sesion_____________________________________
if($_SESSION['sess_nombre'] == null || $_SESSION['sess_nombre'] == '')
  {
    echo '<script>alert("Página solo para Administrador (V2)")
                  window.history.go(-1);
          </script>';
    die();//no ejecutar el codigo siguiente
  }



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Administrador </title>

    <link rel = "stylesheet" href="../css/estilos.css">
    <link rel = "stylesheet" href="../css/registro.css">

    <link href="../css/fonts.css" rel="stylesheet">

  </head>
  <body>

    <!--     Cabecera de página      -->
    <header class = "main-header">

      <div class = "container container__flex"> <!--este div con la clase delimita el contenido de la web.
        container: es la clase que va a ayudar a delimitar el contenido de la página.
        container__flex: para poder utilizar flexbox. -->

        <div class = "logo-container column column--50">
          <h1 class = "logo">Administrador </h1>
        </div>

        <div class = "main-header__contactInfo column column--50">

          <p class = "main-header__contactInfo__phone">
            <a href="cerrarSesion.php" class = "btnCerrarAdmin">Cerrar sesion </a>
            (Borra, Muestra y Actualiza a usuarios) <br>
          </p>

        </div>
      </div>

    </header>

    <nav  class = "main-nav">
      <div class = "container container__flex">
        <span class = "icon-menu" id = "btnMenu"> </span> <!--este el logo de menu y el boton para el menu(su id para ser el btn)-->
        <ul class = "menu" id = "IdMenu"><!--<ul>:son las barras de navegación. Y aqui esta el id para el menu-->
          <li class = "menu--item"><a href = "../index.php" class = "menu--link ">Inicio </a> </li>
          <li class = "menu--item"><a href = "../nosotros.html" class = "menu--link">Nosotros </a> </li>
          <li class = "menu--item"><a href = "../registro.html" class = "menu--link">Registro </a> </li>
          <li class = "menu--item"><a href = "../login.html" class = "menu--link">Login </a> </li>
          <li class = "menu--item"><a href = "php/Administrador.php" class = "menu--link menu__link--select">Administrador </a> </li>
        </ul>

      </div>
    </nav>

    <!--      Cuerpo de pagina (main)      -->
    <section class = "banner">
      <img src = "../img/suscribete.jpg" class = "banner__img"> <!--   1 imagen   -->
      <div class = "banner__content">Ten el control de tus datos  </div>
    </section>

    <main class = "main">

      <section class = "group contact">
        <br/> <br/>
        <div class = "container container__flex">

           <!--_________________________Aqui se esta creando el formulario_______________________----------------->
          <form action = "AdministradorBuscar.php" method = "post" class = "formulario column column--50">
              <h2 class = 'group__titleA'>Mostrar datos </h2>
              <label class = "formulario__label">ID de usuario:</label>
              <input type="text" class = "formulario__input-txt" name = "txt_ID_busqueda" placeholder = "Ingrese el ID para buscar" title="Ingrese el ID">

              <input type="submit" class = "btn formulario__btn" value = "Mostrar" title="Para buscar usuarios ingrese el Correo">
          </form>


          <form action = 'AdministradorEliminar.php' method = 'post' class = 'formulario column column--50'>

             <h2 class = 'group__titleA'>Borrar datos </h2>
             <label class = 'formulario__label'>ID:</label>
             <input type='text' class = 'formulario__input-txt' name = 'txt_ID_eliminar' placeholder = 'Eliminar por ID' title='Ingresar ID para eliminar'>

             <input type='submit' class = 'btn formulario__btn' value = 'Borrar'>

           </form>
        </div>
      </section>

    </main>

<script src="../js/menu.js"></script>
  </body>
</html>
