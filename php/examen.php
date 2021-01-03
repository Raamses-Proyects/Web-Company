<?php
  //_____________________________________Funciones generales_____________________________
  session_start();
  error_reporting(0);

  //______________________________Verificando que se tenga sesion iniciada____________________
  $session = $_SESSION['txtNombre'];

  if($session == null || $session == '')
  {
    echo '<script>alert("Para contestar el examen tiene que tener sesion iniciada")
                  window.history.go(-1);
          </script>';
    die();//no ejecutar el codigo siguiente
  }

//Si la consulta que se hizo en validarLogin.php no da resultados la variable $_SESSION['txtNombre'] se iguala a "" y si la variable no
//contiene nada no entra a la pagia de examen
  if(isset($_SESSION['txtNombre']) == '')
  {
    echo '<script>alert("Usted no tiene autorización para acceder a esta página")
                  window.history.go(-1);
          </script>';
    die();//no ejecutar el codigo siguiente
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Examen</title>
    <link rel = "stylesheet" href="../css/estilos.css">
    <link rel = "stylesheet" href="../css/examen.css">
    <link href="https://file.myfontastic.com/P8JtHYoLn2HVEEgxj7TN9A/icons.css" rel="stylesheet">
  </head>

  <body>
    <!--____________________________________________Cabecera de página_____________________________________________-->
    <header>

      <h1 class = "logo">Prueba </h1>
      <div class = "main-header__contactInfo column column--50">
        <p class = "main-header__contactInfo__phone" style="font-size: 1.0em" >
           Usuario: <?php echo $_SESSION['txtNombre'] ?>
        </p>
      </div>

    </header>

    <!--_______________________________________Cuerpo de página________________________________________________-->

    <main class = "main">

      <section class = "group contact">
        <h2 class = "group__title">Contestar los sigueintes reactivos </h2>
        <div class = "container container__flex">

           <!--______________________________________Aqui se esta creando el formulario_______________________________-->
          <form action = "examenCalcular.php" method = "post" class = "formulario column column--50">

              <p>
                1.- ¿Que es CMMI?
              </p>
              <div class="estiloOpciones">

                <label><input type="radio"   name = "Pregunta1" value="r1" checked >Es un modelo para la
                  mejora y evaluación de procesos para el desarrollo.</label><br><br>

                <label><input type="radio"  name = "Pregunta1" value = "x1">Es un proceso personal de software.</label><br><br>

                <label><input type="radio"  name = "Pregunta1" value = "y1"> Es proceso para equipo de Ingenieros de Software.</label><br><br>
              </div>

              <p>
                2.- ¿En que universidad se desarrollo este modelo?
              </p>

              <div class="estiloOpciones">
                <label><input type="radio"  name = "Pregunta2" value="x2" checked/> Universidad de Yale.</label>  <br><br>

                <label><input type="radio"  name = "Pregunta2" value="y2">  Universidad estatal de Sonora.</label><br><br>

                <label><input type="radio"  name = "Pregunta2" value="r2" > Universidad Carnegie Mellon.</label> <br><br>
              </div>

              <p>
                3.- ¿Que pretende hacer CMU con el modelo CMMI?
              </p>

              <div class="estiloOpciones">
              <label><input type="radio"  name = "Pregunta3" value="x3" checked/> Minimizar los costos del proyecto.</label> <br><br>

              <label><input type="radio"  name = "Pregunta3" value="y3">  Que los desarrolladores puedan mejorar sus habilidades personales.</label> <br><br>

              <label><input type="radio"  name = "Pregunta3" value="r3" > Que pueda ser usado para guiar la mejora de procesos en un proyecto.</label> <br><br>
              </div>
              <p>
                4.- ¿Que niveles de madurez define CMMI?
              </p>
              <div class="estiloOpciones">
              <label><input type="radio"  name = "Pregunta4" value="x4" checked/> Comunicación, Desarrollo, Implementacion, Depliegue.</label>  <br><br>

              <label><input type="radio"  name = "Pregunta4" value="r4">  Inicial, Repetible, Definido, Gestionado y Optimizado.</label> <br><br>

              <label><input type="radio"  name = "Pregunta4" value="y4" >  Inicial, Repetible, Gestionado, Definido.</label> <br><br>
              </div>
              <p>
                5.- ¿Que es PSP?
              </p>
              <div class="estiloOpciones">
              <label><input type="radio"  name = "Pregunta5" value="x5" checked/>  Proceso para equipo de Ingeniería de Software. </label><br><br>

              <label><input type="radio"  name = "Pregunta5" value="r5"> Proceso personal de software.</label>  <br><br>

              <label><input type="radio"  name = "Pregunta5" value="y5" >  Consiste en aplicar las practicas que generan buenos resultados.</label> <br><br>
              </div>
              <p>
                6.- ¿Para que tipo de organizaciones esta diseñado?
              </p>
              <div class="estiloOpciones">
              <label><input type="radio"  name = "Pregunta6" value="r6" checked/>  Organizaciones con modelos de procesos CMMI o ISO 15504.</label> <br><br>

              <label><input type="radio"  name = "Pregunta6" value="x6"> Organizaciones con modelos de pasarela.</label> <br><br>

              <label><input type="radio"  name = "Pregunta6" value="y6" > Organizaciones unidas por los derechos de la mujer.</label> <br><br>
              </div>
              <p>
                7.- ¿Por quien fue propuesto y para quien esta dirigido?
              </p>
              <div class="estiloOpciones">
              <label><input type="radio"  name = "Pregunta7" value="x7" checked/>  Fue propuesto por Steve Jobs en 2001 y estaba dirigido primeramente para a sus trabajadores.</label> <br><br>

              <label><input type="radio"  name = "Pregunta7" value="r7"> Fue propuesto por Watts Humphrey en 1995 y estaba dirigido a estudiantes.</label> <br><br>

              <label><input type="radio"  name = "Pregunta7" value="y7"> Fue propuesto por Stephen Hawking en 1999 y estaba dirigido a las empresas de tecnología.</label> <br><br>
              </div>
              <p>
                8.- ¿En que año salio y a quien esta dirigido el libro introduction to the Personal Software Process?
              </p>
              <div class="estiloOpciones">
              <label><input type="radio"  name = "Pregunta8" value="x8" checked/>  A partir de 2000 con el lanzamiento  introduction to the Personal Software Process el libro dirigido para los programadores autodidactas.</label> <br><br>

              <label><input type="radio"  name = "Pregunta8" value="r8"> A partir de 1997 con el lanzamiento introduction to the Personal Software Process el libro dirigido para ingenieros juniors.</label> <br><br>

              <label><input type="radio"  name = "Pregunta8" value="y8" > A partir de 2003 con el lanzamiento introduction to the Personal Software Process el libro dirigido para estudiantes.</label> <br><br>
              </div>

              <input type="submit" class = "btnExamen" value = "Enviar">
          </form>
        </div>
      </section>

    </main>



  </body>
</html>
