<?php

  //Esta función muestra los productos en ofertas de precio en el index
    function cargarproductosPreciosBajos(){
        $objetoConsultas =  new ConsultasE();
        $result = $objetoConsultas->mostrarProductosPreciosBajos();

        if(!isset($result)){
            echo '<h2>No hay Productos</h2>';
        }else{
            
            foreach ($result as $f) {
                echo'
                <div class="col-md-3">
                <div class="products">
                  <a href="View/Client-site/single-product.php?id_productos='.$f["id_productos"].'">
                  <img src="uploads/'.$f["img_producto"].'" width="100px" >
                  </a>
                  <a href="single-product.html">
                    <h4><a href="">'.$f["nombre_producto"].'</h4>
                  </a>
                  <p class="price">Desde: $'.$f["precio_producto"].'</p>
                  <a class="view-link shutter" href="View/Extra/Registro-user.php">
                    Añadir </a>
                </div>	<!-- End of /.products -->
              </div>
              
              ';
        
            }   
      
        }
    }

    //Esta función muestra todos los productos del index
    function cargarproductosIndex(){
      $objetoConsultas =  new ConsultasE();
      $result = $objetoConsultas->mostrarProductos();

      if(!isset($result)){
          echo '<h2>No hay Productos</h2>';
      }else{
          
          foreach ($result as $f) {
              echo'
              <div class="col-md-3">
              <div class="products">
                <a href="View/Client-site/single-product.php?id_productos='.$f["id_productos"].'">
                <img src="uploads/'.$f["img_producto"].'" width="100px" >
                </a>
                <a href="single-product.html">
                  <h4><a href="">'.$f["nombre_producto"].'</h4>
                </a>
                <p class="price">Desde: $'.$f["precio_producto"].'</p>
                <a class="view-link shutter" href="View/Extra/Registro-user.php">
                  Añadir</a>
              </div>	<!-- End of /.products -->
            </div>
            
            ';
      
          }   
    
      }
  }

    //Esta función muestra todos los productos en la pagina de Products.php
    function cargarproductos(){
      $objetoConsultas =  new ConsultasE();
      $result = $objetoConsultas->mostrarProductos();

      if(!isset($result)){
          echo '<h2>No hay Productos</h2>';
      }else{
          
          foreach ($result as $f) {
              echo'
              <div class="col-md-3">
              <div class="products">
                <a href="single-product.php?id_productos='.$f["id_productos"].'">
                <img src="../../uploads/'.$f["img_producto"].'" width="100px" >
                </a>
                <a href="single-product.html">
                  <h4><a href="">'.$f["nombre_producto"].'</h4>
                </a>
                <p class="price">Desde: $'.$f["precio_producto"].'</p>
                <a class="view-link shutter" href="View/Extra/Registro-user.php">
                  </i>Añadir </a>
              </div>	<!-- End of /.products -->
            </div>
            
            ';
      
          }   
    
      }
  }


  //Esta funcion sera para cargar por las categorias corespondientes
  function cargarCategoriaAceitesYotros(){
    $objetoConsultas =  new ConsultasE();
    $result = $objetoConsultas->mCategoriaAceitesYotros();
  
    if(!isset($result)){
        echo '<h2>No hay Productos</h2>';
    }else{
        
        foreach ($result as $f) {
            echo'
            <form action="../../Controller/insertarProductoCarrito.php" method="post">
            <div class="col-md-3">
            <div class="products">
              <a href="C_single-product.php?id_productos='.$f["id_productos"].'">
              <img src="../../uploads/'.$f["img_producto"].'" width="100px" >
              </a>
              <a href="single-product.html">
                <h4><a href="">'.$f["nombre_producto"].'</h4>
              </a>
              <p class="price">Desde: $'.$f["precio_producto"].'</p>
                  <input type="hidden" name="id_producto" value="'.$f["id_productos"].'"></input>
                  <input type="hidden" name="nombre_producto" value="'.$f["nombre_producto"].'"></input>
                  <input type="hidden" name="img_producto" value="'.$f["img_producto"].'"></input>
                  <input type="hidden" name="precio_producto" value="'.$f["precio_producto"].'"></input>
                  <input type="hidden" name="marca_producto" value="'.$f["marca_producto"].'"></input>
                  <button type="submit" class="btn btn-default btn-transparent">
                  <span>Añadir</span>
                  </button>
                  Añadir al carrito</a>
            </div>	<!-- End of /.products -->
          </div>
          </form>
          
          ';
    
        }   
  
    }
  }
  
    //Esta funcion sera para cargar por las categorias corespondientes
    function cargarCategoriaLacteosYotros(){
      $objetoConsultas =  new ConsultasE();
      $result = $objetoConsultas->mCategoriaLacteosYotros();
  
      if(!isset($result)){
          echo '<h2>No hay Productos</h2>';
      }else{
          
          foreach ($result as $f) {
              echo'
              <form action="../../Controller/insertarProductoCarrito.php" method="post">
              <div class="col-md-3">
              <div class="products">
                <a href="C_single-product.php?id_productos='.$f["id_productos"].'">
                <img src="../../uploads/'.$f["img_producto"].'" width="100px" >
                </a>
                <a href="single-product.html">
                  <h4><a href="">'.$f["nombre_producto"].'</h4>
                </a>
                <p class="price">Desde: $'.$f["precio_producto"].'</p>
                <input type="hidden" name="id_producto" value="'.$f["id_productos"].'"></input>
                  <input type="hidden" name="nombre_producto" value="'.$f["nombre_producto"].'"></input>
                  <input type="hidden" name="img_producto" value="'.$f["img_producto"].'"></input>
                  <input type="hidden" name="precio_producto" value="'.$f["precio_producto"].'"></input>
                  <input type="hidden" name="marca_producto" value="'.$f["marca_producto"].'"></input>
                  <button type="submit" class="btn btn-default btn-transparent">
                  <span>Añadir </span>
                  </button>
              </div>	<!-- End of /.products -->
            </div>
            </form>
            ';
      
          }   
    
      }
  }
  
  //Esta funcion sera para cargar por las categorias corespondientes
  function cargarCategoriaBebidas(){
    $objetoConsultas =  new ConsultasE();
    $result = $objetoConsultas->mCategoriaBebidas();
  
    if(!isset($result)){
        echo '<h2>No hay Productos</h2>';
    }else{
        
        foreach ($result as $f) {
            echo'
            <form action="../../Controller/insertarProductoCarrito.php" method="post">
            <div class="col-md-3">
            <div class="products">
              <a href="C_single-product.php?id_productos='.$f["id_productos"].'">
              <img src="../../uploads/'.$f["img_producto"].'" width="100px" >
              </a>
              <a href="single-product.html">
                <h4><a href="">'.$f["nombre_producto"].'</h4>
              </a>
              <p class="price">Desde: $'.$f["precio_producto"].'</p>
                  <input type="hidden" name="id_producto" value="'.$f["id_productos"].'"></input>
                  <input type="hidden" name="nombre_producto" value="'.$f["nombre_producto"].'"></input>
                  <input type="hidden" name="img_producto" value="'.$f["img_producto"].'"></input>
                  <input type="hidden" name="precio_producto" value="'.$f["precio_producto"].'"></input>
                  <input type="hidden" name="marca_producto" value="'.$f["marca_producto"].'"></input>
                  <button type="submit" class="btn btn-default btn-transparent">
                  <span>Añadir</span>
                  </button>
            </div>	<!-- End of /.products -->
          </div>
          </form>
          
          ';
    
        }   
  
    }
  }
  
    //Esta funcion sera para cargar por las categorias corespondientes
    function cargarCategoriaEmbutidos(){
      $objetoConsultas =  new ConsultasE();
      $result = $objetoConsultas->mCategoriaEmbutidos();
  
      if(!isset($result)){
          echo '<h2>No hay Productos</h2>';
      }else{
          
          foreach ($result as $f) {
              echo'
              <form action="../../Controller/insertarProductoCarrito.php" method="post">
              <div class="col-md-3">
              <div class="products">
                <a href="C_single-product.php?id_productos='.$f["id_productos"].'">
                <img src="../../uploads/'.$f["img_producto"].'" width="100px" >
                </a>
                <a href="single-product.html">
                  <h4><a href="">'.$f["nombre_producto"].'</h4>
                </a>
                <p class="price">Desde: $'.$f["precio_producto"].'</p><input type="hidden" name="id_producto" value="'.$f["id_productos"].'"></input>
                <input type="hidden" name="nombre_producto" value="'.$f["nombre_producto"].'"></input>
                <input type="hidden" name="img_producto" value="'.$f["img_producto"].'"></input>
                <input type="hidden" name="precio_producto" value="'.$f["precio_producto"].'"></input>
                <input type="hidden" name="marca_producto" value="'.$f["marca_producto"].'"></input>
                <button type="submit" class="btn btn-default btn-transparent">
                <span>Añadir</span>
                </button>
              </div>	<!-- End of /.products -->
            </div>
            </form>
            
            ';
      
          }   
      }
    }
  
    //Esta funcion sera para cargar por las categorias corespondientes
    function cargarCategoriaAperitivosYotros(){
      $objetoConsultas =  new ConsultasE();
      $result = $objetoConsultas->mCategoriaAperitivosYotros();
  
      if(!isset($result)){
          echo '<h2>No hay Productos</h2>';
      }else{
          
          foreach ($result as $f) {
              echo'
              <form action="../../Controller/insertarProductoCarrito.php" method="post">
              <div class="col-md-3">
              <div class="products">
                <a href="C_single-product.php?id_productos='.$f["id_productos"].'">
                <img src="../../uploads/'.$f["img_producto"].'" width="100px" >
                </a>
                <a href="single-product.html">
                  <h4><a href="">'.$f["nombre_producto"].'</h4>
                </a>
                <p class="price">Desde: $'.$f["precio_producto"].'</p><input type="hidden" name="id_producto" value="'.$f["id_productos"].'"></input>
                <input type="hidden" name="nombre_producto" value="'.$f["nombre_producto"].'"></input>
                <input type="hidden" name="img_producto" value="'.$f["img_producto"].'"></input>
                <input type="hidden" name="precio_producto" value="'.$f["precio_producto"].'"></input>
                <input type="hidden" name="marca_producto" value="'.$f["marca_producto"].'"></input>
                <button type="submit" class="btn btn-default btn-transparent">
                <span>Añadir</span>
                </button>
              </div>	<!-- End of /.products -->
            </div>
            </form>
            
            ';
      
          }   
      }
    }
  
    //Esta funcion sera para cargar por las categorias corespondientes
    function cargarCategoriaEspeciasYotros(){
      $objetoConsultas =  new ConsultasE();
      $result = $objetoConsultas->mCategoriaEspeciasYotros();
  
      if(!isset($result)){
          echo '<h2>No hay Productos</h2>';
      }else{
          
          foreach ($result as $f) {
              echo'
              <form action="../../Controller/insertarProductoCarrito.php" method="post">
              <div class="col-md-3">
              <div class="products">
                <a href="C_single-product.php?id_productos='.$f["id_productos"].'">
                <img src="../../uploads/'.$f["img_producto"].'" width="100px" >
                </a>
                <a href="single-product.html">
                  <h4><a href="">'.$f["nombre_producto"].'</h4>
                </a>
                <p class="price">Desde: $'.$f["precio_producto"].'</p><input type="hidden" name="id_producto" value="'.$f["id_productos"].'"></input>
                <input type="hidden" name="nombre_producto" value="'.$f["nombre_producto"].'"></input>
                <input type="hidden" name="img_producto" value="'.$f["img_producto"].'"></input>
                <input type="hidden" name="precio_producto" value="'.$f["precio_producto"].'"></input>
                <input type="hidden" name="marca_producto" value="'.$f["marca_producto"].'"></input>
                <button type="submit" class="btn btn-default btn-transparent">
                <span>Añadir</span>
                </button>
              </div>	<!-- End of /.products -->
            </div>
            </form>
            
            ';
      
          }   
      }
    }
  
    //Esta funcion sera para cargar por las categorias corespondientes
    function cargarCategoriaLimpieza(){
      $objetoConsultas =  new ConsultasE();
      $result = $objetoConsultas->mCategoriaLimpieza();
  
      if(!isset($result)){
          echo '<h2>No hay Productos</h2>';
      }else{
          
          foreach ($result as $f) {
              echo'
              <form action="../../Controller/insertarProductoCarrito.php" method="post">
              <div class="col-md-3">
              <div class="products">
                <a href="C_single-product.php?id_productos='.$f["id_productos"].'">
                <img src="../../uploads/'.$f["img_producto"].'" width="100px" >
                </a>
                <a href="single-product.html">
                  <h4><a href="">'.$f["nombre_producto"].'</h4>
                </a>
                <p class="price">Desde: $'.$f["precio_producto"].'</p><input type="hidden" name="id_producto" value="'.$f["id_productos"].'"></input>
                <input type="hidden" name="nombre_producto" value="'.$f["nombre_producto"].'"></input>
                <input type="hidden" name="img_producto" value="'.$f["img_producto"].'"></input>
                <input type="hidden" name="precio_producto" value="'.$f["precio_producto"].'"></input>
                <input type="hidden" name="marca_producto" value="'.$f["marca_producto"].'"></input>
                <button type="submit" class="btn btn-default btn-transparent">
                <span>Añadir</span>
                </button>
              </div>	<!-- End of /.products -->
            </div>
            </form>
            
            ';
      
          }   
      }
    }
  
    //Esta funcion sera para cargar por las categorias corespondientes
    function cargarCategoriaCuidadoPersonal(){
      $objetoConsultas =  new ConsultasE();
      $result = $objetoConsultas->mCategoriaCuidadoPersonal();
  
      if(!isset($result)){
          echo '<h2>No hay Productos</h2>';
      }else{
          
          foreach ($result as $f) {
              echo'
              <form action="../../Controller/insertarProductoCarrito.php" method="post">
              <div class="col-md-3">
              <div class="products">
                <a href="C_single-product.php?id_productos='.$f["id_productos"].'">
                <img src="../../uploads/'.$f["img_producto"].'" width="100px" >
                </a>
                <a href="single-product.html">
                  <h4><a href="">'.$f["nombre_producto"].'</h4>
                </a>
                <p class="price">Desde: $'.$f["precio_producto"].'</p><input type="hidden" name="id_producto" value="'.$f["id_productos"].'"></input>
                <input type="hidden" name="nombre_producto" value="'.$f["nombre_producto"].'"></input>
                <input type="hidden" name="img_producto" value="'.$f["img_producto"].'"></input>
                <input type="hidden" name="precio_producto" value="'.$f["precio_producto"].'"></input>
                <input type="hidden" name="marca_producto" value="'.$f["marca_producto"].'"></input>
                <button type="submit" class="btn btn-default btn-transparent">
                <span>Añadir</span>
                </button>
              </div>	<!-- End of /.products -->
            </div>
            </form>
            
            ';
      
          }   
      }
    }

  //Esta función muestra los productos en detalles
  function cargarProductoDetalles(){
    if(isset($_GET['id_productos'])){
        $objetoConsultas = new ConsultasE();
        $id_productos =$_GET['id_productos'];
        $resultado = $objetoConsultas->mostrarProducto($id_productos);
        foreach ($resultado as $f){
            echo '
            <div class="row">
				<div class="col-md-5">
					<div class="single-product-img">
						<img src="../../uploads/'.$f["img_producto"].'" alt="imgProducto" width="500px">
					</div>

				</div> <!-- End of /.col-md-5 -->
				<div class="col-md-4">
					<div class="block">
						<div class="product-des">
							<h2>'.$f["nombre_producto"].'</h2>
							<p class="price">Desde: $'.$f["precio_producto"].'</p>
              <br>
							<p>'.$f["descripcion_producto"].'</</p>
              <br>
							<a class="view-link" href="#">></i>Añadir </a>
						</div>	<!-- End of /.product-des -->
					</div> <!-- End of /.block -->
				</div>	<!-- End of /.col-md-4 -->
				<div class="col-md-3">
					<div class="blog-sidebar">
						
					</div>	<!-- End of /.blog-sidebar -->
						
				</div>	<!-- End of /.col-md-3 -->
			</div>	<!-- End of /.row -->
            ';
        }
    }

}

?>