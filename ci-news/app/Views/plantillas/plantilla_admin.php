<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto - 8C</title>

    <link rel="stylesheet" href="<?= base_url("recursos/css/adminlte.css") ?>">
    <script type="text/javascript" src="<?= base_url("recursos/css/adminlte.js") ?>"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url("/recursos/plugins/fontawesome-free/css/all.min.css")?>">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url("recursos/plugins/icheck-bootstrap/icheck-bootstrap.min.css")?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url("recursos/css/adminlte.min.css")?>">
    <!-- jQuery -->
    <script src="<?= base_url("recursos/plugins/jquery/jquery.min.js")?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url("recursos/plugins/bootstrap/js/bootstrap.bundle.min.js")?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url("recursos/js/adminlte.min.js")?>"></script>

    <link rel="stylesheet" href="<?= base_url("recursos/plugins/sweetalert2/sweetalert2.css")?>">

    <script src="<?= base_url("recursos/plugins/sweetalert2/sweetalert2.all.js");?>"></script>
</head>
<body>
    <?= $this->renderSection('content') ?>
</body>
</html>
