-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-02-2018 a las 21:04:31
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `paginacion_udemy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `articulo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `articulo`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicin'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipisicin'),
(4, 'Lorem ipsum dolor sit amet, consectetur adipisicin'),
(5, 'Lorem ipsum dolor sit amet, consectetur adipisicin'),
(6, 'Lorem ipsum dolor sit amet, consectetur adipisicin'),
(7, 'Lorem ipsum dolor sit amet, consectetur adipisicin'),
(8, 'Lorem ipsum dolor sit amet, consectetur adipisicin'),
(9, 'Lorem ipsum dolor sit amet, consectetur adipisicin'),
(10, 'Lorem ipsum dolor sit amet, consectetur adipisicin'),
(11, 'Lorem ipsum dolor sit amet, consectetur adipisicin'),
(12, 'Lorem ipsum dolor sit amet, consectetur adipisicin'),
(13, 'Lorem ipsum dolor sit amet, consectetur adipisicin'),
(14, 'Lorem ipsum dolor sit amet, consectetur adipisicin'),
(15, 'Lorem ipsum dolor sit amet, consectetur adipisicin'),
(16, 'Lorem ipsum dolor sit amet, consectetur adipisicin'),
(17, 'Lorem ipsum dolor sit amet, consectetur adipisicin'),
(18, 'Lorem ipsum dolor sit amet, consectetur adipisicin'),
(19, 'Lorem ipsum dolor sit amet, consectetur adipisicin'),
(20, 'Lorem ipsum dolor sit amet, consectetur adipisicin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
