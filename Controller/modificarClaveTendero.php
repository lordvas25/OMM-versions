<?php

    require_once("../Model/conexion.php");
    require_once("../Model/consultasTendero.php");
    require_once("../Model/validarSesion.php");

    $ClaveActual = md5($_POST['ClaveActual']);
    $ClaveNueva = md5($_POST['ClaveNueva']);
    $ClaveConf = md5($_POST['ClaveConf']);

    session_start();
    $identificacion = $_SESSION['id'];
    
    if ($ClaveActual==$_SESSION['Clave']) {

        if($ClaveNueva == $ClaveConf) {

            $objetoConsultas = new ConsultasTendero();
            $result = $objetoConsultas->modificarClave($ClaveNueva, $identificacion);

        }else{
            echo "<script>alert('La clave Ingresada no coincide con la nueva clave')</script>";
            echo "<script>location.href=('../View/Tendero/HomeTendero.php')</script>"; 
        }

    }else{
        echo "<script>alert('La clave actual no concuerda')</script>";
        echo "<script>location.href=('../View/Tendero/HomeTendero.php')</script>";
    }

?>