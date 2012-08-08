-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-08-2012 a las 00:23:06
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `enfermeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `id_alumno` char(10) NOT NULL,
  `nombre_alumno` varchar(50) NOT NULL,
  `ap_alumno` varchar(50) NOT NULL,
  `am_alumno` varchar(50) NOT NULL,
  `fecha_inscripcion` date NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumno`, `nombre_alumno`, `ap_alumno`, `am_alumno`, `fecha_inscripcion`, `password`) VALUES
('08020196', 'ALFONSO', 'CALDERON', 'CHAVEZ', '2011-08-07', '08020196'),
('11111111', 'KKAKA', 'KAKA', 'KAKA', '2012-08-07', '11111111'),
('02020203', 'JOSE', 'JIMENEZ', 'HIDALGO', '2011-08-07', '02020203');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones`
--

CREATE TABLE IF NOT EXISTS `inscripciones` (
  `folio` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `id_alumno` char(8) COLLATE utf8_spanish2_ci NOT NULL,
  `id_materia` int(11) NOT NULL,
  `calificacion` int(11) NOT NULL,
  PRIMARY KEY (`id_alumno`,`id_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `inscripciones`
--

INSERT INTO `inscripciones` (`folio`, `id_alumno`, `id_materia`, `calificacion`) VALUES
('502196eb49ac4', '00000000', 6, 10),
('5021a2b244c66', '02020202', 0, 0),
('5021a35e842b8', '02020203', 1, 0),
('5021a35e84ce9', '02020203', 2, 0),
('5021a35e85355', '02020203', 3, 0),
('5021a35e85dcc', '02020203', 4, 0),
('5021a35e86345', '02020203', 5, 0),
('5021a35e868c0', '02020203', 6, 8),
('5021a35e86ec5', '02020203', 7, 0),
('5021a35e873b9', '02020203', 8, 0),
('5021a35e87bc1', '02020203', 9, 0),
('5021a46ecdc32', '08020196', 1, 0),
('5021a46ece2b9', '08020196', 2, 0),
('5021a46eceaaa', '08020196', 3, 0),
('5021a46ecefe4', '08020196', 4, 0),
('5021a46ecf60e', '08020196', 5, 0),
('502196eb4a3f9', '08020196', 6, 10),
('5021a46ecfbe1', '08020196', 7, 0),
('5021a46ed03ab', '08020196', 8, 0),
('5021a46ed0a26', '08020196', 9, 0),
('5021ae3179b5a', '11111111', 1, 8),
('5021ae317a382', '11111111', 2, 5),
('5021ae317adb4', '11111111', 3, 0),
('5021ae317b390', '11111111', 4, 0),
('5021ae317bba0', '11111111', 5, 0),
('5021ae317c1cc', '11111111', 6, 0),
('5021ae317c740', '11111111', 7, 0),
('5021ae317cf11', '11111111', 8, 0),
('5021ae317d56a', '11111111', 9, 0),
('5021ae317daf5', '11111111', 11, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
  `id_materia` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_materia` varchar(50) NOT NULL,
  `semestre_materia` int(11) NOT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materia`, `nombre_materia`, `semestre_materia`) VALUES
(1, 'TOPICOS SELECTOS DE PROGRAMACION', 1),
(2, 'MATEMATICAS', 1),
(3, 'FISICA', 1),
(4, 'CIENCIAS DE LA COMPUTACION', 2),
(5, 'EVOLUCION DE LAS COMPUTADORAS', 2),
(6, 'MATEMATICAS II', 3),
(7, 'CIENCIAS DE LA TIERRA', 3),
(8, 'MATE IV', 4),
(9, 'FISICA NUCLEAR', 4),
(11, 'ALGOTIMOS GENÉTICOS', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE IF NOT EXISTS `profesores` (
  `id_profesor` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_profesor` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `password_profesor` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre_profesor` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `ap_profesor` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `am_profesor` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_profesor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id_profesor`, `usuario_profesor`, `password_profesor`, `nombre_profesor`, `ap_profesor`, `am_profesor`) VALUES
(1, 'admin', 'admin', 'ADMINISTRADOR', '', ''),
(2, 'javo2124', 'javo2124', 'FRANCISCO', 'CALDERON', 'CHAVEZ'),
(4, 'tony2124', 'tony2124', 'JOSE', 'JIMENEZ', 'LOPEZ'),
(5, 'manriquez1234', 'JOSE2124', 'JOSE', 'GARCIA', 'MALDONADO'),
(7, 'JOSEFA', 'JOSEFA', 'JOSEFA', 'JOSEFA', 'JOFESA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores_materias`
--

CREATE TABLE IF NOT EXISTS `profesores_materias` (
  `id_profesor` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `periodo` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_materia`,`periodo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `profesores_materias`
--

INSERT INTO `profesores_materias` (`id_profesor`, `id_materia`, `periodo`) VALUES
(4, 1, 'AGO2012-ENE2013'),
(4, 2, 'AGO2012-ENE2013'),
(2, 3, 'AGO2012-ENE2013'),
(2, 6, 'AGO2012-ENE2013'),
(2, 11, 'AGO2012-ENE2013');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
