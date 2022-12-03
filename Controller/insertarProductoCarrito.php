<?php

    require_once('../Model/conexion.php');
    require_once('../Model/ConsultasCliente.php');
    require_once('../Model/validarSesion.php');
    session_start();
    $id= $_SESSION['id']; 

    date_default_timezone_set('America/Bogota');
    // Aterrizar los valores enviados en el name del form hasta el metodo POST en las diferentes variables
    $id_producto = $_POST['id_producto'];
    $nombre_producto = $_POST['nombre_producto'];
    $img_producto = $_POST['img_producto'];
    $marca_producto = $_POST['marca_producto'];
    $precio_producto = $_POST['precio_producto'];
    $cantidad = "1";
    $tendero = $_POST['tendero'];
    $id_user = $id;
    $fecha = date('Y-m-d H:i:s');

    // Validamos que las variables no esten vacias
    if  (strlen($id_producto)>0 && strlen($nombre_producto)>0 && strlen($img_producto)>0 && strlen($marca_producto)>0 && strlen($precio_producto)>0 && strlen($cantidad)>0 &&  strlen($tendero)>0 && strlen($fecha)>0){

        $objetoConsultas = new ConsultasCliente();

        $result = $objetoConsultas ->registrarProductoCarrito($id_producto,$nombre_producto,$img_producto,$marca_producto,$precio_producto,$cantidad,$id_user,$tendero,$fecha);

    // Si los campos vienen vacios redireccionamos al formulario 
    }else{
        echo "<script> alert('Algo salio mal') </script>";
        //echo '<script> location.href="../View/Cliente/HomeCliente.php"</script>';
    }
    
    

    
?>