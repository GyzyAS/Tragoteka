<?php
session_start();
include 'conexion.php';

// Función para eliminar un producto del carrito
if (isset($_POST['remove_product'])) {
    $index = $_POST['remove_product'];
    unset($_SESSION['carrito'][$index]);
    $_SESSION['carrito'] = array_values($_SESSION['carrito']);
}

// Calcular el total
$total = 0;
if (isset($_SESSION['carrito'])) {
    foreach ($_SESSION['carrito'] as $item) {
        $total += $item['precio'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tragoteka</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <style>
        .order-summary {
            padding: 5px;
            margin-top: 80px;
            margin-left: 20px;
            margin-right: 0px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            min-height: 500px;
            background: whitesmoke;
        }
        .form-card {
            width: 70%;
            margin-left: 1px;
            margin-top: 80px;
        }
    </style>
</head>

<body>
<header class="header">
    <div class="menu container">
        <a href="index.html" class="logo">GYZYbar</a>
        <input type="checkbox" id="menu" />
        <label for="menu">
            <img src="images/menu.png" class="menu-icon" alt="Menú">
        </label>
        <nav class="navbar">
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="productos.php">Productos</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
        <div class="icons">
            <a href="compras.php"><i class="fa fa-shopping-cart"></i></a>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card form-card">
                    <div class="card-body">
                    <form action="generar_pdf.php" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="expiryDate">Fecha de registro</label>
                                <input type="date" class="form-control" id="expiryDate" name="expiryDate">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="firstName">Nombre y Apellido</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Nombre">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastName">N° De Celular</label>
                                <input type="text" class="form-control" id="number" name="number" placeholder="telefono">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="billingCity">Dirección:</label>
                            <input type="text" class="form-control" id="billingCity" name="billingCity" placeholder="Domicilio">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="billingCountry" name="billingCountry" placeholder="País">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="billingDomicilio" name="billingDomicilio" placeholder="Ciudad">
                        </div>
                        <div class="form-group">
                                <label for="cardNumber">Número de Tarjeta</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="cardNumber" placeholder="4242-4242-4242-4242">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg" alt="Visa" style="width: 30px;">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        <button type="submit" class="btn btn-danger btn-block">Pagar</button>
                    </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="order-summary">
                    <h2>Resumen del Pedido</h2>
                    <?php
                    if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) > 0) {
                        echo '<table class="table table-striped">';
                        echo '<thead><tr><th>Nombre</th><th>Detalles</th><th>Precio</th><th>Acción</th></tr></thead>';
                        echo '<tbody>';
                        foreach ($_SESSION['carrito'] as $index => $item) {
                            echo '<tr>';
                            echo '<td>' . htmlspecialchars($item['nombre']) . '</td>';
                            echo '<td>' . htmlspecialchars($item['detalles']) . '</td>';
                            echo '<td>' . htmlspecialchars($item['precio']) . '</td>';
                            echo '<td>';
                            echo '<form method="post" style="display:inline-block;">';
                            echo '<button type="submit" name="remove_product" value="' . $index . '" class="btn btn-danger btn-sm">Eliminar</button>';
                            echo '</form>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        echo '</tbody>';
                        echo '</table>';
                        echo '<h3>Total: ' . number_format($total, 2) . ' soles</h3>';
                    } else {
                        echo '<p>No hay productos en el carrito.</p>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</header>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>






