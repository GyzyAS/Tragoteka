<?php
session_start();
include 'conexion.php'; // Incluir el archivo de conexión
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tragoteka</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap');

        /*
        font-family: 'Roboto Condensed', sans-serif;
        */

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            list-style: none;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .header {
            background-image: url(images/bg.jpeg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            position: relative;
            min-height: 100vh;
            align-items: center;
        }

        .menu {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 10px;
            padding: 5px;
        }

        .logo {
            color: #FFFFFF;
            font-size: 25px;
            font-weight: bold;
        }

        .menu .navbar ul li {
            position: relative;
            float: left;
        }

        .menu .navbar ul li a {
            font-size: 18px;
            padding: 20px;
            color: #FFFFFF;
            display: block;
            font-weight: bold;
        }

        .menu .navbar ul li a:hover {
            color:#f70000;
            
        }
            
        .icons {
            display: flex;
        }

        .icons i {
            font-size: 25px;
            color: #FFFFFF;
            margin-right: 15px;
            cursor: pointer;
        }

        .icons i:hover {
            color: #e00e18;
        }

        #menu {
            display: none;
        }

        .menu-icon {
            width: 25px;
        }

        .menu label {
            cursor: pointer;
            display: none;
        }


        .header-txt {
            width: 30%;
            margin-right: 300px;
            padding: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            
        }
        .header-txt  h1{
            
            font-family: Impact;
            font-size: 50px;
            text-align: center;
            color:firebrick;
            
        }
        .header-txt  p{
            
            font-family:sans-serif;
            font-size: 20px;
            text-align: center;
            color: #FFFFFF;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 15px;
            padding: 5px;
            
        }
        .header-text h1{
            font-size: 70px;
            line-height: 80px;
            font-weight: 700;
            text-transform: uppercase;
            color: #266371;
            margin-bottom: 25px;
            font-family: 'Roboto Condensed', sans-serif;
        }

        .header-text p {
            font-size: 18px;
            color: #ffffff;
            font-weight: 500;
            margin-bottom: 25px;
        }
        .btn-1 {
            display: inline-block;
            padding: 13px 20px;
            border-radius: 25px;
            text-transform: uppercase;
            color: #FFFFFF;
            background-color: #099FA6;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
            font-family: 'Roboto Condensed', sans-serif;
        }

        .btn-1:hover {
            background-color: #266371;
        }
        .images {
            width: 800px;
            height: 380px;
            position: absolute;
            right: 0;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .swiper-slide h3 {
            position: absolute;
            left: 20px;
            bottom: 20px;
            color: firebrick;
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 40px;
            text-transform: uppercase;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 15px;
        }


        .rows {
            width: 180px;
            position: absolute;
            right: 620px;
            bottom: 100px;
        }

        .swiper-button-prev {
            height: 50px;
            width: 50px;
            border: 2px solid #FFFFFF;
            border-radius: 50%;
            font-size: 15px;
        }

        .swiper-button-next {
            height: 50px;
            width: 50px;
            border: 2px solid #FFFFFF;
            border-radius: 50%;
            font-size: 15px;
        }

        .swiper-button-prev::after {
            font-size: 25px;
            color: #FFFFFF;
        }

        .swiper-button-next::after {
            font-size: 25px;
            color: #FFFFFF;
        }

        @media(max-width:991px) {

            .menu {
                padding: 30px;

            }

            .menu label {
                display: initial;
            }

            .menu .navbar {
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background-color: #3F3F3F48;
                backdrop-filter: blur(5px);
                display: none;
            }

            .menu .navbar ul li {
                width: 100%;
            }

            #menu:checked ~ .navbar {
                display: initial;
            }
            
            .icons {
                display: none;
            }

            .header {
                padding: 80px 30px 50px 30px;
                align-items: self-start;
                flex-direction: column;
                align-items: center;
            }

            .header-text {
                text-align: center;
                width: 100%;
                margin-bottom: 30px;
            }

            .header-text h1 {
                margin-bottom: 10px;
            }

            .images {
                position: initial;
                width: 300px;
                height: 300px;
            }

            .rows {
                display: none;
            }


        }
        .product-details {
            flex: 1;
            padding: 20px;
        
        }
        .product-info {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            padding: 15px;
            width: 100%;
            margin: auto;
            color: black;
            
        }
          /* Estilos para el botón Agregar al carrito */
          #add-to-cart-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            background-color: #FF5733;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #add-to-cart-button:hover {
            background-color: #C70039;
        }

        /* Otros estilos */
        body {
            font-family: Arial, sans-serif;
        }

        .header-txt h1 {
            font-size: 2em;
            margin-bottom: 10px;
        }

        .product-details {
            margin-top: 20px;
        }

        .product-info {
            margin-bottom: 20px;
        }
        .search-bar {
            padding: 10px;
            font-size: 16px;
            width: 300px;
            border: 2px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
            margin-left: 50px;
        }
        
        

    </style>

</head>
<body>
    <header class="header">

        <div class="menu container">
            <a href="index.html" class="logo">GYZYbar</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="images/menu.png" class="menu-icon" alt="">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <input type="text" id="searchInput" placeholder="Buscar trago..." onkeyup="filterDrinks()" class="search-bar">
                </ul>
            </nav>
            
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Icono de Carrito</title>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
            </head>
            <body>
                <div class="icons">
                        <nav class="navbar">
                            <ul>
                                <a href="compras.php"><i class="fa fa-shopping-cart"></a></i>
                            </div>
                        </body>

        </div>
        <div class="header-content container">
            <div class="header-txt">
                <h1>ELIGE TU BEBIDA FAVORITA</h1>
                <br><p>
                    Descubre nuestra selección de las mejores bebidas alcohólicas. Desde whiskies hasta vinos, tenemos algo para cada ocasión.
                </p>
                <br><div class="product-details">
                <div class="product-info">
                    <h3>DETALLES DEL PRODUCTO</h3>
                    <p id="product-name">Nombre: </p>
                    <p id="product-details">Detalles: </p>
                    <p id="product-price">Precio: </p>
                </div>
                <!-- Botón Agregar al carrito -->
                <button id="add-to-cart-button">Agregar al carrito</button>
            </div>
                
            </div>
        </div>
        </div>

        <div class="images">
            <div class="swiper swiper">
                <div class="swiper-wrapper">
                    <?php
                    $sql = "SELECT * FROM bebidas";
                    $result = $conexion->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $imagePath = '' . htmlspecialchars($row["imagen"]);
                            $nombre = htmlspecialchars($row["nombre"]);
                            $detalles = htmlspecialchars($row["detalles"]);
                            $precio = htmlspecialchars($row["precio_soles"]);
                            echo '<div class="swiper-slide" data-nombre="' . $nombre . '" data-detalles="' . $detalles . '" data-precio="' . $precio . '">';
                            echo '<img src="' . $imagePath . '" alt="' . $nombre . '" data-nombre="' . $nombre . '" data-detalles="' . $detalles . '" data-precio="' . $precio . '">';
                            echo '<h3 data-nombre="' . $nombre . '" data-detalles="' . $detalles . '" data-precio="' . $precio . '">' . $nombre . '</h3>';
                            echo '</div>';
                        }
                    } else {
                        echo "0 resultados";
                    }
                    $conexion->close();
                    ?>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            
    </header>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".swiper", {
            slidesPerView: 1,
            centeredSlides: true,
            loop: true,
            spaceBetween: 10,
            grabCursor: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            breakpoints: {
                991: {
                    slidesPerView: 3
                }
            }
        });
        // Función para filtrar bebidas por nombre
        function filterDrinks() {
            var input = document.getElementById('searchInput').value.toLowerCase();
            var slides = document.querySelectorAll('.swiper-slide');
            slides.forEach(function(slide) {
                var nombre = slide.getAttribute('data-nombre').toLowerCase();
                if (nombre.includes(input)) {
                    slide.style.display = "block";
                } else {
                    slide.style.display = "none";
                }
            });
            swiper.update(); // Actualizar swiper para recalcular la visibilidad de los slides
        }

    // Añadir event listeners a las imágenes y nombres
    document.querySelectorAll('.swiper-slide img, .swiper-slide h3').forEach(element => {
            element.addEventListener('click', function() {
                var nombre = this.getAttribute('data-nombre');
                var detalles = this.getAttribute('data-detalles');
                var precio = this.getAttribute('data-precio');

                document.getElementById('product-name').textContent = 'Nombre: ' + nombre;
                document.getElementById('product-details').textContent = 'Detalles: ' + detalles;
                document.getElementById('product-price').textContent = 'Precio: ' + precio + ' soles';
            });
        });

    // Funcionalidad del botón Agregar al carrito
    document.getElementById('add-to-cart-button').addEventListener('click', function() {
            var nombre = document.getElementById('product-name').textContent.replace('Nombre: ', '');
            var detalles = document.getElementById('product-details').textContent.replace('Detalles: ', '');
            var precio = document.getElementById('product-price').textContent.replace('Precio: ', '').replace(' soles', '');

            if (nombre && detalles && precio) {
                alert('Producto agregado al carrito:\n' +
                    'Nombre: ' + nombre + '\n' +
                    'Detalles: ' + detalles + '\n' +
                    'Precio: ' + precio + ' soles');
                // Guardar los datos en la sesión
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'guardar_carrito.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.send('nombre=' + encodeURIComponent(nombre) + '&detalles=' + encodeURIComponent(detalles) + '&precio=' + encodeURIComponent(precio));

            } else {
                alert('Selecciona un producto primero.');
            }
        });

        
    </script>
</body>
</html>




