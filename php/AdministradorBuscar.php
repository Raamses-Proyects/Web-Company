<?php
  //_____________________________________Funciones generales______________________________
  session_start();//para poder usar variables de sesion
  error_reporting(0);//para no mostrar erroes (solo cuando se termine)

  //_____________________________________Variables___________________________________
  $id = $_POST['txt_ID_busqueda'];

  //____________________________________Variables de sesion________________________
  $sess_nom = $_SESSION['sess_nombre'];//usando la variable de sesion creanda en loginAdministrador.php
  $sess_cla = $_SESSION['sess_clave'];

  //Verificando que se tenga sesion iniciada
  if($sess_nom == null || $sess_nom == "" || $sess_cla == null || $sess_cla == "")
  {
    echo '<script>alert("Usted no tiene autorización para acceder a esta página")
                window.history.go(-1);
                </script>';
    die();//si se cumple sale del prog

}

  //______________________________________Incluyendo Conexión_________________________________________
  include "conexion.php";


  //________________________________________________Creando y ejecutando consulta____________________________________
  $verificarCorreo = mysqli_query($conexion, "SELECT * FROM datos_usuarios WHERE id = $id");

  //Verificando que se haya encontrado datos
  if(mysqli_num_rows($verificarCorreo) > 0)//Si se encontro el correo en la cosulta, arroja resultado mayor a cero
  {

      //Recorriendo los datos y guardado el variables para ponder imprimirlar en la pág.
       while($reg = mysqli_fetch_array($verificarCorreo))
       {
         //$reg['id'];
         echo "<script> alert('Datos de usuarios encontrados:')

         </script>";

          echo "   <!DOCTYPE html>
            <html lang='en' dir='ltr'>
             <head>
               <meta charset='utf-8'>
               <title>EliminarActualzar </title>
               <link rel = 'stylesheet' href='../css/estilos.css'>
               <link rel = 'stylesheet' href='../css/registro.css'>
               <link href='../css/fonts.css' rel='stylesheet'>
             </head>
             <body>


           <!--     Cabecera de página      -->

              <header class = 'main-header'>

                <div class = 'container container__flex'> <!--este div con la clase delimita el contenido de la web.
                  container: es la clase que va a ayudar a delimitar el contenido de la página.
                  container__flex: para poder utilizar flexbox. -->

                  <div class = 'logo-container column column--50'>
                    <h1 class = 'logo'>Administrador </h1>
                  </div>
                  <div class = 'main-header__contactInfo column column--50'>

                    <p class = 'main-header__contactInfo__phone'>
                      <a href='cerrarSesion.php' title = 'Cerrar Sesion' class = 'btnCerrarAdmin'>Cerrar sesion </a><br/>
                      (Borrar o Actualizar datos del<br>
                      usuario solo con su correo) <br>
                    </p>

                  </div>
                </div>

              </header>




          <!--      Cuerpo de pagina (main)      -->


          <main class = 'main'>

              <section class = 'group contact'>
                <center> <h2 class = 'logo' style = color:black >Datos </h2> </center>
                <div class = 'container container__flex'>

              <form method = 'post' action = 'AdministradorActualizar.php' class = 'formulario column column--50'>

                  <label class = 'formulario__label'>ID: </label>
                  <input type='text' class = 'formulario__input-txt' name = 'txtId' value='$reg[id]' placeholder = 'ID' readonly/>

                   <label class = 'formulario__label'>Nombre de usuario:</label>
                   <input type='text' class = 'formulario__input-txt' name = 'txtNombre' value='$reg[nombre]' placeholder = 'Nombre' title = 'Nombre es obligatorio'/>

                   <label class = 'formulario__label'>Correo:</label>
                   <input type='email' class = 'formulario__input-txt' name = 'txtCorreo' value = '$reg[correo]' placeholder = 'Correo' title='Email es obligatorio'/>

                   <label class = 'formulario__label'>Clave:</label>
                   <input type='text' class = 'formulario__input-txt' name = 'txtClave' value = '$reg[contraseña]' placeholder = ''&#128477;'' title='Contraseña es obligatorio'>

                   <label class = 'formulario__label'>Telefono:</label>
                   <input type='text' class = 'formulario__input-txt' name = 'txtTelefono' value = '$reg[telefono]' placeholder = 'Telefono' title='Este campo es opcional'>

                   <label class = 'formulario__label'>Mensaje: </label>
                   <textarea class = 'formulario__textarea' name = 'txtComentarios' rows='10' cols='30' placeholder = 'Opinion del usuario' title='Este campo es opcional' maxlength=255>$reg[mensaje] </textarea>

                   <input type='submit' class = 'btn formulario__btn' value = 'Actualizar'>
               </form>


               </div>
             </section>

           </main>
           <script src='js/menu.js'></script>

           </body>
         </html>

               ";
               exit;
    }//Fin del while

}//fin de if a abre si no
else
{
    echo "<script> alert('ID no encontrado')
          window.history.go(-1);
           </script>";
           exit;
          // header("Location: Administrador.php");
}


 ?>
