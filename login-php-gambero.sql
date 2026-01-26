-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-01-2026 a las 18:48:21
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login-php-gambero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `numAlumno` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fechaNacimiento` datetime NOT NULL,
  `repite` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`numAlumno`, `nombre`, `apellidos`, `email`, `fechaNacimiento`, `repite`) VALUES
(7, 'Laura', 'Garrido Gutiérrez', 'laura.garrido@ejemplo.com', '2007-06-12 00:00:00', 0),
(8, 'Antonio', 'Torres Cortes', 'antonio.torres@ejemplo.com', '2006-03-04 00:00:00', 0),
(9, 'Irene', 'Domínguez Medina', 'irene.dominguez@ejemplo.com', '2006-10-23 00:00:00', 1),
(10, 'Alberto', 'Díaz Cortes', 'alberto.diaz@ejemplo.com', '2005-05-02 00:00:00', 0),
(11, 'Silvia', 'Gutiérrez Romero', 'silvia.gutierrez@ejemplo.com', '2004-06-04 00:00:00', 1),
(12, 'Cristina', 'Ramírez Gutiérrez', 'cristina.ramirez@ejemplo.com', '2005-03-23 00:00:00', 0),
(13, 'Diego', 'Ramos Díaz', 'diego.ramos@ejemplo.com', '2006-02-25 00:00:00', 0),
(14, 'Iván', 'Romero Suárez', 'ivan.romero@ejemplo.com', '2004-09-09 00:00:00', 0),
(15, 'Ana', 'Torres Vázquez', 'ana.torres@ejemplo.com', '2006-06-12 00:00:00', 0),
(16, 'Irene', 'Rubio López', 'irene.rubio@ejemplo.com', '2007-01-13 00:00:00', 0),
(17, 'Pedro', 'Ramos Vázquez', 'pedro.ramos@ejemplo.com', '2004-04-12 00:00:00', 0),
(18, 'Miguel', 'Ortiz Díaz', 'miguel.ortiz@ejemplo.com', '2006-07-22 00:00:00', 0),
(19, 'Iván', 'Santos Iglesias', 'ivan.santos@ejemplo.com', '2007-03-03 00:00:00', 0),
(20, 'Ana', 'Núñez Castro', 'ana.nunez@ejemplo.com', '2006-04-01 00:00:00', 0),
(21, 'Raquel', 'Ortiz Suárez', 'raquel.ortiz@ejemplo.com', '2004-09-05 00:00:00', 0),
(22, 'Juan', 'Cortes Domínguez', 'juan.cortes@ejemplo.com', '2004-03-12 00:00:00', 0),
(23, 'Álvaro', 'Castillo Garrido', 'alvaro.castillo@ejemplo.com', '2005-07-19 00:00:00', 0),
(24, 'Sofía', 'Delgado Pérez', 'sofia.delgado@ejemplo.com', '2007-07-06 00:00:00', 0),
(25, 'Cristina', 'Navarro López', 'cristina.navarro@ejemplo.com', '2005-06-24 00:00:00', 0),
(26, 'Pedro', 'Pérez Núñez', 'pedro.perez@ejemplo.com', '2004-12-17 00:00:00', 1),
(27, 'Luis', 'Iglesias Santos', 'luis.iglesias@ejemplo.com', '2004-10-16 00:00:00', 0),
(28, 'Andrés', 'Medina Morales', 'andres.medina@ejemplo.com', '2007-09-05 00:00:00', 0),
(29, 'Sara', 'Medina Romero', 'sara.medina@ejemplo.com', '2005-09-08 00:00:00', 0),
(30, 'Sofía', 'Ramos Ortega', 'sofia.ramos@ejemplo.com', '2005-11-21 00:00:00', 0),
(31, 'Juan', 'Ruiz Navarro', 'juan.ruiz@ejemplo.com', '2006-12-24 00:00:00', 0),
(32, 'Ana', 'Romero Garrido', 'ana.romero@ejemplo.com', '2007-01-07 00:00:00', 0),
(33, 'Sofía', 'Núñez Ruiz', 'sofia.nunez@ejemplo.com', '2006-04-07 00:00:00', 0),
(34, 'Natalia', 'Castillo Fernández', 'natalia.castillo@ejemplo.com', '2006-05-22 00:00:00', 0),
(35, 'Beatriz', 'Torres Romero', 'beatriz.torres@ejemplo.com', '2005-11-02 00:00:00', 0),
(36, 'Sofía', 'Ortiz Castro', 'sofia.ortiz@ejemplo.com', '2006-05-16 00:00:00', 0),
(37, 'Lucía', 'Serrano Delgado', 'lucia.serrano@ejemplo.com', '2004-08-11 00:00:00', 0),
(38, 'Irene', 'Sánchez Sanz', 'irene.sanchez@ejemplo.com', '2004-10-22 00:00:00', 0),
(39, 'Irene', 'Fernández Ruiz', 'irene.fernandez@ejemplo.com', '2005-06-01 00:00:00', 0),
(40, 'Sara', 'Núñez Castillo', 'sara.nunez@ejemplo.com', '2005-04-28 00:00:00', 0),
(41, 'Pablo', 'Molina Castillo', 'pablo.molina@ejemplo.com', '2006-01-22 00:00:00', 0),
(42, 'Álvaro', 'Sánchez Ortiz', 'alvaro.sanchez@ejemplo.com', '2006-05-08 00:00:00', 0),
(43, 'Julia', 'Serrano Vázquez', 'julia.serrano@ejemplo.com', '2006-05-16 00:00:00', 0),
(44, 'José', 'Castro Santos', 'jose.castro@ejemplo.com', '2007-10-17 00:00:00', 0),
(45, 'Marta', 'Blanco Pérez', 'marta.blanco@ejemplo.com', '2007-02-08 00:00:00', 0),
(46, 'Iván', 'Iglesias Ruiz', 'ivan.iglesias@ejemplo.com', '2005-02-10 00:00:00', 0),
(47, 'Daniel', 'Castro Vázquez', 'daniel.castro@ejemplo.com', '2004-12-15 00:00:00', 0),
(48, 'Adrián', 'Rodríguez Fernández', 'adrian.rodriguez@ejemplo.com', '2006-04-14 00:00:00', 0),
(49, 'Fernando', 'García Santos', 'fernando.garcia@ejemplo.com', '2005-05-09 00:00:00', 1),
(50, 'Sara', 'Díaz Alonso', 'sara.diaz@ejemplo.com', '2005-08-15 00:00:00', 0),
(51, 'Rocío', 'Romero Martínez', 'rocio.romero@ejemplo.com', '2004-05-05 00:00:00', 0),
(52, 'David', 'Castillo Ruiz', 'david.castillo@ejemplo.com', '2005-08-25 00:00:00', 0),
(53, 'Patricia', 'Cortes Navarro', 'patricia.cortes@ejemplo.com', '2005-11-09 00:00:00', 0),
(54, 'Laura', 'Sanz Romero', 'laura.sanz@ejemplo.com', '2006-06-25 00:00:00', 0),
(55, 'Isabel', 'Vázquez Castro', 'isabel.vazquez@ejemplo.com', '2006-08-01 00:00:00', 1),
(56, 'Lucía', 'Gómez Ortega', 'lucia.gomez@ejemplo.com', '2004-12-16 00:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`numAlumno`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `numAlumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
