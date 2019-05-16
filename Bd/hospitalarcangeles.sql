-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 30-04-2019 a las 21:34:29
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
) ENGINE=InnoDB AUTO_INCREMENT=279 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `nombrePaciente`, `telefonoPaciente`, `fecha`, `idMedico`) VALUES
(274, 'Martin Vera', '6567622938', '2019-04-30 08:00:00', 1),
(275, 'Martin Vera', '6567622938', '2019-04-30 09:00:00', 1),
(276, 'Andre Valdez', '6562041245', '2019-01-01 08:00:00', 1),
(277, 'Juan Lopez', '6561111111', '2019-01-01 09:00:00', 1),
(278, 'Pedro', '6562020202', '2019-05-01 08:00:00', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

DROP TABLE IF EXISTS `medicos`;
CREATE TABLE IF NOT EXISTS `medicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `especialidad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `consultorio` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `correo` (`correo`),
  UNIQUE KEY `contraseña` (`password`(30))
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`id`, `correo`, `password`, `nombre`, `especialidad`, `consultorio`, `telefono`) VALUES
(1, 'juan.martinez@hospitalarcangeles.com.mx', '123', 'Juan Martinez Soto', 'General', '101', '6560394874'),
(2, 'alan.silva@hospitalarcangeles.com.mx', '111', 'Alan Silva Andrade', 'Oftalmologo', '200', '6563445498'),
(3, 'angel.soria@hospitalarcangeles.com.mx', '321', 'Angel Ramirez Solis', 'General', '102', '6569866596'),
(4, 'daniela.vargas@hospitalarcangeles.com.mx', '222', 'Daniela Vargas ', 'Ortopedista', '100', '6563340545'),
(5, 'angela.reyes@hospitalarcangeles.com.mx', '333', 'Angela Reyes Diaz', 'Psiquiatra', '201', '6562223156'),
(6, 'maria.lopez@hospitalarcangeles.com.mx', '444', 'Maria Lopez Lopez', 'Psiquiatra', '202', '6567685434'),
(7, 'mario.garay@hospitalarcangeles.com.mx', '555', 'Mario Garay Hernandez', 'Psiquiatra', '203', '6563332211'),
(8, 'paulina.herrera@hospitalarcangeles.com.mx', '666', 'Paulina Herrera Martinez', 'General', '103', '6563332229');

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
