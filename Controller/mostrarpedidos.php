<?php

function cargarPedidosPorhacer(){
  $id_user=$_SESSION['id'];
  $objetoConsultas =  new ConsultasTendero();
  $result = $objetoConsultas->mostrarPedidos($id_user);

  if(!isset($result)){
      echo '<h2>No se han realizado pedidos por los clientes</h2>';
  }else{
      echo'
      <table id="TableCart" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Nombre </th>
        <th>Apellido</th>
        <th>Telefono</th>
        <th>Producto</th>
        <th>Imagen</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Fecha</th>
      </tr>
      </thead>
      <tbody> 
  
      ';
      foreach ($result as $f) {
          echo'
          <tr class="'.$f["Id_Lista"].'">
          <td>'.$f["Nombres"].'</td>
          <td>'.$f["Apellidos"].'</td>
          <td>'.$f["Telefono"].'</td>
          <td>'.$f["Nombre_producto"].'</td>
          <td><img src="../'.$f["img_producto"].'" width="70px" ></td>
          <td>'.$f["precio_producto"].'</td>
          <td>'.$f["cantidad"].'</td>
          <td>'.$f["Fecha"].'</td>
          
          </tr>
          ';
  
      }

      echo'
      </tbody>
      </table>    
      
      ';

        }
    }

    function cargarPedidos(){
      $id_user=$_SESSION['id'];
      $objetoConsultas =  new ConsultasTendero();
      $result = $objetoConsultas->mostrarPedidos($id_user);
    
      if(!isset($result)){
          echo '<h2>No existe</h2>';
      }else{
          echo'
          <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Mis pedidos
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
          <table id="TablePedidos" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Nombre </th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Producto</th>
            <th>Imagen</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Fecha</th>
            <th>Cancelar</th>
          </tr>
      
          ';
          foreach ($result as $f) {
              echo'
              <tr class="'.$f["Id_Lista"].'">
              <td>'.$f["Nombres"].'</td>
              <td>'.$f["Apellidos"].'</td>
              <td>'.$f["Telefono"].'</td>
              <td>'.$f["Nombre_producto"].'</td>
              <td><img src="../'.$f["img_producto"].'" width="70px" ></td>
              <td>'.$f["precio_producto"].'</td>
              <td>'.$f["precio_producto"].'</td>
              <td>2022-98-23</td>
              <td><a href="cancelarpedidos.php?id_pedido='.$f["Id_Lista"].'" class="btn btn-danger">Cancelar</a> </td>
                   
              
              ';
      
          }
    
          echo'
          </tbody>
          </table>    
          
          ';
    
            }
        }

?>