-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2021 a las 00:38:08
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vote_system`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `option`
--

CREATE TABLE `option` (
  `id` int(11) NOT NULL,
  `text` varchar(225) COLLATE utf8_spanish_ci NOT NULL,
  `id_question` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `option`
--

INSERT INTO `option` (`id`, `text`, `id_question`) VALUES
(60, 'Si', 40),
(61, 'No', 40),
(62, 'Me es indiferente', 40),
(63, '5', 41),
(64, '4', 41),
(65, '1', 41),
(66, '10', 41),
(67, 'Cada mes', 42),
(68, 'Cada dos meses', 42),
(69, 'Cada tres meses', 42),
(70, 'Una vez al año', 42),
(71, 'Si', 43),
(72, 'No', 43);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `text` varchar(225) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `question`
--

INSERT INTO `question` (`id`, `text`) VALUES
(40, '¿Está usted de acuerdo con el horario establecido por la compañia?'),
(41, '¿Cuántos miembros debe tener el comité de convivencia laboral?'),
(42, '¿Cada cuánto se debe reunir el comité de convivencia?'),
(43, '¿Se pueden reelegir los miembros del comité de convivencia?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vote`
--

CREATE TABLE `vote` (
  `id` int(11) NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `id_opcion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `vote`
--

INSERT INTO `vote` (`id`, `id_pregunta`, `id_opcion`) VALUES
(7, 40, 60),
(8, 42, 69);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `option`
--
ALTER TABLE `option`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `option`
--
ALTER TABLE `option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `vote`
--
ALTER TABLE `vote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
