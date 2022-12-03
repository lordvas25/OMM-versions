<?php

    function cargarProductos(){
        $objetoConsultas =  new ConsultasTendero();
        $id_user=$_SESSION['id'];
        $result = $objetoConsultas->mostrarProductos($id_user);

        if(!isset($result)){
            echo '<h2>No hay productos por mostrar</h2>';
        }else{
            echo'
            <table id="TableProducts" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Nombre</th>
              <th>Imagen</th>
              <th>Categoria</th>
              <th>Cantidad</th>
              <th>Marca</th>
              <th>Precio</th>
              <th>Ver/Modificar</th>
              <th>Eliminar</th>
            </tr>
            </thead>
            <tbody>
        
            ';
            foreach ($result as $f) {
                echo'
                <tr class="'.$f["id_productos"].'">
                <td>'.$f["nombre_producto"].'</td>
                <td><img src="../'.$f["img_producto"].'" width="70px" ></td>
                    <td>'.$f["categoria_producto"].'</td>
                    <td>'.$f["cantidad_producto"].'</td>
                    <td>'.$f["marca_producto"].'</td>
                    <td>'.$f["precio_producto"].'</td>
                    <td><a href="editarProductos.php?id_productos='.$f["id_productos"].'" class="btn btn-warning">Ver/Modificar</a> </td>
                    <td><a href="../../controller/eUserTendero.php?id_productos='.$f["id_productos"].'" class="btn btn-danger">Eliminar</a> </td>
                </tr>
                ';
        
            }

            echo'
            </tbody>
            </table>    
            
            ';

        }
    }

    //Formulario que trae los valores de los productos para editarlos
    function cargarProducto(){
        if(isset($_GET['id_productos'])){
            $objetoConsultas = new ConsultasTendero();
            $id_productos =$_GET['id_productos'];
            $resultado = $objetoConsultas->mostrarProducto($id_productos);

            foreach ($resultado as $f){
                echo '
                <form action="../../Controller/mProductosTendero.php" method="POST">
                <div class="card-body">
                  <div class="row">
                  <div class="form-group col-md-6 " style="display:none">
                  <label for="nombre_producto">Nombre del producto</label>
                  <input type="text" class="form-control" value="'.$f["id_productos"].'" id="nombre_producto" required name="id_productos" placeholder="Ejemplo: Arroz premiun">
                </div>

                  <div class="form-group col-md-6">
                        <label for="nombre_producto">Nombre del producto</label>
                        <input type="text" class="form-control" value="'.$f["nombre_producto"].'" id="nombre_producto" required name="nombre_producto" placeholder="Ejemplo: Arroz premiun">
                      </div>

                      <div class="form-group col-md-6">
                      <label for="descripcion_producto">Descripcion del producto</label>
                      <input type="text" class="form-control" value="'.$f["descripcion_producto"].'" id="descripcion_producto" required name="descripcion_producto" placeholder="Ejemplo: Arroz de grano completo">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="categoria_producto">Categoria</label>
                        <select id="categoria_" name="categoria_producto" required class="form-control">
                            <option value="'.$f["categoria_producto"].'">'.$f["categoria_producto"].'</option>
                            <option value="Comida">Comida</option>
                            <option value="Lacteos">Lacteos</option>
                            <option value="Aseo">Aseo</option>
                            <option value="Dulces">Dulces</option>
                        </select>
                      </div>

                    <div class="form-group col-md-6">
                      <label for="cantidad_producto">Cantidad del producto</label>
                      <input type="number" class="form-control" readonly="readonly" value="'.$f["cantidad_producto"].'" id="cantidad_producto" required name="cantidad_producto" placeholder="Ejemplo: 46">
                    </div>

                    <div class="form-group col-md-6">
                      <label for="marca_producto">Marca del producto</label>
                      <input type="text" class="form-control" value="'.$f["marca_producto"].'" id="marca_producto" required name="marca_producto" placeholder="Ejemplo: Diana">
                    </div>

                    <div class="form-group col-md-6">
                      <label for="precio_producto">Precio del producto</label>
                      <input type="number" class="form-control" value="'.$f["precio_producto"].'" id="precio_producto" required name="precio_producto" placeholder="Ejemplo: 2.500">
                    </div>

                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Modificar</button>
                </div>
              </form>
                ';
            }
        }

    }

    function cargarImgProducto(){
      if(isset($_GET['id_productos'])){
          $objetoConsultas = new ConsultasTendero();
          $id_productos =$_GET['id_productos'];
          $resultado = $objetoConsultas->mostrarProducto($id_productos);
          foreach ($resultado as $f){
              echo '
              <form action="../../Controller/mProductosAdmin.php" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                <div class="row">

              <div class="col-md-8">
        <div class="form-group col-md-6">
                <img src="../'.$f["img_producto"].'" width="200px" >
                </div>
      </div>
              ';
          }
      }

  }


?>