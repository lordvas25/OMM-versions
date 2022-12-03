<?php

    require_once('../Model/conexion.php');
    require_once('../Model/ConsultasTendero.php');

    // Aterrizar los valores enviados en el name del form hasta el metodo POST en las diferentes variables
    $Identificacion = $_POST['Identificacion'];
    $tipoDoc = $_POST['tipoDoc'];
    $Nombres = $_POST['Nombres'];
    $Apellidos = $_POST['Apellidos'];
    $Email = $_POST['Email'];
    $Telefono = $_POST['Telefono'];

    // Validamos que las variables no esten vacias
    if  (strlen($Identificacion)>0 &&  strlen($tipoDoc)>0 && strlen($Nombres)>0 &&  strlen($Apellidos)>0 && strlen($Email)>0 && strlen($Telefono)>0){

        $objetoConsultas = new ConsultasTendero();

        $result = $objetoConsultas ->modificarUser($Identificacion,$tipoDoc,$Nombres,$Apellidos,$Email,$Telefono);

    // Si los campos vienen vacios redireccionamos al formulario 
    }else{
        echo "<script> alert('Por favor complete los campos para modificar el usuario') </script>";
        echo '<script> location.href="../View/Tendero/editarPerfilTendero.php"</script>';
    }
    

    
?>