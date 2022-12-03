<?php

    require_once('../Model/conexion.php');
    require_once('../Model/ConsultasTendero.php');

    // Aterrizar los valores enviados en el name del form hasta el metodo POST en las diferentes variables
    $id_productos = $_POST['id_productos'];
    $nombre_producto = $_POST['nombre_producto'];
    $descripcion_producto = $_POST['descripcion_producto'];
    $categoria_producto = $_POST['categoria_producto'];
    $cantidad_producto = $_POST['cantidad_producto'];
    $marca_producto = $_POST['marca_producto'];
    $precio_producto = $_POST['precio_producto'];

    // Validamos que las variables no esten vacias
    if  (strlen($id_productos)>0 && strlen($nombre_producto)>0 && strlen($descripcion_producto)>0 && strlen($categoria_producto)>0 && strlen($cantidad_producto)>0 &&  strlen($marca_producto)>0 && strlen($precio_producto)>0){

        $objetoConsultas = new ConsultasTendero();

        $result = $objetoConsultas ->modificarProducto($id_productos,$nombre_producto,$descripcion_producto,$categoria_producto,$cantidad_producto,$marca_producto,$precio_producto);

    // Si los campos vienen vacios redireccionamos al formulario 
    }else{
        echo "<script> alert('Por favor complete los campos para modificar el producto') </script>";
        echo '<script> location.href="../View/Tendero/editarProductos.php"</script>';
    }
    

    
?>