<?php

    class ConsultasAdmin{

        public function RegistrarUser($Identificacion,$tipoDoc,$Nombres,$Apellidos,$Email,$Telefono,$ClaveMd,$rol,$estado,$Foto){

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
                echo "<script> alert('Los datos del usuario ya se encuentran en el sistema') </script>";
                echo '<script> location.href="../View/Admin/RegistrarUser.php" </script>';
            }else{
            //  Conectamos con la clase Conexion 
            $objetoconexion = new conexion();
            $conexion = $objetoconexion->get_conexion();

            $sql= "INSERT INTO clientes (Identificacion, tipoDoc, Nombres, Apellidos, Email, Telefono, Clave, rol, estado, Foto) 
            VALUES(:Identificacion, :tipoDoc, :Nombres, :Apellidos, :Email, :Telefono, :ClaveMd, :rol, :estado, :Foto)";

            $result=$conexion->prepare($sql);

            $result->bindParam(':Identificacion', $Identificacion);
            $result->bindParam(':tipoDoc', $tipoDoc);
            $result->bindParam(':Nombres', $Nombres);
            $result->bindParam(':Apellidos', $Apellidos);
            $result->bindParam(':Email', $Email);
            $result->bindParam(':Telefono', $Telefono);
            $result->bindParam(':ClaveMd', $ClaveMd);
            $result->bindParam(':rol', $rol);
            $result->bindParam(':estado', $estado);
            $result->bindParam(':Foto', $Foto);

            $result->execute();
            echo "<script> alert('El usuario se registro correctamente') </script>";
            echo '<script> location.href="../View/Admin/RegistrarUser.php"</script>';
            }

        }

        public function mostrarUsers(){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "SELECT * FROM clientes";
            $result = $conexion->prepare($sql);
            $result->execute();

            while ($consulta = $result->fetch()) {
                $f[] = $consulta;
            }
            return $f;
        }

        public function mostrarUser($id_user){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "SELECT * FROM clientes WHERE Identificacion=:id_user";
            $result = $conexion->prepare($sql);
            $result->bindparam(':id_user',$id_user);
            $result->execute();

            while ($consulta = $result->fetch()) {
                $f[] = $consulta;
            }
            return $f;
        }

        public function TotalClientes(){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "SELECT COUNT(Id_usuario) AS NumberOfUser FROM clientes";
            $result = $conexion->prepare($sql);
            $result->execute();

            while ($consulta = $result->fetch()) {
                $f[] = $consulta;
            }
            return $f;
        }

        public function TotalPedidos(){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "SELECT COUNT(Id_Lista) AS NumberOfPedidos FROM listaproductos";
            $result = $conexion->prepare($sql);
            $result->execute();

            while ($consulta = $result->fetch()) {
                $f[] = $consulta;
            }
            return $f;
        }
        
        public function modificarUser($Identificacion,$tipoDoc,$Nombres,$Apellidos,$Email,$Telefono,$rol,$estado){
            //  Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();


            $sql="UPDATE clientes SET Identificacion=:Identificacion, tipoDoc=:tipoDoc, Nombres=:Nombres, Apellidos=:Apellidos, Email=:Email, Telefono=:Telefono, rol=:rol, estado=:estado WHERE Identificacion=:Identificacion";
            $result = $conexion->prepare($sql);

            $result->bindParam(':Identificacion', $Identificacion);
            $result->bindParam(':tipoDoc', $tipoDoc);
            $result->bindParam(':Nombres', $Nombres);
            $result->bindParam(':Apellidos', $Apellidos);
            $result->bindParam(':Email', $Email);
            $result->bindParam(':Telefono', $Telefono);
            $result->bindParam(':rol', $rol);
            $result->bindParam(':estado', $estado);

            $result->execute();
            echo "<script> alert('Actualizacion exitosa') </script>";
            echo '<script> location.href="../view/admin/verUsers.php" </script>';

        }

        public function modificarClave($ClaveNueva, $Identificacion){

            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "UPDATE clientes SET Clave=:ClaveNueva WHERE Identificacion=:Identificacion";
            $result = $conexion->prepare($sql);
            $result->bindparam(':ClaveNueva', $ClaveNueva);
            $result->bindparam(':Identificacion', $Identificacion);

            $result->execute();
            echo "<script> alert('Actualizacion de clave exitosa') </script>";
            echo '<script> location.href="../view/admin/verUsers.php" </script>';

        }

        public function eliminarUser($id_user){

        //  Conectamos con la clase Conexion 
        $objetoConexion = new Conexion();
        $conexion = $objetoConexion->get_conexion(); 
        
        $sql= "DELETE FROM clientes WHERE Identificacion=:id_user";

        $result= $conexion->prepare($sql);
        
        $result->bindparam(':id_user', $id_user);
        $result->execute();

        echo "<script> alert('Eliminacion exitosa') </script>";
        echo '<script> location.href="../view/admin/verUsers.php" </script>';
        }

        public function verPerfil($Email){
            $f= null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();
            $sql="SELECT * FROM clientes WHERE Email=:Email";
            $result=$conexion->prepare($sql);
            $result->bindParam(':Email', $Email);
            $result->execute();
    
            while ($resultado= $result->fetch()){
                $f[]=$resultado;
            }
            return $f;
        }

        public function mostrarPedidos(){
            $f= null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();
            $sql="SELECT a.Nombres, a.Apellidos, a.Telefono, b.Nombre_producto, b.img_producto, b.marca_producto, b.precio_producto, b.Fecha, b.Id_Lista FROM clientes as a INNER JOIN listaproductos as b ON a.Identificacion = b.Id_user ";
            $result=$conexion->prepare($sql);
            $result->execute();
    
            while ($resultado= $result->fetch()){
                $f[]=$resultado;
            }
            return $f;
        }

        //Función para mostrar en el modal las sugerencias que llegan desde contactanos
        public function mostrarSugerencias(){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "SELECT * FROM mensajes ORDER BY Id_mensaje DESC";
            $result = $conexion->prepare($sql);
            $result->execute();

            while ($consulta = $result->fetch()) {
                $f[] = $consulta;
            }
            return $f;
        }

        //Funciones sobre los productos desde usuario Admin
        public function mostrarProductos(){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "SELECT * FROM productos";
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

        public function registrarProductos($nombre_producto,$img_producto,$descripcion_producto,$categoria_producto,$cantidad_producto,$marca_producto,$precio_producto){

            
            //  Conectamos con la clase Conexion 
            $objetoconexion = new conexion();
            $conexion = $objetoconexion->get_conexion();

            $sql= "INSERT INTO productos (nombre_producto, img_producto, descripcion_producto, categoria_producto, cantidad_producto, marca_producto, precio_producto) 
            VALUES(:nombre_producto, :img_producto, :descripcion_producto, :categoria_producto, :cantidad_producto, :marca_producto, :precio_producto)";

            $result=$conexion->prepare($sql);

            $result->bindParam(':nombre_producto', $nombre_producto);
            $result->bindParam(':img_producto', $img_producto);
            $result->bindParam(':descripcion_producto', $descripcion_producto);
            $result->bindParam(':categoria_producto', $categoria_producto);
            $result->bindParam(':cantidad_producto', $cantidad_producto);
            $result->bindParam(':marca_producto', $marca_producto);
            $result->bindParam(':precio_producto', $precio_producto);

            $result->execute();
            echo "<script> alert('El producto se registro correctamente') </script>";
            echo '<script> location.href="../View/Admin/RegistrarProductosAdmin.php"</script>';
            
        }

        public function eliminarProducto($id_productos){

            //  Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion(); 
            
            $sql= "DELETE FROM productos WHERE id_productos=:id_productos";
    
            $result= $conexion->prepare($sql);
            
            $result->bindparam(':id_productos', $id_productos);
            $result->execute();
    
            echo "<script> alert('Eliminacion de producto exitosa') </script>";
            echo '<script> location.href="../view/Admin/verProductosAdmin.php" </script>';
            }

            public function modificarProducto($id_productos,$nombre_producto,$descripcion_producto,$categoria_producto,$cantidad_producto,$marca_producto,$precio_producto){
                //  Conectamos con la clase Conexion 
                $objetoConexion = new Conexion();
                $conexion = $objetoConexion->get_conexion();
    
    
                $sql="UPDATE productos SET id_productos=:id_productos, nombre_producto=:nombre_producto, descripcion_producto=:descripcion_producto, categoria_producto=:categoria_producto, cantidad_producto=:cantidad_producto, marca_producto=:marca_producto, precio_producto=:precio_producto WHERE id_productos=:id_productos";
                $result = $conexion->prepare($sql);
    
                $result->bindParam(':id_productos', $id_productos);
                $result->bindParam(':nombre_producto', $nombre_producto);
                $result->bindParam(':descripcion_producto', $descripcion_producto);
                $result->bindParam(':categoria_producto', $categoria_producto);
                $result->bindParam(':cantidad_producto', $cantidad_producto);
                $result->bindParam(':marca_producto', $marca_producto);
                $result->bindParam(':precio_producto', $precio_producto);
                
                $result->execute();
                echo "<script> alert('Actualizacion de producto exitosa') </script>";
                echo '<script> location.href="../view/Admin/verProductosAdmin.php" </script>';
    
    
            
    
            }    

    }

    

?>