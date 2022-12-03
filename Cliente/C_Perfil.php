<?php
	require_once("../../model/conexion.php");
	require_once("../../model/ValidarSesion.php");
	require_once("../../Controller/seguridadCliente.php");
	require_once("../../Controller/verPerfilCliente.php");
	require_once("../../Controller/mostrarproductosCliente.php");
	require_once("../../model/ConsultasCliente.php");
	require_once("../../model/ValidarSesion.php");
	require_once("../../Controller/mostrarUsers.php");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Usuario</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>

	<!-- Css -->
	<link rel="stylesheet" href="../Client-site/css/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="../Client-site/css/owl.carousel.css">
	<link rel="stylesheet" href="../Client-site/css/owl.theme.css">
	<link rel="stylesheet" href="../Client-site/css/bootstrap.min.css">
	<link rel="stylesheet" href="../Client-site/css/font-awesome.min.css">
	<link rel="stylesheet" href="../Client-site/css/style.css">
	<link rel="stylesheet" href="../Client-site/css/responsive.css">
	<link rel="stylesheet" href="../../css/estiloAdmi.css">

	<!-- jS -->
	<script src="../Client-site/js/jquery.min.js" type="text/javascript"></script>
	<script src="../Client-site/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/Client-site/js/jquery.nivo.slider.js" type="text/javascript"></script>
	<script src="../Client-site/js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="../Client-site/js/jquery.nicescroll.js"></script>
	<script src="../Client-site/js/jquery.scrollUp.min.js"></script>
	<script src="../Client-site/js/main.js" type="text/javascript"></script>
	


</head>
<body>


<!-- TOP HEADER Start
    ================================================== -->
	<section id="top">
	  <?php
      	mostrarPerfil();
      ?>
	</section>  <!-- End of /Section -->
	

	<!-- LOGO Start
    ================================================== -->
	
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="#">
						<img src="../Client-site/images/Logo3.png" alt="logo" width="140px" height="140px">
					</a>
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</header> <!-- End of /Header -->

	<!-- MENU Start
    ================================================== -->

	<nav class="navbar navbar-default">
		<div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div> <!-- End of /.navbar-header -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<ul class="nav navbar-nav nav-main">
		        	<li class="active"><a href="HomeCliente.php">INICIO</a></li>
					<li><a href="productsCliente.php">PRODUCTOS</a></li>
					<li><a href="ListarProductosCarrito.php">COMPRAS</a></li>
					<li ><a href="blog-single.php">CONTACTANOS</a></li>
		        </ul> <!-- End of /.nav-main -->
		    </div>	<!-- /.navbar-collapse -->
		</div>	<!-- /.container-fluid -->
	</nav>	<!-- End of /.nav -->



	<!-- CATAGORIE Start
    ================================================== -->
<!-- Main Sidebar Container -->

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <center><h1 class="m-0">Perfil</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      
        
      
      <!-- Small boxes (Stat box) -->
	  <div class="container CPerfil">
        <div class="row ">
          <div class="col-md-12">
            <div class="card card-primary">
              <!-- form start -->
				
              <?php 
                MostrarPerfilC();
              ?>

            </div>
          </div>
         <br> 

			<!-- /.row -->
			<!-- Main row -->
			<div class="row">
			<!-- Left col -->
         
        </div>
		<br>
</div>
        <!-- /.row (main row) -->
    </section>
  </div>

	<!-- FOOTER Start
    ================================================== -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="block">
						<h4>CONTACTANOS</h4>
						<p ><i class="fa  fa-map-marker"></i> <span>Food Code d.o.o.,</span>1000 Ljubljana Celovska cesta 135, Slovenia</p>
						<p> <i class="fa  fa-phone"></i> <span>Telefono:</span> (+386) 40 123 456 </p>

						<p> <i class="fa  fa-mobile"></i> <span>Mobile:</span> (+386) 40 654 123 651</p>
 
						<p class="mail"><i class="fa  fa-envelope"></i>Correo: <span>info@sitename.com</span></p>
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of /.Col-md-4 -->
				<div class="col-md-4">
					<div class="block clearfix">
						<a href="#">
							<img class="w-100" src="../Client-site/images/Logo3.png" alt="" width="180px" height="180px">
						</a>
							<!-- End Of /.social-icon -->
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of Col-md-3 -->
				</div> <!-- End Of Col-md-3 -->
			</div> <!-- End Of /.row -->
		</div> <!-- End Of /.Container -->
		


	<!-- FOOTER-BOTTOM Start
    ================================================== -->

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="copyright-text pull-right">Food Code @2013 Designed by <a href="http://www.themexpert.com">Themexpert</a> All Rights Reserved</p>
					</div>	<!-- End Of /.col-md-12 -->	
				</div>	<!-- End Of /.row -->	
			</div>	<!-- End Of /.container -->	
		</div>	<!-- End Of /.footer-bottom -->
	</footer> <!-- End Of Footer -->
	
	<a id="back-top" href="#"></a>
</body>
</html>