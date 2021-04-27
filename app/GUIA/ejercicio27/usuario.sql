-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-04-2021 a las 02:28:57
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comercio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fechaDeRegistro` date NOT NULL,
  `localidad` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `clave`, `email`, `fechaDeRegistro`, `localidad`) VALUES
(101, 'Mariano', 'Kautor', '123456', 'dkantor0@example.com', '2021-01-07', 'Quilmes'),
(102, 'German', 'Gerram', '123456', 'ggerram1@hud.gov', '0000-00-00', 'Berazategui'),
(103, 'Deloris', 'Fosis', '123456', 'bsharpe2@wisc.edu', '0000-00-00', 'Avellaneda'),
(104, 'Brok', 'Neiner', '123456', 'bblazic3@desdev.cn', '0000-00-00', 'Quilmes'),
(105, 'Garrick', 'Brent', '123456', 'gbrent4@theguardian.com', '0000-00-00', 'Moron'),
(106, 'Bili', 'Baus', '123456', 'bhoff5@addthis.com', '0000-00-00', 'Moreno'),
(107, 'juan', 'ortega', '1234', 'juan@gmail.com', '2021-04-27', 'zarate'),
(108, 'juan', 'ortega', '1234', 'juan@gmail.com', '2021-04-27', 'zarate'),
(109, 'ignacio', 'rodrigez', '1234', 'ignacio@gmail.com', '2021-04-27', 'villa crespo'),
(110, 'pepe', 'rodrigez', '1234', 'pepe@gmail.com', '2021-04-27', 'palermo'),
(111, 'miguel', 'porteño', '4332', 'migue@gmail.com', '2021-04-27', 'once'),
(112, 'pedro', 'Beryuli', '9923', 'pberyuli@gmail.com', '2021-04-27', 'ezeiza');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
