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
        <li><a href="<?= route_to("inicio");?>" class="btn white black-text">Ingresar</a></li>

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
            <h1 class="titulo">"Que Dulce se te Antoja más"</h1>
       </div>

    </div>

    <div class="row galeria">
        <div class="col s12 m4 l3">
             <div class="material-placeholder">
                  <img src="<?= base_url("recursosm/img/1,1.jpg")?>" alt="" class="responsive-img materialboxed" data-caption="Muéganos: Se forman bolitas, cubitos o rectangulitos, los cuales se hornean hasta cocinarlos.">
             </div>
        </div>

        <div class="col s12 m4 l3">
             <div class="material-placeholder">
                  <img src="<?= base_url("recursosm/img/2,2.jpg")?>" alt="" class="responsive-img materialboxed" data-caption="Alegrías: El amaranto es la base de las deliciosas alegrías mexicanas.">
             </div>
        </div>

        <div class="col s12 m4 l3">
             <div class="material-placeholder">
               <img src="<?= base_url("recursosm/img/3,3.jpg")?>" alt="" class="responsive-img materialboxed" data-caption="Frutas cristalizadas: La fruta entera o troceada se remoja por lo menos un día en agua con cal viva y luego se le da un primer hervido."></div>
        </div>

        <div class="col s12 m4 l3">
             <div class="material-placeholder">
               <img src="<?= base_url("recursosm/img/4,4.jpg")?>" alt="" class="responsive-img materialboxed" data-caption="Borrachitos: on dulces envinados de harina, fruta y leche, muy cremosos interiormente y espolvoreados con azúcar.."></div>
        </div>

        <div class="col s12 m4 l3">
             <div class="material-placeholder">
               <img src="<?= base_url("recursosm/img/5,5.jpg")?>" alt="" class="responsive-img materialboxed" data-caption="Macarrones:La pasta se vierte con una manga de pastelería sobre una tabla espolvoreada de azúcar y finalmente se cortan los «macarrones» al tamaño deseado. ."></div>
        </div>

        <div class="col s12 m4 l3">
             <div class="material-placeholder">
               <img src="<?= base_url("recursosm/img/6,6.jpg")?>" alt="" class="responsive-img materialboxed" data-caption=" Dulce de tamarindo: Simplemente, la pulpa del tamarindo es endulzada al gusto. Por supuesto que los mexicanos también tienen sus versiones picantes con chile en polvo y otros ingredientes."></div>
        </div>

        <div class="col s12 m4 l3">
             <div class="material-placeholder">
               <img src="<?= base_url("recursosm/img/7,7.jpg")?>" alt="" class="responsive-img materialboxed" data-caption="Rollos de guayaba: La pasta se vuelve a llevar al fuego con azúcar y agua y cuando vuelve a alcanzar la consistencia pastosa se deja enfriar."></div>
        </div>

        <div class="col s12 m4 l3">
             <div class="material-placeholder">
               <img src="<?= base_url("recursosm/img/jamo.jpg")?>" alt="" class="responsive-img materialboxed" data-caption="Jamoncillo: Este rico dulce de leche con semillas es originario de Axochiapan, Morelos, aunque se ha popularizado en casi todo México."></div>
        </div>


        <div class="col s12 m4 l3">
             <div class="material-placeholder">
               <img src="<?= base_url("recursosm/img/9,9.jpg")?>" alt="" class="responsive-img materialboxed" data-caption="Tortitas de Santa Clara: La galleta de harina de trigo se rellena o se recubre con un dulce espeso preparado con semillas de calabaza molidas, azúcar, agua y leche.."></div>
        </div>

        <div class="col s12 m4 l3">
             <div class="material-placeholder">
               <img src="<?= base_url("recursosm/img/10,10.jpg")?>" alt="" class="responsive-img materialboxed" data-caption="Cajeta de Celaya: Es un dulce a base de leche de cabra y azúcar morena o piloncillo, que recibió ese nombre por las cajas de madera en que se guardaba y para diferenciarlo del dulce de leche de vaca tradicional."></div>
        </div>

        <div class="col s12 m4 l3">
             <div class="material-placeholder">
               <img src="<?= base_url("recursosm/img/11,11.jpg")?>" alt="" class="responsive-img materialboxed" data-caption="Mazapan: El mazapán es un dulce cuyos ingredientes principales son almendras, azúcar y huevo, en distinta proporción dependiendo de la receta."></div>
        </div>

        <div class="col s12 m4 l3">
             <div class="material-placeholder">
               <img src="<?= base_url("recursosm/img/12,12.jpg")?>" alt="" class="responsive-img materialboxed" data-caption="Alfajor de coco: Se coloca una taza de azúcar blanca en una cacerola y se vierte la mezcla anterior cocinando a fuego lento y removiendo hasta que se vea el fondo de la olla."></div>
        </div>

        <div class="col s12 center-align">
            <h10 class="titulo">"Descripción de los dulces comprados"</h10>
       </div>

       <table class="table table-bordered">
         <thead>
           <tr>
             <th style="width: 10px">ID</th>

             <th>Nombre</th>
             <th>Cantidad</th>
             <th>Marcas</th>


           </tr>
         </thead>
         <tbody>
           <?php
 function imprimirModal($dulce){
   echo'
   <div class="modal fade" id="modal'.$dulce->id_Dulce.'">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <h4 class="modal-title">Editar Dulces: '.$dulce->nombre.'</h4>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
     '.form_open("admin/actualizar_dulce").'
       <div class="modal-body">
         '.form_hidden("id_Dulce", $dulce->id_Dulce).'
         '.form_label("Nombre").'
         '.form_input("nombre",$dulce->nombre,['class'=>'form-control', 'placeholder'=>'Ingresa tu nombre']).'
         '.form_label("Descripcion").'
         '.form_input("descripcion",$dulce->descripcion,['class'=>'form-control', 'placeholder'=>'Ingresa tu descripcion']).'
         '.form_label("Marcas").'
         '.form_input("marca",$dulce->marca,['class'=>'form-control', 'placeholder'=>'Ingresa la marca ']).'

       </div>
       <div class="modal-footer justify-content-between">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         '.form_submit("", "Guardar Cambios", ["class" =>"btn btn-primary"]).'
       </div>
       '.form_close().'
     </div>
     <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
 </div>
 ';

 }
             foreach($dulces as $dulce){
               echo '<tr>';
                 echo '<td>'.$dulce->id_Dulce.'</td>';

                 echo '<td>'.$dulce->nombre.'</td>';
                 echo '<td>'.$dulce->descripcion.'</td>';
                 echo '<td>'.$dulce->marca.'</td>';

               echo '</tr>';
             }
           ?>

         </tbody>
       </table>





   </div>


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
