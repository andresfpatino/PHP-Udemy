-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-02-2018 a las 21:03:13
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `galeria_udemy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`id`, `titulo`, `imagen`, `texto`) VALUES
(1, 'Nombre de la foto', '1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'),
(2, 'Nombre de la foto', '2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'),
(3, 'Nombre de la foto', '3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'),
(4, 'Nombre de la foto', '4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'),
(5, 'Nombre de la foto', '5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'),
(6, 'Nombre de la foto', '6.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'),
(7, 'Nombre de la foto', '7.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'),
(8, 'Nombre de la foto', '8.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'),
(9, 'Nombre de la foto', '9.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'),
(10, 'Nombre de la foto', '10.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'),
(11, 'Nombre de la foto', '11.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'),
(12, 'Nombre de la foto', '12.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'),
(13, 'Nombre de la foto', '13.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'),
(14, 'Nombre de la foto', '14.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'),
(15, 'Nombre de la foto', '15.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod'),
(16, 'Nombre de la foto', '16.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
