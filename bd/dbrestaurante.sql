-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2022 a las 16:38:45
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbrestaurante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `IdCategoria` int(11) NOT NULL,
  `Descrip` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`IdCategoria`, `Descrip`) VALUES
(1, 'Caldos'),
(2, 'Bebidas'),
(8, 'Postres'),
(9, 'Comidas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comanda`
--

CREATE TABLE `comanda` (
  `IdComanda` int(11) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `IdEstatusComanda` int(11) NOT NULL DEFAULT 1,
  `IdMesa` int(11) NOT NULL,
  `MontoPagado` decimal(12,2) NOT NULL,
  `Cambio` decimal(12,2) DEFAULT NULL,
  `FecComanda` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comanda`
--

INSERT INTO `comanda` (`IdComanda`, `IdUsuario`, `IdEstatusComanda`, `IdMesa`, `MontoPagado`, `Cambio`, `FecComanda`) VALUES
(1, 1845928, 3, 1, '300.00', NULL, '2022-05-07 06:10:33'),
(2, 1845931, 3, 3, '150.00', NULL, '2022-05-07 06:10:33'),
(3, 1845930, 3, 2, '200.00', NULL, '2022-05-07 06:10:33'),
(4, 1845926, 3, 5, '220.00', NULL, '2022-05-07 06:10:33'),
(5, 1845932, 3, 8, '300.00', NULL, '2022-05-07 06:10:33'),
(6, 1845926, 3, 6, '250.00', NULL, '2022-05-07 20:45:53'),
(7, 1845928, 3, 9, '180.00', NULL, '2022-05-07 20:45:53'),
(8, 1845926, 3, 6, '250.00', NULL, '2022-05-07 20:46:00'),
(9, 1845928, 3, 9, '180.00', NULL, '2022-05-07 20:46:00'),
(10, 1845932, 1, 4, '100.00', NULL, '2022-05-07 21:02:33'),
(11, 1845927, 1, 7, '150.00', NULL, '2022-05-07 21:02:33'),
(12, 1845932, 1, 4, '100.00', NULL, '2022-05-07 21:02:53'),
(13, 1845927, 1, 7, '150.00', NULL, '2022-05-07 21:02:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comanda_detalle`
--

CREATE TABLE `comanda_detalle` (
  `IdComanda` int(11) DEFAULT NULL,
  `IdMenu` int(11) NOT NULL,
  `Cant` int(11) NOT NULL,
  `PUnitario` decimal(12,2) NOT NULL,
  `FecRegistro` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comanda_detalle`
--

INSERT INTO `comanda_detalle` (`IdComanda`, `IdMenu`, `Cant`, `PUnitario`, `FecRegistro`) VALUES
(1, 2, 3, '100.00', '2022-05-08 19:18:44'),
(2, 19, 2, '50.00', '2022-05-08 19:18:44'),
(2, 4, 2, '25.00', '2022-05-08 19:18:44'),
(3, 8, 2, '25.00', '2022-05-08 19:18:44'),
(3, 9, 1, '35.00', '2022-05-08 19:18:44'),
(3, 14, 1, '65.00', '2022-05-08 19:18:44'),
(3, 20, 2, '50.00', '2022-05-08 19:18:44'),
(4, 24, 2, '90.00', '2022-05-08 19:18:44'),
(4, 7, 2, '20.00', '2022-05-08 19:18:44'),
(5, 18, 3, '100.00', '2022-05-08 19:18:44'),
(6, 24, 2, '90.00', '2022-05-08 20:17:42'),
(6, 5, 1, '50.00', '2022-05-08 20:17:42'),
(6, 7, 1, '20.00', '2022-05-08 20:17:42'),
(7, 17, 1, '90.00', '2022-05-08 20:17:42'),
(7, 3, 1, '90.00', '2022-05-08 20:17:42'),
(8, 14, 2, '65.00', '2022-05-08 20:17:42'),
(8, 15, 1, '65.00', '2022-05-08 20:17:42'),
(8, 8, 3, '25.00', '2022-05-08 20:17:42'),
(9, 21, 1, '65.00', '2022-05-08 20:17:42'),
(9, 9, 1, '35.00', '2022-05-08 20:17:42'),
(9, 22, 1, '80.00', '2022-05-08 20:17:42'),
(10, 17, 2, '90.00', '2022-05-08 20:33:39'),
(10, 4, 2, '25.00', '2022-05-08 20:33:39'),
(11, 21, 2, '65.00', '2022-05-08 20:33:39'),
(11, 4, 2, '25.00', '2022-05-08 20:33:39'),
(12, 14, 1, '65.00', '2022-05-08 20:33:39'),
(12, 8, 2, '25.00', '2022-05-08 20:33:39'),
(13, 17, 1, '90.00', '2022-05-08 20:33:39'),
(13, 4, 1, '25.00', '2022-05-08 20:33:39'),
(13, 9, 1, '35.00', '2022-05-08 20:33:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus_comanda`
--

CREATE TABLE `estatus_comanda` (
  `IdEstatusComanda` int(11) NOT NULL,
  `Descrip` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estatus_comanda`
--

INSERT INTO `estatus_comanda` (`IdEstatusComanda`, `Descrip`) VALUES
(1, 'Abierta'),
(2, 'Cancelada'),
(3, 'Finalizada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `IdMenu` int(11) NOT NULL,
  `IdCategoria` int(11) NOT NULL,
  `Descrip` varchar(50) NOT NULL,
  `DescripCorta` varchar(15) NOT NULL,
  `PUnitario` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`IdMenu`, `IdCategoria`, `Descrip`, `DescripCorta`, `PUnitario`) VALUES
(2, 1, 'Caldo de Pescado', 'Cdo Pescado', '100.00'),
(3, 1, 'Caldo de Pollo', 'Cdo Pollo', '90.00'),
(4, 2, 'Refresco', 'Refresco ', '25.00'),
(5, 2, 'Jarra de Limonada', 'Jr Limonada', '50.00'),
(6, 2, 'Jarra de Jamaica', 'Jr Jamaica', '50.00'),
(7, 2, 'Agua', 'Agua', '20.00'),
(8, 2, 'Café ', 'Cafe', '25.00'),
(9, 8, 'Pay de Queso', 'Pay Queso', '35.00'),
(10, 8, 'Pay de Piña', 'Pay Piña', '35.00'),
(12, 8, 'Pay de Limón', 'Pay Limón', '35.00'),
(13, 8, 'Pay de Manzana', 'Pay Manzana', '40.00'),
(14, 8, 'Pastel de Zanahoria', 'Past Zanahoria', '65.00'),
(15, 8, 'Pastel de Pistache', 'Past Pistache', '65.00'),
(16, 8, 'Pastel de Coco', 'Past Coco', '65.00'),
(17, 1, 'Caldo de Res', 'Cdo Res', '90.00'),
(18, 1, 'Caldo Tlalpeño', 'Cdo Tlalpeño', '100.00'),
(19, 9, 'Mole rojo de pollo con arroz', 'Mole', '50.00'),
(20, 9, 'Asado de puerco con chile rojo y arroz', 'Asa Puerco', '50.00'),
(21, 9, 'Enchiladas de chile verde con ensalada', 'Enchiladas', '65.00'),
(22, 9, 'Pollo a la Mexicana con arroz', 'Pollo Mex', '80.00'),
(24, 9, 'Milanesa de Res a la Mexicana', 'Milanesa Mex', '90.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesa`
--

CREATE TABLE `mesa` (
  `IdMesa` int(11) NOT NULL,
  `Descrip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mesa`
--

INSERT INTO `mesa` (`IdMesa`, `Descrip`) VALUES
(1, 'Mesa 1'),
(2, 'Mesa 2'),
(3, 'Mesa 3'),
(4, 'Mesa 4'),
(5, 'Mesa 5'),
(6, 'Mesa 6'),
(7, 'Mesa 7'),
(8, 'Mesa 8'),
(9, 'Mesa 9'),
(10, 'Mesa 10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `IdTipoUsuario` int(11) NOT NULL,
  `Descrip` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`IdTipoUsuario`, `Descrip`) VALUES
(1, 'Admin'),
(2, 'Cajero'),
(3, 'Mesero'),
(4, 'Cocinero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IdUsuario` int(11) NOT NULL,
  `IdTipoUsuario` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `APaterno` varchar(50) NOT NULL,
  `AMaterno` varchar(50) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Contra` varchar(10) NOT NULL,
  `IdActivo` bit(1) NOT NULL,
  `FecAlta` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `IdTipoUsuario`, `Nombre`, `APaterno`, `AMaterno`, `Usuario`, `Contra`, `IdActivo`, `FecAlta`) VALUES
(1842239, 1, 'Daniela', 'Arzola', 'García', 'admin', 'abcd', b'1', '2022-04-29 06:22:57'),
(1845925, 3, 'Carolina', 'León', 'González', 'caro', '1234', b'1', '2022-05-04 09:27:24'),
(1845926, 3, 'Aslan', 'Jimenez ', 'Elizondo', 'aslan', '1234', b'1', '2022-05-04 09:28:16'),
(1845927, 2, 'Julio Cesar ', 'Quiroz ', 'Muñoz ', 'julio', '1478', b'1', '2022-05-04 09:29:21'),
(1845928, 3, 'Salma Jimena', 'Almaguer', 'Galvan', 'salma', '1234', b'1', '2022-05-04 09:30:39'),
(1845930, 3, 'Kevin Alexis', 'Ibarra', 'Luna', 'kevin', '1234', b'1', '2022-05-04 09:34:28'),
(1845931, 3, 'Guillermo', 'Sandoval', 'Cisneros', 'guille', '1234', b'0', '2022-05-05 15:59:42'),
(1845932, 3, 'José Enrique', 'Mota', 'Salinas', 'josen', '1234', b'0', '2022-05-06 10:06:17'),
(1845933, 4, 'Luis Miguel', 'Arjona', 'Palermo', 'luismi', '1234', b'1', '2022-05-06 10:08:19');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`IdCategoria`);

--
-- Indices de la tabla `comanda`
--
ALTER TABLE `comanda`
  ADD PRIMARY KEY (`IdComanda`),
  ADD KEY `FK_IdEstatusComanda_COM` (`IdEstatusComanda`),
  ADD KEY `FK_IdUsuario_COM` (`IdUsuario`),
  ADD KEY `FK_IdMesa_COM` (`IdMesa`);

--
-- Indices de la tabla `comanda_detalle`
--
ALTER TABLE `comanda_detalle`
  ADD KEY `FK_IdComanda_CDE` (`IdComanda`),
  ADD KEY `FK_IdMenu_CDE` (`IdMenu`);

--
-- Indices de la tabla `estatus_comanda`
--
ALTER TABLE `estatus_comanda`
  ADD PRIMARY KEY (`IdEstatusComanda`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`IdMenu`),
  ADD KEY `FK_IdCategoria_MEN` (`IdCategoria`);

--
-- Indices de la tabla `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`IdMesa`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`IdTipoUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD KEY `FK_IdTipoUsuario_USU` (`IdTipoUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `IdCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `comanda`
--
ALTER TABLE `comanda`
  MODIFY `IdComanda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `estatus_comanda`
--
ALTER TABLE `estatus_comanda`
  MODIFY `IdEstatusComanda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `IdMenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `mesa`
--
ALTER TABLE `mesa`
  MODIFY `IdMesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `IdTipoUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1845934;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comanda`
--
ALTER TABLE `comanda`
  ADD CONSTRAINT `FK_IdEstatusComanda_COM` FOREIGN KEY (`IdEstatusComanda`) REFERENCES `estatus_comanda` (`IdEstatusComanda`),
  ADD CONSTRAINT `FK_IdMesa_COM` FOREIGN KEY (`IdMesa`) REFERENCES `mesa` (`IdMesa`),
  ADD CONSTRAINT `FK_IdUsuario_COM` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`IdUsuario`);

--
-- Filtros para la tabla `comanda_detalle`
--
ALTER TABLE `comanda_detalle`
  ADD CONSTRAINT `FK_IdComanda_CDE` FOREIGN KEY (`IdComanda`) REFERENCES `comanda` (`IdComanda`),
  ADD CONSTRAINT `FK_IdMenu_CDE` FOREIGN KEY (`IdMenu`) REFERENCES `menu` (`IdMenu`);

--
-- Filtros para la tabla `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `FK_IdCategoria_MEN` FOREIGN KEY (`IdCategoria`) REFERENCES `categoria` (`IdCategoria`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_IdTipoUsuario_USU` FOREIGN KEY (`IdTipoUsuario`) REFERENCES `tipousuario` (`IdTipoUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
