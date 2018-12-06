-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-04-2017 a las 14:02:54
-- Versión del servidor: 5.5.39
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bd_pmf`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `año`
--

CREATE TABLE IF NOT EXISTS `año` (
  `ID_año` int(11) NOT NULL DEFAULT '0',
  `año` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `año`
--

INSERT INTO `año` (`ID_año`, `año`) VALUES
(1, 'Primero'),
(2, 'Segundo'),
(3, 'Tercero'),
(4, 'Cuarto'),
(5, 'Quinto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
  `ID_MAT` varchar(3) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `MATERIA` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`ID_MAT`, `MATERIA`) VALUES
('CB2', 'Ciencias Biológicas'),
('CB3', 'Ciencias Biológicas'),
('CB4', 'Ciencias Biológicas'),
('CB5', 'Ciencias Biológicas'),
('CL1', 'Castellano y Literatura'),
('CL2', 'Castellano y Literatura'),
('CL3', 'Castellano y Literatura'),
('CL4', 'Castellano y Literatura'),
('CL5', 'Castellano y Literatura'),
('CT5', 'Ciencias de la Tierra'),
('DI4', 'Dibujo'),
('EA1', 'Educación Artística'),
('EA2', 'Educación Artística'),
('EC1', 'Educación Familiar y Ciudadana'),
('EF1', 'Educación Física y Deportes'),
('EF2', 'Educación Física y Deportes'),
('EF3', 'Educación Física y Deportes'),
('EF4', 'Educación Física y Deportes'),
('EF5', 'Educación Física y Deportes'),
('EN1', 'Estudios de la Naturaleza'),
('ES2', 'Educación para la Salud'),
('ET1', 'Educación para el trabajo'),
('ET2', 'Educación para el trabajo'),
('ET3', 'Educación para el trabajo'),
('FI3', 'Física'),
('FI4', 'Física'),
('FI5', 'Física'),
('GG1', 'Geografía General'),
('GV3', 'Geografía de Venezuela'),
('GV5', 'Geografía de Venezuela'),
('HU2', 'Historia Universal'),
('HV1', 'Historia de Venezuela'),
('HV2', 'Historia de Venezuela'),
('HV3', 'Historia de Venezuela'),
('HV4', 'Historia de Venezuela'),
('IN1', 'Inglés'),
('IN2', 'Inglés'),
('IN3', 'Inglés'),
('IN4', 'Inglés'),
('IN5', 'Inglés'),
('IP4', 'Instrucción Premilitar'),
('IP5', 'Instrucción Premilitar'),
('MA1', 'Matemática'),
('MA2', 'Matemática'),
('MA3', 'Matemática'),
('MA4', 'Matemática'),
('MA5', 'Matemática'),
('PS4', 'Psicología-Filosofía'),
('QU3', 'Química'),
('QU4', 'Química'),
('QU5', 'Química');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia_seccion`
--

CREATE TABLE IF NOT EXISTS `materia_seccion` (
  `ID_MAT` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ID_SEC` varchar(2) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `materia_seccion`
--

INSERT INTO `materia_seccion` (`ID_MAT`, `ID_SEC`) VALUES
('CB2', '2A'),
('CB2', '2B'),
('CB2', '2C'),
('CB2', '2D'),
('CB2', '2E'),
('CB3', '3A'),
('CB3', '3B'),
('CB3', '3C'),
('CB3', '3D'),
('CB3', '3E'),
('CB4', '4A'),
('CB4', '4B'),
('CB4', '4C'),
('CB4', '4D'),
('CB5', '5A'),
('CB5', '5B'),
('CB5', '5C'),
('CB5', '5D'),
('CL1', '1A'),
('CL1', '1B'),
('CL1', '1C'),
('CL1', '1D'),
('CL1', '1E'),
('CL1', '1H'),
('CL1', '2F'),
('CL1', '2G'),
('CL1', '5H'),
('CL2', '2A'),
('CL2', '2B'),
('CL2', '2C'),
('CL2', '2D'),
('CL2', '2E'),
('CL3', '3A'),
('CL3', '3B'),
('CL3', '3C'),
('CL3', '3D'),
('CL3', '3E'),
('CL4', '4A'),
('CL4', '4B'),
('CL4', '4C'),
('CL4', '4D'),
('CL5', '5A'),
('CL5', '5B'),
('CL5', '5C'),
('CL5', '5D'),
('CT5', '5A'),
('CT5', '5B'),
('CT5', '5C'),
('CT5', '5D'),
('DI4', '4A'),
('DI4', '4B'),
('DI4', '4C'),
('DI4', '4D'),
('EA1', '1A'),
('EA1', '1B'),
('EA1', '1C'),
('EA1', '1D'),
('EA1', '1E'),
('EA1', '1H'),
('EA1', '2F'),
('EA1', '2G'),
('EA1', '5H'),
('EA2', '2A'),
('EA2', '2B'),
('EA2', '2C'),
('EA2', '2D'),
('EA2', '2E'),
('EC1', '1A'),
('EC1', '1B'),
('EC1', '1C'),
('EC1', '1D'),
('EC1', '1E'),
('EC1', '1H'),
('EC1', '2F'),
('EC1', '2G'),
('EC1', '5H'),
('EF1', '1A'),
('EF1', '1B'),
('EF1', '1C'),
('EF1', '1D'),
('EF1', '1E'),
('EF1', '1H'),
('EF1', '2F'),
('EF1', '2G'),
('EF1', '5H'),
('EF2', '2A'),
('EF2', '2B'),
('EF2', '2C'),
('EF2', '2D'),
('EF2', '2E'),
('EF3', '3A'),
('EF3', '3B'),
('EF3', '3C'),
('EF3', '3D'),
('EF3', '3E'),
('EF4', '4A'),
('EF4', '4B'),
('EF4', '4C'),
('EF4', '4D'),
('EF5', '5A'),
('EF5', '5B'),
('EF5', '5C'),
('EF5', '5D'),
('EN1', '1A'),
('EN1', '1B'),
('EN1', '1C'),
('EN1', '1D'),
('EN1', '1E'),
('EN1', '1H'),
('EN1', '2F'),
('EN1', '2G'),
('EN1', '5H'),
('ES2', '2A'),
('ES2', '2B'),
('ES2', '2C'),
('ES2', '2D'),
('ES2', '2E'),
('ET1', '1A'),
('ET1', '1B'),
('ET1', '1C'),
('ET1', '1D'),
('ET1', '1E'),
('ET1', '1H'),
('ET1', '2F'),
('ET1', '2G'),
('ET1', '5H'),
('ET2', '2A'),
('ET2', '2B'),
('ET2', '2C'),
('ET2', '2D'),
('ET2', '2E'),
('ET3', '3A'),
('ET3', '3B'),
('ET3', '3C'),
('ET3', '3D'),
('ET3', '3E'),
('FI3', '3A'),
('FI3', '3B'),
('FI3', '3C'),
('FI3', '3D'),
('FI3', '3E'),
('FI4', '4A'),
('FI4', '4B'),
('FI4', '4C'),
('FI4', '4D'),
('FI5', '5A'),
('FI5', '5B'),
('FI5', '5C'),
('FI5', '5D'),
('GG1', '1A'),
('GG1', '1B'),
('GG1', '1C'),
('GG1', '1D'),
('GG1', '1E'),
('GG1', '1H'),
('GG1', '2F'),
('GG1', '2G'),
('GG1', '5H'),
('GV3', '3A'),
('GV3', '3B'),
('GV3', '3C'),
('GV3', '3D'),
('GV3', '3E'),
('GV5', '5A'),
('GV5', '5B'),
('GV5', '5C'),
('GV5', '5D'),
('HU2', '2A'),
('HU2', '2B'),
('HU2', '2C'),
('HU2', '2D'),
('HU2', '2E'),
('HV1', '1A'),
('HV1', '1B'),
('HV1', '1C'),
('HV1', '1D'),
('HV1', '1E'),
('HV1', '1H'),
('HV1', '2F'),
('HV1', '2G'),
('HV1', '5H'),
('HV2', '2A'),
('HV2', '2B'),
('HV2', '2C'),
('HV2', '2D'),
('HV2', '2E'),
('HV3', '3A'),
('HV3', '3B'),
('HV3', '3C'),
('HV3', '3D'),
('HV3', '3E'),
('HV4', '4A'),
('HV4', '4B'),
('HV4', '4C'),
('HV4', '4D'),
('IN1', '1A'),
('IN1', '1B'),
('IN1', '1C'),
('IN1', '1D'),
('IN1', '1E'),
('IN1', '1H'),
('IN1', '2F'),
('IN1', '2G'),
('IN1', '5H'),
('IN2', '2A'),
('IN2', '2B'),
('IN2', '2C'),
('IN2', '2D'),
('IN2', '2E'),
('IN3', '3A'),
('IN3', '3B'),
('IN3', '3C'),
('IN3', '3D'),
('IN3', '3E'),
('IN4', '4A'),
('IN4', '4B'),
('IN4', '4C'),
('IN4', '4D'),
('IN5', '5A'),
('IN5', '5B'),
('IN5', '5C'),
('IN5', '5D'),
('IP4', '4A'),
('IP4', '4B'),
('IP4', '4C'),
('IP4', '4D'),
('IP5', '5A'),
('IP5', '5B'),
('IP5', '5C'),
('IP5', '5D'),
('MA1', '1A'),
('MA1', '1B'),
('MA1', '1C'),
('MA1', '1D'),
('MA1', '1E'),
('MA1', '1H'),
('MA1', '2F'),
('MA1', '2G'),
('MA1', '5H'),
('MA2', '2A'),
('MA2', '2B'),
('MA2', '2C'),
('MA2', '2D'),
('MA2', '2E'),
('MA3', '3A'),
('MA3', '3B'),
('MA3', '3C'),
('MA3', '3D'),
('MA3', '3E'),
('MA4', '4A'),
('MA4', '4B'),
('MA4', '4C'),
('MA4', '4D'),
('MA5', '5A'),
('MA5', '5B'),
('MA5', '5C'),
('MA5', '5D'),
('PS4', '4A'),
('PS4', '4B'),
('PS4', '4C'),
('PS4', '4D'),
('QU3', '3A'),
('QU3', '3B'),
('QU3', '3C'),
('QU3', '3D'),
('QU3', '3E'),
('QU4', '4A'),
('QU4', '4B'),
('QU4', '4C'),
('QU4', '4D'),
('QU5', '5A'),
('QU5', '5B'),
('QU5', '5C'),
('QU5', '5D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE IF NOT EXISTS `profesor` (
`ID_PROF` int(11) NOT NULL,
  `NOMBRE` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CI` int(8) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=36 ;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`ID_PROF`, `NOMBRE`, `CI`) VALUES
(1, 'Javier Silva', 8246233),
(2, 'Antonio Betancourt', 15511115),
(3, 'Anabelys Mustillo', 11905149),
(4, 'Lorenza Quijada', 8337903),
(5, 'Auristela Campos', 10216078),
(6, 'Yesenia Ortega', 8332259),
(7, 'Rosa Mazarelli', 4007159),
(8, 'María Mustillo', 10288552),
(9, 'José García', 8335501),
(10, 'César Monys', 8330780),
(11, 'María T. Flores', 8332283),
(12, 'Rafael Guillén', 14501283),
(13, 'Irgelia Milano', 15115934),
(14, 'Manuel Méndez', 8000008),
(15, 'Arnulfo Rivas', 8237473),
(16, 'Yesenia Brito', 16480563),
(17, 'Josvenlis Marrero', 8275608),
(18, 'Elizabeth Rodríguez', 4501358),
(19, 'Ana M. Giménez', 11137269),
(20, 'Rosana Visáez', 11901924),
(21, 'Rosángel Caballero', 10299728),
(22, 'Gloris Córdova', 8425630),
(23, 'Lisandra Rojas', 16853768),
(24, 'Veighsabeth Rodríguez', 10876881),
(25, 'Juan Perdomo', 11424858),
(26, 'Ana L. Ruiz', 11344409),
(27, 'Carmen Salazar', 17909264),
(28, 'Griselda González', 8315622),
(29, 'Johana Reyes', 19496460),
(30, 'José Villanueva', 11445001),
(31, 'Yasmin Macuare', 8966669),
(33, 'Luis Rodríguez', 8180125);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor_materia`
--

CREATE TABLE IF NOT EXISTS `profesor_materia` (
  `ID_PROF` int(11) DEFAULT NULL,
  `ID_MAT` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `profesor_materia`
--

INSERT INTO `profesor_materia` (`ID_PROF`, `ID_MAT`) VALUES
(1, 'FI5'),
(1, 'MA1'),
(1, 'MA3'),
(1, 'MA4'),
(2, 'IN1'),
(2, 'IN4'),
(2, 'IN5'),
(3, 'MA1'),
(3, 'MA2'),
(3, 'MA4'),
(3, 'MA5'),
(4, 'EA1'),
(4, 'EA2'),
(4, 'GG1'),
(5, 'HU2'),
(5, 'HV2'),
(5, 'HV3'),
(6, 'MA3'),
(7, 'CB2'),
(7, 'CB3'),
(8, 'ET1'),
(8, 'ET2'),
(8, 'ET3'),
(9, 'FI3'),
(10, 'CB5'),
(10, 'EN1'),
(10, 'ES2'),
(11, 'IN1'),
(11, 'IN2'),
(11, 'IN5'),
(12, 'GV3'),
(12, 'IP4'),
(12, 'IP5'),
(13, 'EA2'),
(13, 'GV5'),
(13, 'HU2'),
(13, 'HV2'),
(13, 'HV4'),
(14, 'EF1'),
(14, 'EF2'),
(14, 'EF3'),
(15, 'EF1'),
(15, 'EF4'),
(15, 'EF5'),
(16, 'ET1'),
(16, 'ET3'),
(17, 'ET1'),
(17, 'ET2'),
(17, 'ET3'),
(18, 'QU4'),
(18, 'QU5'),
(19, 'QU3'),
(20, 'EA2'),
(20, 'IN3'),
(21, 'EC1'),
(21, 'ET3'),
(21, 'HV1'),
(22, 'CL1'),
(22, 'CL2'),
(23, 'DI4'),
(23, 'ET1'),
(23, 'ET2'),
(24, 'CB2'),
(24, 'CB3'),
(24, 'CB4'),
(24, 'ES2'),
(25, 'CL1'),
(25, 'CL3'),
(25, 'CL5'),
(25, 'ET1'),
(26, 'CL4'),
(26, 'CT5'),
(26, 'GV5'),
(27, 'CB2'),
(27, 'EN1'),
(27, 'QU5'),
(28, 'MA1'),
(29, 'FI4'),
(29, 'MA1'),
(30, 'FI4'),
(30, 'MA2'),
(30, 'MA3'),
(30, 'MA4'),
(31, 'CL3'),
(31, 'PS4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prof_mat_sec`
--

CREATE TABLE IF NOT EXISTS `prof_mat_sec` (
  `ID_PROF` int(11) DEFAULT NULL,
  `ID_MAT` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ID_SEC` varchar(2) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `prof_mat_sec`
--

INSERT INTO `prof_mat_sec` (`ID_PROF`, `ID_MAT`, `ID_SEC`) VALUES
(1, 'FI5', '5A'),
(1, 'FI5', '5B'),
(1, 'FI5', '5C'),
(1, 'FI5', '5D'),
(1, 'MA1', '1A'),
(1, 'MA3', '3D'),
(1, 'MA4', '4B'),
(2, 'IN1', '1A'),
(2, 'IN1', '1B'),
(2, 'IN1', '1C'),
(2, 'IN4', '4A'),
(2, 'IN4', '4B'),
(2, 'IN4', '4C'),
(2, 'IN4', '4D'),
(2, 'IN5', '5A'),
(3, 'MA1', '1B'),
(3, 'MA2', '2D'),
(3, 'MA2', '2E'),
(3, 'MA4', '4A'),
(3, 'MA4', '4D'),
(3, 'MA5', '5A'),
(3, 'MA5', '5B'),
(3, 'MA5', '5C'),
(3, 'MA5', '5D'),
(4, 'EA1', '1A'),
(4, 'EA1', '1B'),
(4, 'EA1', '1C'),
(4, 'EA1', '1D'),
(4, 'EA1', '1E'),
(4, 'EA2', '2A'),
(4, 'EA2', '2B'),
(4, 'GG1', '1A'),
(4, 'GG1', '1B'),
(4, 'GG1', '1C'),
(4, 'GG1', '1D'),
(4, 'GG1', '1E'),
(5, 'HU2', '2A'),
(5, 'HU2', '2B'),
(5, 'HU2', '2D'),
(5, 'HU2', '2E'),
(5, 'HV2', '2A'),
(5, 'HV2', '2B'),
(5, 'HV2', '2C'),
(5, 'HV2', '2E'),
(5, 'HV3', '3A'),
(5, 'HV3', '3B'),
(5, 'HV3', '3C'),
(5, 'HV3', '3D'),
(5, 'HV3', '3E'),
(6, 'MA3', '3A'),
(6, 'MA3', '3C'),
(6, 'MA3', '3E'),
(7, 'CB2', '2A'),
(7, 'CB2', '2D'),
(7, 'CB3', '3A'),
(7, 'CB3', '3C'),
(7, 'CB3', '3D'),
(7, 'CB3', '3E'),
(8, 'ET1', '1E'),
(8, 'ET2', '2A'),
(8, 'ET2', '2B'),
(8, 'ET2', '2D'),
(8, 'ET3', '3E'),
(9, 'FI3', '3A'),
(9, 'FI3', '3B'),
(9, 'FI3', '3C'),
(9, 'FI3', '3D'),
(9, 'FI3', '3E'),
(10, 'CB5', '5A'),
(10, 'CB5', '5B'),
(10, 'CB5', '5C'),
(10, 'CB5', '5D'),
(10, 'EN1', '1A'),
(10, 'EN1', '1B'),
(10, 'EN1', '1D'),
(10, 'EN1', '1E'),
(10, 'ES2', '2D'),
(11, 'IN1', '1D'),
(11, 'IN1', '1E'),
(11, 'IN2', '2A'),
(11, 'IN2', '2B'),
(11, 'IN2', '2C'),
(11, 'IN2', '2D'),
(11, 'IN2', '2E'),
(11, 'IN5', '5B'),
(11, 'IN5', '5C'),
(11, 'IN5', '5D'),
(12, 'GV3', '3A'),
(12, 'GV3', '3B'),
(12, 'GV3', '3C'),
(12, 'GV3', '3D'),
(12, 'GV3', '3E'),
(12, 'IP4', '4A'),
(12, 'IP4', '4B'),
(12, 'IP4', '4C'),
(12, 'IP4', '4D'),
(12, 'IP5', '5A'),
(12, 'IP5', '5B'),
(12, 'IP5', '5C'),
(12, 'IP5', '5D'),
(13, 'EA2', '2E'),
(13, 'GV5', '5A'),
(13, 'GV5', '5B'),
(13, 'GV5', '5C'),
(13, 'HU2', '2C'),
(13, 'HV2', '2D'),
(13, 'HV4', '4A'),
(13, 'HV4', '4B'),
(13, 'HV4', '4C'),
(13, 'HV4', '4D'),
(14, 'EF1', '1A'),
(14, 'EF1', '1B'),
(14, 'EF1', '1E'),
(14, 'EF2', '2A'),
(14, 'EF2', '2B'),
(14, 'EF2', '2C'),
(14, 'EF2', '2D'),
(14, 'EF2', '2E'),
(14, 'EF3', '3A'),
(14, 'EF3', '3B'),
(14, 'EF3', '3C'),
(14, 'EF3', '3D'),
(14, 'EF3', '3E'),
(15, 'EF1', '1C'),
(15, 'EF1', '1D'),
(15, 'EF4', '4A'),
(15, 'EF4', '4B'),
(15, 'EF4', '4C'),
(15, 'EF4', '4D'),
(15, 'EF5', '5A'),
(15, 'EF5', '5B'),
(15, 'EF5', '5C'),
(15, 'EF5', '5D'),
(16, 'ET1', '1B'),
(16, 'ET3', '3B'),
(17, 'ET1', '1D'),
(17, 'ET2', '2C'),
(17, 'ET3', '3C'),
(17, 'ET3', '3D'),
(18, 'QU4', '4A'),
(18, 'QU4', '4B'),
(18, 'QU4', '4C'),
(18, 'QU4', '4D'),
(18, 'QU5', '5A'),
(19, 'QU3', '3A'),
(19, 'QU3', '3B'),
(19, 'QU3', '3C'),
(19, 'QU3', '3D'),
(19, 'QU3', '3E'),
(20, 'EA2', '2C'),
(20, 'EA2', '2D'),
(20, 'IN3', '3A'),
(20, 'IN3', '3B'),
(20, 'IN3', '3C'),
(20, 'IN3', '3D'),
(20, 'IN3', '3E'),
(21, 'EC1', '1A'),
(21, 'EC1', '1B'),
(21, 'EC1', '1C'),
(21, 'EC1', '1D'),
(21, 'EC1', '1E'),
(21, 'ET3', '3A'),
(21, 'HV1', '1A'),
(21, 'HV1', '1B'),
(21, 'HV1', '1C'),
(21, 'HV1', '1D'),
(21, 'HV1', '1E'),
(22, 'CL1', '1A'),
(22, 'CL1', '1B'),
(22, 'CL2', '2A'),
(22, 'CL2', '2B'),
(22, 'CL2', '2C'),
(22, 'CL2', '2D'),
(22, 'CL2', '2E'),
(23, 'DI4', '4A'),
(23, 'DI4', '4B'),
(23, 'DI4', '4C'),
(23, 'DI4', '4D'),
(23, 'ET1', '1C'),
(23, 'ET2', '2E'),
(24, 'CB2', '2E'),
(24, 'CB3', '3B'),
(24, 'CB4', '4A'),
(24, 'CB4', '4B'),
(24, 'CB4', '4C'),
(24, 'CB4', '4D'),
(24, 'ES2', '2A'),
(24, 'ES2', '2B'),
(24, 'ES2', '2C'),
(24, 'ES2', '2E'),
(25, 'CL1', '1C'),
(25, 'CL1', '1D'),
(25, 'CL1', '1E'),
(25, 'CL3', '3A'),
(25, 'CL3', '3C'),
(25, 'CL5', '5A'),
(25, 'CL5', '5B'),
(25, 'CL5', '5C'),
(25, 'CL5', '5D'),
(25, 'ET1', '1A'),
(26, 'CL4', '4A'),
(26, 'CL4', '4B'),
(26, 'CL4', '4C'),
(26, 'CL4', '4D'),
(26, 'CT5', '5A'),
(26, 'CT5', '5B'),
(26, 'CT5', '5C'),
(26, 'CT5', '5D'),
(26, 'GV5', '5D'),
(27, 'CB2', '2B'),
(27, 'CB2', '2C'),
(27, 'EN1', '1C'),
(27, 'QU5', '5B'),
(27, 'QU5', '5C'),
(27, 'QU5', '5D'),
(28, 'MA1', '1D'),
(28, 'MA1', '1E'),
(29, 'FI4', '4A'),
(29, 'FI4', '4C'),
(29, 'MA1', '1C'),
(30, 'FI4', '4B'),
(30, 'FI4', '4D'),
(30, 'MA2', '2A'),
(30, 'MA2', '2B'),
(30, 'MA2', '2C'),
(30, 'MA3', '3B'),
(30, 'MA4', '4C'),
(31, 'CL3', '3B'),
(31, 'CL3', '3D'),
(31, 'CL3', '3E'),
(31, 'PS4', '4A'),
(31, 'PS4', '4B'),
(31, 'PS4', '4C'),
(31, 'PS4', '4D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE IF NOT EXISTS `seccion` (
  `ID_SEC` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `ID_año` int(11) DEFAULT NULL,
  `SECCION` varchar(2) COLLATE utf8_spanish_ci DEFAULT NULL,
  `HORARIO` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`ID_SEC`, `ID_año`, `SECCION`, `HORARIO`) VALUES
('1A', 1, 'A', 'image/horarios/PrimeroA.png'),
('1B', 1, 'B', 'image/horarios/PrimeroB.png'),
('1C', 1, 'C', 'image/horarios/PrimeroC.png'),
('1D', 1, 'D', 'image/horarios/PrimeroD.png'),
('1E', 1, 'E', 'image/horarios/PrimeroE.png'),
('1G', 1, 'G', 'image/horarios/Alzo-Liberator.JPG'),
('1H', 1, 'H', 'image/horarios/Alzo-Liberator2.JPG'),
('2A', 2, 'A', 'image/horarios/SegundoA.png'),
('2B', 2, 'B', 'image/horarios/SegundoB.png'),
('2C', 2, 'C', 'image/horarios/SegundoC.png'),
('2D', 2, 'D', 'image/horarios/SegundoD.png'),
('2E', 2, 'E', 'image/horarios/SegundoE.png'),
('2F', 2, 'F', 'image/horarios/Alzo-Liberator.JPG'),
('2G', 2, 'G', 'image/horarios/Alzo-Liberator.JPG'),
('3A', 3, 'A', 'image/horarios/TerceroA.png'),
('3B', 3, 'B', 'image/horarios/TerceroB.png'),
('3C', 3, 'C', 'image/horarios/TerceroC.png'),
('3D', 3, 'D', 'image/horarios/TerceroD.png'),
('3E', 3, 'E', 'image/horarios/TerceroE.png'),
('4A', 4, 'A', 'image/horarios/CuartoA.png'),
('4B', 4, 'B', 'image/horarios/CuartoB.png'),
('4C', 4, 'C', 'image/horarios/CuartoC.png'),
('4D', 4, 'D', 'image/horarios/CuartoD.png'),
('5A', 5, 'A', 'image/horarios/QuintoA.png'),
('5B', 5, 'B', 'image/horarios/QuintoB.png'),
('5C', 5, 'C', 'image/horarios/QuintoC.png'),
('5D', 5, 'D', 'image/horarios/QuintoD.png'),
('5E', 5, 'E', 'image/horarios/Alzo-Liberator.JPG'),
('5F', 5, 'F', 'image/horarios/Alzo-Liberator.JPG'),
('5H', 5, 'H', 'image/horarios/Alzo-Liberator.JPG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`idusuario` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `usuario`, `password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_general`
--
CREATE TABLE IF NOT EXISTS `vista_general` (
`ID_PROF` int(11)
,`NOMBRE` varchar(40)
,`CI` int(8)
,`ID_MAT` varchar(3)
,`MATERIA` varchar(40)
,`ID_año` int(11)
,`año` varchar(20)
,`SECCION` varchar(2)
);
-- --------------------------------------------------------

--
-- Estructura para la vista `vista_general`
--
DROP TABLE IF EXISTS `vista_general`;

CREATE ALGORITHM=UNDEFINED DEFINER=`epiz_22154962`@`sql111.epizy.com` SQL SECURITY DEFINER VIEW `vista_general` AS select `p`.`ID_PROF` AS `ID_PROF`,`p`.`NOMBRE` AS `NOMBRE`,`p`.`CI` AS `CI`,`m`.`ID_MAT` AS `ID_MAT`,`m`.`MATERIA` AS `MATERIA`,`a`.`ID_año` AS `ID_año`,`a`.`año` AS `año`,`s`.`SECCION` AS `SECCION` from ((((((`profesor` `p` join `profesor_materia` `pm` on((`p`.`ID_PROF` = `pm`.`ID_PROF`))) join `prof_mat_sec` `pms` on(((`pm`.`ID_PROF` = `pms`.`ID_PROF`) and (`pm`.`ID_MAT` = `pms`.`ID_MAT`)))) join `materia_seccion` `ms` on(((`pms`.`ID_MAT` = `ms`.`ID_MAT`) and (`pms`.`ID_SEC` = `ms`.`ID_SEC`)))) join `materia` `m` on((`ms`.`ID_MAT` = `m`.`ID_MAT`))) join `seccion` `s` on((`ms`.`ID_SEC` = `s`.`ID_SEC`))) join `año` `a` on((`s`.`ID_año` = `a`.`ID_año`)));

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `año`
--
ALTER TABLE `año`
 ADD PRIMARY KEY (`ID_año`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
 ADD PRIMARY KEY (`ID_MAT`);

--
-- Indices de la tabla `materia_seccion`
--
ALTER TABLE `materia_seccion`
 ADD KEY `ID_MAT` (`ID_MAT`,`ID_SEC`), ADD KEY `ID_SEC` (`ID_SEC`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
 ADD PRIMARY KEY (`ID_PROF`);

--
-- Indices de la tabla `profesor_materia`
--
ALTER TABLE `profesor_materia`
 ADD KEY `ID_PROF` (`ID_PROF`,`ID_MAT`), ADD KEY `ID_PROF_2` (`ID_PROF`,`ID_MAT`), ADD KEY `ID_MAT` (`ID_MAT`);

--
-- Indices de la tabla `prof_mat_sec`
--
ALTER TABLE `prof_mat_sec`
 ADD KEY `ID_PROF` (`ID_PROF`,`ID_MAT`,`ID_SEC`), ADD KEY `ID_SEC` (`ID_SEC`), ADD KEY `ID_MAT` (`ID_MAT`);

--
-- Indices de la tabla `seccion`
--
ALTER TABLE `seccion`
 ADD PRIMARY KEY (`ID_SEC`), ADD KEY `ID_año` (`ID_año`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
MODIFY `ID_PROF` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `materia_seccion`
--
ALTER TABLE `materia_seccion`
ADD CONSTRAINT `materia_seccion_ibfk_1` FOREIGN KEY (`ID_SEC`) REFERENCES `seccion` (`ID_SEC`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `materia_seccion_ibfk_2` FOREIGN KEY (`ID_MAT`) REFERENCES `materia` (`ID_MAT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `profesor_materia`
--
ALTER TABLE `profesor_materia`
ADD CONSTRAINT `profesor_materia_ibfk_1` FOREIGN KEY (`ID_PROF`) REFERENCES `profesor` (`ID_PROF`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `profesor_materia_ibfk_2` FOREIGN KEY (`ID_MAT`) REFERENCES `materia` (`ID_MAT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `prof_mat_sec`
--
ALTER TABLE `prof_mat_sec`
ADD CONSTRAINT `prof_mat_sec_ibfk_1` FOREIGN KEY (`ID_SEC`) REFERENCES `materia_seccion` (`ID_SEC`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `prof_mat_sec_ibfk_2` FOREIGN KEY (`ID_PROF`) REFERENCES `profesor_materia` (`ID_PROF`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `prof_mat_sec_ibfk_3` FOREIGN KEY (`ID_MAT`) REFERENCES `profesor_materia` (`ID_MAT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `seccion`
--
ALTER TABLE `seccion`
ADD CONSTRAINT `seccion_ibfk_1` FOREIGN KEY (`ID_año`) REFERENCES `año` (`ID_año`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
