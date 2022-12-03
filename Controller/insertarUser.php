<?php

    require_once('../Model/conexion.php');
    require_once('../Model/ConsultasE.php');

    // Aterrizar los valores enviados en el name del form hasta el metodo POST en las diferentes variables
    $Identificacion = $_POST['Identificacion'];
    $tipoDoc = $_POST['tipoDoc'];
    $Nombres = $_POST['Nombres'];
    $Apellidos = $_POST['Apellidos'];
    $Email = $_POST['Email'];
    $Telefono = $_POST['Telefono'];
    $Direccion = $_POST['Direccion'];
    $Clave = $_POST['Clave'];
    $rol = "Usuario";
    $estado = "Activo";
     
    // definimos el peso limite y los formatos de imagen permitidos 
    define('LIMITE', 2000);
    define('ARREGLO',serialize(array('image/jpg','image/png','image/jpeg','image/gif')));
    $PERMITIDOS = unserialize(ARREGLO);
    
    //Validamos que el archivo si haya sido selecionado y no tengas ningun error.

    if($_FILES['Foto']["error"]> 0){
        echo "<script> alert('Archivo dañado o no encontrado') </script>";
        echo '<script> location.href="../View/Admin/RegistrarUser.php"</script>';
    }else{
        //Confirmamos formato de imagen y peso
        if(in_array($_FILES['Foto']['type'], $PERMITIDOS) && $_FILES['Foto']['size'] <= LIMITE * 1024){

            //Capturamos los valores a guardar en la base de datos.

            $Foto ="../uploads/Perfil/" .$_FILES['Foto']['name'];

            //Movemos el archivo a la carpeta selecionada.

            $Resultado = move_uploaded_file($_FILES['Foto']['tmp_name'], $Foto);

    // Validamos que las variables no esten vacias
    if  (strlen($Identificacion)>0 &&  strlen($tipoDoc)>0 && strlen($Nombres)>0 &&  strlen($Apellidos)>0 && strlen($Email)>0 && strlen($Telefono)>0 && strlen($Direccion)>0 && strlen($Clave)>0 ){

        // Encriptamos la clave con la instruccion md5
        $ClaveMd =md5($Clave);

        $objetoConsultas = new ConsultasE();

        $result = $objetoConsultas ->registrarUserE($Identificacion,$tipoDoc,$Nombres,$Apellidos,$Email,$Telefono,$Direccion,$ClaveMd,$rol,$estado,$Foto);

    // Si los campos vienen vacios redireccionamos al formulario 
    }else{
        echo "<script> alert('Por favor complete todos los  campos para que el registro  sea exitoso') </script>";
        echo '<script> location.href="../View/Extra/Registro-user"</script>';
    }
        }
    }   
    
?>