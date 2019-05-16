-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 16-05-2019 a las 06:44:47
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
-- Estructura de tabla para la tabla `beneficios`
--

DROP TABLE IF EXISTS `beneficios`;
CREATE TABLE IF NOT EXISTS `beneficios` (
  `idPlan` int(11) NOT NULL,
  `idEspecialidad` int(11) NOT NULL,
  PRIMARY KEY (`idPlan`,`idEspecialidad`),
  KEY `idEspecialidad` (`idEspecialidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `beneficios`
--

INSERT INTO `beneficios` (`idPlan`, `idEspecialidad`) VALUES
(1, 1),
(2, 1),
(3, 1),
(1, 2),
(2, 2),
(3, 2),
(2, 3),
(3, 3),
(3, 4),
(3, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boletin`
--

DROP TABLE IF EXISTS `boletin`;
CREATE TABLE IF NOT EXISTS `boletin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `mensaje` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `boletin`
--

INSERT INTO `boletin` (`id`, `fecha`, `mensaje`) VALUES
(1, '2019-05-01', 'Toda el area administrativa debera asistir de rosa este martes.'),
(2, '2019-05-02', 'Por favor respetar los estacionamientos desginados.'),
(3, '2019-05-03', 'Traer donativos este lunes para el albergue los ojitos de dios.'),
(4, '2019-05-04', 'Hoy no se penalizan retardos debido a las fuertes lluvias.'),
(5, '2019-05-05', 'La sala de descansos estara cerrada hoy por restauraciones.'),
(6, '2019-05-07', 'Cumpleaniros de este mes pasar a recursos humanos.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

DROP TABLE IF EXISTS `citas`;
CREATE TABLE IF NOT EXISTS `citas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `idMedico` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idUsuario` (`idUsuario`),
  KEY `idMedico` (`idMedico`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `idUsuario`, `idMedico`, `fecha`) VALUES
(51, 1, 4, '2019-05-16 08:00:00'),
(52, 0, 4, '2019-05-16 09:00:00'),
(53, 0, 4, '2019-05-16 10:00:00'),
(55, 1, 2, '2019-05-16 08:00:00'),
(56, 2, 3, '2019-05-17 08:00:00'),
(57, 1, 2, '2019-08-16 08:00:00'),
(58, 0, 4, '2019-06-19 08:00:00'),
(59, 1, 1, '2019-05-17 08:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

DROP TABLE IF EXISTS `especialidades`;
CREATE TABLE IF NOT EXISTS `especialidades` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `costoCita` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `especialidades`
--

INSERT INTO `especialidades` (`id`, `nombre`, `costoCita`) VALUES
(1, 'General', '300.00'),
(2, 'Oftalmologo', '500.00'),
(3, 'Ortopedista', '1000.00'),
(4, 'Cardiologo', '1200.00'),
(5, 'Urologo', '800.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

DROP TABLE IF EXISTS `medicos`;
CREATE TABLE IF NOT EXISTS `medicos` (
  `id` int(11) NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `especialidad` int(11) NOT NULL,
  `consultorio` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `correo` (`correo`),
  KEY `fk_especialidad` (`especialidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`id`, `correo`, `password`, `nombre`, `especialidad`, `consultorio`, `telefono`) VALUES
(1, 'juan.martinez@hospitalarcangeles.com', 'hehexd', 'Juan Martinez Soto', 1, '101', '6563432122'),
(2, 'adrian.garcia@hospitalarcangeles.com', '222', 'Adrian Garcia', 2, '102', '6564433456'),
(3, 'roberto.gomez@hospitalarcangeles.com', '333', 'Roberto Gomez', 3, '200', '6563322111'),
(4, 'karla.estrada@hospitalarcangeles.com', '111', 'Karla Estrada Solis', 1, '100', '6567766666'),
(5, 'jorge.rosas@hospitalarcangeles.com', '123', 'Jorge Rosas', 1, '103', '6567897554'),
(6, 'andre.vera@hospitalarcangeles.com', '111', 'Andre Vera Vera', 2, '201', '6567958675'),
(7, 'alan.cantu@hospitalarcangeles.com', 'alan', 'Alan Cantu', 2, '202', '6564433223'),
(8, 'sofia.robles@hospitalarcangeles.com', '111', 'Sofia Robles', 3, '203', '6563423456'),
(9, 'angelica.angeles@hospitalarcangeles.com', '444', 'Angelica Angeles', 3, '300', '6566666666'),
(10, 'eduardo.estrada@hospitalarcangeles.com', '000', 'Eduardo Estrada', 4, '301', '6567958675'),
(11, 'roberto.ortega@hospitalarcangeles.com', '1q2w', 'Roberto Ortega', 4, '302', '6564958875'),
(12, 'maria.solis@hospitalarcangeles.com', 'aaa', 'Maria Solis', 4, '303', '6563454444'),
(13, 'alfredo.rios@hospitalarcangeles.com', '090', 'Alfredo Rios', 5, '400', '6567958675'),
(14, 'itzel.hernandez@hospitalarcangeles.com', 'zzz', 'ItzelHernandez', 5, '401', '6565958875'),
(15, 'paola.rojas@hospitalarcangeles.com', 'nnn', 'Paola Rojas', 5, '402', '6563453344');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes`
--

DROP TABLE IF EXISTS `planes`;
CREATE TABLE IF NOT EXISTS `planes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `porcentajeDesc` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `planes`
--

INSERT INTO `planes` (`id`, `nombre`, `porcentajeDesc`) VALUES
(0, 'sinPlan', '0.00'),
(1, 'Basico', '0.15'),
(2, 'Medio', '0.30'),
(3, 'Completo', '0.50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `contra` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `plan` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `numTarjeta` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `fechaVencimiento` date NOT NULL,
  `cvv` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tipoPlan` (`plan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `correo`, `contra`, `plan`, `nombre`, `telefono`, `numTarjeta`, `fechaVencimiento`, `cvv`) VALUES
(0, NULL, NULL, 0, 'Invitado', NULL, '', '2019-05-01', ''),
(1, 'veramartin293@gmail.com', '123', 1, 'Martin Vera', '6563445498', '6456787654345678', '2019-05-17', '123'),
(2, 'iandaniel@gmail.com', '111', 2, 'Ian Daniel', '6561615396', '9658741236547896', '2019-05-16', '698'),
(3, 'carlos@gmail.com', '222', 3, 'Carlos Martinez', '6567777771', '5676543323456765', '2019-11-07', '343');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `beneficios`
--
ALTER TABLE `beneficios`
  ADD CONSTRAINT `beneficios_ibfk_1` FOREIGN KEY (`idPlan`) REFERENCES `planes` (`id`),
  ADD CONSTRAINT `beneficios_ibfk_2` FOREIGN KEY (`idEspecialidad`) REFERENCES `especialidades` (`id`);

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `citas_ibfk_3` FOREIGN KEY (`idMedico`) REFERENCES `medicos` (`id`);

--
-- Filtros para la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD CONSTRAINT `fk_especialidad` FOREIGN KEY (`especialidad`) REFERENCES `especialidades` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`plan`) REFERENCES `planes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
