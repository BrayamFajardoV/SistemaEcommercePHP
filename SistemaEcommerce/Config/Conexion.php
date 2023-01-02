<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "sistemaecommerce";
    
    $conexion = new mysqli($host, $user, $pass, $db);

    if (!$conexion) {
        echo "Conexion fallida";
    }