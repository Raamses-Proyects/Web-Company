<?php
//NOTA: validarLogin.php VA A VALIDAR SI EL usuario ESTA REGISTRADO Y SI ES EL ADMIN O UN USUARIO NORMAL Y DEPENDEDIENDO DE ESO MANDA A UNA PÁG.O OTRA Y OTORGA O NIEGA PERMISOS

//________________________________Functiones generales________________________
  session_start();//para usar variables se sesion
  error_reporting(0);//para no mostrar errores

  //______________________________Guardando variables que ingresa usuario____________________________
  $nombre = $_POST["txtNombre"];
  $clave = $_POST["txtClave"];

  //________________________________________Variables de session_______________________________
  $_SESSION['sess_nombre'];
  $_SESSION['sess_clave'];
  $_SESSION['sess_correo'];

//__________________________________Conexion con la BD_________________________________
  include "conexion.php";

//____________________________Verificando que se hayan ingresado los datos______________________________
  if($nombre == "" || $clave == "")
  {
      echo '<script>alert("Deves llenar todos los espacios")
                    window.history.go(-1);
            </script>';
            exit;//si no pongo esto se sigue corriendo el programa
  }

  //____________________________________Para entrar como Administrador_________________________________
  $adDatos = "SELECT * FROM datos_usuarios WHERE id = 1";//los datos del usuario 1 seran los del admin
  $email = "ramsesfaraon17@gmial.com";//esta email(no es necesario) pero tendra que ser actulizado en caso de ser actulizado en la Pág AdministradorBuscar.php

  //Ejecutando consulta
  $resulAdmin = mysqli_query($conexion, $adDatos);


    while($mostrar = mysqli_fetch_array($resulAdmin))
    {
      //echo $mostrar['nombre'];
      $_SESSION['txtNombre'] = $mostrar['nombre'];//guardando el nombre de usuario comun para validar a pág modelosCmmiPsp.php

      if($mostrar['nombre'] == $nombre && $mostrar['contraseña'] == $clave)
      {
        header("Location:Administrador.php");//Administrador
        $_SESSION['sess_nombre'] = $mostrar['nombre'];
        $_SESSION['sess_clave'] = $mostrar['contraseña'];
        $_SESSION['sess_correo'] = $mostrar['correo'];
      }
      else if($mostrar['nombre'] != $nombre || $mostrar['contraseña'] != $clave)//significa que no es admin y tal vez sea un usuario comun
      {
        //se busca a los demas usuarios que no son admin
        $consulta = "SELECT * FROM datos_usuarios WHERE nombre = '$nombre' AND contraseña = '$clave'";
        $resultado = mysqli_query($conexion, $consulta);


        $filas = mysqli_num_rows($resultado);
        if($filas > 0)//si encontro uno o mas datos siginifica que usuario esta registrado
        {
          //Para verificacion en pág modelosCmmiPsp.php
          while($mostrarNombre = mysqli_fetch_array($resultado))
          {
            $_SESSION['txtNombre'] = $mostrarNombre['nombre'];//guardando el nombre de usuario comun para validar a pág modelosCmmiPsp.php
          }

          header("Location:modelosCmmiPsp.php");//redireccionando a una página especifica
        }
        else
        {
          $_SESSION['txtNombre'] = "";//lo elimino para que no se mande un dato e interprete que esta bien y se loguee como usuario normal
          echo '<script>alert("Error en la auntenticación")
                        window.history.go(-1);
                </script>';
        }

      }

    }//fin de while

  mysqli_free_result($resulAdmin);//liberando los resultados porque esta consumiendo espacio en memoria
  mysqli_close($conexion);//cerrando conexión
 ?>
