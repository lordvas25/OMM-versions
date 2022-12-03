<?php
 function mostrarPerfil(){
  $Email = $_SESSION['Email'];

  $objetoConsulta = new ConsultasAdmin();

  $result = $objetoConsulta->verPerfil($Email);

  foreach($result as $f){
    echo '
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../'.$f["Foto"].'" class="img-circle elevation-4" alt="User Image">
        </div>
        <div class="info">
          <a href="editarPerfil.php?id_user='.$f["Identificacion"].'" class="d-block">'.$f["Nombres"].' '.$f["Apellidos"].'<i class="fas fa-user-edit"></i></a>
          <h4 style="color:#fff; font-size:15px ">'.$f["rol"].'</h4>
        </div>
      </div>
     ';
  }
 }

 function Totalusuarios(){
  $objetoConsulta = new ConsultasAdmin();
  $result = $objetoConsulta->TotalClientes();

  foreach($result as $f){
  echo '
  <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>'.$f["NumberOfUser"].'</h3> 

                <p>Nuevos Usuarios</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          ';
 }
}

function TotalPedidos(){
  $objetoConsulta = new ConsultasAdmin();
  $result = $objetoConsulta->TotalPedidos();

  foreach($result as $f){
  echo '
  <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>'.["NumberOfPedidos"].'</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          ';
 }
}

//Esta función muestra los tenderos en el inicio
function MostrarSugerenciasModal(){
  $objetoConsultas =  new ConsultasAdmin();
  $result = $objetoConsultas->mostrarSugerencias();

  if(!isset($result)){
      echo '<h2>No hay sugerencias</h2>';
  }else{
      
      foreach ($result as $f) {
          echo'
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <div class="media-body">
              <h3 class="dropdown-item-title">
              '.$f["Nombres"].'
                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">'.$f["Mensaje"].'</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>'.$f["Fecha"].'</p>
            </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          
        ';
  
      }   

  }
}
?>