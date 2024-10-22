-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2024 a las 18:22:56
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `minipro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla`
--

CREATE TABLE `tabla` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `observacion` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tabla`
--

INSERT INTO `tabla` (`id`, `nombre_completo`, `direccion`, `observacion`) VALUES
(7, 'holis', 'ijij', 'ijijij'),
(9, '48484', '84', '8484'),
(12, 'wenCe', 'wence', 'nieves'),
(13, 'YUUHUH0000', 'UHUHU', 'HUH'),
(14, 'jndsfgjjfgnfd', 'gfdshsdgher', 'sdfhstywetgdf'),
(15, 'SGDHGF', 'SGHSHWRS', 'SGWDGWREDF'),
(16, 'fghsth', 'sdhsy', 'adfghasdfgad'),
(17, 'ghrtuer', 'erhsdfga', 'sfghsdrhs'),
(18, 'www', 'ffgff', 'rrrr'),
(19, 'nnn', 'sss', 'www'),
(20, 'bghcxgh', 'cghxfh', 'ghxfghf'),
(21, 'jhjkhbjkbjkbj', 'hgjhgjhkghjgh', 'hgfdhffbghvjh'),
(22, 'wwwwww', 'rrrrrrr', 'ttttttt'),
(23, '1234', '1234', '1234\r\n'),
(24, '456', '456', '456'),
(25, '5678', '5678', '5678'),
(26, '0000', '0000', '0000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabla`
--
ALTER TABLE `tabla`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabla`
--
ALTER TABLE `tabla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
