-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-02-2020 a las 18:04:27
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `consultorio`
--
CREATE DATABASE IF NOT EXISTS `consultorio` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `consultorio`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `id_cita` int(5) NOT NULL,
  `ci` varchar(10) NOT NULL,
  `nombreApellido` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `observaciones` varchar(500) NOT NULL,
  `estado` varchar(1) NOT NULL,
  `id_usuario` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`id_cita`, `ci`, `nombreApellido`, `fecha`, `observaciones`, `estado`, `id_usuario`) VALUES
(1, '6651651561', 'asdasd', '2020-02-19', 'ssdfd', 'E', '6666666666'),
(2, '6651651561', 'asdasd', '2020-02-19', 'ssdfd', 'E', '6666666666'),
(3, '6651651561', 'asdasd', '2020-02-19', 'ssdfd', 'E', '6666666666'),
(4, '6651651561', 'asdasd', '2020-02-19', 'ssdfd', 'E', '6666666666'),
(5, '542452', 'fcacasasc', '2020-02-27', 'fwefwe', 'A', '6666666666'),
(6, '5254245354', 'asdasd', '2020-02-18', 'ASDGVwwwef', 'E', '6666666666');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(20) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `mensaje` varchar(500) NOT NULL,
  `id_usuario` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombre`, `correo`, `mensaje`, `id_usuario`) VALUES
(2, 'angeljackson0933@gmail.com', 'xcvxcv', 'xcvxcxcv', NULL),
(3, 'angeljackson0933@gmail.com', 'xcvxcv', 'xcvxcxcv', NULL),
(4, 'angeljackson0933@gmail.com', 'xcvxcv', 'xcvxcxcv', NULL),
(5, 'angeljackson0933@gmail.com', 'xcvxcv', 'xcvxcxcv', NULL),
(6, 'angeljackson0933@gmail.com', 'asda', 'asdas', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` varchar(10) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `tipo_usuario` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombres`, `apellidos`, `clave`, `tipo_usuario`) VALUES
('1111111111', 'ASASAS', 'ASAS', '$2y$10$PgLGDQIY2UTND2qZ5VCYpOwaFSnBVyV6X2ZCFPgc/siTBMJbJg.Pq', 'C'),
('1205578936', 'Jackson', 'Sanchez', 'Rodiguez', 'C'),
('1205578937', 'AN', 'A', '$2y$10$yOF87iqhWGpz1sc.6jl7wu2VoGzWUwj1XTSlwwDSboNAWpgAy6PpO', 'A'),
('2222222222', 'SASAS', 'QWQWQW', '$2y$10$res2C5wNiPlvaVVHhAE/QeerSVxa.CNFu8vCNqj6f3RS0IfqjKDEK', 'C'),
('3333333333', 'ASASAS', 'ASASAS', '$2y$10$SnNAy24O8vOKZHAIDs3wlOcXt7XkDcYJBkEOeHbLldP.dq3bDpYQS', 'C'),
('5555555555', 'ASSASA', 'ASASAS', '$2y$10$fdldTReIuqsYz8z9.336Me5J8z0yjdgm9cddtkUeXrhiv8aZm8rEK', 'C'),
('6666666666', 'ASAS', 'SAAS', '$2y$10$pBN/Zn0fL/hhpZhsgDwzu.OQdphVICGhza8f4IRseB9dInQ.LOI0m', 'C'),
('7777777777', 'ASAS', 'ASASAS', '$2y$10$lPnCvzMNw5IbLhuZ7gFhdO/gn7PjU2lmExoKvw/A0HuA5iFEXyTN.', 'C'),
('8888888888', 'JACKSON', 'ASDASDAS', '$2y$10$fCoKyBvtbhKvRBBezF.mWew5Fga3eipvWqfUdzMZ8s/ipecJldQru', 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `id_cita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `contacto_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;