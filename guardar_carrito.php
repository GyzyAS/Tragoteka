<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $detalles = $_POST['detalles'];
    $precio = $_POST['precio'];

    // Crear una matriz si no existe
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
    }

    // Agregar el producto al carrito
    $_SESSION['carrito'][] = array(
        'nombre' => $nombre,
        'detalles' => $detalles,
        'precio' => $precio
    );

    echo "Producto agregado al carrito.";
}
?>
