<?php
	$conexion = new mysqli("localhost", "root", "", "tragoteka", 4306);

    // Verificar errores de conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    
    $conexion->set_charset("utf8");
    
?>