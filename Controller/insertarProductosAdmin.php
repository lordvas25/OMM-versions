<?php

    require_once('../Model/conexion.php');
    require_once('../Model/ConsultasAdmin.php');

    // Aterrizar los valores enviados en el name del form hasta el metodo POST en las diferentes variables
    $nombre_producto = $_POST['nombre_producto'];
    $descripcion_producto = $_POST['descripcion_producto'];
    $categoria_producto = $_POST['categoria_producto'];
    $cantidad_producto = $_POST['cantidad_producto'];
    $marca_producto = $_POST['marca_producto'];
    $precio_producto = $_POST['precio_producto'];

    define('LIMITE',2000);
    define('ARREGLO',serialize(array('image/jpg','image/png','image/jpeg','image/gif')));
    $PERMITIDOS = unserialize(ARREGLO);
    
    if ($_FILES["img_producto"]["error"]>0){
        echo "<script> alert('Por favor seleccione una imagen') </script>";
        echo '<script> location.href="../View/Admin/RegistrarProductosAdmin.php"</script>';
    }
    else{
        if(in_array($_FILES['img_producto']['type'], $PERMITIDOS) && ($_FILES['img_producto']['size']<=LIMITE *1024) ){
            $img_producto="../uploads/".$_FILES['img_producto']['name'];



            if ($img_producto){
                $resultado = move_uploaded_file($_FILES["img_producto"]["tmp_name"], $img_producto);
                if  (strlen($nombre_producto)>0 && strlen($descripcion_producto)>0 && strlen($categoria_producto)>0 && strlen($cantidad_producto)>0 && strlen($marca_producto)>0 && strlen($precio_producto)>0 ){

                        $objetoConsultas = new ConsultasAdmin();

                        $result = $objetoConsultas ->registrarProductos($nombre_producto,$img_producto,$descripcion_producto,$categoria_producto,$cantidad_producto,$marca_producto,$precio_producto);

                    

                    // Si los campos vienen vacios redireccionamos al formulario 
                    }else{
                        echo "<script> alert('Por favor complete los campos para registrar sus productos en el sistema') </script>";
                        echo '<script> location.href="../View/Admin/RegistrarProductosAdmin.php"</script>';
                    }
            }else {
              echo "<script> alert('Error al cargar') </script>";
             // echo '<script> location.href="../View/Tendero/RegistrarProductos"</script>';
              }
            
        }else {
         echo "<script> alert('El tamaño de imagen supera lo permitido') </script>";
        echo '<script> location.href="../View/Admin/RegistrarProductosAdmin.php"</script>';
        }
    }
    // Validamos que las variables no esten vacias
    
    

    
?>