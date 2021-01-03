<!DOCTYPE html>
<html lang="es" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Creación de Proyectos </title>

    <meta name = "viewport"
    content="width=device-width, user-scalable=yes, initial-scale=1.0,
    maximum-scale=3.0, minimum-scale=1.0"> <!--para diseño responsibo en moviles-->

    <link rel = "stylesheet" href="css/estilos.css">
    <link href="css/fonts.css" rel="stylesheet">

  </head>

  <body>
    <!--     Cabecera de página      -->
    <header class = "main-header"> <!--Define la cabecera de una página o sección. Usualmente contiene un logotipo, el título del sitio Web y una tabla de navegación de contenidos. -->

      <div class = "container container__flex"> <!--este div con la clase delimita el contenido de la web.
        container: es la clase que va a ayudar a delimitar el contenido de la página.
        container__flex: para poder utilizar flexbox. -->

        <div class = "logo-container column column--50"> <!--<div>Representa un contenedor genérico sin ningún significado especial. -->
          <h1 class = "logo">Creación de proyectos </h1>
        </div>
        <div class = "main-header__contactInfo column column--50">

          <p class = "main-header__contactInfo__phone">
            ¿Tienes dudas? <br>Llamanos al:
            <span class = "icon-phone">432-213-355 </span> <!--Representa texto sin un significado específico.  Este debe ser usado cuando ningún otro elemento semántico le confiere un significado adecuado, en cuyo caso, provendrá de atributos globales como class, lang, o dir. -->
          </p>

        </div>

      </div>

    </header>

    <nav  class = "main-nav"><!--Define una sección que solamente contiene enlaces de navegación -->
      <div class = "container container__flex">
        <!--<span>:Representa texto sin un significado específico. Este debe ser usado cuando ningún otro elemento semántico le confiere un significado adecuado, en cuyo caso, provendrá de atributos globales como class, lang, o dir. -->
        <span class = "icon-menu" id = "btnMenu"> </span> <!--este el logo de menu y el boton para el menu(su id para ser el btn)-->
        <ul class = "menu" id = "IdMenu"><!--<ul>:son las barras de navegación. Define una lista de artículos sin orden. Y aqui esta el id para el menu-->
          <li class = "menu--item"><a href = "/" class = "menu--link menu__link--select">Inicio </a> </li> <!--Define un artículo de una lista ennumerada. -->
          <li class = "menu--item"><a href = "nosotros.html" class = "menu--link">Nosotros </a> </li>
          <li class = "menu--item"><a href = "registro.html" class = "menu--link">Registro </a> </li>
          <li class = "menu--item"><a href = "login.html" class = "menu--link">Login </a> </li>
          <li class = "menu--item"><a href = "php/Administrador.php" class = "menu--link">Administrador </a> </li>
        </ul>

      </div>
    </nav>

  <!--      Cuerpo de pagina (main)      -->
  <section class = "banner"> <!--<section>:Define una sección en un documento. -->
    <img src = "img/bumpCollaboration.jpg" class = "banner__img"> <!--   1 imagen   -->
    <div class = "banner__content">Los mejores modelos de calidad para organizar un proyecto </div>
  </section>

  <main class = "main"><!--This element has been added in HTML5 	Define el contenido principal o importante en el documento. Solamente existe un elemento <main> en el documento. -->

    <section class = "group group--color">

      <div class = "container">
        <h2 class = "main__title">Bienvenidos </h2>
        <p class = "main__txt"><!--esta clase no va a ser necesaria. Luego la quito 10/05/2019 -->
          Debido  a  que  la  cantidad  y  variedad  de  programas  educativos  o  de  entrenamiento  crece muy rápidamente, existe
          una necesidad de evaluarlos cada vez mayor para saber si es adecuado a su propósito. Nuestro objetivo es ayudarte a conocer que
          tipo de métricas y modelos seguir para crear un buen trabajo en equipo o aprender a crear un proyecto personal.

        </p>
      </div>

    </section>

    <section class = "group main__about__description">
      <div class = "container container__flex"><!--container__flex: es la que delimitara el contenido de la página  -->

        <div class = "column column--50">
          <img src = "img/adultCoder.jpg" class = "ImgMainEquipoTrabajo" >

        </div>

        <div class = "column column--50">
          <h3 class = "column column_title">Expertos en soluciones </h3>
          <p class = "column_txt" id = "a">
            En Creacion de Proyectos® resolvemos de manera ágil las necesidades de nuestros clientes, gracias al excelente desempeño
            de nuestros profesionales y la calidad garantizada en los servicios que brindamos. Actualmente, realizamos proyectos de
            desarrollo de software y brindamos servicios de acesoramiento personal para proyectos. como IT Outsourcing (servicio de desarrollo de proyectos de software a través de la gestión externa y la subcontratación )
            Web & Móviles (desesarrollo de su Web Empresarial, ya sea informativa o transaccional y desarrollo de su Aplicación Móvil).
          </p>

        </div>

      </div>
    </section>
<!--          Temas destacados           -->
    <section class = "group today-special">
      <h2 class = "group__title">Temas relevantes </h2>
      <div class = "container container__flex">

        <div class = "column column--50-25">
        <a href = "php/modelosCmmiPsp.php" title = "Loguearse para ver este contenido"><img src = "img/laptop3.jpg" class = "today-special__img"> </a>
          <div class = "tema">CMMI </div>
        </div>

        <div class = "column column--50-25">
          <a href = "php/modelosCmmiPsp.php" title = "Loguearse para ver este contenido"><img src = "img/beautifulCasual4.jpg" class = "today-special__img"></a>

          <div class = "tema">PSP </div>
        </div>
      </div>

    </section>
  </main>


  <!--      Pie de página      -->
<footer class = "main_footer">

  <div class = "container container__flex">

    <div class = "column column--33">
      <h2 class = "column_title">¿Porque visitarnos? </h2>
      <p class = "column_txt">Resolvemos de manera ágil las necesidades de nuestros clientes, gracias al excelente
        desempeño de nuestros profesionales y la calidad garantizada en los servicios que brindamos.
      </p>
    </div>

    <div class = "column column--33">
      <h2 class = "column_title">Contactenos </h2>
      <p class = "column_txt">Magdalena de kino - 84160 </p>
      <p class = "column_txt">Telefono: 432-213-355 </p>
      <p class = "column_txt">CreacionProyectos@gmail.com </p>
    </div>

    <div class = "column column--33">
      <h2 class = "column_title">Siguenos en nuestras redes </h2>
        <p class = "column_txt"><a href = "https://www.facebook.com/"  target="_blank" class = "icon-facebook">Facebook</a> </p>
        <p class = "column_txt"><a href = "https://twitter.com/?lang=es" target="_blank" class = "icon-twitter">Siguenos en Twitter</a> </p>
        <p class = "column_txt"><a href = "https://www.youtube.com/" target="_blank" class = "icon-youtube">Visita el canal de Youtube</a> </p>
    </div>

    <p class = "copy">© 2019 Equipos de trabajo | Todos los derechos reservados</p>

  </div>

</footer>
<script src="js/menu.js"></script>
  </body>

</html>
