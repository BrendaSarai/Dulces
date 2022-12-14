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
                <a href="<?= route_to("dulces");?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dulces</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= route_to("logout");?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cerrar Sesi??n</p>
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
                            <h3 class="card-title">Nuevo Usuario</h3>
                          </div>
                          <!-- /.card-header -->
                          <!-- form start -->
                          <?= form_open("admin/guardar_usuario"); ?>

                            <div class="card-body">
                              <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre">
                              </div>
                              <div class="form-group">
                                <label for="">Apellido Paterno</label>
                                <input type="text" class="form-control" id="apellido_paterno" name="paterno" placeholder="Ingresa tu apellido paterno">
                              </div>
                              <div class="form-group">
                                <label for="">Apellido Materno</label>
                                <input type="text" class="form-control" id="apellido_materno" name="materno" placeholder="Ingresa tu apellido materno">
                              </div>
                              <div class="form-group">
                                <label for="">Correo</label>
                                <input type="text" class="form-control" id="correo" name="correo" placeholder="Ingresa tu correo">
                              </div>
                              <div class="form-group">
                                <label for="">Rol</label>
                                <select name="rol" class="form-control">
                                  <option value="1">Consumidor</option>
                                  <option value="2">Administrador</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="">Contrasena</label>
                                <input type="text" class="form-control" id="contrasena" name="contrasena" placeholder="Ingresa tu contrasena">
                              </div>
                              <div class="form-group">
                                <label for="">Confirmar Contrasena</label>
                                <input type="text" class="form-control" id="recontrasena" name="recontrasena" placeholder="Confirma tu contrasena">
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
                            function mostrarAlerta(id_usuario){
                              console.log(id_usuario);
                              const swalWithBootstrapButtons = Swal.mixin({
                                customClass: {
                                  confirmButton: 'btn btn-success',
                                  cancelButton: 'btn btn-danger'
                                },
                                buttonsStyling: false
                              })

                              swalWithBootstrapButtons.fire({
                                title: '??Estas seguro?',
                                text: "Esta acci??n es irreversible!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonText: 'Si, borrar!',
                                cancelButtonText: 'No, cancelar!',
                                reverseButtons: true
                              }).then((result) => {
                                if (result.isConfirmed) {
                                  $.ajax({
                                    url: "<?= base_url("admin/eliminar_usuario")?>",
                                    type: "POST",
                                    data: {
                                      id: id_usuario,
                                      <?= csrf_token() ?>: "<?= csrf_hash() ?>"
                                    },
                                    success: function(resultado){
                                      var json= JSON.parse(resultado);
                                      if(json.resultado == true){
                                        window.location.href = "<?= base_url("admin/dashboard")?>"
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
                            <h3 class="card-title">Todos los Usuarios: <?= $numeroUsuarios ?></h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th style="width: 10px">ID</th>
                                  <th>Fecha Creaci??n</th>
                                  <th>Nombre</th>
                                  <th>Paterno</th>
                                  <th>Materno</th>
                                  <th>Correo</th>
                                  <th style="width: 40px">Acciones</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                      function imprimirModal($usuario, $roles){
                        echo'
                        <div class="modal fade" id="modal'.$usuario->id_usuario.'">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Editar Usuarios: '.$usuario->nombre.'</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                          '.form_open("admin/actualizar_usuario").'
                            <div class="modal-body">
                              '.form_hidden("id_usuario", $usuario->id_usuario).'
                              '.form_label("Nombre").'
                              '.form_input("nombre",$usuario->nombre,['class'=>'form-control', 'placeholder'=>'Ingresa tu nombre']).'
                              '.form_label("Paterno").'
                              '.form_input("paterno",$usuario->paterno,['class'=>'form-control', 'placeholder'=>'Ingresa tu ap paterno']).'
                              '.form_label("Materno").'
                              '.form_input("materno",$usuario->materno,['class'=>'form-control', 'placeholder'=>'Ingresa tu ap materno ']).'
                              '.form_label("Correo").'
                              '.form_input("correo",$usuario->correo,['class'=>'form-control', 'placeholder'=>'Ingresa tu correo']).'
                              '.form_label("Rol").'
                              '.form_dropdown('rol', $roles, $usuario->rol, ['class'=>'form-control']).'
                              '.form_label("Contrase??a").'
                              '.form_password("contrasena", "",['class'=>'form-control' , 'placeholder'=>'Ingresa tu contrase??a']).'
                              '.form_label("Contrase??a").'
                              '.form_password("contrasena_dos","",['class'=>'form-control' , 'placeholder'=>'Verifica tu contrase??a']).'
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
                                  foreach($Usuarios as $Usuario){
                                    echo '<tr>';
                                      echo '<td>'.$Usuario->id_usuario.'</td>';
                                      echo '<td>'.$Usuario->fecha_creaction.'</td>';
                                      echo '<td>'.$Usuario->nombre.'</td>';
                                      echo '<td>'.$Usuario->paterno.'</td>';
                                      echo '<td>'.$Usuario->materno.'</td>';
                                      echo '<td>'.$Usuario->correo.'</td>';
                                     echo '<td><button class="btn btn-sm btn-info float-left" data-toggle="modal" data-target="#modal'.$Usuario->id_usuario.'">Actualizar</button>';
                                    echo '<button class="btn btn-sm btn-danger float-left" onclick="mostrarAlerta('.$Usuario->id_usuario.')" >Eliminar</button></td>';
                                    echo '</tr>';
                                  }
                                ?>

                              </tbody>
                            </table>
                            <?php
                foreach ($Usuarios as $Usuario){
                  imprimirModal($Usuario, $roles);
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
