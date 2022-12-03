<?php
require_once("../../Model/conexion.php");
require_once("../../Model/ConsultasAdmin.php");
require_once("../../Controller/mostrarUsers.php");
require_once("../../model/ValidarSesion.php");
require_once("../../Controller/seguridadAdmin.php");
require_once("../../Controller/verPerfilAdmin.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Usuario</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../Dashboard-base/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../Dashboard-base/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../Dashboard-base/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../Dashboard-base/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../Dashboard-base/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../Dashboard-base/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../Dashboard-base/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../Dashboard-base/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="../../css/estiloAdmiediPerf.css">
  <!--Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../Client-site/images/Logo3.png" alt="AdminLTELogo" height="150" width="150">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../Controller/cerrarsesion.php" class="nav-link">Cerrar sesion</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
       <!-- Messages Dropdown Menu -->
       <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header">Sugerencias Index</span>
        <?php
          MostrarSugerenciasModal();
        ?>
        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
    include('menuAdmin.php');
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Modificar Usuario</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
      
      <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Actualizar Datos</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <?php 
                cargarUser();
              ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Modificar Contraseña</h3>
                    </div>
                      <form action="../../Controller/modificarClave.php" method="POST">
                          <div class="card-body">
                              <div class="row">
                              <div class="form-group col-md-6">
                                    <label for="clave">Contraseña Atual </label>
                                    <input type="password" class="form-control" id="clave" required name="ClaveActual" placeholder="Ej: 1A2B3C4D">
                                  </div>
                                  <div class="form-group col-md-6"> 
                                    <label for="clave">Contraseña Nueva</label>
                                    <input type="password" class="form-control" id="clave" required name="ClaveNueva" placeholder="Ej: 1A2B3C4D">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="clave">Confirmar Contraseña</label>
                                    <input type="password" class="form-control" id="clave" required name="ClaveConf" placeholder="Ej: 1A2B3C4D">
                                  </div>
                              </div>
                          </div>
                          <!-- /.card-body -->
                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Cambiar</button>
                          </div>
                      </form>
                  </div>
                </div>
            </div>  
        </div>
        
        

        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
          
          </section>
         
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
  <strong>OMM &copy; 2022 <a href=""> ONLINE MARKET</a>.</strong>
    MANAGENT.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../Dashboard-base/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../Dashboard-base/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../Dashboard-base/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../Dashboard-base/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../Dashboard-base/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../Dashboard-base/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../Dashboard-base/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../Dashboard-base/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../Dashboard-base/plugins/moment/moment.min.js"></script>
<script src="../Dashboard-base/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../Dashboard-base/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../Dashboard-base/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../Dashboard-base/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../Dashboard-base/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../Dashboard-base/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../Dashboard-base/dist/js/pages/dashboard.js"></script>
</body>
</html>
