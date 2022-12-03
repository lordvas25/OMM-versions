<?php

    require_once('../Model/conexion.php');
    require_once('../Model/ConsultasAdmin.php');

    // Aterrizar los valores enviados en el name del form hasta el metodo POST en las diferentes variables
    $Identificacion = $_POST['Identificacion'];
    $tipoDoc = $_POST['tipoDoc'];
    $Nombres = $_POST['Nombres'];
    $Apellidos = $_POST['Apellidos'];
    $Email = $_POST['Email'];
    $Telefono = $_POST['Telefono'];
    $Clave = $_POST['Clave'];
    $rol = $_POST['rol'];
    $estado = $_POST['estado'];

    // Validamos que las variables no esten vacias
    if  (strlen($Identificacion)>0 &&  strlen($tipoDoc)>0 && strlen($Nombres)>0 &&  strlen($Apellidos)>0 && strlen($Email)>0 && strlen($Telefono)>0 && strlen($Clave)>0 ){

        // Encriptamos la clave con la instruccion md5
        $ClaveMd =md5($Clave);

        $objetoConsultas = new ConsultasAdmin();

        $result = $objetoConsultas ->registrarUser($Identificacion,$tipoDoc,$Nombres,$Apellidos,$Email,$Telefono,$ClaveMd,$rol,$estado);

    // Si los campos vienen vacios redireccionamos al formulario 
    }else{
        echo "<script> alert('Por favor complete los campos para registrar un nuevo usuario en el sistema') </script>";
        echo '<script> location.href="../View/Admin/RegistrarUser.php"</script>';
    }
    

    
?>