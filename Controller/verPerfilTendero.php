<?php
 function mostrarPerfil(){
  $Email = $_SESSION['Email'];

  $objetoConsulta = new ConsultasTendero();

  $result = $objetoConsulta->verPerfil($Email);

  foreach($result as $f){
    echo '
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../'.$f["Foto"].'" class="img-size-50 img-circle mr-3" alt="User Image">
        </div>
        <div class="info">
          <a href="editarPerfilTendero.php?id_user='.$f["Identificacion"].'" class="d-block">'.$f["Nombres"].' '.$f["Apellidos"].'<i class="fas fa-user-edit"></i></a>
          <h4 style="color:#fff; font-size:20px">'.$f["rol"].'</h4>
        </div>
      </div>
     ';
  }
 }

 function TotalPedidos(){
  $objetoConsulta = new ConsultasTendero();
  $result = $objetoConsulta->TotalPedidos();

  foreach($result as $f){
  echo '
  <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>'.$f["NumberOfPedidos"].'</h3>

                <p>Nuevas Ordenes</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          ';
 }
}
?>