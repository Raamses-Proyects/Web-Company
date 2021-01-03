<?php

  $c = 0;
  $cmmi = 0;
  $psp = 0;

  if($_POST['Pregunta1'] == "r1")
  {
    $c++;
  }

  if($_POST['Pregunta2'] == "r2")
  {
    $c++;
  }

  if($_POST['Pregunta3'] == "r3")
  {
    $c++;
  }

  if($_POST['Pregunta4'] == "r4")
  {
    $c++;
  }

  if($_POST['Pregunta5'] == "r5")
  {
    $c++;
  }

  if($_POST['Pregunta6'] == "r6")
  {
    $c++;
  }

  if($_POST['Pregunta7'] == "r7")
  {
    $c++;
  }

  if($_POST['Pregunta8'] == "r8")
  {
    $c++;
  }

//Si se sacaron buenas calificaciones se dispara un alert felicitando y se cierra sesion y se redirecciona para la página principal
  if($c == 8)
  {
    echo '<script>alert("Sacaste el 100% bien Felicidades!!")
          location.href ="modelosCmmiPsp.php";
          </script>';

  }
  else if($c == 7)
  {
    echo '<script>alert("Saliste bien!!")
            location.href ="modelosCmmiPsp.php";
          </script>';
  }

  //Si no se saca buenas calificaciones especialmente en el tema de CMMI
  if($_POST['Pregunta1'] != "r1")
  {
      $cmmi++;
  }

  if($_POST['Pregunta2'] != "r1")
  {
      $cmmi++;
  }

  if($_POST['Pregunta3'] != "r3")
  {
      $cmmi++;
  }

  if($_POST['Pregunta4'] != "r4")
  {
      $cmmi++;
  }

     if($cmmi >= 2 && $cmmi < 4)
     {
       echo '<script>alert("Te recomendamos volver a leer sobre el modelo CMMI")
               location.href ="modelosCmmiPsp.php";
             </script>';
            echo "<script>console.log('cmmi .$cmmi. psp .$psp') </script>";
     }

     //Si no se saca buenas calificaciones especialmente en el tema de psp
     if($_POST['Pregunta5'] != "r5")
     {
         $psp++;
     }

     if($_POST['Pregunta6'] != "r6")
     {
         $psp++;
     }

     if($_POST['Pregunta7'] != "r7")
     {
         $psp++;
     }

     if($_POST['Pregunta8'] != "r8")
     {
         $psp++;
     }

        if($psp >= 2 && $psp < 4)
        {
          echo '<script>alert("Te recomendamos volver a leer sobre el modelo PSP")
                  location.href ="modelosCmmiPsp.php";
                </script>';
                echo "<script>console.log('cmmi .$cmmi. psp .$psp') </script>";
        }

    //Y si se salio igualmente mal en los dos temas
    if($cmmi == 4 & $psp == 4)
    {
      echo '<script>alert("Huyy te recomendamos leer mas sobre los dos modelos CMMI y PSP")
              location.href ="modelosCmmiPsp.php";
            </script>';
              echo "<script>console.log('cmmi .$cmmi. psp .$psp') </script>";
    }
 ?>
