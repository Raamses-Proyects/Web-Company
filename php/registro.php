<?php
//_________________________Guardando variables que ingresa usuario______________________
$nombre = $_POST["txtNombre"];
$correo = $_POST["txtCorreo"];
$clave = $_POST["txtClave"];
$telefono = $_POST["txtTelefono"];
$mensaje = $_POST["txtaMensaje"];

//_______________________Incluyendo conexion______________________________
include "conexion.php";

//_______________________Creando consulta para Insertar_________________________________
$queryInsert = "INSERT INTO datos_usuarios(nombre, correo, contraseña, telefono, mensaje)
             VALUES ('$nombre', '$correo', '$clave', '$telefono', '$mensaje')";


//----------Verificiones de para que no se ingresen campos repetidos----------------
$verificarUsuario = mysqli_query($conexion, "SELECT * FROM datos_usuarios WHERE nombre = '$nombre'");
if(mysqli_num_rows($verificarUsuario) > 0)//si ya hay un usuario
{
    echo "<script> alert('El nombre de usuario ya esta registrado, Ingrese otro.')
          window.history.go(-1);
          </script>";
    exit; //En caso de ser verdadera se sale para que no se ejecute la consulta
}

if($nombre == "")
{
  echo "<script> alert('Tiene que ingresar un nombre de usuario.')
        window.history.go(-1);
        </script>";
  exit; //En caso de ser verdadera se sale para que no se ejecute la consulta
}

$verificarCorreo = mysqli_query($conexion, "SELECT * FROM datos_usuarios WHERE correo = '$correo'");
if(mysqli_num_rows($verificarCorreo) > 0)//si ya hay un usuario
{
    echo "<script> alert('El correo ya esta registrado, Ingrese otro.')
            window.history.go(-1);
           </script>";
    exit; //En caso de ser verdadera se sale para que no se ejecute la consulta
}

if($correo == "")
{
  echo "<script> alert('Tiene que ingresar una direccion de correo.')
        window.history.go(-1);
        </script>";
  exit; //En caso de ser verdadera se sale para que no se ejecute la consulta
}

if($clave == "")
{
  echo "<script> alert('Parece que no ingreso una clave.')
        window.history.go(-1);
        </script>";
  exit; //En caso de ser verdadera se sale para que no se ejecute la consulta
}

//___________________________________Ejecutando consulta para insertar________________________
$resultado = mysqli_query($conexion, $queryInsert);//para ejecutar la consulta se necesita la variable de conexión y la consulta

  if(!$resultado)
  {
    echo "Error al registrarse";
  }
  else
  {//Aqui deberia de redireccioanr al login
    echo "<script>alert('Usuario registrado exitosamente');
            location.href='../login.html'
            </script>";
          //header("location:../login.html");//redireccionando a una pagina en php
  }

  //Cerrando conexion
  mysqli_close($conexion);
 ?>
