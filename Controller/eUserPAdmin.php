<?php

    require_once('../Model/conexion.php');
    require_once('../Model/ConsultasAdmin.php');

    $id_productos = $_GET['id_productos'];

    $objetoConsultas = new ConsultasAdmin();
    $result = $objetoConsultas->eliminarProducto($id_productos);

?>