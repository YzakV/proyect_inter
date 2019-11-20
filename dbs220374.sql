-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Servidor: db5000225724.hosting-data.io
-- Tiempo de generación: 20-11-2019 a las 20:49:30
-- Versión del servidor: 5.7.27-log
-- Versión de PHP: 7.0.33-0+deb9u6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbs220374`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones`
--

CREATE TABLE `opciones` (
  `id_opcion` int(5) NOT NULL,
  `id_usuario` int(5) NOT NULL,
  `opcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `detalle_opcion` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id_persona` int(5) NOT NULL,
  `nombre_persona` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo_persona` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass_persona` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_persona`, `nombre_persona`, `correo_persona`, `pass_persona`) VALUES
(1, 'Isaac Vega', 'vegayzak@gmail.com', '$2y$10$FssnjVmQGdRx5s.JWx1PK.a2gxo2pxrMC5NTLJMf7GQc1x9.fkav6'),
(2, 'Vanessa Lizbeth Pérez Montaño ', 'vanliz2816@gmail.com', '$2y$10$3ews0iQo3QBILwdCnOm/2.ZvUqDMSsV7yYJGSWGVKExsB4n2dnLua'),
(3, 'Patricia Alvarez Marshall', 'pa900200@gmail.com', '$2y$10$s6gKvUR6AGurHPk5grAtm.Rfon.kNiIBp19/GpbK2f8zWCXCJ6xf6'),
(4, 'Guillermo Jesús garcia serrano ', 'memoriasggenio19@gmail.com', '$2y$10$BZG.wtnkdc45GNF/giW9DO5wj4FJSM9XNVtFBPTyS8qc31dsnsIcq'),
(5, 'Luis Gerardo Robles Sedan', 'luissesan54@gmail.com', '$2y$10$GDLD9T89FaqTXfLmBcZt6.q2KEBFu1ojPN329rOkOVsB8rKlF4MEC'),
(6, 'Enrique', 'enriqueserratos057@gmail.com', '$2y$10$LTtugS4T89qX8sNpfHZYvOgBKDaE7i4U7TJ2yE2EcIfnCAQKBDp.K'),
(7, 'Leonardo Manuel Mayen Sánchez ', 'leomayen513@gmail.com', '$2y$10$xfMQ9hectdQFhmJZBytPZeUN2ZFYSsK9zqUKPxBjGAOrTA4m55miC'),
(8, 'Mario Alberto Marcelo Lara ', 'mario082699a@gmail.com', '$2y$10$0eH4dM9PPLdNABMFmKjoguvlgHjA68RT05UoMrVZNOlvj9FmkWVTa'),
(9, 'Eric Jaziel ', 'ericjaziel6@gmail.com', '$2y$10$u89Wtx49DbTBuUZWiU2uRe7BusTRqkflaxGD3llflmzvozhAvAGMa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(5) NOT NULL,
  `id_persona` int(5) NOT NULL,
  `nombre_usuario` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `opciones`
--
ALTER TABLE `opciones`
  ADD PRIMARY KEY (`id_opcion`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_persona` (`id_persona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `opciones`
--
ALTER TABLE `opciones`
  MODIFY `id_opcion` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id_persona` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(5) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `opciones`
--
ALTER TABLE `opciones`
  ADD CONSTRAINT `opciones_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_persona`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
