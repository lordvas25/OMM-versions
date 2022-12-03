<?php


//Esta función muestra los tenderos en el inicio
function MostrarTenderosInicio(){
  $objetoConsultas =  new ConsultasCliente();
  $result = $objetoConsultas->mostrarTenderos();

  if(!isset($result)){
      echo '<h2>No hay tenderos</h2>';
  }else{
      
      foreach ($result as $f) {
          echo'
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail" style="text-align: center; border: 1px solid #6656">
              
                <div class="img-circle elevation-4">
                <img src="../../uploads/'.$f["Foto"].'" style="width:180px; height:180px; border-radius: 50%">
                
                </div>
              <h3>'.$f["Nombres"].'  '.$f["Apellidos"].' </h3>
              <p>'.$f["Direccion"].'</p>
              
                <div class="caption">
                  <p>
                    <a href="productsTendero.php?tendero='.$f["Identificacion"].'" class="btn btn-default btn-transparent" role="button">
                      <span>Mirar Tienda</span>
                    </a>
                  </p>
                </div>	<!-- End of /.caption -->
            </div>	<!-- End of /.thumbnail -->
          </div>	<!-- End of /.col-sm-6 col-md-4 -->
        
        ';
  
      }   

  }
}

//Esta funcion sera para cargar por las categorias corespondientes
function cargarProductosTendero(){
  if(isset($_GET['tendero'])){
  $tendero=$_GET['tendero'];
  $objetoConsultas =  new ConsultasCliente();
  $result = $objetoConsultas->mProductosTendero($tendero);

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
              <h4>'.$f["nombre_producto"].'</h4>
            </a>
            <p class="price">Desde: $'.$f["precio_producto"].'</p>
                <input type="hidden" name="id_producto" value="'.$f["id_productos"].'"></input>
                <input type="hidden" name="nombre_producto" value="'.$f["nombre_producto"].'"></input>
                <input type="hidden" name="img_producto" value="'.$f["img_producto"].'"></input>
                <input type="hidden" name="precio_producto" value="'.$f["precio_producto"].'"></input>
                <input type="hidden" name="marca_producto" value="'.$f["marca_producto"].'"></input>
                <input type="hidden" name="tendero" value="'.$f["tendero"].'"></input>
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
}

  //Esta función muestra los productos en ofertas de precio en el HomeCliente
  function cargarproductosPreciosBajos(){
    $objetoConsultas =  new ConsultasCliente();
    $result = $objetoConsultas->mostrarProductosPreciosBajos();

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
                <h4>'.$f["nombre_producto"].'</h4>
              <p class="price">Desde: $'.$f["precio_producto"].'</p>
                  <input type="hidden" name="id_producto" value="'.$f["id_productos"].'"></input>
                  <input type="hidden" name="nombre_producto" value="'.$f["nombre_producto"].'"></input>
                  <input type="hidden" name="img_producto" value="'.$f["img_producto"].'"></input>
                  <input type="hidden" name="precio_producto" value="'.$f["precio_producto"].'"></input>
                  <input type="hidden" name="marca_producto" value="'.$f["marca_producto"].'"></input>
                  <input type="hidden" name="tendero" value="'.$f["tendero"].'"></input>
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

    //Esta función muestra todos los productos del cliente en inicio
    function cargarproductosInicio(){
      $objetoConsultas =  new ConsultasCliente();
      $result = $objetoConsultas->mostrarProductos();

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
                  <h4>'.$f["nombre_producto"].'</h4>
                <p class="price">Desde: $'.$f["precio_producto"].'</p>
                    <input type="hidden" name="id_producto" value="'.$f["id_productos"].'"></input>
                    <input type="hidden" name="nombre_producto" value="'.$f["nombre_producto"].'"></input>
                    <input type="hidden" name="img_producto" value="'.$f["img_producto"].'"></input>
                    <input type="hidden" name="precio_producto" value="'.$f["precio_producto"].'"></input>
                    <input type="hidden" name="marca_producto" value="'.$f["marca_producto"].'"></input>
                    <input type="hidden" name="tendero" value="'.$f["tendero"].'"></input>
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

  //Esta función muestra todos los productos en la pagina de ProductsCliente.php
  function cargarproductosCliente(){
    $objetoConsultas =  new ConsultasCliente();
    $result = $objetoConsultas->mostrarProductos();

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
              
                <h4>'.$f["nombre_producto"].'</h4>
                
              <p class="price">Desde: $'.$f["precio_producto"].'</p>
                <input type="hidden" name="id_producto" value="'.$f["id_productos"].'"></input>
                <input type="hidden" name="nombre_producto" value="'.$f["nombre_producto"].'"></input>
                <input type="hidden" name="img_producto" value="'.$f["img_producto"].'"></input>
                <input type="hidden" name="precio_producto" value="'.$f["precio_producto"].'"></input>
                <input type="hidden" name="marca_producto" value="'.$f["marca_producto"].'"></input>
                <input type="hidden" name="tendero" value="'.$f["tendero"].'"></input>
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
  function cargarCategoriaAceitesYotros(){
  $objetoConsultas =  new ConsultasCliente();
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
              <h4>'.$f["nombre_producto"].'</h4>
            </a>
            <p class="price">Desde: $'.$f["precio_producto"].'</p>
                <input type="hidden" name="id_producto" value="'.$f["id_productos"].'"></input>
                <input type="hidden" name="nombre_producto" value="'.$f["nombre_producto"].'"></input>
                <input type="hidden" name="img_producto" value="'.$f["img_producto"].'"></input>
                <input type="hidden" name="precio_producto" value="'.$f["precio_producto"].'"></input>
                <input type="hidden" name="marca_producto" value="'.$f["marca_producto"].'"></input>
                <input type="hidden" name="tendero" value="'.$f["tendero"].'"></input>
                <button type="submit" class="btn btn-default btn-transparent">
                <span>Añadir</span>
                </button>
              <i class="fa fa-plus-circle"></i>Añadir al carrito</a>
          </div>	<!-- End of /.products -->
        </div>
        </form>
        
        ';
  
      }   

  }
}

  //Esta funcion sera para cargar por las categorias corespondientes
  function cargarCategoriaLacteosYotros(){
    $objetoConsultas =  new ConsultasCliente();
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
                <h4>'.$f["nombre_producto"].'</h4>
              </a>
              <p class="price">Desde: $'.$f["precio_producto"].'</p>
              <input type="hidden" name="id_producto" value="'.$f["id_productos"].'"></input>
                <input type="hidden" name="nombre_producto" value="'.$f["nombre_producto"].'"></input>
                <input type="hidden" name="img_producto" value="'.$f["img_producto"].'"></input>
                <input type="hidden" name="precio_producto" value="'.$f["precio_producto"].'"></input>
                <input type="hidden" name="marca_producto" value="'.$f["marca_producto"].'"></input>
                <input type="hidden" name="tendero" value="'.$f["tendero"].'"></input>
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
function cargarCategoriaBebidas(){
  $objetoConsultas =  new ConsultasCliente();
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
              <h4>'.$f["nombre_producto"].'</h4>
            </a>
            <p class="price">Desde: $'.$f["precio_producto"].'</p>
                <input type="hidden" name="id_producto" value="'.$f["id_productos"].'"></input>
                <input type="hidden" name="nombre_producto" value="'.$f["nombre_producto"].'"></input>
                <input type="hidden" name="img_producto" value="'.$f["img_producto"].'"></input>
                <input type="hidden" name="precio_producto" value="'.$f["precio_producto"].'"></input>
                <input type="hidden" name="marca_producto" value="'.$f["marca_producto"].'"></input>
                <input type="hidden" name="tendero" value="'.$f["tendero"].'"></input>
                <button type="submit" class="btn btn-default btn-transparent">
                <span>Añadir</span>
                </button>
              <i class="fa fa-plus-circle"></i>Añadir al carrito</a>
          </div>	<!-- End of /.products -->
        </div>
        </form>
        
        ';
  
      }   

  }
}

  //Esta funcion sera para cargar por las categorias corespondientes
  function cargarCategoriaEmbutidos(){
    $objetoConsultas =  new ConsultasCliente();
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
                <h4>'.$f["nombre_producto"].'</h4>
              </a>
              <p class="price">Desde: $'.$f["precio_producto"].'</p><input type="hidden" name="id_producto" value="'.$f["id_productos"].'"></input>
              <input type="hidden" name="nombre_producto" value="'.$f["nombre_producto"].'"></input>
              <input type="hidden" name="img_producto" value="'.$f["img_producto"].'"></input>
              <input type="hidden" name="precio_producto" value="'.$f["precio_producto"].'"></input>
              <input type="hidden" name="marca_producto" value="'.$f["marca_producto"].'"></input>
              <input type="hidden" name="tendero" value="'.$f["tendero"].'"></input>
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
    $objetoConsultas =  new ConsultasCliente();
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
                <h4>'.$f["nombre_producto"].'</h4>
              </a>
              <p class="price">Desde: $'.$f["precio_producto"].'</p><input type="hidden" name="id_producto" value="'.$f["id_productos"].'"></input>
              <input type="hidden" name="nombre_producto" value="'.$f["nombre_producto"].'"></input>
              <input type="hidden" name="img_producto" value="'.$f["img_producto"].'"></input>
              <input type="hidden" name="precio_producto" value="'.$f["precio_producto"].'"></input>
              <input type="hidden" name="marca_producto" value="'.$f["marca_producto"].'"></input>
              <input type="hidden" name="tendero" value="'.$f["tendero"].'"></input>
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
    $objetoConsultas =  new ConsultasCliente();
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
                <h4>'.$f["nombre_producto"].'</h4>
              </a>
              <p class="price">Desde: $'.$f["precio_producto"].'</p><input type="hidden" name="id_producto" value="'.$f["id_productos"].'"></input>
              <input type="hidden" name="nombre_producto" value="'.$f["nombre_producto"].'"></input>
              <input type="hidden" name="img_producto" value="'.$f["img_producto"].'"></input>
              <input type="hidden" name="precio_producto" value="'.$f["precio_producto"].'"></input>
              <input type="hidden" name="marca_producto" value="'.$f["marca_producto"].'"></input>
              <input type="hidden" name="tendero" value="'.$f["tendero"].'"></input>
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
    $objetoConsultas =  new ConsultasCliente();
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
                <h4>'.$f["nombre_producto"].'</h4>
              </a>
              <p class="price">Desde: $'.$f["precio_producto"].'</p><input type="hidden" name="id_producto" value="'.$f["id_productos"].'"></input>
              <input type="hidden" name="nombre_producto" value="'.$f["nombre_producto"].'"></input>
              <input type="hidden" name="img_producto" value="'.$f["img_producto"].'"></input>
              <input type="hidden" name="precio_producto" value="'.$f["precio_producto"].'"></input>
              <input type="hidden" name="marca_producto" value="'.$f["marca_producto"].'"></input>
              <input type="hidden" name="tendero" value="'.$f["tendero"].'"></input>
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
    $objetoConsultas =  new ConsultasCliente();
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
                <h4>'.$f["nombre_producto"].'</h4>
              </a>
              <p class="price">Desde: $'.$f["precio_producto"].'</p><input type="hidden" name="id_producto" value="'.$f["id_productos"].'"></input>
              <input type="hidden" name="nombre_producto" value="'.$f["nombre_producto"].'"></input>
              <input type="hidden" name="img_producto" value="'.$f["img_producto"].'"></input>
              <input type="hidden" name="precio_producto" value="'.$f["precio_producto"].'"></input>
              <input type="hidden" name="marca_producto" value="'.$f["marca_producto"].'"></input>
              <input type="hidden" name="tendero" value="'.$f["tendero"].'"></input>
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
  function cargarProductoDetalle(){
    if(isset($_GET['id_productos'])){
        $objetoConsultas = new ConsultasCliente();
        $id_productos =$_GET['id_productos'];
        $resultado = $objetoConsultas->mostrarProducto($id_productos);
        foreach ($resultado as $f){
            echo '
            <form action="../../Controller/insertarProductoCarrito.php" method="post">
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
							<p>'.$f["descripcion_producto"].'</p>
							<p class="price">Desde: $'.$f["precio_producto"].'</p>
              <br>
                <input type="hidden" name="id_producto" value="'.$f["id_productos"].'"></input>
                <input type="hidden" name="nombre_producto" value="'.$f["nombre_producto"].'"></input>
                <input type="hidden" name="img_producto" value="'.$f["img_producto"].'"></input>
                <input type="hidden" name="precio_producto" value="'.$f["precio_producto"].'"></input>
                <input type="hidden" name="marca_producto" value="'.$f["marca_producto"].'"></input>
                <input type="hidden" name="tendero" value="'.$f["tendero"].'"></input>
                <button type="submit" class="btn btn-default btn-transparent">
                <span>Añadir</span>
                </button>
              
						</div>	<!-- End of /.product-des -->
					</div> <!-- End of /.block -->
				</div>	<!-- End of /.col-md-4 -->
				<div class="col-md-3">
					<div class="blog-sidebar">
						
					</div>	<!-- End of /.blog-sidebar -->
						
				</div>	<!-- End of /.col-md-3 -->
			</div>	<!-- End of /.row -->
      </form>
            ';
        }
    }

}

function cargarSugerenciaC(){
  if(isset($_GET['id_user'])){
      $objetoConsultas = new ConsultasCliente();
      $id_user=$_GET['id_user'];
      $resultado = $objetoConsultas->mostrarUser($id_user);

      foreach ($resultado as $f){
          echo '
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
          ';
      }
  }

}

  

?>