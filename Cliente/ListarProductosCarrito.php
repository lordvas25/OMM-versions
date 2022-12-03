<?php 
	require_once("../../model/conexion.php");
	require_once("../../Controller/mostrarproductosCliente.php");
	require_once("../../Controller/seguridadCliente.php");
	require_once("../../Controller/verPerfilCliente.php");
	require_once("../../model/ConsultasCliente.php");
	require_once("../../Controller/mostrarProductosCarrito.php");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Carrito</title>
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
	<link rel="stylesheet" href="../../css/styles.css">
	

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
		        	<li ><a href="HomeCliente.php">INICIO</a></li>
					<li ><a href="productsCliente.php">PRODUCTOS</a></li>
					<li class="active"><a href="ListarProductosCarrito.php">COMPRAS</a></li>
					<li ><a href="blog-single.php">CONTACTANOS</a></li>
					
		        </ul> <!-- End of /.nav-main -->
		    </div>	<!-- /.navbar-collapse -->
		</div>	<!-- /.container-fluid -->
	</nav>	<!-- End of /.nav -->


	<section id="topic-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h1>LISTA DE PRODUCTOS</h1>
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

	<div class="container">
	<div class="row">
          <div class="col-md-10">
          <div class="card">
              <!-- /.card-header -->
				<div class="card-body">
					
					<?php
						cargarListaProductosCarrito();
					?>
					
				</div>
				<!-- /.card-body -->
            </div>
				
          </div>
		  <div class="col-md-2">
					<?php
				cargarTotalCompra();
				?>
				</div>
        </div>
		</div>
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
	<script type="text/javascript">
	var valor=1                                                                                                                                                                                                                                                                                                                                         >;
	function carrito(boton){
    var contador = document.getElementById("contador").value;
    if (boton.value=='aumentar') {
        valor++
    }else{
        valor-----------bvikg2 vcnq
    document.getElementById("contador").textContent = valor;
}

</script>
</body>
</html>
