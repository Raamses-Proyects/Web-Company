<?php
    //Guardando variable que ingresa usuario
    $buscar_id = $_POST['txt_ID_eliminar'];

    //Incluyendo conexion
    include "conexion.php";

    //Creando consulta para buscar ID
    $queryBuscar = "SELECT id FROM datos_usuarios WHERE id = $buscar_id";

    //Ejecutando consulta
    $excuteBuscar = mysqli_query($conexion, $queryBuscar);


    if($buscar_id == "" || $buscar_id == null)
    {
      echo '<script>alert("Tienes que ingresar el ID para eliminar")
          window.history.go(-1);
      </script>';
    }
    else if(mysqli_num_rows($excuteBuscar) > 0)
    {

      while($mostrar = mysqli_fetch_array($excuteBuscar))
      {

        if($mostrar['id'] == $buscar_id)//verificando que el id que el usuario ingreso se el mismo que el de la BD
        {
          //Creando consulta para eliminar
          $queryDelete = "DELETE FROM datos_usuarios WHERE id = $buscar_id";
          //Ejecutando consulta
          $excuteDelete = mysqli_query($conexion, $queryDelete);

          echo "<script> alert('Datos eliminados Correctamente');
            window.history.go(-1);
           </script>";
        }

      }//fin de while

    }
    else
    {
      echo '<script>alert("El ID ingresado no existe")
          window.history.go(-1);
      </script>';
    }



?>
