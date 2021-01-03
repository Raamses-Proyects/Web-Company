<?php
//_______________________________________Incluyendo la conexion______________________________________
include "conexion.php";

//_______________________________________Creando consulta__________________________________________
$queryUpdate = "UPDATE datos_usuarios SET nombre = '$_POST[txtNombre]', correo = '$_POST[txtCorreo]',
contraseña = '$_POST[txtClave]', telefono = '$_POST[txtTelefono]', mensaje = '$_POST[txtComentarios]'
WHERE id = '$_POST[txtId]'";


//_______________________________________Ejecutando consulta__________________________________________
$excute = mysqli_query($conexion, $queryUpdate);


//_______________________________________Verificando consulta_________________________________________
if($excute)
{
  echo "<script> alert('Datos actulizados:')
            window.location='Administrador.php';//no me puedo debolver a AdministradorBuscar.php por que para entrar allí anteriormente se tiene que buscar a un usario y marcaba error en caso de no
        </script>";
}
else
{
  echo "<script> alert('Error al actualizar')
            //window.history.go(-1);
        </script>";
}

?>
