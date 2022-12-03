<?php

 function mostrarPerfil(){
  $Email = $_SESSION['Email'];

  $objetoConsulta = new ConsultasCliente();

  $result = $objetoConsulta->verPerfil($Email);

  foreach($result as $f){
    echo ' 
        <div class="container">
          <div class="row>
            <div class="col-6">
            <div class="image">
              <img src="../'.$f["Foto"].'" class="img-circle elevation-2" alt="User Image" height="55px" >
            </div>
              <div class="info">
                <a style="color:#fff; font-size:15px" href="C_Perfil.php?id_user='.$f["Identificacion"].'" class="d-block">'.$f["Nombres"].' '.$f["Apellidos"].'<i class="fas fa-user-edit"></i></a>
                <a href="../../Controller/cerrarsesion.php" class="nav-link">
                <h4 style="color:#fff; font-size:20px">Cerrar sesion</h4>
                </a>
                </div>
              </div>
          </div> 
        </div>  
     ';
  }
 }

 //Esta función muestra el perfil del cliente
function MostrarPerfilC(){
  $Email = $_SESSION['Email'];
  $objetoConsultas =  new ConsultasCliente();
  $result = $objetoConsultas->verPerfil($Email);

  if(!isset($result)){
      echo '<h2>Error en el sistema</h2>';
  }else{
      
      foreach ($result as $f) {
          echo'

            <div class="thumbnail" style="text-align: center; border: 1px solid #6656">
              
                <div class="img-circle elevation-4">
                <img src="../../uploads/'.$f["Foto"].'" style="width:180px; height:180px; border-radius: 50%">
                </div>
                <br>
              <h3>'.$f["Nombres"].'  '.$f["Apellidos"].' </h3>
              <p>Numero de documento:'.$f["Identificacion"].'</p>
              <p>Correo:'.$f["Email"].'</p>
              <p>Telefono: '.$f["Telefono"].'</p>
              <p>Dirección: '.$f["Direccion"].'</p>
            <br>
                <div class="caption col-md-6">
                  <p>
                    <a href="EditarPerfil.php?id_user='.$f["Identificacion"].'" class="btn btn-default btn-transparent" role="button">
                      <span>Editar Perfil</span>
                    </a>
                  </p>
                </div>	<!-- End of /.caption -->
                <div class="caption">
                  <p>
                    <a href="editar_contraseña.php?id_user='.$f["Identificacion"].'" class="btn btn-default btn-transparent" role="button">
                      <span>Cambiar contraseña</span>
                    </a>
                  </p>
                </div>	<!-- End of /.caption -->
            </div>	<!-- End of /.thumbnail -->
        
        ';
  
      }   

  }
}
?>