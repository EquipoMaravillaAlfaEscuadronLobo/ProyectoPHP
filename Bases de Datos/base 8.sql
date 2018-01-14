-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-01-2018 a las 19:10:36
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `diseno1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actvos`
--

CREATE TABLE `actvos` (
  `codigo_activo` varchar(16) NOT NULL,
  `codigo_tipo` varchar(13) NOT NULL,
  `codigo_proveedor` int(11) NOT NULL,
  `codigo_detalle` int(11) NOT NULL,
  `codigo_administrador` varchar(20) NOT NULL,
  `fecha_adquicision` date DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `foto` longblob,
  `observacion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actvos`
--

INSERT INTO `actvos` (`codigo_activo`, `codigo_tipo`, `codigo_proveedor`, `codigo_detalle`, `codigo_administrador`, `fecha_adquicision`, `precio`, `estado`, `foto`, `observacion`) VALUES
('CEJ-001-001-0001', 'CEJ-001-001', 1, 1, 'admin01', '0000-00-00', 10, 1, '', '1'),
('CEJ-001-001-0002', 'CEJ-001-001', 1, 2, 'admin01', '0000-00-00', 10, 1, '', '1'),
('CEJ-001-001-0003', 'CEJ-001-001', 1, 3, 'admin01', '0000-00-00', 10, 1, '', '1'),
('CEJ-001-001-0004', 'CEJ-001-001', 1, 4, 'admin01', '0000-00-00', 10, 1, '', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `codigo_administrador` varchar(15) NOT NULL,
  `pasword` varchar(255) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `fecha` varchar(35) DEFAULT NULL,
  `apellido` varchar(25) DEFAULT NULL,
  `sexo` tinyint(1) DEFAULT NULL,
  `dui` varchar(11) DEFAULT NULL,
  `foto` longblob,
  `estado` int(11) DEFAULT NULL,
  `observacion` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`codigo_administrador`, `pasword`, `nivel`, `nombre`, `email`, `fecha`, `apellido`, `sexo`, `dui`, `foto`, `estado`, `observacion`) VALUES
('admin01', '$2y$10$2rho0MAZ5MwLDYw851GwB.6eHCBN0gIKsWJboakQ6epu1IOqsjphy', 0, 'nombre', 'correo@gmail.com', '1995-11-17', 'apellido', 0, '00000000-0', 0x61646d692e706e67, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `codigo_autor` int(11) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `apellido` varchar(25) DEFAULT NULL,
  `nacimiento` date DEFAULT NULL,
  `biografia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='	';

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`codigo_autor`, `nombre`, `apellido`, `nacimiento`, `biografia`) VALUES
(1, 'Alfredo', 'Espino', '1900-01-08', 'MAPA_WEB_4.0.pdf'),
(2, 'Miguel Angel', 'Espino', '1902-12-17', 'mysql.pdf'),
(3, 'Alberto', 'Masferrer', '1868-07-24', 'Practica Evaluada.pdf'),
(4, 'Salvador Salazar', 'Arrue', '1870-01-19', 'mysql.pdf'),
(5, 'Hugo', 'Aguirre', '1943-01-19', 'portal[1]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `codigo_bitacora` int(11) NOT NULL,
  `codigo_administrador` varchar(15) NOT NULL,
  `accion` varchar(1000) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `codigo_tipo` varchar(13) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`codigo_tipo`, `nombre`) VALUES
('CEJ-001-001', 'sillas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles`
--

CREATE TABLE `detalles` (
  `codigo_detalle` int(11) NOT NULL,
  `serie` varchar(50) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `marca` varchar(30) DEFAULT NULL,
  `modelo` varchar(30) DEFAULT NULL,
  `ram` varchar(30) DEFAULT NULL,
  `memoria` varchar(50) DEFAULT NULL,
  `sistema` varchar(30) DEFAULT NULL,
  `dimensiones` varchar(50) DEFAULT NULL,
  `foto` binary(1) DEFAULT NULL,
  `otros` text,
  `procesador` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalles`
--

INSERT INTO `detalles` (`codigo_detalle`, `serie`, `color`, `marca`, `modelo`, `ram`, `memoria`, `sistema`, `dimensiones`, `foto`, `otros`, `procesador`) VALUES
(1, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(2, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(3, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(4, 'Sin Numero de Serie', 'blancas', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editoriales`
--

CREATE TABLE `editoriales` (
  `codigo_editorial` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `pais` varchar(10) DEFAULT NULL,
  `email` varchar(15) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `editoriales`
--

INSERT INTO `editoriales` (`codigo_editorial`, `nombre`, `direccion`, `pais`, `email`, `telefono`) VALUES
(1, 'Oceano', 'San Salvador, El Salvador', NULL, 'oceano@correo.c', '2939-8999'),
(2, 'Harday Electric ', 'San Vicente, El Salvador', NULL, 'harday@gmail.co', '4829-3298');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encargado_mantenimiento`
--

CREATE TABLE `encargado_mantenimiento` (
  `codigo_emantenimiento` int(11) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `correo` varchar(35) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `codigo_institucion` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`codigo_institucion`, `nombre`) VALUES
(1, 'Sin Institucion'),
(2, 'Instituto Nacional Dr. Sarbelio Navarrete'),
(3, 'Universidad Nacional de El Salvador'),
(4, 'Centro escolar Presbitero Norberto Marroquí'),
(5, 'Centro Escolar Guadalupe Cárcamo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `codigo_libro` varchar(45) NOT NULL,
  `editoriales_codigo` int(11) NOT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `estado` varchar(25) DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  `foto` longblob,
  `motivo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`codigo_libro`, `editoriales_codigo`, `titulo`, `estado`, `fecha_publicacion`, `foto`, `motivo`) VALUES
('CEJ-002-010-BI-0001-0001', 1, 'Biografias', '0', '2018-01-07', 0x313035393030305f797567696f682d77616c6c7061706572732d77616c6c7061706572732d636176655f3139323078313230305f682e6a7067, ''),
('CEJ-002-010-BI-0001-0002', 1, 'Biografias', '1', '2018-01-07', 0x313035393030305f797567696f682d77616c6c7061706572732d77616c6c7061706572732d636176655f3139323078313230305f682e6a7067, 'Dañado'),
('CEJ-002-010-BI-0001-0003', 1, 'Biografias', '0', '2018-01-07', 0x313035393030305f797567696f682d77616c6c7061706572732d77616c6c7061706572732d636176655f3139323078313230305f682e6a7067, ''),
('CEJ-002-010-BI-0001-0004', 1, 'Biografias', '0', '2018-01-07', 0x313035393030305f797567696f682d77616c6c7061706572732d77616c6c7061706572732d636176655f3139323078313230305f682e6a7067, ''),
('CEJ-002-010-BI-0001-0005', 1, 'Biografias', '0', '2018-01-07', 0x313035393030305f797567696f682d77616c6c7061706572732d77616c6c7061706572732d636176655f3139323078313230305f682e6a7067, ''),
('CEJ-002-010-BI-0001-0006', 1, 'Biografias', '0', '2018-01-07', 0x313035393030305f797567696f682d77616c6c7061706572732d77616c6c7061706572732d636176655f3139323078313230305f682e6a7067, ''),
('CEJ-002-010-BI-0001-0007', 1, 'Biografias', '0', '2018-01-07', 0x313035393030305f797567696f682d77616c6c7061706572732d77616c6c7061706572732d636176655f3139323078313230305f682e6a7067, ''),
('CEJ-002-010-BI-0001-0008', 1, 'Biografias', '0', '2018-01-07', 0x313035393030305f797567696f682d77616c6c7061706572732d77616c6c7061706572732d636176655f3139323078313230305f682e6a7067, ''),
('CEJ-002-010-BI-0001-0009', 1, 'Biografias', '0', '2018-01-07', 0x313035393030305f797567696f682d77616c6c7061706572732d77616c6c7061706572732d636176655f3139323078313230305f682e6a7067, ''),
('CEJ-002-010-BI-0001-0010', 1, 'Biografias', '0', '2018-01-07', 0x313035393030305f797567696f682d77616c6c7061706572732d77616c6c7061706572732d636176655f3139323078313230305f682e6a7067, ''),
('CEJ-002-010-BI-0001-0011', 1, 'Biografias', '0', '2018-01-07', 0x313035393030305f797567696f682d77616c6c7061706572732d77616c6c7061706572732d636176655f3139323078313230305f682e6a7067, ''),
('CEJ-002-010-BI-0001-0012', 1, 'Biografias', '0', '2018-01-07', 0x313035393030305f797567696f682d77616c6c7061706572732d77616c6c7061706572732d636176655f3139323078313230305f682e6a7067, ''),
('CEJ-002-010-BI-0001-0013', 1, 'Biografias', '0', '2018-01-07', 0x313035393030305f797567696f682d77616c6c7061706572732d77616c6c7061706572732d636176655f3139323078313230305f682e6a7067, ''),
('CEJ-002-010-BI-0001-0014', 1, 'Biografias', '0', '2018-01-07', 0x313035393030305f797567696f682d77616c6c7061706572732d77616c6c7061706572732d636176655f3139323078313230305f682e6a7067, ''),
('CEJ-002-010-BI-0001-0015', 1, 'Biografias', '0', '2018-01-07', 0x313035393030305f797567696f682d77616c6c7061706572732d77616c6c7061706572732d636176655f3139323078313230305f682e6a7067, ''),
('CEJ-002-390-CU-0001-0001', 1, 'Cuento de Barros', '0', '2018-01-05', 0x30302e6a7067, ''),
('CEJ-002-390-CU-0001-0002', 1, 'Cuento de Barros', '0', '2018-01-05', 0x30302e6a7067, ''),
('CEJ-002-390-CU-0001-0003', 1, 'Cuento de Barros', '0', '2018-01-05', 0x30302e6a7067, ''),
('CEJ-002-390-CU-0001-0004', 1, 'Cuento de Barros', '0', '2018-01-05', 0x30302e6a7067, ''),
('CEJ-002-890-JI-0001-0001', 1, 'Jicaras Tristes', '0', '2001-01-04', 0x457370696e6f32303030312e6a7067, ''),
('CEJ-002-890-JI-0001-0002', 1, 'Jicaras Tristes', '0', '2001-01-04', 0x457370696e6f32303030312e6a7067, ''),
('CEJ-002-890-JI-0001-0003', 1, 'Jicaras Tristes', '0', '2001-01-04', 0x457370696e6f32303030312e6a7067, ''),
('CEJ-002-890-JI-0001-0004', 1, 'Jicaras Tristes', '0', '2001-01-04', 0x457370696e6f32303030312e6a7067, ''),
('CEJ-002-890-PA-0001-0001', 1, 'Papirusa', '0', '2018-01-01', 0x436170747572612064652070616e74616c6c61202831292e706e67, ''),
('CEJ-002-890-PA-0001-0002', 1, 'Papirusa', '0', '2018-01-01', 0x436170747572612064652070616e74616c6c61202831292e706e67, ''),
('CEJ-002-890-PA-0001-0003', 1, 'Papirusa', '0', '2018-01-01', 0x436170747572612064652070616e74616c6c61202831292e706e67, ''),
('CEJ-002-980-OT-0001-0001', 1, 'otro libro', '0', '2018-01-01', 0x436170747572612064652070616e74616c6c61202838292e706e67, NULL),
('CEJ-002-980-OT-0001-0002', 1, 'otro libro', '0', '2018-01-01', 0x436170747572612064652070616e74616c6c61202838292e706e67, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimientos`
--

CREATE TABLE `mantenimientos` (
  `codigo_mantenimiento` int(11) NOT NULL,
  `codigo_activo` varchar(16) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `descripcion` text,
  `costo` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento_actvos`
--

CREATE TABLE `movimiento_actvos` (
  `codigo_activo` varchar(16) NOT NULL,
  `codigo_pactivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento_actvos_mant`
--

CREATE TABLE `movimiento_actvos_mant` (
  `codigo_activo` varchar(16) NOT NULL,
  `codigo_mantenimiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento_autores`
--

CREATE TABLE `movimiento_autores` (
  `codigo_libro` varchar(45) NOT NULL,
  `codigo_autor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `movimiento_autores`
--

INSERT INTO `movimiento_autores` (`codigo_libro`, `codigo_autor`) VALUES
('CEJ-002-890-JI-0001-0001', 1),
('CEJ-002-890-JI-0001-0002', 1),
('CEJ-002-890-JI-0001-0003', 1),
('CEJ-002-890-JI-0001-0004', 1),
('CEJ-002-390-CU-0001-0001', 4),
('CEJ-002-390-CU-0001-0002', 4),
('CEJ-002-390-CU-0001-0003', 4),
('CEJ-002-390-CU-0001-0004', 4),
('CEJ-002-010-BI-0001-0001', 3),
('CEJ-002-010-BI-0001-0002', 3),
('CEJ-002-010-BI-0001-0003', 3),
('CEJ-002-010-BI-0001-0004', 3),
('CEJ-002-010-BI-0001-0005', 3),
('CEJ-002-010-BI-0001-0006', 3),
('CEJ-002-010-BI-0001-0007', 3),
('CEJ-002-010-BI-0001-0008', 3),
('CEJ-002-010-BI-0001-0009', 3),
('CEJ-002-010-BI-0001-0010', 3),
('CEJ-002-010-BI-0001-0011', 3),
('CEJ-002-010-BI-0001-0012', 3),
('CEJ-002-010-BI-0001-0013', 3),
('CEJ-002-010-BI-0001-0014', 3),
('CEJ-002-010-BI-0001-0015', 3),
('CEJ-002-890-PA-0001-0001', 2),
('CEJ-002-890-PA-0001-0001', 4),
('CEJ-002-890-PA-0001-0002', 2),
('CEJ-002-890-PA-0001-0002', 4),
('CEJ-002-890-PA-0001-0003', 2),
('CEJ-002-890-PA-0001-0003', 4),
('CEJ-002-980-OT-0001-0001', 1),
('CEJ-002-980-OT-0001-0002', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento_libros`
--

CREATE TABLE `movimiento_libros` (
  `codigo_libro` varchar(45) NOT NULL,
  `codigo_plibro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento_mantenimientos`
--

CREATE TABLE `movimiento_mantenimientos` (
  `codigo_emantenimiento` int(11) NOT NULL,
  `codigo_mantenimiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo_activos`
--

CREATE TABLE `prestamo_activos` (
  `codigo_pactivo` int(11) NOT NULL,
  `usuarios_codigo` varchar(45) NOT NULL,
  `observacion` text,
  `fecha_salida` datetime DEFAULT NULL,
  `fecha_devolucion` date DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo_libros`
--

CREATE TABLE `prestamo_libros` (
  `codigo_plibro` int(11) NOT NULL,
  `codigo_usuario` varchar(15) NOT NULL,
  `observaciones` varchar(100) DEFAULT NULL,
  `fecha_devolucion` date DEFAULT NULL,
  `fecha_salida` datetime DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `codigo_proveedor` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `apellido` varchar(40) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `correo` varchar(35) DEFAULT NULL,
  `fax` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`codigo_proveedor`, `nombre`, `apellido`, `direccion`, `telefono`, `correo`, `fax`) VALUES
(1, 'sillitas', NULL, 'san vicente, el salvador', '2342-0349', 'sdjfsdjk@fjdnj.com', 'Sin Fax');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recuperacion`
--

CREATE TABLE `recuperacion` (
  `idrecuperacion` int(11) NOT NULL,
  `codigo_administrador` varchar(15) NOT NULL,
  `url_secreta` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
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
  `motivo_eliminacion` varchar(150) DEFAULT NULL,
  `observaciones` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`codigo_usuario`, `codigo_institucion`, `nombre`, `apellido`, `telefono`, `correo`, `direccion`, `foto`, `sexo`, `estado`, `motivo_eliminacion`, `observaciones`) VALUES
('AC18-7', 4, 'Alex Francisco ', 'Callejas Morales', '7342-4729', 'jhutado@idomas.udea.edu.com', ' Centro Pinero Matamoros No 71', 0x3663616c6c656a612e6a7067, 'Masculino', 1, NULL, ''),
('BM18-17', 4, 'Boris Ricardo', 'Miranda Ayala', '3844-4444', 'michael.keller@udp.cl', ' Carr. A Ojitlan No. 951-A Col. 5 De Mayo Tuxtepec', 0x3136626f7269732e6a7067, 'Masculino', 1, NULL, ''),
('BM18-18', 5, 'Benjamin', 'Monterrosa Delgado', '7739-3933', 'vkunstmann@gmail.com', ' Avenida 3 Calle 2 Fraccionamiento Costa Verde', 0x31376d6f6e74652e6a7067, 'Masculino', 1, NULL, ''),
('CA18-3', 5, 'Carlos Gilberto', 'Alvarez Landaverde', '7755-2235', 'dcanas@idiomas.udea.edu.co', ' Principal S/N. Temazcal. Sn.Miguel Soyaltepec', 0x326361726c6f732067696c626572742e6a7067, 'Masculino', 1, NULL, ''),
('CM18-19', 2, 'Carlos David', 'Morales Orellana', '3840-3848', 'carmenluzlabbe@gmail.com', 'Calle Sebastian Ortiz No 690 Centro Tuxtepec', 0x31386d6f72616c65732e6a7067, 'Masculino', 1, NULL, ''),
('CT18-25', 3, 'Carlos Antonio', 'Torres Martínez', '7484-4938', 'lorerlv@hotmail.com', ' Av.Independencia No 672 Centro Tuxtepec', 0x3234627562612e6a7067, 'Masculino', 1, NULL, ''),
('DA18-4', 2, 'Deyvis Antonio', 'Ayala Gomez ', '7422-4421', 'julianaparis@hotmail.com', 'Av. Independencia No. 1457 Col.La Piragua Tuxtepec', 0x336465797669732e6a7067, 'Masculino', 1, NULL, ''),
('FO18-12', 3, 'Franco Alvarado', 'Oscar Adonay', '7394-3939', 'MPULIDO@LATINMAIL.COM', 'Boulevard Benito Juarez Esq. Independencia La Piragua', 0x31316672616e636f2e6a7067, 'Masculino', 1, NULL, ''),
('GD18-11', 1, 'Gerson Bladimir', 'Durán González', '3742-3829', 'andresiocarga@hotmail.com', ' Miguel Hidalgo No 689 Lazaro Cardenas Tuxtepec', 0x31307465746f2e6a7067, 'Masculino', 1, NULL, ''),
('GH18-13', 2, 'Gercia Melina', 'Hernández Castillo', '8392-8382', 'yessy_39@hotmail.com', ' Av. 5 De Mayo No. 1400 Col.Centro Tuxtepec.Oax.', 0x31326772656369612e6a7067, 'Femenino', 1, NULL, ''),
('HR18-23', 5, 'Harvin Jeffeth', 'Ramos Alvarado', '7349-3383', 'rlillo_2000@hotmail.com', ' Matamoros No 149 Centro Tuxtepec', 0x323268617276692e6a7067, 'Masculino', 1, NULL, ''),
('JA18-1', 3, 'Jenniffer Joanna', 'Abarca', '2449-7352', 'juribe@idiomas.udea.edu.co', 'Calle Agustin Lara No. 69-B Col. Ex-Normal Tuxtepec', 0x306a6f616e612e6a7067, 'Femenino', 1, NULL, ''),
('JA18-2', 3, 'Josué Alfredo', 'Alfaro Cruz', '7633-3332', 'hersy@epm.net.co', ' Av. Principal S/N. Temascal', 0x316a6f736520616c667265646f2e6a7067, 'Masculino', 1, NULL, ''),
('JB18-6', 4, 'Juan Antonio', 'Bautista Peres Callejas M', '7234-0987', 'aguevara@idiomas.udea.edu.com', ' Prol. Av 5 De Mayo No 109 Maria Eugenia Tuxepec', 0x35746f6e792e6a7067, 'Masculino', 1, NULL, ''),
('JM18-20', 1, 'Juan Carlos', 'Moz Alfaro', '7939-3838', 'escobilla3carretes@hotmail.com', ' C 1O De Mayo No 4 Ampl.Mexico Loma Bonita', 0x31396d6f7a2e6a7067, 'Masculino', 1, NULL, ''),
('MC18-8', 2, 'Magdalena Del Carmen', 'Cordova Flores', '7349-3820', 'juandavidlopez@ubicar.com', ' Matamoros 40 Centro', 0x376d616764616c656e612e6a7067, 'Masculino', 1, NULL, ''),
('MC18-9', 5, 'Mirian Mabel', 'Cornejo Portillo', '2349-2838', 'vivian_981@yahoo.com', 'Benito Juarez 25 Centro', 0x386d6162656c2e6a7067, 'Masculino', 1, NULL, ''),
('MH18-14', 3, 'Marvin Josué', 'Hérnandez Diaz', '7204-3832', 'reinald_34@hotmail.com', ' Av. Libertad No. 1961 Col. La Piragua Tuxtepec', 0x31336d617276696e2e6a7067, 'Masculino', 1, NULL, ''),
('MM18-15', 2, 'Marcos Antonio', 'Martínez Vásquez', '3744-3832', 'jferdusi@terra.com', ' Av. 5 De Mayo Esq. Matamoros No 1070 Centro Tuxtepec', 0x31346d6172636f732e6a7067, 'Masculino', 1, NULL, ''),
('MQ18-22', 4, 'Mayra Beatriz', 'Quintanilla Guzmán', '7843-3834', 'amarantasol@gmail.com', 'Mariano Arista No 454 Centro Tuxtepec', 0x32316d617972612e6a7067, 'Masculino', 1, NULL, ''),
('RM18-16', 3, 'Rina de la Paz', 'Melgar Peña', '7369-3833', 'verocakatalinic@hotmail.com', ' Aldama No 1212 Lazaro Cardenas Tuxtepec', 0x313572696e612e6a7067, 'Femenino', 1, NULL, ''),
('RV18-26', 5, 'Romario Abelardo', 'Villalobos Rivas', '8493-8338', 'juanmaceratta@hotmail.com', 'Av. Independencia No 531 Centro Tuxtepec', 0x3235726f6d612e6a7067, 'Masculino', 1, NULL, ''),
('SR18-24', 5, 'Saúl Alfredo', 'Reyes Alvarado', '8333-3993', 'flobato.c@gmail.com', 'Av. Independencia No. 608 Col.Centro Tuxtepec.Oax.', 0x32337361756c2e6a7067, 'Masculino', 1, NULL, ''),
('VP18-21', 3, 'Verónica Concepción', 'Portillo Valladares', '8384-9984', 'glazo@mbienes.cl', ' Av. Jesus Carranza No 1651 Altos El Reposo Tuxtepec', 0x32307665726f6e6963612e6a7067, 'Masculino', 1, NULL, ''),
('WB18-5', 5, 'William Ernesto', 'Barrera Abarca', '2234-2234', 'juanspider39@hotmail.com', ' Av. 5 De Mayo No. 551 Col.Centro Tuxtepec', 0x3477696c6c69616d206865726e6573746f2e6a7067, 'Masculino', 1, NULL, ''),
('YC18-10', 3, 'Yanci Steeffany', 'Cubias Flores', '7394-3849', 'vivian_981@yahoo.com', 'Blvd. Benito Juarez No. 197-A Col.Oaxaca Tuxtepec', 0x3979616e63792e6a7067, 'Masculino', 1, NULL, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actvos`
--
ALTER TABLE `actvos`
  ADD PRIMARY KEY (`codigo_activo`),
  ADD KEY `fk_actvos_proveedores1_idx` (`codigo_proveedor`),
  ADD KEY `fk_actvos_detalles1_idx` (`codigo_detalle`),
  ADD KEY `fk_actvos_tipo_activo1_idx` (`codigo_tipo`),
  ADD KEY `fk_actvos_administradores1_idx` (`codigo_administrador`);

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`codigo_administrador`);

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`codigo_autor`);

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`codigo_bitacora`),
  ADD KEY `fk_bitacora_administradores1_idx` (`codigo_administrador`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`codigo_tipo`);

--
-- Indices de la tabla `detalles`
--
ALTER TABLE `detalles`
  ADD PRIMARY KEY (`codigo_detalle`);

--
-- Indices de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  ADD PRIMARY KEY (`codigo_editorial`);

--
-- Indices de la tabla `encargado_mantenimiento`
--
ALTER TABLE `encargado_mantenimiento`
  ADD PRIMARY KEY (`codigo_emantenimiento`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`codigo_institucion`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`codigo_libro`),
  ADD KEY `fk_libros_editoriales1_idx` (`editoriales_codigo`);

--
-- Indices de la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  ADD PRIMARY KEY (`codigo_mantenimiento`),
  ADD KEY `fk_mantenimientos_actvos1_idx` (`codigo_mantenimiento`) USING BTREE,
  ADD KEY `fk_mant_act` (`codigo_activo`);

--
-- Indices de la tabla `movimiento_actvos`
--
ALTER TABLE `movimiento_actvos`
  ADD KEY `fk_prestamo_activos_has_actvos_actvos1_idx` (`codigo_activo`),
  ADD KEY `fk_prestamo_activos_has_actvos_prestamo_activos1_idx` (`codigo_pactivo`);

--
-- Indices de la tabla `movimiento_actvos_mant`
--
ALTER TABLE `movimiento_actvos_mant`
  ADD KEY `fk_mantenimientos_mantenimiento_has_actvos_actvos2_idx` (`codigo_activo`),
  ADD KEY `fk_actvos_has_mantenimientos_actvos2_idx` (`codigo_mantenimiento`);

--
-- Indices de la tabla `movimiento_autores`
--
ALTER TABLE `movimiento_autores`
  ADD KEY `fk_libros_has_autores_autores1_idx` (`codigo_autor`),
  ADD KEY `fk_libros_has_autores_libros1_idx` (`codigo_libro`);

--
-- Indices de la tabla `movimiento_libros`
--
ALTER TABLE `movimiento_libros`
  ADD KEY `fk_libros_has_prestamo_libros_prestamo_libros1_idx` (`codigo_plibro`),
  ADD KEY `fk_libros_has_prestamo_libros_libros1_idx` (`codigo_libro`);

--
-- Indices de la tabla `movimiento_mantenimientos`
--
ALTER TABLE `movimiento_mantenimientos`
  ADD KEY `fk_encargado_mantenimiento_has_mantenimientos_mantenimiento_idx` (`codigo_mantenimiento`),
  ADD KEY `fk_encargado_mantenimiento_has_mantenimientos_encargado_man_idx` (`codigo_emantenimiento`);

--
-- Indices de la tabla `prestamo_activos`
--
ALTER TABLE `prestamo_activos`
  ADD PRIMARY KEY (`codigo_pactivo`),
  ADD KEY `fk_prestamo_activos_usuarios1_idx` (`usuarios_codigo`);

--
-- Indices de la tabla `prestamo_libros`
--
ALTER TABLE `prestamo_libros`
  ADD PRIMARY KEY (`codigo_plibro`),
  ADD KEY `fk_prestamo_libros_usuarios1_idx` (`codigo_usuario`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`codigo_proveedor`);

--
-- Indices de la tabla `recuperacion`
--
ALTER TABLE `recuperacion`
  ADD PRIMARY KEY (`idrecuperacion`),
  ADD KEY `fk_recuperacion` (`codigo_administrador`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`codigo_usuario`),
  ADD KEY `fk_usuarios_institucion1_idx` (`codigo_institucion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autores`
--
ALTER TABLE `autores`
  MODIFY `codigo_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `codigo_bitacora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT de la tabla `detalles`
--
ALTER TABLE `detalles`
  MODIFY `codigo_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  MODIFY `codigo_editorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `encargado_mantenimiento`
--
ALTER TABLE `encargado_mantenimiento`
  MODIFY `codigo_emantenimiento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `codigo_institucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  MODIFY `codigo_mantenimiento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `prestamo_activos`
--
ALTER TABLE `prestamo_activos`
  MODIFY `codigo_pactivo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `prestamo_libros`
--
ALTER TABLE `prestamo_libros`
  MODIFY `codigo_plibro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `codigo_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `recuperacion`
--
ALTER TABLE `recuperacion`
  MODIFY `idrecuperacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actvos`
--
ALTER TABLE `actvos`
  ADD CONSTRAINT `fk_act_adm` FOREIGN KEY (`codigo_administrador`) REFERENCES `administradores` (`codigo_administrador`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_act_det` FOREIGN KEY (`codigo_detalle`) REFERENCES `detalles` (`codigo_detalle`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_act_prov` FOREIGN KEY (`codigo_proveedor`) REFERENCES `proveedores` (`codigo_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_act_tipo` FOREIGN KEY (`codigo_tipo`) REFERENCES `categoria` (`codigo_tipo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD CONSTRAINT `fk_adm_bit` FOREIGN KEY (`codigo_administrador`) REFERENCES `administradores` (`codigo_administrador`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `fk_edit` FOREIGN KEY (`editoriales_codigo`) REFERENCES `editoriales` (`codigo_editorial`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  ADD CONSTRAINT `fk_mant_act` FOREIGN KEY (`codigo_activo`) REFERENCES `actvos` (`codigo_activo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `movimiento_actvos`
--
ALTER TABLE `movimiento_actvos`
  ADD CONSTRAINT `fk_p_act` FOREIGN KEY (`codigo_activo`) REFERENCES `actvos` (`codigo_activo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_p_act2` FOREIGN KEY (`codigo_pactivo`) REFERENCES `prestamo_activos` (`codigo_pactivo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `movimiento_actvos_mant`
--
ALTER TABLE `movimiento_actvos_mant`
  ADD CONSTRAINT `fk_mov_act` FOREIGN KEY (`codigo_activo`) REFERENCES `actvos` (`codigo_activo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_mov_mant` FOREIGN KEY (`codigo_mantenimiento`) REFERENCES `mantenimientos` (`codigo_mantenimiento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `movimiento_autores`
--
ALTER TABLE `movimiento_autores`
  ADD CONSTRAINT `fk_mov_autores` FOREIGN KEY (`codigo_libro`) REFERENCES `libros` (`codigo_libro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_mov_autores2` FOREIGN KEY (`codigo_autor`) REFERENCES `autores` (`codigo_autor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `movimiento_libros`
--
ALTER TABLE `movimiento_libros`
  ADD CONSTRAINT `fk_lib` FOREIGN KEY (`codigo_libro`) REFERENCES `libros` (`codigo_libro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_p_lib` FOREIGN KEY (`codigo_plibro`) REFERENCES `prestamo_libros` (`codigo_plibro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `movimiento_mantenimientos`
--
ALTER TABLE `movimiento_mantenimientos`
  ADD CONSTRAINT `fk_mov_emant` FOREIGN KEY (`codigo_emantenimiento`) REFERENCES `encargado_mantenimiento` (`codigo_emantenimiento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_mov_mant_en` FOREIGN KEY (`codigo_mantenimiento`) REFERENCES `mantenimientos` (`codigo_mantenimiento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `prestamo_activos`
--
ALTER TABLE `prestamo_activos`
  ADD CONSTRAINT `fk_p_user_act` FOREIGN KEY (`usuarios_codigo`) REFERENCES `usuarios` (`codigo_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `prestamo_libros`
--
ALTER TABLE `prestamo_libros`
  ADD CONSTRAINT `fk_p_user` FOREIGN KEY (`codigo_usuario`) REFERENCES `usuarios` (`codigo_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recuperacion`
--
ALTER TABLE `recuperacion`
  ADD CONSTRAINT `fk_recuperacion` FOREIGN KEY (`codigo_administrador`) REFERENCES `administradores` (`codigo_administrador`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_inst` FOREIGN KEY (`codigo_institucion`) REFERENCES `institucion` (`codigo_institucion`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
