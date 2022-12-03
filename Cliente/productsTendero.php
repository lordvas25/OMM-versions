<?php 
	require_once("../../model/conexion.php");
	require_once("../../Controller/mostrarproductosCliente.php");
	require_once("../../Controller/seguridadCliente.php");
	require_once("../../Controller/verPerfilCliente.php");
	require_once("../../model/ConsultasCliente.php");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tendero</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>

	<!-- Css -->
	<link rel="stylesheet" href="../Client-site/css/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="../Client-site/css/owl.carousel.css">
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
					<a href="#">
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
		        	<li><a href="HomeCliente.php">INICIO</a></li>
					<li class="active"><a href="productsCliente.php">PRODUCTOS</a></li>
					<li><a href="ListarProductosCarrito.php">COMPRAS</a></li>
					<li ><a href="blog-single.php">CONTACTANOS</a></li>
		        </ul> <!-- End of /.nav-main -->
		    </div>	<!-- /.navbar-collapse -->
		</div>	<!-- /.container-fluid -->
	</nav>	<!-- End of /.nav -->


	<section id="topic-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h1>TENDERO</h1>
					<p>Encuentra lo que buscas!</p>
				</div>	<!-- End of /.col-md-4 -->
				<div class="col-md-8 hidden-xs">
					<ol class="breadcrumb pull-right">
					  	<li><a href="HomeCliente.php">Inicio</a></li>
					  	<li class="active">Productos</li>
					</ol>
				</div>	<!-- End of /.col-md-8 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of /#Topic-header -->



	<!-- PRODUCTS Start
    ================================================== -->

	<section id="shop">
		<div class="container">
			<div class="row">
			<div class="col-md-9">
					<div class="products-heading">
						<h2>NUEVOS PRODUCTOS</h2>
					</div>	<!-- End of /.Products-heading -->
					<div class="product-grid">
					    <ul>
							<?php 
            				cargarProductosTendero(); 
              				?>
					    </ul>
					</div>	<!-- End of /.products-grid -->
			</div>	<!-- End of /.col-md-9 -->
					<!-- Pagination -->

				<div class="col-md-3">
					<div class="blog-sidebar">
						<div class="block">
							<h4>Categorias</h4>
							<div class="list-group">
							<a href="CategoriaAceitesYotros.php" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Aceites, Pastas y Legumbres
								</a>
								<a href="CategoriaLacteosYotros.php" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Huevos, Lácteos y Café
								</a>
								<a href="CategoriaBebidas.php" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Bebidas
								</a>
								<a href="CategoriaEmbutidos.php" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Embutidos
								</a>
								<a href="CategoriaAperitivos.php" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Aperitivos y dulces
								</a>
								<a href="CategoriaEspeciasYotros.php" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Especias, Salsas y Preparados
								</a>
								<a href="CategoriaLimpieza.php" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Hogar y limpieza
								</a>
								<a href="CategoriaCuidadoPersonal.php" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Cuidado Personal
								</a>
								
							</div>
						</div>
						<div class="block">
							<img src="../Client-site/images/Ad-OMM.png" alt="">
						</div>
				</div>	<!-- End of /.col-md-3 -->
			
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
		
		<div class="pagination-bottom">
						<ul class="pagination">
						  	<li class="disabled"><a href="#">&laquo;</a></li>
						  	<li class="active"><a href="#">1 <span class="sr-only"></span></a></li>
						  	<li><a href="#">2</a></li>
						  	<li><a href="#">3</a></li>
						  	<li><a href="#">4</a></li>
						  	<li><a href="#">»</a></li>
						</ul>	<!-- End of /.pagination -->
					</div>
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

						<p class="copyright-text pull-right">OMM @2022 Designed by <a href="http://www.themexpert.com">Themexpert</a> Todos los derechos reservados</p>
					</div>	<!-- End Of /.col-md-12 -->	
				</div>	<!-- End Of /.row -->	
			</div>	<!-- End Of /.container -->	
		</div>	<!-- End Of /.footer-bottom -->
	</footer> <!-- End Of Footer -->
	
	<a id="back-top" href="#"></a>
</body>
</html>