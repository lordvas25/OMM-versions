<?php

    require_once('../Model/conexion.php');
    require_once('../Model/ConsultasTendero.php');

    // Aterrizar los valores enviados en el name del form hasta el metodo POST en las diferentes variables
    $Id_Lista = $_POST['Id_Lista'];
    $Estado = $_POST['Estado'];

    // Validamos que las variables no esten vacias
    if  (strlen($Id_Lista)>0  && strlen($Estado)>0){

        $objetoConsultas = new ConsultasTendero();

        $result=$objetoConsultas->registrarEstado($Id_Lista, $Estado);

    // Si los campos vienen vacios redireccionamos al formulario 
    }else{
        echo "<script> alert('Por favor complete los campos') </script>";
        //echo '<script> location.href="../View/Tendero/mostrarpedidos.php"</script>';
    }
       
?>