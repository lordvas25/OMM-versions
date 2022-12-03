<?php

    class ConsultasCliente{


        public function registrarProductoCarrito($id_producto,$nombre_producto,$img_producto,$marca_producto,$precio_producto,$cantidad,$id_user,$tendero,$fecha){

            //  Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();

            $sql = "SELECT * FROM listaproductos WHERE Id_producto=:Id_producto  " ;
            $result=$conexion->prepare($sql);

            $result->bindParam(":Id_producto", $id_producto);

            $result->execute();
            
            $f=$result->fetch();

            if ($f) {
                echo "<script> alert('Su producto ya se encuentran en su carrito') </script>";
                echo '<script> location.href="../View/Cliente/HomeCliente.php" </script>';
            }else{
            //  Conectamos con la clase Conexion 
            $objetoconexion = new conexion();
            $conexion = $objetoconexion->get_conexion();

            $sql= "INSERT INTO listaproductos (id_producto, nombre_producto, img_producto, marca_producto, precio_producto, cantidad, Id_user, tendero, Fecha) 
            VALUES(:id_producto, :nombre_producto, :img_producto, :marca_producto, :precio_producto, :cantidad, :Id_user, :tendero, :Fecha)";

            $result=$conexion->prepare($sql);

            $result->bindParam(':id_producto', $id_producto);
            $result->bindParam(':nombre_producto', $nombre_producto);
            $result->bindParam(':img_producto', $img_producto);
            $result->bindParam(':marca_producto', $marca_producto);
            $result->bindParam(':precio_producto', $precio_producto);
            $result->bindParam(':cantidad', $cantidad);
            $result->bindParam(':Id_user', $id_user);
            $result->bindParam(':tendero', $tendero);
            $result->bindParam(':Fecha', $fecha);

            $result->execute();
            echo "<script> alert('El producto se agrego a su carrito') </script>";
            echo '<script> location.href="../View/Cliente/HomeCliente.php"</script>';
            }

        }

        public function modificarUser($Identificacion,$tipoDoc,$Nombres,$Apellidos,$Email,$Telefono){
            //  Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();


            $sql="UPDATE clientes SET Identificacion=:Identificacion, tipoDoc=:tipoDoc, Nombres=:Nombres, Apellidos=:Apellidos, Email=:Email, Telefono=:Telefono WHERE Identificacion=:Identificacion";
            $result = $conexion->prepare($sql);

            $result->bindParam(':Identificacion', $Identificacion);
            $result->bindParam(':tipoDoc', $tipoDoc);
            $result->bindParam(':Nombres', $Nombres);
            $result->bindParam(':Apellidos', $Apellidos);
            $result->bindParam(':Email', $Email);
            $result->bindParam(':Telefono', $Telefono);

            $result->execute();
            echo "<script> alert('Actualizacion Exitosa') </script>";
            echo '<script> location.href="../view/cliente/C_Perfil.php" </script>';

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
            echo '<script> location.href="../view/Cliente/HomeCliente.php" </script>';

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
            echo '<script> location.href="View/Cliente/blog-single.php"</script>';
            
        }
        
        public function mostrarListaCarrito($id_user){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();
            $sql = "SELECT * FROM listaproductos WHERE Id_user=:Id_user";
            $result = $conexion->prepare($sql);
            $result->bindParam(':Id_user', $id_user);
            $result->execute();

            while ($consulta = $result->fetch()) {
                $f[] = $consulta;
            }
            return $f;
        }

        //Funciones para ver y las categorias de los productos desde Cliente
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

        public function mostrarPrecio(){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();
            $sql = "SELECT FORMAT(precio_producto,'de_DE') FROM productos ";
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

        //Funciones para ver y las categorias de los productos desde Cliente
        public function mostrarTenderos(){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();
            $sql = "SELECT * FROM clientes WHERE rol='tendero' ";
            $result = $conexion->prepare($sql);
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

            $sql = "SELECT * FROM productos WHERE precio_producto <=5000 ";
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

        public function mostrarTotalCompra($id_user){

            $f = null;
            //Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion();
            $sql = "SELECT SUM(precio_producto) as pTotal FROM `listaproductos` WHERE Id_user=:Id_user";
            $result = $conexion->prepare($sql);
            $result->bindParam(':Id_user', $id_user);
            $result->execute();
    
            while ($consulta = $result->fetch()) {
                $f[] = $consulta;
            }
            return $f;
        }

        public function eliminarProductoCarrito($Id_Lista){

            //  Conectamos con la clase Conexion 
            $objetoConexion = new Conexion();
            $conexion = $objetoConexion->get_conexion(); 
            
            $sql= "DELETE FROM listaproductos WHERE Id_Lista=:Id_Lista";
    
            $result= $conexion->prepare($sql);
            
            $result->bindparam(':Id_Lista', $Id_Lista);
            $result->execute();
    
            echo "<script> alert('Eliminacion de producto exitosa') </script>";
            echo '<script> location.href="../view/Cliente/ListarProductosCarrito.php" </script>';
            }

            public function mProductosTendero($tendero){

                $f = null;
                //Conectamos con la clase Conexion 
                $objetoConexion = new Conexion();
                $conexion = $objetoConexion->get_conexion();
    
                $sql = "SELECT * FROM productos  WHERE tendero=:tendero ";
                $result = $conexion->prepare($sql);
                $result->bindparam(':tendero', $tendero);
                $result->execute();
    
                while ($consulta = $result->fetch()) {
                    $f[] = $consulta;
                }
                return $f;
            }

    }

    

?>