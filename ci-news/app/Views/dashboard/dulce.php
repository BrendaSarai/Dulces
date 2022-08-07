<?= $this->extend('plantillas/plantilla_admin') ?>
<?= $this->section('content') ?>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">

      <span class="brand-text font-weight-light">Dulces Mexicanos</span>
    </a>



      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dulces mx
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="<?= route_to("logout");?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dulces</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= route_to("logout");?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cerrar Sesión</p>
                </a>
              </li>

            </ul>
          </li>


      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-12">
          <div class="col-sm-6">
            <h1 class="m-0">Usuario</h1>

            <!-- Main content -->
                <section class="content">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-10">
                        <div class="card card-primary">
                          <div class="card-header">
                            <h3 class="card-title">Nuevo Dulce</h3>
                          </div>
                          <!-- /.card-header -->
                          <!-- form start -->
                          <?= form_open("admin/guardar_dulce"); ?>

                            <div class="card-body">
                              <div class="form-group">
                                <label for="">Nombre</label>
                                <select name="nombre" id="nombre" class="form-control">
                                  <option value="palanqueta">Palanqueta</option>
                                  <option value="alegria">Alegria</option>
                                  <option value="mazapan">Mazapan</option>
                                  <option value="oblea">Oblea</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="">Cantidad</label>
                                <input type="number" class="form-control" id="cantidad" name="cantidad" >
                              </div>
                              <div class="form-group">
                                <label for="">Marca</label>
                                <select class="form-control" id="marca" name="marca">
                                  <option value="palanqueta">Palanqueta</option>
                                  <option value="alegria">Alegria</option>
                                  <option value="mazapan">Mazapan</option>
                                  <option value="oblea">Oblea</option>
                                </select>
                              </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                          <?= form_close(); ?>
                        </div>
                      </div>
                      <div class="col-md-13">
                        <script type="text/javascript">
                            function mostrarAlerta(id_Dulce){
                              console.log(id_Dulce);
                              const swalWithBootstrapButtons = Swal.mixin({
                                customClass: {
                                  confirmButton: 'btn btn-success',
                                  cancelButton: 'btn btn-danger'
                                },
                                buttonsStyling: false
                              })

                              swalWithBootstrapButtons.fire({
                                title: '¿Estas seguro?',
                                text: "Esta acción es irreversible!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonText: 'Si, borrar!',
                                cancelButtonText: 'No, cancelar!',
                                reverseButtons: true
                              }).then((result) => {
                                if (result.isConfirmed) {
                                  $.ajax({
                                    url: "<?= base_url("admin/eliminar_dulce")?>",
                                    type: "POST",
                                    data: {
                                      id: id_Dulce,
                                      <?= csrf_token() ?>: "<?= csrf_hash() ?>"
                                    },
                                    success: function(resultado){
                                      var json= JSON.parse(resultado);
                                      if(json.resultado == true){
                                        window.location.href = "<?= base_url("admin/dulce")?>"
                                      }
                                    },
                                    error: function(error){
                                      console.log(error);
                                    }
                                  });
                                } else if (
                                  /* Read more about handling dismissals below */
                                  result.dismiss === Swal.DismissReason.cancel
                                ) {
                                  swalWithBootstrapButtons.fire(
                                    'Cancelado',
                                    'Tu registro esta a salvo :)',
                                    'error'
                                  )
                                }
                              })
                          }
                          </script>
                      <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">Todos los Dulces: <?= $numeroDulces ?></h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th style="width: 10px">ID</th>
                                  <th>Fecha Creación</th>
                                  <th>Nombre</th>
                                  <th>Cantidad</th>
                                  <th>Marcas</th>

                                  <th style="width: 40px">Acciones</th>
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
                                      echo '<td>'.$dulce->fecha_creaction.'</td>';
                                      echo '<td>'.$dulce->nombre.'</td>';
                                      echo '<td>'.$dulce->descripcion.'</td>';
                                      echo '<td>'.$dulce->marca.'</td>';

                                     echo '<td><button class="btn btn-sm btn-info float-left" data-toggle="modal" data-target="#modal'.$dulce->id_Dulce.'">Actualizar</button>';
                                    echo '<button class="btn btn-sm btn-danger float-left" onclick="mostrarAlerta('.$dulce->id_Dulce.')" >Eliminar</button></td>';
                                    echo '</tr>';
                                  }
                                ?>

                              </tbody>
                            </table>
                            <?php
                foreach ($dulces as $dulce){
                  imprimirModal($dulce);
                } ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>




  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->


</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>


<?= $this->endSection() ?>
