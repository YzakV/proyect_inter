-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2019 a las 02:10:07
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_inter`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` int(5) NOT NULL,
  `alumno_asignado` int(5) NOT NULL,
  `nombre_alumno` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_alumno` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo_alumno` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contra_alumno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opciones_alumno` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `alumno_asignado`, `nombre_alumno`, `usuario_alumno`, `correo_alumno`, `contra_alumno`, `opciones_alumno`) VALUES
(1, 1, 'Sin asignar', 'Sin asignar', 'Sin asignar', 'Sin asignar', 'Sin asignar'),
(3, 1, '', '', '', '$2y$10$E.VLgbFxeqbVhH8vTU7L0ulmOismJCnc97sJN5YQNVtTfel9EFKw.', ''),
(4, 1, 'Isaac Vega', 'Kazy69', 'vegayzak@gmail.com', '$2y$10$Wl0qW/dpBCU.bnP5/eT5HOu6xdWfKJSmqgz/uMKJjJ.OUeocfUEpm', ''),
(5, 1, 'Gloria Casiano', 'qweA1', 'tgfa@mpla.vrg', '$2y$10$MCSEjx/2QiJGjAOAiRUAk.23YrlRcNc5PbPH7mu86eiNd1Tewj6G6', ''),
(6, 1, 'Jesus Martinez', 'qweA1', 'yzak.vga@gmacil.com', '$2y$10$DfubL5ZZB.3cSdrTcSj36.1kQYWSncRLG/EFFNHDOZsbBrDOaMJNO', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`),
  ADD KEY `alumno_asignado` (`alumno_asignado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_alumno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`alumno_asignado`) REFERENCES `alumno` (`id_alumno`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
