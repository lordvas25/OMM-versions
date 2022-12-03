<?php

    require_once('../Model/conexion.php');
    require_once('../Model/ConsultasCliente.php');

    $Id_Lista = $_GET['Id_Lista'];

    $objetoConsultas = new ConsultasCliente();
    $result = $objetoConsultas->eliminarProductoCarrito($Id_Lista);

?>