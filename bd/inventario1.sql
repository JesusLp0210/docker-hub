-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-02-2022 a las 05:53:29
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `computo`
--

CREATE TABLE `computo` (
  `idcomputo` int(11) NOT NULL,
  `fktipo` int(11) NOT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `fkmarca` int(11) DEFAULT NULL,
  `fkestado` int(11) NOT NULL,
  `fklocalizacion` int(11) NOT NULL,
  `codigo_id` varchar(20) NOT NULL,
  `total` int(11) NOT NULL,
  `estatus` varchar(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `computo`
--

INSERT INTO `computo` (`idcomputo`, `fktipo`, `modelo`, `fkmarca`, `fkestado`, `fklocalizacion`, `codigo_id`, `total`, `estatus`) VALUES
(6, 11, 'NS', 4, 1, 11, 'sdf', 32, '1'),
(7, 11, 'GALAXY A50', 4, 1, 12, 'COM-0004', 2, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_equipo`
--

CREATE TABLE `detalles_equipo` (
  `iddetalle_equipo` int(11) NOT NULL,
  `fkequipo` int(11) NOT NULL,
  `nombre_persona` varchar(100) DEFAULT NULL,
  `fkestado` int(11) NOT NULL,
  `fkmarca` int(11) NOT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `fklocalizacion` int(11) NOT NULL,
  `codigo_id` varchar(25) NOT NULL,
  `estatus` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalles_equipo`
--

INSERT INTO `detalles_equipo` (`iddetalle_equipo`, `fkequipo`, `nombre_persona`, `fkestado`, `fkmarca`, `modelo`, `total`, `fklocalizacion`, `codigo_id`, `estatus`) VALUES
(14, 2, '', 4, 4, 'GALAXY A50', 1, 12, 'CEL-003', '1'),
(15, 1, 'Lola', 1, 5, 'XASDA', 1, 12, 'ACCPO-001', '1'),
(16, 3, '', 4, 7, 'RAAAA', 3, 12, 'RAD-001', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `idequipo` int(11) NOT NULL,
  `tipo_equipo` varchar(100) NOT NULL,
  `estatus` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`idequipo`, `tipo_equipo`, `estatus`) VALUES
(1, 'AccessPoint', '1'),
(2, 'Celular', '1'),
(3, 'Radio', '1'),
(4, 'Regulador', '1'),
(5, 'Router', '1'),
(6, 'Switch', '1'),
(7, 'Camaras', '1'),
(8, 'Servidores', '1'),
(9, 'Monitores', '1'),
(11, 'Nobreak', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idestado` int(11) NOT NULL,
  `tipo_estado` varchar(100) NOT NULL,
  `estatus` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idestado`, `tipo_estado`, `estatus`) VALUES
(1, 'Activo', '1'),
(2, 'Disponible', '1'),
(3, 'Reparación', '1'),
(4, 'Dañado', '1'),
(6, 'Dar De Baja', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `idestados` int(11) NOT NULL,
  `nombre_estados` varchar(60) NOT NULL,
  `estatus` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`idestados`, `nombre_estados`, `estatus`) VALUES
(1, 'Aguascalientes', '1'),
(2, 'Baja California', '1'),
(3, 'Baja California Sur', '1'),
(4, 'Campeche', '1'),
(5, 'Coahuila', '1'),
(6, 'Colima', '1'),
(7, 'Chiapas', '1'),
(8, 'Chihuahua', '1'),
(9, 'Durango', '1'),
(10, 'Distrito Federal', '1'),
(11, 'Guanajuato', '1'),
(12, 'Guerrero', '1'),
(13, 'Hidalgo', '1'),
(14, 'Jalisco', '1'),
(15, 'México', '1'),
(16, 'Michoacán ', '1'),
(17, 'Morelos', '1'),
(18, 'Nayarit', '1'),
(19, 'Nuevo León', '1'),
(20, 'Oaxaca', '1'),
(21, 'Puebla', '1'),
(22, 'Querétaro', '1'),
(23, 'Quintana Roo', '1'),
(24, 'San Luis Potosí', '1'),
(25, ' Sinaloa', '1'),
(26, 'Sonora', '1'),
(27, 'Tabasco', '1'),
(28, 'Tamaulipas ', '1'),
(29, 'Tlaxcala', '1'),
(30, 'Veracruz', '1'),
(31, 'Yucatán', '1'),
(32, 'Zacatecas', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localizacion`
--

CREATE TABLE `localizacion` (
  `idlocalizacion` int(11) NOT NULL,
  `fktipo_empresa` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `direccion1` text NOT NULL,
  `direccion2` text,
  `ciudad` varchar(100) NOT NULL,
  `fkestados` int(11) NOT NULL,
  `estatus` varchar(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `localizacion`
--

INSERT INTO `localizacion` (`idlocalizacion`, `fktipo_empresa`, `nombre`, `area`, `direccion1`, `direccion2`, `ciudad`, `fkestados`, `estatus`) VALUES
(2, 2, 'Santa Lucia', 'Sistema', 'AAA', 'AAA', 'Rosario', 25, '0'),
(4, 3, 'Pedregosa ', 'Sistema', 'Calle x', 'entre x calle y x calle', 'Rosario', 25, '0'),
(10, 2, 'POPO', 'Huertas', 'Carretera KM 10', '5 DE MAYO', 'HERMOSILLO', 11, '1'),
(11, 1, 'IQ', 'deshidratadora', 'Carretera KM 10', 'Fte Bodega Ahorrera', 'HERMOSILLO', 9, '1'),
(12, 1, 'Cultivares', 'Sistema', 'Carreterra 10', 'asda', 'Rosario', 25, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `idmarca` int(11) NOT NULL,
  `nombre_marca` varchar(50) NOT NULL,
  `estatus` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`idmarca`, `nombre_marca`, `estatus`) VALUES
(1, 'ACER', '1'),
(3, 'HP', '1'),
(4, 'APPLE', '1'),
(5, 'SAMSUNG', '1'),
(7, 'LG', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_compu`
--

CREATE TABLE `tipo_compu` (
  `idtipo_compu` int(11) NOT NULL,
  `tipo_co` varchar(100) NOT NULL,
  `estatus` varchar(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_compu`
--

INSERT INTO `tipo_compu` (`idtipo_compu`, `tipo_co`, `estatus`) VALUES
(10, 'Computadora Portátil', '1'),
(11, 'Computadora De Escritorio', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_empresa`
--

CREATE TABLE `tipo_empresa` (
  `idtipo_empresa` int(11) NOT NULL,
  `nombre_empresa` varchar(40) NOT NULL,
  `estatus` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_empresa`
--

INSERT INTO `tipo_empresa` (`idtipo_empresa`, `nombre_empresa`, `estatus`) VALUES
(1, 'Empaque', '1'),
(2, 'Acopio', '1'),
(3, 'Maquila', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `idtipo_usuario` int(11) NOT NULL,
  `t_usuario` varchar(100) NOT NULL,
  `estatus` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`idtipo_usuario`, `t_usuario`, `estatus`) VALUES
(1, 'Administrativo', '1'),
(2, 'Usuario', '1'),
(3, 'Tecnicos', '1'),
(4, 'Alumnos', '1'),
(5, '', '1'),
(6, '', '1'),
(7, '', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre_usuario` varchar(30) NOT NULL,
  `contraseña` varchar(20) NOT NULL,
  `fktipo_usuario` int(11) NOT NULL,
  `estatus` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre_usuario`, `contraseña`, `fktipo_usuario`, `estatus`) VALUES
(1, 'Lopez22', 'Bolita11', 2, '1'),
(2, 'Bolita', 'Popito10', 1, '1'),
(4, 'Angel02', 'Angel021', 2, '0'),
(6, 'huihuihuhdsads', 'sdsadsadsa', 1, '1'),
(7, 'sdfsdgfdg', 'dsfdsfds', 2, '1'),
(8, 'sdfsdgfdgdsfwertf4e', 'ewrewrfe', 1, '1'),
(9, 'JesusLopez', 'Bolita11', 1, '1'),
(10, 'Jorge2021', 'popo', 1, '1'),
(11, 'Alexis3D', 'f84cbd42d3a7060828b9', 1, '0'),
(13, 'Jesus3D', '', 1, '1'),
(15, 'LuzCariño', 'Cariño10', 1, '1'),
(16, 'Boliux02', 'JesusLopez', 1, '1'),
(17, 'dsmfdsf', 'dsfsdffdsf', 1, '1'),
(18, 'wdcewd', 'ewcwewewdew', 4, '1'),
(19, 'Melanie24', 'Bolita11', 1, '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `computo`
--
ALTER TABLE `computo`
  ADD PRIMARY KEY (`idcomputo`),
  ADD KEY `fktipo` (`fktipo`),
  ADD KEY `fkmarca` (`fkmarca`),
  ADD KEY `fkestado` (`fkestado`),
  ADD KEY `fklocalizacion` (`fklocalizacion`);

--
-- Indices de la tabla `detalles_equipo`
--
ALTER TABLE `detalles_equipo`
  ADD PRIMARY KEY (`iddetalle_equipo`),
  ADD KEY `fkequipo` (`fkequipo`),
  ADD KEY `fkestado` (`fkestado`),
  ADD KEY `fkmarca` (`fkmarca`),
  ADD KEY `fklocalizacion` (`fklocalizacion`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`idequipo`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idestado`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`idestados`);

--
-- Indices de la tabla `localizacion`
--
ALTER TABLE `localizacion`
  ADD PRIMARY KEY (`idlocalizacion`),
  ADD KEY `fktipo_empresa` (`fktipo_empresa`),
  ADD KEY `fkestados` (`fkestados`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`idmarca`);

--
-- Indices de la tabla `tipo_compu`
--
ALTER TABLE `tipo_compu`
  ADD PRIMARY KEY (`idtipo_compu`);

--
-- Indices de la tabla `tipo_empresa`
--
ALTER TABLE `tipo_empresa`
  ADD PRIMARY KEY (`idtipo_empresa`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`idtipo_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `fktipo_usuario` (`fktipo_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `computo`
--
ALTER TABLE `computo`
  MODIFY `idcomputo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `detalles_equipo`
--
ALTER TABLE `detalles_equipo`
  MODIFY `iddetalle_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `idequipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idestado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `idestados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `localizacion`
--
ALTER TABLE `localizacion`
  MODIFY `idlocalizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `idmarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tipo_compu`
--
ALTER TABLE `tipo_compu`
  MODIFY `idtipo_compu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tipo_empresa`
--
ALTER TABLE `tipo_empresa`
  MODIFY `idtipo_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `idtipo_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `computo`
--
ALTER TABLE `computo`
  ADD CONSTRAINT `computo_ibfk_1` FOREIGN KEY (`fktipo`) REFERENCES `tipo_compu` (`idtipo_compu`),
  ADD CONSTRAINT `computo_ibfk_2` FOREIGN KEY (`fkmarca`) REFERENCES `marca` (`idmarca`),
  ADD CONSTRAINT `computo_ibfk_3` FOREIGN KEY (`fkestado`) REFERENCES `estado` (`idestado`),
  ADD CONSTRAINT `computo_ibfk_4` FOREIGN KEY (`fklocalizacion`) REFERENCES `localizacion` (`idlocalizacion`);

--
-- Filtros para la tabla `detalles_equipo`
--
ALTER TABLE `detalles_equipo`
  ADD CONSTRAINT `detalles_equipo_ibfk_1` FOREIGN KEY (`fkequipo`) REFERENCES `equipo` (`idequipo`),
  ADD CONSTRAINT `detalles_equipo_ibfk_2` FOREIGN KEY (`fkestado`) REFERENCES `estado` (`idestado`),
  ADD CONSTRAINT `detalles_equipo_ibfk_3` FOREIGN KEY (`fkmarca`) REFERENCES `marca` (`idmarca`),
  ADD CONSTRAINT `detalles_equipo_ibfk_4` FOREIGN KEY (`fklocalizacion`) REFERENCES `localizacion` (`idlocalizacion`);

--
-- Filtros para la tabla `localizacion`
--
ALTER TABLE `localizacion`
  ADD CONSTRAINT `localizacion_ibfk_1` FOREIGN KEY (`fktipo_empresa`) REFERENCES `tipo_empresa` (`idtipo_empresa`),
  ADD CONSTRAINT `localizacion_ibfk_2` FOREIGN KEY (`fkestados`) REFERENCES `estados` (`idestados`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`fktipo_usuario`) REFERENCES `tipo_usuario` (`idtipo_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
