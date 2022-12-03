<?php

    require_once('../Model/conexion.php');
    require_once('../Model/ConsultasTendero.php');

    $id_productos = $_GET['id_productos'];

    $objetoConsultas = new ConsultasTendero();
    $result = $objetoConsultas->eliminarProducto($id_productos);

?>