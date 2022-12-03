<?php

    class ConsultasE{

        public function registrarUserE($Identificacion,$tipoDoc,$Nombres,$Apellidos,$Email,$Telefono,$Direccion,$ClaveMd,$rol,$estado,$Foto){

            //  Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "SELECT * FROM clientes WHERE Identificacion=:Identificacion OR Email=:Email " ;
            $result=$conexion->prepare($sql);

            $result->bindParam(":Identificacion", $Identificacion);
            $result->bindParam(":Email", $Email);

            $result->execute();
            
            $f=$result->fetch();

            if ($f) {
                echo "<script> alert('Sus datos ya se encuentran registrados') </script>";
                echo '<script> location.href="../View/Extra/Registro-user.php" </script>';
            }else{
            //  Conectamos con la clase Conexion 
            $objetoconexion = new conexion();
            $conexion = $objetoconexion->get_conexion();

            $sql= "INSERT INTO clientes (Identificacion, tipoDoc, Nombres, Apellidos, Email, Telefono, Direccion, Clave, rol, estado, Foto) 
            VALUES(:Identificacion, :tipoDoc, :Nombres, :Apellidos, :Email, :Telefono, :Direccion, :ClaveMd, :rol, :estado, :Foto)";

            $result=$conexion->prepare($sql);

            $result->bindParam(':Identificacion', $Identificacion);
            $result->bindParam(':tipoDoc', $tipoDoc);
            $result->bindParam(':Nombres', $Nombres);
            $result->bindParam(':Apellidos', $Apellidos);
            $result->bindParam(':Email', $Email);
            $result->bindParam(':Telefono', $Telefono);
            $result->bindParam(':Direccion', $Direccion);
            $result->bindParam(':ClaveMd', $ClaveMd);
            $result->bindParam(':rol', $rol);
            $result->bindParam(':estado', $estado);
            $result->bindParam(':Foto', $Foto);

            $result->execute();
            echo "<script> alert('Usuario correctamente registrado') </script>";
            echo '<script> location.href="../View/Extra/Login.php"</script>';
            }

        }

        public function mostrarProductos(){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "SELECT * FROM productos ";
            $result = $conexion->prepare($sql);
            
            $result->execute();

            while ($consulta = $result->fetch()) {
                $f[] = $consulta;
            }
            return $f;
        }

        public function mostrarProducto($id_productos){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "SELECT * FROM productos WHERE id_productos=:id_productos";
            $result = $conexion->prepare($sql);
            $result->bindparam(':id_productos',$id_productos);
            $result->execute();

            while ($consulta = $result->fetch()) {
                $f[] = $consulta;
            }
            return $f;
        }

        public function mostrarProductosPreciosBajos(){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "SELECT * FROM productos WHERE precio_producto <=3000 ";
            $result = $conexion->prepare($sql);
            
            $result->execute();

            while ($consulta = $result->fetch()) {
                $f[] = $consulta;
            }
            return $f;
        }

        public function mCategoriaAceitesYotros(){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "SELECT * FROM productos WHERE categoria_producto = 'AceitesYotros' ";
            $result = $conexion->prepare($sql);
            
            $result->execute();

            while ($consulta = $result->fetch()) {
                $f[] = $consulta;
            }
            return $f;
        }

        public function mCategoriaLacteosYotros(){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "SELECT * FROM productos WHERE categoria_producto = 'LacteosYotros' ";
            $result = $conexion->prepare($sql);
            
            $result->execute();

            while ($consulta = $result->fetch()) {
                $f[] = $consulta;
            }
            return $f;
        }

        public function mCategoriaBebidas(){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "SELECT * FROM productos WHERE categoria_producto = 'Bebidas' ";
            $result = $conexion->prepare($sql);
            
            $result->execute();

            while ($consulta = $result->fetch()) {
                $f[] = $consulta;
            }
            return $f;
        }

        public function mCategoriaEmbutidos(){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "SELECT * FROM productos WHERE categoria_producto = 'Embutidos' ";
            $result = $conexion->prepare($sql);
            
            $result->execute();

            while ($consulta = $result->fetch()) {
                $f[] = $consulta;
            }
            return $f;
        }

        public function mCategoriaAperitivosYotros(){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "SELECT * FROM productos WHERE categoria_producto = 'AperitivosYotros' ";
            $result = $conexion->prepare($sql);
            
            $result->execute();

            while ($consulta = $result->fetch()) {
                $f[] = $consulta;
            }
            return $f;
        }

        public function mCategoriaEspeciasYotros(){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "SELECT * FROM productos WHERE categoria_producto = 'EspeciasYotros' ";
            $result = $conexion->prepare($sql);
            
            $result->execute();

            while ($consulta = $result->fetch()) {
                $f[] = $consulta;
            }
            return $f;
        }

        public function mCategoriaLimpieza(){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "SELECT * FROM productos WHERE categoria_producto = 'Limpieza' ";
            $result = $conexion->prepare($sql);
            
            $result->execute();

            while ($consulta = $result->fetch()) {
                $f[] = $consulta;
            }
            return $f;
        }

        public function mCategoriaCuidadoPersonal(){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "SELECT * FROM productos WHERE categoria_producto = 'CuidadoPersonal' ";
            $result = $conexion->prepare($sql);
            
            $result->execute();

            while ($consulta = $result->fetch()) {
                $f[] = $consulta;
            }
            return $f;
        }

        public function registrarConsulta($Nombres, $Email, $Mensaje, $Fecha){

            //  Conectamos con la clase Conexion 
            $objetoconexion = new conexion();
            $conexion = $objetoconexion->get_conexion();

            $sql= "INSERT INTO mensajes (Nombres, Email, Mensaje, Fecha)
            VALUES(:Nombres, :Email, :Mensaje, :Fecha)";

            $result=$conexion->prepare($sql);

            $result->bindParam(':Nombres', $Nombres);
            $result->bindParam(':Email', $Email);
            $result->bindParam(':Mensaje', $Mensaje);
            $result->bindParam(':Fecha', $Fecha);
            $result->execute();

            echo "<script> alert('Su sugerencia fue recibida') </script>";
            echo '<script> location.href="../View/Client-site/blog-single.php"</script>';
            
        }

        


    }

?>