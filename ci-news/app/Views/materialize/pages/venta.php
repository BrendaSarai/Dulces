<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Dulces Mexicanos</title>
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

    <div class="section container">
        <div class="row">
            <?= form_open("admin/guardar_venta"); ?>
                <div class="row card-panel" action="col s12">
                        <input type="hidden" value="<?php echo $dulce->id_Dulce; ?>" name="id_producto"  class="validate" required>
                 
                    <div class="input-field col s6">
                        <input type="text" value="<?php echo $dulce->nombre; ?>" name="producto" disabled class="validate" required>
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="input-field col s6">
                        <input type="text" value="<?php echo $dulce->marca; ?>" name="marca" disabled class="validate" required>
                        <label for="apellido">Marca</label>
                    </div>
                    <div class="input-field col s6">
                        <input type="text" value="<?php echo $dulce->precio; ?>" name="precio" disabled id="precio" class="validate" required>
                        <label for="apellido">Precio</label>
                    </div>
                    <div class="input-field col s6">
                        <input type="number"  name="cantidad" id="cantidad" class="validate" onchange="calcular()" required>
                        <label for="apellido">Cantidad</label>
                    </div> 
                    <div class="input-field col s6">
                        <input type="number" placeholder="0.0" name="total" id="total" class="validate" disabled required>
                        <label for="apellido">Total</label>
                    </div>
                    <div class="input-field col s6">
                        <input type="text"  name="estado"  class="validate" required>
                        <label for="apellido">Estado</label>
                    </div>
                    <div class="input-field col s6">
                        <input type="text"  name="municipio"  class="validate" required>
                        <label for="apellido">Municipio</label>
                    </div>

                    <button class="btn" type="submit">Enviar</button>

                </div>
            <?= form_close(); ?>
        </div>
    </div>



    <footer class="page-footer black">



        <div class="footer-copyright">
            <div class="container center footer-text">
                &copf; DulcesMexicanos 2022
            </div>
        </div>
    </footer>


    <!--  Scripts-->
    <script src="https://kit.fontawesome.com/35db202371.js" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="<?= base_url("recursosm/js/materialize.js")?>"></script>
    <script src="<?= base_url("recursosm/js/init.js")?>"></script>
    <script src="<?= base_url("recursosm/js/main.js")?>"></script>
    <script>
        function calcular(){
            var cantidad = document.getElementById("cantidad");
            var total = document.getElementById("total");
            var precio = document.getElementById("precio");
            total.value = cantidad.value * precio.value;
        }
        
    </script>


</body>

</html>