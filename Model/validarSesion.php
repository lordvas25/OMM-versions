<?php
    
    class validarSesion{

        public function IniciarSesion($Email, $Clave){

            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion(); 
        
            $sql = "SELECT * FROM clientes WHERE Email=:Email";
            $result=$conexion->prepare($sql);
            
            $result->bindParam(":Email",$Email);

            $result->execute();

            if($f=$result->fetch()){
               
                if($Clave == $f['Clave']){

                    if($f['estado']=="Activo"){
 
                        session_start();

                        $_SESSION['id'] = $f['Identificacion'];
                        $_SESSION['Email'] = $f['Email'];
                        $_SESSION['rol'] = $f['rol'];
                        $_SESSION['Clave'] = $f['Clave'];

                        $_SESSION['autenticado'] = "SI";

                        if($f['rol']=="Administrador"){

                            echo "<script>alert('Bienvenido Administrador')</script>";
                            echo "<script>location.href=('../View/Admin/HomeAdmin.php')</script>";
                        }
                        
                        if($f['rol']=="Usuario"){

                            echo "<script>alert('Bienvenido Usuario')</script>";
                            echo "<script>location.href=('../View/Cliente/HomeCliente.php')</script>";
                        }

                        if($f['rol']=="Tendero"){

                            echo "<script>alert('Bienvenido Tendero')</script>";
                            echo "<script>location.href=('../View/Tendero/HomeTendero.php')</script>";
                        }
                    }else{
                        echo "<script>alert('Su cuenta esta inactiva, comuniquese con el servicio al cliente')</script>";
                        echo "<script>location.href=('#')</script>";
                    }
                }else{
                    echo "<script>alert('Clave incorrecta')</script>";
                     echo "<script>location.href=('../View/Extra/Login.php')</script>";
                }
             }else{
                echo "<script>alert('Email no encontrado en el sistema')</script>";
                echo "<script>location.href=('#')</script>";
             }
        }

        public function cerrarSesion(){
            $objetoConexion = new conexion();
            $conexion = $objetoConexion->get_conexion();
    
            session_start();
            session_destroy();
            echo "<script>location.href='../view/extra/login.php'</script>";
        }
    }

    
?>