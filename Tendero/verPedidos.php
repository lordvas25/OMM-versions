<?php
require_once("../../Model/conexion.php");
require_once("../../Model/ConsultasTendero.php");
require_once("../../Controller/mostrarpedidos.php");
require_once("../../model/ValidarSesion.php");
require_once("../../Controller/seguridadTendero.php");
require_once("../../Controller/verPerfilTendero.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pedidos</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../Dashboard-base/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../Dashboard-base/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- iCheck -->
  <link rel="stylesheet" href="../Dashboard-base/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../Dashboard-base/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../Dashboard-base/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../css/estiloVerPed.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../Dashboard-base/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../Dashboard-base/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../Dashboard-base/plugins/summernote/summernote-bs4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../Dashboard-base/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../Dashboard-base/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../Dashboard-base/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <style>

    table.table.dataTable tbody tr.Inactivo{
      background: #f5c8c8 !important;
    }

    table.table.dataTable tbody tr.Pendiente{
      background: #FF7733 !important;
    }

  </style>

    <!-- bootstrap icons -->
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
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../Controller/cerrarsesion.php" class="nav-link">Cerrar sesion</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

    
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
    include('menuTendero.php');
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Visualizar Pedidos registrados</h1>
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
          <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Registros de pedidos realizados por los clientes</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php
                    cargarPedidosPorhacer();
                ?>
              </div>
              <!-- /.card-body -->
            </div>
                <!-- /.card-body -->


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
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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
<!-- DataTables  & Plugins -->
<script src="../Dashboard-base/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../Dashboard-base/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../Dashboard-base/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../Dashboard-base/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../Dashboard-base/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../Dashboard-base/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../Dashboard-base/plugins/jszip/jszip.min.js"></script>
<script src="../Dashboard-base/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../Dashboard-base/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../Dashboard-base/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../Dashboard-base/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../Dashboard-base/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../Dashboard-base/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../Dashboard-base/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../Dashboard-base/dist/js/pages/dashboard.js"></script>

<script>
  $(function () {
    $("#TableCart").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#TableCart_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>
</html>
