-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:4306
-- Tiempo de generación: 25-07-2024 a las 14:40:41
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tragoteka`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebidas`
--

CREATE TABLE `bebidas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `detalles` text DEFAULT NULL,
  `precio_soles` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `bebidas`
--

INSERT INTO `bebidas` (`id`, `nombre`, `imagen`, `detalles`, `precio_soles`) VALUES
(1, 'Blue Label', 'images/blue_label.jpg', 'Whisky escocés premium, año 2023', 800.00),
(2, 'Macallan', 'images/macallan.jpg', 'Whisky escocés de malta, añejado 12 años', 350.00),
(3, 'Martell Cognac', 'images/martell_cognac.jpg', 'Cognac francés, añejado 10 años', 450.00),
(4, 'Hennessy', 'images/hennessy.jpg', 'Cognac francés, añejado 12 años', 500.00),
(5, 'Glenfiddich', 'images/glenfiddich.jpg', 'Whisky escocés de malta, añejado 15 años', 300.00),
(6, 'Label Ghost and rave', 'images/ghost_and_rave.jpg', 'Edición especial, año 2023', 650.00),
(7, 'Jameson', 'images/jameson.jpg', 'Whisky irlandés, añejado 7 años', 150.00),
(8, 'Chivas Regal', 'images/chivas_regal.jpg', 'Whisky escocés, añejado 12 años', 250.00),
(9, 'Absolut Vodka', 'images/absolut_vodka.jpg', 'Vodka sueco, clásico', 90.00),
(10, 'Bacardi', 'images/bacardi.jpg', 'Ron blanco, clásico', 80.00),
(11, 'Captain Morgan', 'images/captain_morgan.jpg', 'Ron especiado, clásico', 95.00),
(12, 'Patron', 'images/patron.jpg', 'Tequila premium, añejo', 400.00),
(13, 'Jagermeister', 'images/jagermeister.jpg', 'Licor de hierbas alemán', 120.00),
(14, 'Smirnoff', 'images/smirnoff.jpg', 'Vodka ruso, clásico', 70.00),
(15, 'Jack Daniel\'s', 'images/jack_daniels.jpg', 'Whisky americano, clásico', 200.00),
(16, 'Grey Goose', 'images/grey_goose.jpg', 'Vodka francés premium', 300.00),
(17, 'Ciroc', 'images/ciroc.jpg', 'Vodka francés, de uva', 350.00),
(18, 'Bombay Sapphire', 'images/bombay_sapphire.jpg', 'Ginebra inglesa premium', 220.00),
(19, 'Beefeater', 'images/beefeater.jpg', 'Ginebra inglesa clásica', 150.00),
(20, 'Gordon\'s Gin', 'images/gordons_gin.jpg', 'Ginebra inglesa, clásica', 130.00),
(21, 'Sierra Tequila', 'images/sierra_tequila.jpg', 'Tequila mexicano, clásico', 180.00),
(22, 'Mount Gay Rum', 'images/mount_gay_rum.jpg', 'Ron de Barbados, añejado 7 años', 250.00),
(23, 'Jim Beam', 'images/jim_beam.jpg', 'Bourbon americano, clásico', 150.00),
(24, 'Bulleit Bourbon', 'images/bulleit_bourbon.jpg', 'Bourbon americano, clásico', 220.00),
(25, 'Woodford Reserve', 'images/woodford_reserve.jpg', 'Bourbon americano premium', 300.00),
(26, 'Tanqueray', 'images/tanqueray.jpg', 'Ginebra inglesa, clásica', 200.00),
(27, 'Casamigos', 'images/casamigos.jpg', 'Tequila mexicano, añejo', 400.00),
(28, 'Lagavulin', 'images/lagavulin.jpg', 'Whisky escocés de malta, añejado 16 años', 450.00),
(29, 'Glenlivet', 'images/glenlivet.jpg', 'Whisky escocés de malta, añejado 12 años', 320.00),
(30, 'Bowmore', 'images/bowmore.jpg', 'Whisky escocés de malta, añejado 15 años', 400.00),
(31, 'Laphroaig', 'images/laphroaig.jpg', 'Whisky escocés de malta, añejado 10 años', 350.00),
(32, 'Ardbeg', 'images/ardbeg.jpg', 'Whisky escocés de malta, añejado 10 años', 370.00),
(33, 'Tullamore Dew', 'images/tullamore_dew.jpg', 'Whisky irlandés, clásico', 180.00),
(34, 'Redbreast', 'images/redbreast.jpg', 'Whisky irlandés, añejado 12 años', 280.00),
(35, 'Wild Turkey', 'images/wild_turkey.jpg', 'Bourbon americano, clásico', 170.00),
(36, 'Buffalo Trace', 'images/buffalo_trace.jpg', 'Bourbon americano, clásico', 200.00),
(37, 'Eagle Rare', 'images/eagle_rare.jpg', 'Bourbon americano, añejado 10 años', 280.00),
(38, 'Maker\'s Mark', 'images/makers_mark.jpg', 'Bourbon americano, clásico', 220.00),
(39, 'Angostura Rum', 'images/angostura_rum.jpg', 'Ron de Trinidad y Tobago, añejado 7 años', 300.00),
(40, 'El Dorado Rum', 'images/el_dorado_rum.jpg', 'Ron de Guyana, añejado 15 años', 350.00),
(41, 'Diplomatico Rum', 'images/diplomatico_rum.jpg', 'Ron venezolano, añejado 12 años', 320.00),
(42, 'Monkey 47', 'images/monkey_47.jpg', 'Ginebra alemana premium', 400.00),
(43, 'Havana Club', 'images/havana_club.jpg', 'Ron cubano, añejado 7 años', 180.00),
(44, 'Kraken Rum', 'images/kraken_rum.jpg', 'Ron especiado, clásico', 150.00),
(45, 'Hibiki', 'images/hibiki.jpg', 'Whisky japonés, añejado 17 años', 600.00),
(46, 'Nikka Whisky', 'images/nikka_whisky.jpg', 'Whisky japonés, clásico', 300.00),
(47, 'Teeling', 'images/teeling.jpg', 'Whisky irlandés, clásico', 250.00),
(48, 'Brooklyn Gin', 'images/brooklyn_gin.jpg', 'Ginebra americana premium', 350.00),
(49, 'Yamazaki', 'images/yamazaki.jpg', 'Whisky japonés, añejado 12 años', 500.00),
(50, 'Royal Salute', 'images/royal_salute.jpg', 'Whisky escocés, añejado 21 años', 800.00),
(51, 'Octomore', 'images/octomore.jpg', 'Whisky escocés de malta, edición limitada', 700.00),
(52, 'Aberlour', 'images/aberlour.jpg', 'Whisky escocés de malta, añejado 12 años', 280.00),
(53, 'Ballantine\'s', 'images/ballantines.jpg', 'Whisky escocés, clásico', 150.00),
(54, 'Basil Hayden\'s', 'images/basil_haydens.jpg', 'Bourbon americano, clásico', 280.00),
(55, 'Benriach', 'images/benriach.jpg', 'Whisky escocés de malta, añejado 10 años', 320.00),
(56, 'Blanton\'s', 'images/blantons.jpg', 'Bourbon americano, clásico', 350.00),
(57, 'Bushmills', 'images/bushmills.jpg', 'Whisky irlandés, clásico', 180.00),
(58, 'Don Julio', 'images/don_julio.jpg', 'Tequila mexicano, añejo', 450.00),
(59, 'Fernet Branca', 'images/fernet_branca.jpg', 'Licor de hierbas italiano', 120.00),
(60, 'Glenmorangie', 'images/glenmorangie.jpg', 'Whisky escocés de malta, añejado 10 años', 300.00),
(61, 'Highland Park', 'images/highland_park.jpg', 'Whisky escocés de malta, añejado 12 años', 350.00),
(62, 'Knob Creek', 'images/knob_creek.jpg', 'Bourbon americano, clásico', 250.00),
(63, 'Lagunitas', 'images/lagunitas.jpg', 'Cerveza artesanal americana', 50.00),
(64, 'Monkey Shoulder', 'images/monkey_shoulder.jpg', 'Whisky escocés de malta, mezcla', 270.00),
(65, 'Oblivion Whisky', 'images/oblivion_whisky.jpg', 'Whisky escocés de malta, edición limitada', 600.00),
(66, 'Suntory Whisky', 'images/suntory_whisky.jpg', 'Whisky japonés, clásico', 350.00),
(67, 'Talisker', 'images/talisker.jpg', 'Whisky escocés de malta, añejado 10 años', 300.00),
(68, 'The Balvenie', 'images/the_balvenie.jpg', 'Whisky escocés de malta, añejado 12 años', 350.00),
(69, 'The Dalmore', 'images/the_dalmore.jpg', 'Whisky escocés de malta, añejado 15 años', 400.00),
(70, 'The Glenrothes', 'images/the_glenrothes.jpg', 'Whisky escocés de malta, añejado 12 años', 320.00),
(71, 'The Macallan', 'images/the_macallan.jpg', 'Whisky escocés de malta, añejado 18 años', 600.00),
(72, 'Willett', 'images/willett.jpg', 'Bourbon americano, clásico', 300.00),
(73, 'Woodinville', 'images/woodinville.jpg', 'Bourbon americano, clásico', 250.00),
(74, 'Pisco Portón', 'images/pisco_porton.jpg', 'Pisco peruano, mosto verde', 180.00),
(75, 'Pisco Acholado', 'images/pisco_acholado.jpg', 'Pisco peruano, mezcla de uvas', 150.00),
(76, 'Pisco Quebranta', 'images/pisco_quebranta.jpg', 'Pisco peruano, uva quebranta', 130.00),
(77, 'Pisco Mostajo', 'images/pisco_mostajo.jpg', 'Pisco peruano, uva mostajo', 160.00),
(78, 'Pisco Italia', 'images/pisco_italia.jpg', 'Pisco peruano, uva italia', 170.00),
(79, 'Rubio Verdejo', 'images/rubio_verdejo.jpg', 'Vino blanco español', 90.00),
(80, 'Santiago Queirolo', 'images/santiago_queirolo.jpg', 'Pisco peruano, clásico', 120.00),
(81, 'Barena', 'images/barena.jpg', 'Cerveza peruana, ligera', 10.00),
(82, 'Cusqueña', 'images/cusquena.jpg', 'Cerveza peruana, dorada', 12.00),
(83, 'Pilsen Callao', 'images/pilsen_callao.jpg', 'Cerveza peruana, clásica', 10.00),
(84, 'Cristal', 'images/cristal.jpg', 'Cerveza peruana, clásica', 10.00),
(85, 'Arequipeña', 'images/arequipena.jpg', 'Cerveza peruana, dorada', 12.00),
(86, 'Pilsen Trujillo', 'images/pilsen_trujillo.jpg', 'Cerveza peruana, clásica', 10.00),
(87, 'Carlton', 'images/carlton.jpg', 'Cerveza australiana, clásica', 15.00),
(88, 'Quara', 'images/quara.jpg', 'Vino argentino, Malbec', 60.00),
(89, 'Spirits Pisco', 'images/spirits_pisco.jpg', 'Pisco peruano, clásico', 110.00),
(90, 'Cachina', 'images/cachina.jpg', 'Pisco peruano, cachina', 140.00),
(91, 'Pisco Demonio de los Andes', 'images/pisco_demonio_andi.jpg', 'Pisco peruano, clásico', 150.00),
(92, 'Bianchi', 'images/bianchi.jpg', 'Vino argentino, Cabernet Sauvignon', 80.00),
(93, 'Tabernero', 'images/tabernero.jpg', 'Pisco peruano, clásico', 120.00),
(94, 'Gran Viejo', 'images/gran_viejo.jpg', 'Pisco peruano, añejado', 170.00),
(95, 'Fragolino', 'images/fragolino.jpg', 'Vino italiano, espumoso', 70.00),
(96, 'Tres Cruces', 'images/tres_cruces.jpg', 'Pisco peruano, clásico', 130.00),
(97, 'Tacama', 'images/tacama.jpg', 'Pisco peruano, clásico', 140.00),
(98, 'Cruz del Sur', 'images/cruz_del_sur.jpg', 'Pisco peruano, clásico', 110.00),
(99, 'Cotebote', 'images/cotebote.jpg', 'Pisco peruano, clásico', 100.00),
(100, 'Ron Cartavio', 'images/ron_cartavio.jpg', 'Ron peruano, clásico', 90.00),
(101, 'Russkaya', 'images/russkaya.jpg', 'Vodka ruso, clásico', 60.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_venta` int(11) DEFAULT NULL,
  `monto` decimal(10,2) NOT NULL,
  `metodo_pago` varchar(50) DEFAULT NULL,
  `fecha_pago` timestamp NOT NULL DEFAULT current_timestamp(),
  `estado` varchar(50) DEFAULT 'Completado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id`, `id_usuario`, `id_venta`, `monto`, `metodo_pago`, `fecha_pago`, `estado`) VALUES
(1, 1, 1, 40.00, 'Tarjeta de Crédito', '2024-07-20 19:35:00', 'Completado'),
(2, 2, 2, 20.00, 'Efectivo', '2024-07-21 21:05:00', 'Completado'),
(3, 1, 3, 60.00, 'Tarjeta de Débito', '2024-07-22 23:50:00', 'Completado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_bebida` int(11) DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha_reserva` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_consumo` datetime DEFAULT NULL,
  `estado` varchar(50) DEFAULT 'Pendiente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `id_usuario`, `id_bebida`, `cantidad`, `fecha_reserva`, `fecha_consumo`, `estado`) VALUES
(1, 2, 1, 2, '2024-07-21 15:00:00', '2024-07-23 20:00:00', 'Pendiente'),
(2, 3, 3, 1, '2024-07-22 17:00:00', '2024-07-24 19:00:00', 'Confirmado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `direccion` text DEFAULT NULL,
  `fecha_registro` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `telefono`, `direccion`, `fecha_registro`) VALUES
(1, 'Juan Pérez', 'juan.perez@example.com', '987654321', 'Av. Siempre Viva 123', '2024-07-20'),
(2, 'Ana Gómez', 'ana.gomez@example.com', '976543210', 'Calle Falsa 456', '2024-07-21'),
(3, 'Carlos Fernández', 'carlos.fernandez@example.com', '965432109', 'Boulevard de los Sueños Rotos 789', '2024-07-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_bebida` int(11) DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `fecha_venta` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `id_usuario`, `id_bebida`, `cantidad`, `total`, `fecha_venta`) VALUES
(1, 1, 1, 2, 40.00, '2024-07-20 19:30:00'),
(2, 2, 2, 1, 20.00, '2024-07-21 21:00:00'),
(3, 1, 3, 3, 60.00, '2024-07-22 23:45:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_venta` (`id_venta`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_bebida` (`id_bebida`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_bebida` (`id_bebida`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `pagos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `pagos_ibfk_2` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id`);

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`id_bebida`) REFERENCES `bebidas` (`id`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`id_bebida`) REFERENCES `bebidas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
