-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-12-2017 a las 10:25:07
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `diseno1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actvos`
--

CREATE TABLE IF NOT EXISTS `actvos` (
  `codigo_activo` varchar(15) NOT NULL,
  `codigo_tipo` varchar(12) NOT NULL,
  `codigo_proveedor` int(11) NOT NULL,
  `codigo_detalle` int(11) NOT NULL,
  `codigo_administrador` varchar(20) NOT NULL,
  `fecha_adquicision` date DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `foto` longblob,
  `observacion` text,
  PRIMARY KEY (`codigo_activo`),
  KEY `fk_actvos_proveedores1_idx` (`codigo_proveedor`),
  KEY `fk_actvos_detalles1_idx` (`codigo_detalle`),
  KEY `fk_actvos_tipo_activo1_idx` (`codigo_tipo`),
  KEY `fk_actvos_administradores1_idx` (`codigo_administrador`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `actvos`
--

INSERT INTO `actvos` (`codigo_activo`, `codigo_tipo`, `codigo_proveedor`, `codigo_detalle`, `codigo_administrador`, `fecha_adquicision`, `precio`, `estado`, `foto`, `observacion`) VALUES
('CEJ-0-0001', 'CEJ-0', 1, 29, 'torres01', '0000-00-00', 4, 1, '', '1'),
('CEJ-0-0002', 'CEJ-0', 1, 30, 'admin01', '0000-00-00', 4, 1, '', '1'),
('CEJ-0-0003', 'CEJ-0', 1, 31, 'admin01', '0000-00-00', 4, 1, '', '1'),
('CEJ-0-0004', 'CEJ-0', 1, 32, 'admin01', '0000-00-00', 4, 1, '', '1'),
('CEJ-0-0005', 'CEJ-0', 1, 33, 'admin01', '0000-00-00', 4, 1, '', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
  `codigo_administrador` varchar(15) NOT NULL,
  `pasword` varchar(15) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `apellido` varchar(25) DEFAULT NULL,
  `dui` varchar(11) DEFAULT NULL,
  `foto` longblob,
  `estado` int(11) DEFAULT NULL,
  `observacion` varchar(150) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `fecha` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`codigo_administrador`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`codigo_administrador`, `pasword`, `nivel`, `nombre`, `apellido`, `dui`, `foto`, `estado`, `observacion`, `sexo`, `email`, `fecha`) VALUES
('admin01', '111111', NULL, 'Boris Ricardo', 'Miranda Ayala', '00012022-0', NULL, 1, 'este bicho es malo', 'Femenino', 'brmiranda00@gmail.com', '1998-09-30'),
('micontra', '123456', 0, 'Jose', 'Rodriguez', '01123645-6', NULL, 0, 'ya no labora en la empresa', 'Masculino', 'brmiranda009@gmail.com', '2003-10-16'),
('torres01', '111111', 1, 'Carlos Antonio', 'Torrez Martinez', '44433466-1', NULL, 1, 'este bicho es malo', 'Masculino', 'torres@gmail.com', '2017-10-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE IF NOT EXISTS `autores` (
  `codigo_autor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `apellido` varchar(25) DEFAULT NULL,
  `nacimiento` date DEFAULT NULL,
  `biografia` text NOT NULL,
  PRIMARY KEY (`codigo_autor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='	' AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `autores`
--

INSERT INTO `autores` (`codigo_autor`, `nombre`, `apellido`, `nacimiento`, `biografia`) VALUES
(1, 'Hugo', 'Aguirre', '1907-10-09', 'IMG_20170923_0002.pdf'),
(2, 'Homero', 'Simpson', '1880-10-20', 'CAPITULO_IV.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE IF NOT EXISTS `bitacora` (
  `codigo_bitacora` int(11) NOT NULL,
  `codigo_administrador` varchar(15) NOT NULL,
  `accion` varchar(100) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`codigo_bitacora`),
  KEY `fk_bitacora_administradores1_idx` (`codigo_administrador`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `bitacora`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `codigo_tipo` varchar(12) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigo_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`codigo_tipo`, `nombre`) VALUES
('CEJ-0', 'silla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles`
--

CREATE TABLE IF NOT EXISTS `detalles` (
  `codigo_detalle` int(11) NOT NULL AUTO_INCREMENT,
  `serie` varchar(50) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `marca` varchar(30) DEFAULT NULL,
  `modelo` varchar(30) DEFAULT NULL,
  `ram` varchar(30) DEFAULT NULL,
  `memoria` varchar(50) DEFAULT NULL,
  `sistema` varchar(30) DEFAULT NULL,
  `dimensiones` varchar(50) DEFAULT NULL,
  `foto` text,
  `otros` text,
  `procesador` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigo_detalle`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Volcar la base de datos para la tabla `detalles`
--

INSERT INTO `detalles` (`codigo_detalle`, `serie`, `color`, `marca`, `modelo`, `ram`, `memoria`, `sistema`, `dimensiones`, `foto`, `otros`, `procesador`) VALUES
(1, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(2, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(3, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(4, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(5, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(6, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(7, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(8, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(9, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(10, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(11, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(12, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(13, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(14, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(15, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(16, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(17, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(18, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(19, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(20, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(21, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(22, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(23, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(24, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(25, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(26, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(27, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(28, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(29, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(30, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(31, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(32, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(33, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editoriales`
--

CREATE TABLE IF NOT EXISTS `editoriales` (
  `codigo_editorial` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `pais` varchar(10) DEFAULT NULL,
  `email` varchar(15) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`codigo_editorial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `editoriales`
--

INSERT INTO `editoriales` (`codigo_editorial`, `nombre`, `direccion`, `pais`, `email`, `telefono`) VALUES
(1, 'Harday Electric', '1 av norte #5 san vicente', NULL, 'haray763@gmai.c', '78564128'),
(2, 'libros sv', 'san salvador', NULL, 'editoriallibros', '2259863'),
(3, 'SV BOOKs', 'fvdfdfdfdfdf', NULL, 'dfbdf@srfgre.df', '23422343');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encargado_mantenimiento`
--

CREATE TABLE IF NOT EXISTS `encargado_mantenimiento` (
  `codigo_emantenimiento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `correo` varchar(35) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`codigo_emantenimiento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `encargado_mantenimiento`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE IF NOT EXISTS `institucion` (
  `codigo_institucion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigo_institucion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`codigo_institucion`, `nombre`) VALUES
(1, 'Centro Escolar Presbítero Norberto Marroquí'),
(2, 'Instituto Nacional de San José Verapaz'),
(3, 'Instituto Nacional Dr. Sarvelio Navarrete'),
(4, 'Escuela católica, San Jose Verapaz'),
(5, 'Alcaldía Municipal, San José Verapaz'),
(6, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE IF NOT EXISTS `libros` (
  `codigo_libro` varchar(45) NOT NULL,
  `editoriales_codigo` int(11) NOT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `estado` varchar(25) DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  `foto` longblob,
  `motivo` text,
  PRIMARY KEY (`codigo_libro`),
  KEY `fk_libros_editoriales1_idx` (`editoriales_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `libros`
--

INSERT INTO `libros` (`codigo_libro`, `editoriales_codigo`, `titulo`, `estado`, `fecha_publicacion`, `foto`, `motivo`) VALUES
('CEJ-002-030-0001', 1, 'Otroq', '0', '2017-11-05', 0x69665f6164645f3132363538332e69636f, NULL),
('CEJ-002-030-0002', 1, 'Otroq', '0', '2017-11-05', 0x69665f6164645f3132363538332e69636f, NULL),
('CEJ-002-480-0001', 2, 'la odisea', '1', '1889-10-24', 0x32313336303738325f3831303333353139353830313239365f323033333039363337395f6e2e6a7067, 'extavio'),
('CEJ-002-480-0002', 2, 'la odisea', '0', '1889-10-24', 0x32313336303738325f3831303333353139353830313239365f323033333039363337395f6e2e6a7067, NULL),
('CEJ-002-480-0003', 2, 'la odisea', '0', '1889-10-24', 0x32313336303738325f3831303333353139353830313239365f323033333039363337395f6e2e6a7067, NULL),
('CEJ-002-480-0004', 2, 'la odisea edicion 3', '0', '1889-10-24', 0x32313336303738325f3831303333353139353830313239365f323033333039363337395f6e2e6a7067, NULL),
('CEJ-002-480-0005', 2, 'la odisea', '0', '1889-10-24', 0x32313336303738325f3831303333353139353830313239365f323033333039363337395f6e2e6a7067, NULL),
('CEJ-002-480-0006', 2, 'la odisea', '0', '1889-10-24', 0x32313336303738325f3831303333353139353830313239365f323033333039363337395f6e2e6a7067, NULL),
('CEJ-002-480-0007', 2, 'la odisea', '0', '1889-10-24', 0x32313336303738325f3831303333353139353830313239365f323033333039363337395f6e2e6a7067, NULL),
('CEJ-002-480-0008', 2, 'la odisea', '0', '1889-10-24', 0x32313336303738325f3831303333353139353830313239365f323033333039363337395f6e2e6a7067, NULL),
('CEJ-002-480-0009', 2, 'la odisea', '0', '1889-10-24', 0x32313336303738325f3831303333353139353830313239365f323033333039363337395f6e2e6a7067, NULL),
('CEJ-002-480-0010', 2, 'la odisea', '0', '1889-10-24', 0x32313336303738325f3831303333353139353830313239365f323033333039363337395f6e2e6a7067, NULL),
('CEJ-002-480-0011', 2, 'la odisea', '0', '1889-10-24', 0x32313336303738325f3831303333353139353830313239365f323033333039363337395f6e2e6a7067, NULL),
('CEJ-002-480-0012', 2, 'la odisea', '0', '1889-10-24', 0x32313336303738325f3831303333353139353830313239365f323033333039363337395f6e2e6a7067, NULL),
('CEJ-002-480-0013', 2, 'la odisea', '0', '1889-10-24', 0x32313336303738325f3831303333353139353830313239365f323033333039363337395f6e2e6a7067, NULL),
('CEJ-002-480-0014', 2, 'la odisea', '0', '1889-10-24', 0x32313336303738325f3831303333353139353830313239365f323033333039363337395f6e2e6a7067, NULL),
('CEJ-002-480-0015', 2, 'la odisea', '0', '1889-10-24', 0x32313336303738325f3831303333353139353830313239365f323033333039363337395f6e2e6a7067, NULL),
('CEJ-002-480-0016', 2, 'la odisea', '0', '1889-10-24', 0x32313336303738325f3831303333353139353830313239365f323033333039363337395f6e2e6a7067, NULL),
('CEJ-002-480-0017', 2, 'la odisea', '0', '1889-10-24', 0x32313336303738325f3831303333353139353830313239365f323033333039363337395f6e2e6a7067, NULL),
('CEJ-002-480-0018', 2, 'la odisea', '0', '1889-10-24', 0x32313336303738325f3831303333353139353830313239365f323033333039363337395f6e2e6a7067, NULL),
('CEJ-002-480-0019', 2, 'la odisea', '0', '1889-10-24', 0x32313336303738325f3831303333353139353830313239365f323033333039363337395f6e2e6a7067, NULL),
('CEJ-002-480-0020', 2, 'la odisea', '0', '1889-10-24', 0x32313336303738325f3831303333353139353830313239365f323033333039363337395f6e2e6a7067, NULL),
('CEJ-002-480-0021', 2, 'la odisea', '0', '1889-10-24', 0x32313336303738325f3831303333353139353830313239365f323033333039363337395f6e2e6a7067, NULL),
('CEJ-002-480-0022', 2, 'la odisea', '0', '1889-10-24', 0x32313336303738325f3831303333353139353830313239365f323033333039363337395f6e2e6a7067, NULL),
('CEJ-002-480-0023', 2, 'la odisea', '0', '1889-10-24', 0x32313336303738325f3831303333353139353830313239365f323033333039363337395f6e2e6a7067, NULL),
('CEJ-002-480-0024', 2, 'la odisea', '0', '1889-10-24', 0x32313336303738325f3831303333353139353830313239365f323033333039363337395f6e2e6a7067, NULL),
('CEJ-002-480-0025', 2, 'la odisea', '0', '1889-10-24', 0x32313336303738325f3831303333353139353830313239365f323033333039363337395f6e2e6a7067, NULL),
('CEJ-002-890-0001', 1, 'Papirua', '0', '2017-10-02', 0x6361626c652d64652d7265642d6170616e74616c6c61646f2e706e67, NULL),
('CEJ-002-890-0002', 1, 'Papirua', '0', '2017-10-02', 0x6361626c652d64652d7265642d6170616e74616c6c61646f2e706e67, NULL),
('CEJ-002-890-0003', 1, 'Papirua', '0', '2017-10-02', 0x6361626c652d64652d7265642d6170616e74616c6c61646f2e706e67, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimientos`
--

CREATE TABLE IF NOT EXISTS `mantenimientos` (
  `codigo_mantenimiento` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_activo` varchar(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `descripcion` text,
  `costo` double DEFAULT NULL,
  PRIMARY KEY (`codigo_mantenimiento`),
  KEY `fk_mantenimientos_actvos1_idx` (`codigo_activo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `mantenimientos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento_actvos`
--

CREATE TABLE IF NOT EXISTS `movimiento_actvos` (
  `codigo_activo` varchar(11) NOT NULL,
  `codigo_pactivo` int(11) NOT NULL,
  KEY `fk_prestamo_activos_has_actvos_actvos1_idx` (`codigo_activo`),
  KEY `fk_prestamo_activos_has_actvos_prestamo_activos1_idx` (`codigo_pactivo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `movimiento_actvos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento_autores`
--

CREATE TABLE IF NOT EXISTS `movimiento_autores` (
  `codigo_libro` varchar(45) NOT NULL,
  `codigo_autor` int(11) NOT NULL,
  KEY `fk_libros_has_autores_autores1_idx` (`codigo_autor`),
  KEY `fk_libros_has_autores_libros1_idx` (`codigo_libro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `movimiento_autores`
--

INSERT INTO `movimiento_autores` (`codigo_libro`, `codigo_autor`) VALUES
('CEJ-002-890-0001', 1),
('CEJ-002-890-0002', 1),
('CEJ-002-890-0003', 1),
('CEJ-002-480-0001', 2),
('CEJ-002-480-0002', 2),
('CEJ-002-480-0003', 2),
('CEJ-002-480-0004', 2),
('CEJ-002-480-0005', 2),
('CEJ-002-480-0006', 2),
('CEJ-002-480-0007', 2),
('CEJ-002-480-0008', 2),
('CEJ-002-480-0009', 2),
('CEJ-002-480-0010', 2),
('CEJ-002-480-0011', 2),
('CEJ-002-480-0012', 2),
('CEJ-002-480-0013', 2),
('CEJ-002-480-0014', 2),
('CEJ-002-480-0015', 2),
('CEJ-002-480-0016', 2),
('CEJ-002-480-0017', 2),
('CEJ-002-480-0018', 2),
('CEJ-002-480-0019', 2),
('CEJ-002-480-0020', 2),
('CEJ-002-480-0021', 2),
('CEJ-002-480-0022', 2),
('CEJ-002-480-0023', 2),
('CEJ-002-480-0024', 2),
('CEJ-002-480-0025', 2),
('CEJ-002-030-0001', 2),
('CEJ-002-030-0002', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento_libros`
--

CREATE TABLE IF NOT EXISTS `movimiento_libros` (
  `codigo_libro` varchar(45) NOT NULL,
  `codigo_plibro` int(11) NOT NULL,
  KEY `fk_libros_has_prestamo_libros_prestamo_libros1_idx` (`codigo_plibro`),
  KEY `fk_libros_has_prestamo_libros_libros1_idx` (`codigo_libro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `movimiento_libros`
--

INSERT INTO `movimiento_libros` (`codigo_libro`, `codigo_plibro`) VALUES
('CEJ-002-480-0004', 1),
('CEJ-002-890-0001', 2),
('CEJ-002-890-0003', 3),
('CEJ-002-480-0002', 3),
('CEJ-002-480-0004', 3),
('CEJ-002-890-0001', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento_mantenimientos`
--

CREATE TABLE IF NOT EXISTS `movimiento_mantenimientos` (
  `codigo_emantenimiento` int(11) NOT NULL,
  `codigo_mantenimiento` int(11) NOT NULL,
  KEY `fk_encargado_mantenimiento_has_mantenimientos_mantenimiento_idx` (`codigo_mantenimiento`),
  KEY `fk_encargado_mantenimiento_has_mantenimientos_encargado_man_idx` (`codigo_emantenimiento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `movimiento_mantenimientos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo_activos`
--

CREATE TABLE IF NOT EXISTS `prestamo_activos` (
  `codigo_pactivo` int(11) NOT NULL AUTO_INCREMENT,
  `usuarios_codigo` varchar(45) NOT NULL,
  `observacion` text,
  `fecha_salida` datetime DEFAULT NULL,
  `fecha_devolucion` date DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo_pactivo`),
  KEY `fk_prestamo_activos_usuarios1_idx` (`usuarios_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `prestamo_activos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo_libros`
--

CREATE TABLE IF NOT EXISTS `prestamo_libros` (
  `codigo_plibro` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_usuario` varchar(15) NOT NULL,
  `observaciones` varchar(100) DEFAULT NULL,
  `fecha_devolucion` date DEFAULT NULL,
  `fecha_salida` datetime DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo_plibro`),
  KEY `fk_prestamo_libros_usuarios1_idx` (`codigo_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `prestamo_libros`
--

INSERT INTO `prestamo_libros` (`codigo_plibro`, `codigo_usuario`, `observaciones`, `fecha_devolucion`, `fecha_salida`, `estado`) VALUES
(1, 'JA17-1', 'mojado', '2017-10-24', '2017-10-20 00:00:00', 1),
(2, 'JA17-1', NULL, '2017-11-05', '2017-11-05 00:00:00', 0),
(3, 'JA17-1', NULL, '2017-11-17', '2017-11-05 00:00:00', 0),
(4, 'HG17-2', NULL, '0000-00-00', '2017-12-05 00:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
  `codigo_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) DEFAULT NULL,
  `apellido` varchar(40) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `correo` varchar(35) DEFAULT NULL,
  `fax` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`codigo_proveedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`codigo_proveedor`, `nombre`, `apellido`, `direccion`, `telefono`, `correo`, `fax`) VALUES
(1, 'plasticos cv', NULL, 'santa ana', '2456-8312', 'plasticos@gmail.com', 'Sin Fax');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `codigo_usuario` varchar(15) NOT NULL,
  `codigo_institucion` int(11) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `apellido` varchar(25) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `correo` varchar(35) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `foto` longblob,
  `sexo` varchar(10) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `observaciones` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`codigo_usuario`),
  UNIQUE KEY `sexo_UNIQUE` (`sexo`),
  KEY `fk_usuarios_institucion1_idx` (`codigo_institucion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`codigo_usuario`, `codigo_institucion`, `nombre`, `apellido`, `telefono`, `correo`, `direccion`, `foto`, `sexo`, `estado`, `observaciones`) VALUES
('HG17-2', 4, 'hgfdhdghdffg', 'ghdfghdfghdfghd', '3333-3333', 'hdfdfgd@sgfsfg', 'hdfghdfhdghfdg', NULL, 'Femenino', 1, ''),
('JA17-1', 3, 'Jenniffer Joanna Lopez', 'Abarca', '2233-2333', 'juribe@idiomas.udea.edu.co', 'CALLE AGUSTIN LARA NO. 69-B COL. EX-NORMAL TUXTEPEC', NULL, 'Masculino', 0, 'no entrega de libro');

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `actvos`
--
ALTER TABLE `actvos`
  ADD CONSTRAINT `fk_actvos_administradores1` FOREIGN KEY (`codigo_administrador`) REFERENCES `administradores` (`codigo_administrador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_actvos_detalles1` FOREIGN KEY (`codigo_detalle`) REFERENCES `detalles` (`codigo_detalle`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_actvos_proveedores1` FOREIGN KEY (`codigo_proveedor`) REFERENCES `proveedores` (`codigo_proveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_actvos_tipo_activo1` FOREIGN KEY (`codigo_tipo`) REFERENCES `categoria` (`codigo_tipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD CONSTRAINT `fk_bitacora_administradores1` FOREIGN KEY (`codigo_administrador`) REFERENCES `administradores` (`codigo_administrador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `fk_libros_editoriales1` FOREIGN KEY (`editoriales_codigo`) REFERENCES `editoriales` (`codigo_editorial`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  ADD CONSTRAINT `fk_mantenimientos_actvos1` FOREIGN KEY (`codigo_activo`) REFERENCES `actvos` (`codigo_activo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `movimiento_actvos`
--
ALTER TABLE `movimiento_actvos`
  ADD CONSTRAINT `fk_prestamo_activos_has_actvos_actvos1` FOREIGN KEY (`codigo_activo`) REFERENCES `actvos` (`codigo_activo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_prestamo_activos_has_actvos_prestamo_activos1` FOREIGN KEY (`codigo_pactivo`) REFERENCES `prestamo_activos` (`codigo_pactivo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `movimiento_autores`
--
ALTER TABLE `movimiento_autores`
  ADD CONSTRAINT `fk_libros_has_autores_autores1` FOREIGN KEY (`codigo_autor`) REFERENCES `autores` (`codigo_autor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_libros_has_autores_libros1` FOREIGN KEY (`codigo_libro`) REFERENCES `libros` (`codigo_libro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `movimiento_libros`
--
ALTER TABLE `movimiento_libros`
  ADD CONSTRAINT `fk_libros_has_prestamo_libros_libros1` FOREIGN KEY (`codigo_libro`) REFERENCES `libros` (`codigo_libro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_libros_has_prestamo_libros_prestamo_libros1` FOREIGN KEY (`codigo_plibro`) REFERENCES `prestamo_libros` (`codigo_plibro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `movimiento_mantenimientos`
--
ALTER TABLE `movimiento_mantenimientos`
  ADD CONSTRAINT `fk_encargado_mantenimiento_has_mantenimientos_encargado_mante1` FOREIGN KEY (`codigo_emantenimiento`) REFERENCES `encargado_mantenimiento` (`codigo_emantenimiento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_encargado_mantenimiento_has_mantenimientos_mantenimientos1` FOREIGN KEY (`codigo_mantenimiento`) REFERENCES `mantenimientos` (`codigo_mantenimiento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `prestamo_activos`
--
ALTER TABLE `prestamo_activos`
  ADD CONSTRAINT `fk_prestamo_activos_usuarios1` FOREIGN KEY (`usuarios_codigo`) REFERENCES `usuarios` (`codigo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `prestamo_libros`
--
ALTER TABLE `prestamo_libros`
  ADD CONSTRAINT `fk_prestamo_libros_usuarios1` FOREIGN KEY (`codigo_usuario`) REFERENCES `usuarios` (`codigo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_institucion1` FOREIGN KEY (`codigo_institucion`) REFERENCES `institucion` (`codigo_institucion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
