<?php

    function cargarListaProductosCarrito(){
        $id_user=$_SESSION['id'];
        $objetoConsultas =  new ConsultasCliente();
        $result = $objetoConsultas->mostrarListaCarrito($id_user);
        $total = $objetoConsultas->mostrarTotalCompra($id_user);

        if(!isset($result)){
            echo '<h2>No has añadido ningun producto</h2>';
        }else{
            echo'
            <table id="TableUsers" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Nombre</th>
              <th>Imagen</th>
              <th>Marca</th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th>Eliminar</th>
            </tr>
            </thead>
            <tbody>
        
            ';
            foreach ($result as $f) {
                echo'
                <tr class="'.$f["Id_Lista"].'">
                    <td>'.$f["Nombre_producto"].'</td>
                    <td><img src="../'.$f["img_producto"].'" width="70px" ></td>
                    <td>'.$f["marca_producto"].'</td>
                    <td>'.$f["precio_producto"].'</td>
                    <td><input type="number" value="'.$f["cantidad"].'" style="width:50px; font-size:22px; border: 1px solid orange; text-align:center"></td>
                    <td><a href="../../controller/eProductoCompra.php?Id_Lista='.$f["Id_Lista"].'" class="btn btn-danger">Eliminar</a></td>
           </td>
                    
                </tr>
                ';
        
            }

            echo'
            </tbody>
            </table>    
            
            ';


        }
    }

     function cargarTotalCompra(){
        $id_user=$_SESSION['id'];
        $objetoConsultas =  new ConsultasCliente();
        $total = $objetoConsultas->mostrarTotalCompra($id_user);

        if(!isset($result)){
            echo '';

            foreach ($total as $t){
              echo'
              <div class="thumbnail" style="text-align: center; border: 1px solid #6656">
              <h5><center>Total compra: '.$t['pTotal'].'</h5> 
              <a href="pagos.php" class="btn btn-success">PAGAR</a>  
              </div>';
              
          }
        }
    }

?>