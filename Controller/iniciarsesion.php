<?php

require_once('../Model/conexion.php');
require_once('../Model/validarSesion.php');

 $Email = $_POST['Email'];
 $Clave = md5($_POST['Clave']);

    $objetoValidar = new validarSesion();
    $result = $objetoValidar->IniciarSesion($Email, $Clave);
?>