<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Dulces Mexicanos</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?= base_url("recursosm/css/materialize.css")?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?= base_url("recursosm/css/style.css")?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="shortcut icon" href="<?= base_url("recursosm/logo.png")?>" type="image/x-icon">

</head>
<body>
<?php
  $session = session();
?>
  <!--Menu de navegación -->
  <nav class="black" role="navigation">
    <div class="nav-wrapper container ">
      <a id="logo-container" href="#" class="brand-logo">
        <i class="material-icons">child_care</i>
        Dulces Mexicanos
      </a>

      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">Menu</i></a>

      <ul class="right hide-on-med-and-down">
        <li class="active"><a href="<?= route_to("home");?>">Inicio</a></li>
        <li><a href="<?= route_to("dulci");?>">Dulces </a></li>
        <li><a href="<?= route_to("marcas");?>">Receta</a></li>
        <?php
          if ($session->nombre != null){
          echo '<li><a href="'.route_to("logout").'" class="btn white black-text">Cerrar Sesión</a></li>';
          }else{
            echo '<li><a href="'.route_to("inicio").'" class="btn white black-text">Ingresar</a><li>';
          }
        ?>
      </ul>

    </div>
  </nav>

   <!--Slider -->
   <section class="slider">
    <ul class="slides">
      <li>
        <img src="<?= base_url("recursosm/img/1,2.jpg")?>"> <!-- random image -->
        <div class="caption center-align">
          <h1>Dulces Mexicanos!</h1>
          <h5 class="light grey-text text-lighten-3">Lo Sabroso de Mexico.</h5>
        </div>
      </li>
      <li>
        <img src="<?= base_url("recursosm/img/2,3.jpg")?>"> <!-- random image -->
        <div class="caption left-align">
          <h3>Di magia, di mexicano</h3>
          <h5 class="light grey-text text-lighten-3">Lo Sabroso de Mexico.</h5>
        </div>
      </li>
      <li>
        <img src="<?= base_url("recursosm/img/lo.jpg")?>"> <!-- random image -->
        <div class="caption right-align">
          <h3>A todos nos gusta comer mexicano</h3>
          <h5 class="light grey-text text-lighten-3">Lo sabroso de Mexico.</h5>
        </div>
      </li>
      <li>
        <img src="<?= base_url("recursosm/img/o1.jpg")?>"> <!-- random image -->
        <div class="caption center-align">
          <h3>Hecho con amor en México!</h3>
          <h5 class="light grey-text text-lighten-3">Lo sabroso de Mexico.</h5>
        </div>
      </li>
    </ul>
   </section>

  <main>


  <section class="about">
    <div class="container">
        <h4 class="center">Dulces</h4>
        <div class="row">
            <div class="about__desc col s12 m8">
                <p>
                  En México, existe una gran variedad de dulces típicos que varían de una región a otra, muchos de ellos son elaborados artesanalmente y son emblemáticos de la cultura mexicana. Con la llegada de los españoles, la cultura indígena se mezcló con nuevas costumbres, tradiciones y sabores. Muestra de ello es la comida mexicana, la cual es considerada una de las más variadas y ricas del mundo. La elaboración de los dulces tradicionales mexicanos forma parte de esta gran riqueza culinaria.
                </p>
                <br/>
                <p>
                  ¿Qué es un dulce tipico definición?
                  Por lo general los alimentos dulces tienen una alta cantidad de hidratos de carbono, en especial de sacarosa (el azúcar común). ... En esta definición tenemos que establecer que, por regla general, cada país o región cuenta, al igual que con platos tradicionales, con lo que se conoce como dulces típicos.

                </p>
                <br/>

            </div>
            <div class="about__image col s12 m4">
                <img class="materialboxed" src="<?= base_url("recursosm/img/d.jpg")?>" alt="about">
            </div>
        </div>
    </div>
</section>

  <!-- Blog de Dulces-->
  <section class="container">
    <h2 class="center">El Dulce Mas Popular</h2>

    <div class="row">

      <div class="col s12 m12 16">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="<?= base_url("recursosm/img/palan3.jpg")?>">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">La Palanqueta<i class="material-icons right">more_vert</i></span>
            <p><a href="#">El Dulce Mas sabroso </a></p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4"> La Palanqueta<i class="material-icons right">close</i></span>
            <p>Las palanquetas son excelentes botanas nutritivas y emblemáticas de la cultura mexicana, al ser un alimento alto en proteínas, fibra y grasa vegetal, favorecen la disminución del colesterol malo, asimismo, contienen vitamina E también minerales como hierro y cobre que oxigenan la sangre.

              La palanqueta es una barra de cacahuate pelado y sin cáscara mezclado con jarabe de piloncillo, su textura es crujiente, su nombre deriva de la voz ‘papaquili’ que significa feliz o alegre.

              La palanqueta fue originalmente un dulce hecho de maíz tostado y molido, mezclado con miel de abejas con la conquista, la miel se remplazó por azúcar y el maíz por semillas u otros frutos como el cacahuate.</p>

            <p> ¿Sabías que?
              La palanqueta fue originalmente un dulce hecho de maíz tostado y molido, mezclado con miel de abejas para celebrar ‘papaquilizilhuitl’ (la feria del maíz)</p>
              <img class="activator" src="<?= base_url("recursosm/img/palan2.jpg")?>">
            </div>
        </div>

      </div>

    </div>
  </section>

  <section class="testimonials">
    <h4 class="center">Principales dulces típicos mexicanos</h4>
    <div class="carousel">
        <a href="#" class="carousel-item teal center white-text">
            <h5>Calabaza en dulce</h5>
            <p>Este postre se creó en la época colonial y es muy utilizado en las ofrendas del día de muertos, aunque es posible prepararlo todo el año.</p>
        </a>
        <a href="#" class="carousel-item teal center white-text">
            <h5>Camote en dulce</h5>
            <p>El camote dulce es un postre típico de Puebla, México, y uno de los más reconocidos en esta región,  su nombre deriva del náhuatl “camohtli”.</p>
        </a>
        <a href="#" class="carousel-item teal center white-text">
            <h5>Cocadas</h5>
            <p>Los dulces de coco o cocadas son preparaciones a base de coco que contienen azúcar o piloncillo y leche, este delicioso postre puede tener formas redondas.</p>
        </a>
        <a href="#" class="carousel-item teal center white-text">
            <h5>Palanqueta</h5>
            <p> Uno de los postres clásicos en la dulcería mexicana que usa cacahuate o maní como ingrediente base, como dato curioso en náhuatl también se le llamaba “cacahuate” .</p>
        </a>
        <a href="#" class="carousel-item teal center white-text">
            <h5>Mazapán de Cacahuate</h5>
            <p> Este dulce típico llegó en la época colonial cuando se fundó la Nueva España. </p>
        </a>
    </div>
</section>


  </main>

  <footer class="page-footer black">
    <div class="footer-copyright">
      <div class="container center footer-text">
      &copf; DulcesMexicanos 2022
      </div>
    </div>
  </footer>


  <!--  Scripts-->

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?= base_url("recursosm/js/materialize.js")?>"></script>
  <script src="<?= base_url("recursosm/js/init.js")?>"></script>


  </body>
</html>
