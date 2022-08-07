<?= $this->extend('plantillas/plantilla_admin') ?>
<?= $this->section('content') ?>
<div class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="#" class="h1"><b>Dulces Mexicanoss</b></a>
      </div>
    <div class="card" >
      <div class="card-body login-card-body" align="center" style="border-radius: 12px;">

        <?= $this->include("login/contrasena_svg"); ?>
        <p class="login-box-msg">Sign in to start your session</p>

      <?= form_open("validar"); ?>
          <div class="input-group mb-3">
            <?= form_input('correo', '',['class'=>'form-control']) ?>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <?= form_password('contrasena', '',['class'=>'form-control']) ?>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <?= form_submit('', 'Validar', ['class' => "btn btn-primary btn-block"])?>
            </div>
            <!-- /.col -->
          </div>
        <?= form_close(); ?>
        <!-- /.social-auth-links -->

        <p class="mb-1">
          <a href="<?php base_url() ?>/logincontroller/redireccionar">Recuperar contraseña</a>
        </p>
        <p class="mb-0">
          <a href="<?php base_url() ?>/logincontroller/informacion">Registro</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->
</div>


<?= $this->endSection() ?>
