-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2024 a las 13:18:10
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reanimacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `Identificador` int(255) NOT NULL,
  `Calle` varchar(255) NOT NULL,
  `Local` varchar(255) NOT NULL,
  `Aparato` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`Identificador`, `Calle`, `Local`, `Aparato`) VALUES
(1, 'Calle Primado Reig N48', 'GAME', 'Desfibrilador'),
(2, 'Calle Rio Nervion 27', 'Restaurante Tagliatella', 'Desfibrilador'),
(3, 'Calle Pepito grillo 53', 'Panadería Juan y sus amigos', 'Desfibrilador'),
(4, 'Av. Gran Vía 3', 'Hotel Trivago', 'Para medir el azucar a un diabético, Desfibrilador'),
(5, 'V30', 'Desgüace Ruedas y llantas', 'Desfibrilador'),
(6, 'La sirenita 2', 'Domino\'s Pizza', 'Desfibrilador'),
(7, 'Pinocho 24', 'Telepizza', 'Desfibrilador'),
(8, 'Ramiro de Maeztu 78', 'Masajes Maria Jose', 'Desfibrilador'),
(9, 'Rey Juan Carlos', 'Cuartel de la guardia civil', 'Desfibrilador'),
(16, 'La Pantomina 27', 'Top Recambios', 'Desfibrilador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Identificador` int(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Identificador`, `usuario`, `contrasena`, `nombre`, `apellidos`) VALUES
(1, 'dacapob', 'dacapob', 'David', 'Castan'),
(2, 'jovica', 'jovica', 'Jose Vicente', 'Carratala'),
(3, 'vapope', 'vapope', 'Vanessa', 'Poblador Perez');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`Identificador`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Identificador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `Identificador` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Identificador` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
