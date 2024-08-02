<?php
session_start();
require('fpdf.php');

// Verificar que el carrito no esté vacío
if (!isset($_SESSION['carrito']) || count($_SESSION['carrito']) == 0) {
    die('No hay productos en el carrito.');
}

// Crear un nuevo PDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

// Título
$pdf->Cell(0, 10, 'Resumen del Pedido', 0, 1, 'C');
$pdf->Ln(10);

// Información del usuario
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, 'Nombre y Apellido: ' . $_POST['firstName'], 0, 1);
$pdf->Cell(0, 10, 'Email: ' . $_POST['email'], 0, 1);
$pdf->Cell(0, 10, 'Direccion: ' . $_POST['billingCity'] . ', ' . $_POST['billingCountry'] . ', ' . $_POST['billingDomicilio'], 0, 1);
$pdf->Ln(10);

// Encabezados de la tabla
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(80, 10, 'Producto', 1);
$pdf->Cell(30, 10, 'Detalles', 1);
$pdf->Cell(30, 10, 'Precio', 1);
$pdf->Ln(10);

// Detalles del carrito
$pdf->SetFont('Arial', '', 12);
$total = 0;
foreach ($_SESSION['carrito'] as $item) {
    $pdf->Cell(80, 10, $item['nombre'], 1);
    $pdf->Cell(30, 10, $item['detalles'], 1);
    $pdf->Cell(30, 10, $item['precio'], 1, 1);
    $total += $item['precio'];
}

// Total
$pdf->Cell(80, 10, 'Total', 1);
$pdf->Cell(30, 10, '', 1);
$pdf->Cell(30, 10, $total, 1, 1);

// Mueve la llamada a Output al final del script
$pdf->Output('D', 'resumen_pedido.pdf');
?>

