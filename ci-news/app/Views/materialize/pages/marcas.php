<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Dulces Mexicanos</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?= base_url("recursosm/css/materialize.css")?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?= base_url("recursosm/css/style.css")?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="shortcut icon" href="<?= base_url("recursosm/logo.png")?>" type="image/x-icon">
   <!-- Estilos CSS -->
   <link rel="stylesheet" href="<?= base_url("recursosm/css/estilos.css")?>">

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
        <li><a href="<?= route_to("home");?>">Inicio</a></li>
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
   <main class="container">

    <div class="row">

        <div class="col s12 center-align">
            <h1 class="titulo">"las Recetas de los dulces mas pupulares"</h1>
       </div>

    </div>



   <!-- Blog de Dulces-->
  <section class="container">
    <h2 class="center"></h2>

    <div class="row">

      <div class="col s12 m12 16">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="<?= base_url("recursosm/img/calabaza.jpg")?>">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Calabaza en dulce<i class="material-icons right">more_vert</i></span>

          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4"> Calabaza en dulce<i class="material-icons right">close</i></span>
            <p>Ingredientes</p>
                <p>1 pzcalabaza de Castilla</p>
               <p> 3 cucharadascal</p>
               <p>2 kgPiloncillo</p>
               <p>1 pzcanela en rama</p>
               <p> 2 pzclavo de olor</p>
               <p> Agua</p>

            <p> Elaboración paso a paso</p>
                <p>  1.-Pica la calabaza con un tenedor y colócala junto con el agua procurando que quede completamente cubierta, agrega la cal y déjala reposar por 4 horas.</p>

                    <p>  2.-Una vez que pasen las 4 horas, lava con agua potable la calabaza y córtala en cuatro pedazos iguales, esto con el fin de que se cocine tanto el interior como el exterior, también pica el piloncillo en trozos. </p>

                        <p>  3.-Toma una olla grande y añade la calabaza, el piloncillo, la canela y el clavo para darle cocción. </p>

                            <p>  4.-Tapa la olla y prende la estufa a fuego alto, una vez que hierva baja la flama y deja que la cocción de la calabaza finalice mientras se espesa la miel. </p>

                                <p>   5.-Deja que se enfríe ¡y sirve!</p>

            </div>
        </div>


      </div>

      <div class="col s12 m12 16">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="<?= base_url("recursosm/img/camonte.jpg")?>">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Camote en dulce<i class="material-icons right">more_vert</i></span>

          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4"> Camote en dulce<i class="material-icons right">close</i></span>
            <p>Ingredientes</p>
                <p>1 kgcamote</p>
               <p> 130 grazúcar</p>
               <p>240 mljugo de naranja</p>
               <p>15 grralladura de naranja</p>
               <p>100 grnuez</p>
               <p>1 pzmanta de cielo</p>

            <p> Elaboración paso a paso</p>
                <p>  1.- En agua hirviendo o al vapor cuece el camote con todo y su piel, después pelalo y pásalo por un colador chino o colador normal.</p>

                <p>  2.- Mezcla el puré de camote con 130 grs de azúcar, agrega también el jugo y la ralladura de naranja, colócalos a fuego medio.  </p>

                <p>  3.- Cuando se alcance a ver el fondo de la olla, apaga, enfría y vacía la mezcla sobre una manta de cielo o trapo húmedo extendido.   </p>

                <p>  4.-Coloca en el centro las nueces, después forma un rollo y refrigera por mínimo 2 horas. </p>

                 <p>   5. Sirve en un platón y espolvorea los 30 grs de azúcar restantes, también puedes incluir pedazos de nueces para adornar.</p>

            </div>
        </div>


      </div>

      <div class="col s12 m12 16">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="<?= base_url("recursosm/img/cocadas.jpg")?>">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Cocadas o dulces de coco mexicanos<i class="material-icons right">more_vert</i></span>

          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4"> Cocadas o dulces de coco mexicanos<i class="material-icons right">close</i></span>
            <p>Ingredientes</p>
                <p>500 grcoco rallado</p>
               <p>250 mlagua</p>
               <p>300 graceite</p>
               <p>200 mlleche            </p>
               <p> 5 pzyema de huevo</p>
               <p> 70 grpasas</p>

            <p> Elaboración paso a paso</p>
            <p>  1.-Para comenzar a preparar el almíbar, deberás mezclar el agua con el azúcar hasta obtener una textura suave. </p>

            <p>  2.- Después agrega el coco rallado sin dejar de revolver.  </p>

            <p>  3.-Añade leche poco a poco y continúa moviendo hasta obtener una mezcla homogénea.  </p>

           <p>  4.-En otro recipiente, tempera las yemas de huevo con un batidor globo y una vez listas añadelas a la mezcla. </p>

            <p>   5.-Coloca todo a fuego medio sin dejar de revolver, posteriormente agrega las pasas y si lo deseas colorante.</p>

            </div>
        </div>


      </div>

      <div class="col s12 m12 16">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="<?= base_url("recursosm/img/mazapan.jpg")?>">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Mazapán de Cacahuate<i class="material-icons right">more_vert</i></span>

          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4"> Mazapán de Cacahuate<i class="material-icons right">close</i></span>
            <p>Ingredientes</p>
                <p>2 tzacahuate</p>
               <p> 2 tzazúcar glass</p>
               <p>2 cucharadasagua fría</p>

            <p> Elaboración paso a paso</p>
            <p>  1.-Tuesta el cacahuate ligeramente..</p>

            <p>  2.-Posteriormente pica finamente el cacahuate y colócalo en un procesador hasta obtener un polvo fino, revuelve constantemente para evitar que la mezcla se pegue.  </p>

            <p>  3.-Agrega el azúcar glass e integra perfectamente, después agrega el agua fría poco a poco hasta obtener una mezcla consistente. </p>

            <p>  4.-Vacía la mezcla en un recipiente y colócalo en cortadores de 5 cm.</p>

            <p>   5.-Aprieta la mezcla con una cuchara o con la otra mano, utiliza el cortador para que el mazapán se comprima.     </p>

            </div>
        </div>


      </div>

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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?= base_url("recursosm/js/materialize.js")?>"></script>
  <script src="<?= base_url("recursosm/js/init.js")?>"></script>
  <script src="<?= base_url("recursosm/js/main.js")?>"></script>


  </body>
</html>
