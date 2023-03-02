-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-03-2023 a las 22:46:17
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cleanhands`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id`, `name`) VALUES
(42, 'Cafetería'),
(43, 'Laboratorio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `area` int(11) NOT NULL,
  `result` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `person`
--

INSERT INTO `person` (`id`, `name`, `area`, `result`) VALUES
(42, 'Jesus', 42, 72),
(43, 'Frey', 42, 72),
(44, 'Elwe', 43, 100),
(45, 'Luis', 43, 81);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `steps`
--

CREATE TABLE `steps` (
  `id` int(11) NOT NULL,
  `id_person` int(11) NOT NULL,
  `Mojarse las manos` varchar(2) NOT NULL,
  `Aplicar jabón` varchar(2) NOT NULL,
  `Frotar palmas entre sí` varchar(2) NOT NULL,
  `Frotar palma contra el dorso` varchar(2) NOT NULL,
  `Frotar palmas con dedos entrelazados` varchar(2) NOT NULL,
  `Frotar dorso de los dedos` varchar(2) NOT NULL,
  `Rodear pulgar con la mano contraria` varchar(2) NOT NULL,
  `Frotar punta de los dedos` varchar(2) NOT NULL,
  `Enjuagar manos` varchar(2) NOT NULL,
  `Secar manos` varchar(2) NOT NULL,
  `Cerrar grifo` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `steps`
--

INSERT INTO `steps` (`id`, `id_person`, `Mojarse las manos`, `Aplicar jabón`, `Frotar palmas entre sí`, `Frotar palma contra el dorso`, `Frotar palmas con dedos entrelazados`, `Frotar dorso de los dedos`, `Rodear pulgar con la mano contraria`, `Frotar punta de los dedos`, `Enjuagar manos`, `Secar manos`, `Cerrar grifo`) VALUES
(26, 42, 'si', 'si', 'si', 'no', 'si', 'no', 'no', 'si', 'si', 'si', 'si'),
(27, 43, 'si', 'si', 'no', 'no', 'si', 'si', 'no', 'si', 'si', 'si', 'si'),
(28, 44, 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si'),
(29, 45, 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'no', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'frey@gmail.com', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`),
  ADD KEY `area` (`area`);

--
-- Indices de la tabla `steps`
--
ALTER TABLE `steps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_person` (`id_person`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `steps`
--
ALTER TABLE `steps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `person_ibfk_1` FOREIGN KEY (`area`) REFERENCES `area` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `steps`
--
ALTER TABLE `steps`
  ADD CONSTRAINT `steps_ibfk_1` FOREIGN KEY (`id_person`) REFERENCES `person` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
