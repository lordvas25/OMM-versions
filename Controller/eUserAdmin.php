<?php

    require_once('../Model/conexion.php');
    require_once('../Model/ConsultasAdmin.php');

    $id_user = $_GET['id_user'];

    $objetoConsultas = new ConsultasAdmin();
    $result = $objetoConsultas->eliminarUser($id_user);

?>