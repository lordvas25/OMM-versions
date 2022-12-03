<?php 
	require_once("model/conexion.php");
	require_once("model/consultasE.php");
	require_once("Controller/mostrarproductosE.php");

?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Online Market Management</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>

	<!-- Css -->
	<link rel="stylesheet" href="View/Client-site/css/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="View/Client-site/css/owl.carousel.css">
	<link rel="stylesheet" href="View/Client-site/css/owl.theme.css">
	<link rel="stylesheet" href="View/Client-site/css/bootstrap.min.css">
	<link rel="stylesheet" href="View/Client-site/css/font-awesome.min.css">
	<link rel="stylesheet" href="View/Client-site/css/style.css">
	<link rel="stylesheet" href="View/Client-site/css/responsive.css">

	<!-- jS -->
	<script src="View/Client-site/js/jquery.min.js" type="text/javascript"></script>
	<script src="View/Client-site/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="View/Client-site/js/jquery.nivo.slider.js" type="text/javascript"></script>
	<script src="View/Client-site/js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="View/Client-site/js/jquery.nicescroll.js"></script>
	<script src="View/Client-site/js/jquery.scrollUp.min.js"></script>
	<script src="View/Client-site/js/main.js" type="text/javascript"></script>


</head>
<body>


<!-- TOP HEADER Start
    ================================================== -->
	
	<section id="top">
		<div class="container">
			<div class="row">
				<div class="col-md-3 clearfix">
					<ul class="login-cart">
						<li>
							<a href="View/Extra/Registro-user.php">
							<i class="nav-icon fas fa-solid fa-user-plus"></i>
								Acceder
							</a>
						</li>
					</ul>
				</div>
			</div> <!-- End Of /.row -->
		</div>	<!-- End Of /.Container -->	
	</section>  <!-- End of /Section -->
	


	<!-- LOGO Start
    ================================================== -->
	
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="index.php">
						<img src="view/Client-site/images/Logo3.png" alt="logo" width="160px" height="160px">
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
		        	<li class="active"><a href="../../index.php">INICIO</a></li>
					<li><a href="View/Client-site/products.php">PRODUCTOS</a></li>
					<li><a href="View/Client-site/blog.html">QUIENES SOMOS?</a></li>
					<li><a href="View/Client-site/blog-single.php">CONTACTANOS</a></li>
		        </ul> <!-- End of /.nav-main -->
		    </div>	<!-- /.navbar-collapse -->
		</div>	<!-- /.container-fluid -->
	</nav>	<!-- End of /.nav -->


	<!-- SLIDER Start
    ================================================== -->


	<section id="slider-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="slider" class="nivoSlider">
				    	<img src="View/Client-site/images/Desc.gif" alt="" />
				    	<img src="View/Client-site/images/Desc.gif" alt=""/>
					</div>	<!-- End of /.nivoslider -->
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section> <!-- End of Section -->



	<!-- CATAGORIE Start
    ================================================== -->

	<section id="catagorie">
		<div class="container">
			<div class="row">
			<div class="col-md-12">
					<div class="products-heading">
						<h2>DESCUENTOS</h2>
					</div>
				</div>
			<?php 
            	cargarproductosPreciosBajos();
              ?>
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->



	
		<!-- PRODUCTS Start
    ================================================== -->

	<section id="products">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="products-heading">
						<h2>NUEVOS PRODUCTOS</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?php 
					cargarproductosIndex();
					?>
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->

	<!-- FOOTER Start
    ================================================== -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="block">
					<h4>CONTACTANOS</h4>
						<p ><i class="fa  fa-map-marker"></i> <span>Online Market Management OMM,</span> Bogotá - Colombia</p>
						<p> <i class="fa  fa-phone"></i> <span>Telefono:</span> (+57) 312 4531234 </p>
 
						<p class="mail"><i class="fa  fa-envelope"></i>Correo: <span>omm@gmail.com</span></p>
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of /.Col-md-4 -->
				<div class="col-md-4">
					<div class="block clearfix">
						<a href="#">
							<img class="w-100" src="View/Client-site/images/Logo3.png" alt="" width="180px" height="180px">
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
						<p class="copyright-text pull-right">OMM @2022 Designed by <a href="http://www.themexpert.com">Themexpert.</a> Todos los derechos reservados</p>
					</div>	<!-- End Of /.col-md-12 -->	
				</div>	<!-- End Of /.row -->	
			</div>	<!-- End Of /.container -->	
		</div>	<!-- End Of /.footer-bottom -->
	</footer> <!-- End Of Footer -->
	
	<a id="back-top" href="#"></a>
</body>
</html>