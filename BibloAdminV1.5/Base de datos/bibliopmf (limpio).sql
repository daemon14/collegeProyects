-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-03-2018 a las 00:34:58
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bibliopmf`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `ID_Area` int(3) UNSIGNED ZEROFILL NOT NULL,
  `Nombre_Area` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`ID_Area`, `Nombre_Area`) VALUES
(000, '000-Generales'),
(100, '100-Filosofía y Psicología'),
(200, '200-Religión'),
(300, '300-Ciencias Sociales'),
(400, '400-Lenguas'),
(500, '500-Matemáticas y Ciencias Naturales'),
(600, '600-Tecnología y Ciencias Aplicadas'),
(700, '700-Artes'),
(800, '800-Literatura'),
(900, '900-Historia y Geografía');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `ID_Autor` int(5) NOT NULL,
  `Nombre_Autor` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='Tabla de autores';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiario`
--

CREATE TABLE `beneficiario` (
  `ID_Benef` int(8) NOT NULL,
  `Apellido_Benef` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Nombre_Benef` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Sexo` varchar(1) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Tipo` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='Tabla de Beneficiarios';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `ID_Libro` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Titulo` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `ID_Area` int(3) UNSIGNED ZEROFILL NOT NULL,
  `ID_SubArea` int(3) UNSIGNED ZEROFILL NOT NULL,
  `Ejemplares` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro_autor`
--

CREATE TABLE `libro_autor` (
  `ID_Libro` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `ID_Autor` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='Pivote Libro_Autor';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `ID_Prestamo` int(11) NOT NULL,
  `ID_Benef` int(8) NOT NULL COMMENT 'C.I.',
  `Grado` varchar(2) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Seccion` varchar(2) COLLATE utf8mb4_spanish_ci NOT NULL,
  `ID_Libro` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Fecha_Prest` date NOT NULL,
  `Fecha_Dev` date NOT NULL,
  `Estado` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'Ocupado',
  `Observacion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'NA'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='Detalles de la operacion de prestamo';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subarea`
--

CREATE TABLE `subarea` (
  `ID_SubArea` int(3) UNSIGNED ZEROFILL NOT NULL,
  `Nombre_SubArea` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `ID_Area` int(3) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `subarea`
--

INSERT INTO `subarea` (`ID_SubArea`, `Nombre_SubArea`, `ID_Area`) VALUES
(010, '010-Bibliografía', 000),
(020, '020-Bibliotecnología e Informática', 000),
(030, '030-Enciclopedias Generales', 000),
(040, '040-Actualmente sin uso', 000),
(050, '050-Publicaciones en Serie', 000),
(060, '060-Organizaciones y Museografía', 000),
(070, '070-Periodismo, Editoriales, Diarios', 000),
(080, '080-Colecciones Generales', 000),
(090, '090-Manuscritos y Libros Raros', 000),
(100, '100-Filosofía y psicología', 100),
(110, '110-Metafísica', 100),
(120, '120-Conocimiento, causa, fin, hombre', 100),
(130, '130-Parapsicología, ocultismo', 100),
(140, '140-Puntos de vista filosóficos', 100),
(150, '150-Psicología', 100),
(160, '160-Lógica', 100),
(170, '170-Ética (filosofía moral)', 100),
(180, '180-Filosofía antigua, medieval, oriental', 100),
(190, '190-Filosofía moderna occidental', 100),
(200, '200-Religión', 200),
(210, '210-Religión natural', 200),
(220, '220-Biblia', 200),
(230, '230-Teología cristiana', 200),
(240, '240-Moral y prácticas cristianas', 200),
(250, '250-Iglesia local y órdenes religiosas', 200),
(260, '260-Teología social y eclesiología', 200),
(270, '270-Historia y geografía de la iglesia', 200),
(280, '280-Credos de la iglesia cristiana', 200),
(290, '290-Otras religiones', 200),
(300, '300-Ciencias sociales', 300),
(310, '310-Estadística', 300),
(320, '320-Ciencia política', 300),
(330, '330-Economía', 300),
(340, '340-Derecho', 300),
(350, '350-Administración pública', 300),
(360, '360-Patología y servicio sociales', 300),
(370, '370-Educación', 300),
(380, '380-Comercio', 300),
(390, '390-Costumbres y folklore', 300),
(400, '400-Lenguas', 400),
(410, '410-Lingüística', 400),
(420, '420-Inglés y anglosajón', 400),
(430, '430-Lenguas germánicas; alemán', 400),
(440, '440-Lenguas romances; francés', 400),
(450, '450-Italiano, rumano, rético', 400),
(460, '460-Español y portugués', 400),
(470, '470-Lenguas itálicas; latín', 400),
(480, '480-Lenguas helénicas; griego clásico', 400),
(490, '490-Otras lenguas', 400),
(500, '500-atemáticas y ciencias naturales', 500),
(510, '510-Matemáticas', 500),
(520, '520-Astronomía y ciencias afines', 500),
(530, '530-Física', 500),
(540, '540-Química y ciencias afines', 500),
(550, '550-Geociencias', 500),
(560, '560-Paleontología', 500),
(570, '570-Ciencias biológicas', 500),
(580, '580-Ciencias botánicas', 500),
(590, '590-Ciencias zoológicas', 500),
(600, '600-Tecnología y ciencias aplicadas', 600),
(610, '610-Ciencias médicas', 600),
(620, '620-Ingeniería y operaciones afines', 600),
(630, '630-Agricultura y tecnologías afines', 600),
(640, '640-Economía doméstica', 600),
(650, '650-Servicios administrativos empresariales', 600),
(660, '660-Química industrial', 600),
(670, '670-Manufacturas', 600),
(680, '680-Manufacturas varias', 600),
(690, '690-Construcciones', 600),
(700, '700-Artes', 700),
(710, '710-Urbanismo y arquitectura del paisaje', 700),
(720, '720-Arquitectura', 700),
(730, '730-Artes plásticas; escultura', 700),
(740, '740-Dibujo, artes decorativas y menores', 700),
(750, '750-Pintura y pinturas', 700),
(760, '760-Artes gráficas; grabados', 700),
(770, '770-Fotografía y fotografías', 700),
(780, '780-Música', 700),
(790, '790-Entretenimiento', 700),
(800, '800-Literatura', 800),
(810, '810-Literatura americana en inglés', 800),
(820, '820-Literatura inglesa y anglosajona', 800),
(830, '830-Literaturas germánicas', 800),
(840, '840-Literaturas de las lenguas romances', 800),
(850, '850-Literaturas italiana, rumana', 800),
(860, '860-Literaturas española y portuguesa', 800),
(870, '870-Literaturas de las lenguas itálicas', 800),
(880, '880-Literaturas de las lenguas helénicas', 800),
(890, '890-Literaturas de otras lenguas', 800),
(900, '900-Historia y geografía', 900),
(910, '910-Geografía; viajes', 900),
(920, '920-Biografía y genealogía', 900),
(930, '930-Historia del mundo antiguo', 900),
(940, '940-Historia de Europa', 900),
(950, '950-Historia de Asia', 900),
(960, '960-Historia deÁfrica', 900),
(970, '970-Historia de América del Norte', 900),
(980, '980-Historia de América del Sur', 900),
(990, '990-Historia de otras regiones', 900);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_Usuario` int(8) NOT NULL,
  `Nombre_Usuario` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `pasadmin` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_Usuario`, `Nombre_Usuario`, `Password`, `email`, `pasadmin`) VALUES
(0, 'Liceo PMF', '1234', 'lbpmf', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`ID_Area`);

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`ID_Autor`);

--
-- Indices de la tabla `beneficiario`
--
ALTER TABLE `beneficiario`
  ADD PRIMARY KEY (`ID_Benef`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`ID_Libro`),
  ADD KEY `ID_Area` (`ID_Area`,`ID_SubArea`),
  ADD KEY `ID_SubArea` (`ID_SubArea`);

--
-- Indices de la tabla `libro_autor`
--
ALTER TABLE `libro_autor`
  ADD KEY `ID_Libro` (`ID_Libro`),
  ADD KEY `ID_Autor` (`ID_Autor`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`ID_Prestamo`),
  ADD KEY `ID_Benef` (`ID_Benef`),
  ADD KEY `ID_Libro` (`ID_Libro`);

--
-- Indices de la tabla `subarea`
--
ALTER TABLE `subarea`
  ADD PRIMARY KEY (`ID_SubArea`),
  ADD KEY `ID_Area` (`ID_Area`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
  MODIFY `ID_Autor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `ID_Prestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `libro_ibfk_1` FOREIGN KEY (`ID_Area`) REFERENCES `area` (`ID_Area`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `libro_ibfk_2` FOREIGN KEY (`ID_SubArea`) REFERENCES `subarea` (`ID_SubArea`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `libro_autor`
--
ALTER TABLE `libro_autor`
  ADD CONSTRAINT `libro_autor_ibfk_3` FOREIGN KEY (`ID_Autor`) REFERENCES `autor` (`ID_Autor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `libro_autor_ibfk_4` FOREIGN KEY (`ID_Libro`) REFERENCES `libro` (`ID_Libro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `prestamo_ibfk_1` FOREIGN KEY (`ID_Libro`) REFERENCES `libro` (`ID_Libro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prestamo_ibfk_2` FOREIGN KEY (`ID_Benef`) REFERENCES `beneficiario` (`ID_Benef`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `subarea`
--
ALTER TABLE `subarea`
  ADD CONSTRAINT `subarea_ibfk_1` FOREIGN KEY (`ID_Area`) REFERENCES `area` (`ID_Area`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
