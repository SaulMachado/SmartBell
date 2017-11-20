-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2017 a las 22:00:06
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `datos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id_horario` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `hora1` time NOT NULL,
  `hora2` time NOT NULL,
  `hora3` time NOT NULL,
  `descanso` time NOT NULL,
  `hora4` time NOT NULL,
  `hora5` time NOT NULL,
  `hora6` time NOT NULL,
  `salida` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id_horario`, `descripcion`, `hora1`, `hora2`, `hora3`, `descanso`, `hora4`, `hora5`, `hora6`, `salida`) VALUES
(101, 'Prueba', '06:00:00', '07:00:00', '08:00:00', '09:00:00', '09:30:00', '10:30:00', '11:30:00', '00:30:00'),
(102, 'prueba2', '06:00:00', '07:00:00', '08:00:00', '08:30:00', '09:30:00', '10:30:00', '11:30:00', '12:30:00'),
(103, 'Prueba3', '12:30:00', '13:30:00', '14:30:00', '15:00:00', '15:30:00', '16:30:00', '17:30:00', '18:30:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `usuario` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`usuario`, `pass`) VALUES
('admin', 'admin*');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id_horario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
