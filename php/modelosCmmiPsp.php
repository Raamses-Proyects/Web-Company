<?php
//________________________________Funciones generales_____________________________
  session_start();
  error_reporting(0);//para que no se mire el error de autenticación

//_________________________Verificando que se tengan sesion iniciada_____________________
  $varsession = $_SESSION['txtNombre'];
  if($varsession == null || $varsession == '')
  {
    echo '<script>alert("Esta página de estudio es para usuarios registrados")
                  window.history.go(-1);
          </script>';
    die();
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Modelos CMMI & PSP </title>
    <link rel = "stylesheet" href="../css/estilos.css">
    <link rel = "stylesheet" href="../css/parallax.css">
    <link href="https://file.myfontastic.com/P8JtHYoLn2HVEEgxj7TN9A/icons.css" rel="stylesheet">
  </head>

  <body>

 <!--_____________________________________________Encabezado de página_______________________________________ -->
    <h1 class = "logo">Modelos CMMI & PSP </h1>
    <div class="derecha"> <a href = "cerrarSesion.php"  class = "btnCerrar" title = "Cerrar sesion e ir a inicio">Cerrar sesión</a></div>
    <div class = "main-header__contactInfo column column--50">
      <p class = "main-header__contactInfo__phone" style="font-size: 1.0em" >
        Inicio: <?php echo $_SESSION['txtNombre'] ?>
      </p>
    </div>

<!--______________________________________________ Cuerpo de página_____________________________________________-->
  <section class = "parallax" id = "section1" style="color:white">
    <p class="parrafo">
    <div style="background: rgba(0,0,0,.80);">
    <div class = "titulo">Seccion de CMMI</div><br>
    Integración de sistemas modelos de madurez de capacidades o Capability Maturity Model Integration (CMMI) es un modelo para la
    mejora y evaluación de procesos para el desarrollo, mantenimiento y operación de sistemas de software. Administrado por el Instituto
    CMMI, una subsidiaria de ISACA, se desarrolló en la Universidad Carnegie Mellon (CMU). Es requerido por muchos contratos del
    Departamento de Defensa de los Estados Unidos (DoD) y del Gobierno de los Estados Unidos, especialmente en el desarrollo de software.
    CMU pretende que CMMI pueda ser usado para guiar la mejora de procesos en un proyecto, división o una organización completa.
    CMMI define los siguientes niveles de madurez para los procesos: Inicial, Repetible, Definido, Gestionado y Optimizado.<br><br>
    <ol>
    <li>Inicial o ejecutado: las organizaciones en este nivel no disponen de un ambiente estable.</li>
    <li>Repetible: disponen de unas prácticas institucionalizadas de gestión de proyectos, existen métricas básicas y un razonable
    seguimiento de calidad.</li>
    <li>Definido: Además de una buena gestión de proyectos, a este nivel las organizaciones disponen de correctos procedimientos de
    coordinación entre grupos, formación de personal, técnicas de ingeniería mas detallada y un nivel mas avanzado de métricas en los
    proyectos. Se implementan técnicas de revisión por pares (peer reviews).</li>
    <li>Gestionado o Administrativo: disponen de un conjunto de métricas significativas de calidad y productividad que se usan de
    modo sistemático para la toma de decisiones y la gestión de riesgos. El software resultante es de alta calidad.</li><br>
    <li>Optimizado: La organización completa está volcada a la mejora continua de los procesos. Se hace uso intensivo de las métricas
    y se gestionan el proceso de innovación.</li>
    Las mejores prácticas CMMI se publican en los documentos llamados modelos. En la versión CMMI 1.2 existen tres áreas de interés
    cubiertas por los modelos de CMMI: Desarrollo, Adquisición y Servicios.  <br>
    </ol>

    Hay tres constelaciones de la versión 1.2 disponibles: <br>
    <ul>
    <li>CMMI para el Desarrollo (CMMI-DEV o CMMI for Development), Versión 1.2 fue liberado en agosto de 2006. En él se tratan procesos de
    desarrollo de productos y servicios.</li><br>

    <li>CMMI para la adquisición (CMMI-ACQ o CMMI for Acquisition), Versión 1.2 fue liberado en noviembre de 2007. En él se tratan la gestión
    de la cadena de suministro, adquisición y contratación externa en los procesos del gobierno y la industria.</li> <br>

    <li>CMMI (CMMI-SVC o CMMI for Services), está diseñado para cubrir todas las actividades que requieren gestionar, establecer y entregar
    Servicios.</li><br> <br>
    </ul>

    </div>
    </p>
  </section>

  <section class = "parallax" id = "section2" style="color:white">
    <p class="parrafo">
    <div style="background: rgba(0,0,0,.80);">
    <div class = "titulo">Seccion de PSP</div><br>
    El proceso personal de software, PSP, es un conjunto de prácticas disciplinadas para la gestión del tiempo y mejora de la productividad
    personal de los programadores o ingenieros de software, en tareas de desarrollo y mantenimiento de sistemas, mediante el seguimiento del
    desempeño predicho frente al desempeño real. Está alineado y diseñado para emplearse en organizaciones con modelos de procesos CMMI o ISO
    15504. Fue propuesto por Watts Humphrey en 1995 y estaba dirigido a estudiantes. A partir de 1997 con el lanzamiento del libro "An
    introduction to the Personal Software Process" se dirige ahora a ingenieros juniors. <br> <br>

    Con PSP los ingenieros de software pueden adquirir las habilidades necesarias para trabajar en un proceso de software en equipo TSP.<br><br>

    Se puede considerar como la guía de trabajo personal para ingenieros de software en organizaciones que emplean un modelo CMMI con nivel de
    madurez o de capacidad de procesos que implica la medición cualitativa y mejora de procesos. <br> <br>

    Uno de los mayores problemas que tiene es la gran cantidad de datos que hay que tomar. El PSP tiene obsesión por la toma de datos y elaboración
    de tablas. El PSP se orienta el conjunto de áreas clave del proceso que debe manejar un desarrollador cuando trabaja de forma individual.<br> <br>

    <div class = "subtitulo">Objetivos: </div>

    <ol>
   	  <li>Mejorar sus habilidades de estimación y planeación.</li><br>
   	  <li>Hacer compromisos que se puedan cumplir.</li><br>
   	  <li>Administrar la calidad de sus procesos.</li><br>
      <li>Reducir la cantidad de defectos en sus productos. </li><br>
    </ol>

    <div class = "subtitulo">Niveles: </div>

    El entrenamiento de PSP sigue una metodología evolutiva de mejora: quien empieza a integrar PSP en su proceso comienza en el nivel PSP0 y progresa
    hasta alcanzar el nivel PSP2.1 que es el nivel máximo de madurez.

    Cada nivel tiene guiones detallados, listas de chequeo y plantillas. Humphrey, creador de la metodología, motiva a los ingenieros experimentados
    a personalizarlos para que puedan aumentar el entendimiento de sus fortalezas y debilidades.<br><br>

    </div>
    </p>
  </section>

<!--____________________________________________Pie de página___________________________________________________-->
  <footer class = "oscuro">
    <a href = "examen.php"  class = "btnExamen" title = "Hacer prueba">Examen</a>
  </footer>

  </body>
</html>
