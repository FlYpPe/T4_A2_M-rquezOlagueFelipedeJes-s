<?php

    include('conexion_bd_escuela.php');
    //include_once
    //require
    //require_once

    $con = new ConexionBDEscuela();
    
    $conexion = $con->getConexion();

    //var_dump($conexion);

?>