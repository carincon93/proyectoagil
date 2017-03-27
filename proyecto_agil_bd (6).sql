-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-03-2017 a las 05:58:33
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_agil_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id_registro` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `apellido1` varchar(100) COLLATE utf8_bin NOT NULL,
  `apellido2` varchar(100) COLLATE utf8_bin NOT NULL,
  `sexo` varchar(100) COLLATE utf8_bin NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `tipo_documento` varchar(100) COLLATE utf8_bin NOT NULL,
  `numero_documento` int(11) NOT NULL,
  `correo` varchar(100) COLLATE utf8_bin NOT NULL,
  `contrasena` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id_registro`, `nombre`, `apellido1`, `apellido2`, `sexo`, `telefono`, `tipo_documento`, `numero_documento`, `correo`, `contrasena`) VALUES
(1, 'jaime', 'palomino', 'toro', 'M', 8741573, 'C.C', 325245844, 'jaime.palomino97@hotmail.com', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `apellido1` varchar(100) COLLATE utf8_bin NOT NULL,
  `apellido2` varchar(100) COLLATE utf8_bin NOT NULL,
  `sexo` varchar(100) COLLATE utf8_bin NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `tipo_documento` varchar(100) COLLATE utf8_bin NOT NULL,
  `numero_documento` int(11) NOT NULL,
  `correo` varchar(100) COLLATE utf8_bin NOT NULL,
  `contrasena` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `apellido1`, `apellido2`, `sexo`, `telefono`, `tipo_documento`, `numero_documento`, `correo`, `contrasena`) VALUES
(1, 'Camilo', 'Vasquez', 'Rincon', 'M', 12345678, 'C.C', 1234567890, 'camilo@mail.com', '12345678'),
(2, 'Luis', 'Alfonso', 'Gutierrez', 'M', 12345678, 'C.C', 1234567890, 'lalfonso@mail.com', '12345678'),
(3, 'daniel', 'pineda', '', 'M', 12345678, 'C.E', 1234567890, 'dpin@mail.com', '12345678');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `apellido1` varchar(100) COLLATE utf8_bin NOT NULL,
  `apellido2` varchar(100) COLLATE utf8_bin NOT NULL,
  `sexo` varchar(100) COLLATE utf8_bin NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `tipo_documento` varchar(100) COLLATE utf8_bin NOT NULL,
  `numero_documento` int(11) NOT NULL,
  `correo` varchar(100) COLLATE utf8_bin NOT NULL,
  `contrasena` varchar(100) COLLATE utf8_bin NOT NULL,
  `cargo` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `nombre`, `apellido1`, `apellido2`, `sexo`, `telefono`, `tipo_documento`, `numero_documento`, `correo`, `contrasena`, `cargo`) VALUES
(1, 'marina', 'toro', 'gallego', 'F', 874157, 'C.C', 455454545, 'marina@hotmail.com', 'empleado', 'Gerente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id_vehiculo` int(11) NOT NULL,
  `marca` varchar(100) COLLATE utf8_bin NOT NULL,
  `linea` varchar(50) COLLATE utf8_bin NOT NULL,
  `imagen` varchar(50) COLLATE utf8_bin NOT NULL,
  `color` varchar(100) COLLATE utf8_bin NOT NULL,
  `placa` varchar(100) COLLATE utf8_bin NOT NULL,
  `descripcion` mediumtext COLLATE utf8_bin NOT NULL,
  `precio` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id_vehiculo`, `marca`, `linea`, `imagen`, `color`, `placa`, `descripcion`, `precio`) VALUES
(1, 'mazda', 'cx-5', 'mazdacx5.png', 'rojo', 'mc2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore officia recusandae deserunt enim, eos quas eum ea molestias, similique suscipit. Inventore blanditiis magni fugit molestiae.', 80000000),
(2, 'mazda', 'cx-3', 'mazdacx3.png', 'blanco', 'RTW 875', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore officia recusandae deserunt enim, eos quas eum ea molestias, similique suscipit. Inventore blanditiis magni fugit molestiae.', 75000000),
(3, 'ford', 'fusion', 'fordfusion.png', 'blanco', 'ff01', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore officia recusandae deserunt enim, eos quas eum ea molestias, similique suscipit. Inventore blanditiis magni fugit molestiae.', 92000000),
(4, 'ford', 'taurus', 'fordtaurus.png', 'blanco', 'ft01', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore officia recusandae deserunt enim, eos quas eum ea molestias, similique suscipit. Inventore blanditiis magni fugit molestiae.', 90000000),
(5, 'volkswagen', 'tiguan', 'vwtiguan.png', 'azul', 'WA0', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore officia recusandae deserunt enim, eos quas eum ea molestias, similique suscipit. Inventore blanditiis magni fugit molestiae.', 80000000),
(6, 'volkswagen', 'passat', 'vwpassat.png', 'negro', 'vwp3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore officia recusandae deserunt enim, eos quas eum ea molestias, similique suscipit. Inventore blanditiis magni fugit molestiae.', 65000000),
(7, 'ford', 'fiesta', 'ford_fiesta.png', 'azul', 'ff1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore officia recusandae deserunt enim, eos quas eum ea molestias, similique suscipit. Inventore blanditiis magni fugit molestiae.', 75000000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_registro`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id_vehiculo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
