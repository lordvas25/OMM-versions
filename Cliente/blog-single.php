<?php
	require_once("../../model/conexion.php");
	require_once("../../model/ValidarSesion.php");
	require_once("../../Controller/seguridadCliente.php");
	require_once("../../Controller/verPerfilCliente.php");
	require_once("../../Controller/mostrarproductosCliente.php");
	require_once("../../model/ConsultasCliente.php");
	require_once("../../model/ValidarSesion.php");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contactanos</title>
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

	<!-- jS -->
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
	<script src="js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/main.js" type="text/javascript"></script>


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
					<a href="index.php">
						<img src="../Client-site/images/Logo3.png" alt="logo" width="160px" height="160px">
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
		        	<li ><a href="HomeCliente.php">INICIO</a></li>
					<li><a href="productsCliente.php">PRODUCTOS</a></li>
					<li><a href="ListarProductosCarrito.php">COMPRAS</a></li>
					<li ><a href="blog-single.php">CONTACTANOS</a></li>
					<!--<li class="dropdown">
						<a href="#">
							PAGES
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
						   <li><a  href="#">Action</a></li>
						    <li><a  href="#">Another action</a></li>
						    <li><a  href="#">Something else here</a></li>
						    <li><a  href="#">Separated link</a></li>
						</ul>
					</li> End of /.dropdown -->
					
		        </ul> <!-- End of /.nav-main -->
		    </div>	<!-- /.navbar-collapse -->
		</div>	<!-- /.container-fluid -->
	</nav>	<!-- End of /.nav -->



<!-- Breadcrumbs Start
    ================================================== -->

	<section id="topic-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h1>CONTACTANOS</h1>
					<p>Si tienes alg??n inconveniente, por favor comuniquese con nosotros</p>
				</div>	<!-- End of /.col-md-4 -->
				<div class="col-md-8 hidden-xs">
					<ol class="breadcrumb pull-right">
					  	<li><a href="../../index.php">Inicio</a></li>
					  	<li class="Active">Contactanos</li>
					</ol>
				</div>	<!-- End of /.col-md-8 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of /#Topic-header -->


	<section id="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-12 clearfix">	
					<div class="leave-comment">
						<h5>DEJA UN COMETARIO</h5>
						<form action="../../controller/InsertarConsultaC.php" method="post" class="form-horizontal" role="form">
							<div class="form-group">
						    	<label for="inputname" class="col-sm-2 control-label">Nombre completo</label>
							    <div class="col-sm-10">
							    <input type="text" class="form-control" id="nombres" required name="Nombres" placeholder="Nombres">
							    </div>
						  	</div>	<!-- End of /.form-group -->
						  	<div class="form-group">
						    	<label for="inputEmail" class="col-sm-2 control-label">Correo</label>
							    <div class="col-sm-10">
							      	<input type="email" class="form-control" id="correo" required name="Email" placeholder="Correo">
							    </div>
						  	</div>	<!-- End of /.form-group -->
						  	<div class="form-group">
						    	<label for="inputmessage" class="col-sm-2 control-label">Mensaje</label>
							    <div class="col-sm-10">
							      	<textarea class="form-control" id="mensaje" required name="Mensaje" rows="5"></textarea>
							    </div>
						  	</div>	<!-- End of /.form-group -->
						  		
							<div class="form-group">
						    	<div class="col-sm-offset-2 col-sm-10">
						      		<button type="submit" class="btn btn-warning">Enviar</button>
						    	</div>
						  	</div>	<!-- End of /.form-group -->
						</form>	<!-- End of /.form-horizontal -->
					</div>	<!-- End of /.leave comments -->
					<?php
						cargarSugerenciaC();
					?>
				</div>	<!-- End of /.col-md-9 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section> <!-- End of /.Section -->
<!-- FOOTER Start
    ================================================== -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="block">
						<h4>CONTACTANOS</h4>
						<p ><i class="fa  fa-map-marker"></i> <span>Online Market Management OMM,</span> Bogot?? - Colombia</p>
						<p> <i class="fa  fa-phone"></i> <span>Telefono:</span> (+57) 312 4531234 </p>
 
						<p class="mail"><i class="fa  fa-envelope"></i>Correo: <span>omm@gmail.com</span></p>
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