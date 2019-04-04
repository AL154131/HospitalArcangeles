-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-04-2019 a las 21:15:04
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hospitalarcangeles`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

DROP TABLE IF EXISTS `citas`;
CREATE TABLE IF NOT EXISTS `citas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombrePaciente` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefonoPaciente` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `idMedico` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idMedico` (`idMedico`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `nombrePaciente`, `telefonoPaciente`, `fecha`, `idMedico`) VALUES
(1, 'Martin', '656766666', '2019-04-03 08:00:00', 1),
(3, 'Martin', '2222222', '2019-04-11 08:00:00', 1),
(4, 'nombrePaciente', 'telefono', '2019-04-03 08:00:00', 1),
(5, 'andre', '7777777777', '2019-06-04 12:00:00', 1),
(6, 'ejemplo1', '3948', '2020-03-02 09:00:00', 1),
(7, '', '', '2019-01-01 08:00:00', 1),
(8, 'Jorge Luis', '2341332', '2020-02-04 10:00:00', 1),
(9, '', '', '2019-01-01 08:00:00', 1),
(10, 'ejemplo2', '3948', '2019-01-01 08:00:00', 1),
(11, 'Jose', 'Gutierrez', '2019-03-01 10:00:00', 1),
(12, '', '', '2019-01-01 08:00:00', 1),
(13, 'Roberto', '1212121212', '2019-03-07 08:00:00', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

DROP TABLE IF EXISTS `medicos`;
CREATE TABLE IF NOT EXISTS `medicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `contraseña` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `especialidad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `consultorio` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `correo` (`correo`),
  UNIQUE KEY `contraseña` (`contraseña`(30))
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`id`, `correo`, `contraseña`, `nombre`, `especialidad`, `consultorio`, `telefono`) VALUES
(1, 'juan.martinez@hospitalarcangeles.com.mx', '123', 'Jun Martinez Soto', 'General', '101', '6560394874'),
(2, 'alan.silva@hospitalarcangeles.com.mx', '111', 'Alan Silva Andrade', 'Oftalmologo', '200', '6563445498'),
(3, 'angel.soria@hospiatlangeles.com.mx', '321', 'Angel Ramirez Solis', 'General', '102', '6569866596');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`idMedico`) REFERENCES `medicos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
