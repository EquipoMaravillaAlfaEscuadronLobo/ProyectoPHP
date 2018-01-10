-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-01-2018 a las 17:12:16
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
('admin01', '$2y$10$xC2qfFYxPbsLPtyNjO/rHuahk6Mc20G3sY3OaJxmvbI8asoQHAgg6', 0, 'Carlos', 'cartorres.95@gmail.com', '1995-11-17', 'Torres', NULL, NULL, NULL, 1, NULL);

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

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`codigo_bitacora`, `codigo_administrador`, `accion`, `fecha`) VALUES
(1, 'admin01', 'El administrador admin01(Carlos Torres) inició sesión', '2018-01-01 12:37:41'),
(2, 'admin01', 'El administrador admin01(Carlos Torres) inició sesión', '2018-01-01 12:39:52'),
(3, 'admin01', 'El administrador admin01(Carlos Torres) inició sesión', '2018-01-01 04:03:22'),
(4, 'admin01', 'El administrador admin01  cerró sesión', '2018-01-01 04:03:25'),
(5, 'admin01', 'El administrador admin01(Carlos Torres) inició sesión', '2018-01-01 04:04:34'),
(6, 'admin01', 'El administrador admin01  cerró sesión', '2018-01-01 04:04:37'),
(7, 'admin01', 'El administrador admin01(Carlos Torres) inició sesión', '2018-01-01 04:15:11'),
(8, 'admin01', 'El administrador admin01(Carlos Torres) inició sesión', '2018-01-01 07:18:05'),
(9, 'admin01', 'Se registro la siguiente institucion: indi', '2018-01-01 07:18:43'),
(10, 'admin01', 'El administrador admin01(Carlos Torres) inició sesión', '2018-01-03 02:47:55'),
(11, 'admin01', 'Se registro la siguiente institucion: karol', '2018-01-03 02:48:15'),
(12, 'admin01', 'Se registro la siguiente institucion: fdhdh', '2018-01-03 02:49:52'),
(13, 'admin01', 'Se registro la siguiente institucion: fdgbdfg', '2018-01-03 02:50:32'),
(14, 'admin01', 'Se registro la siguiente institucion: kjbjb', '2018-01-03 02:52:36'),
(15, 'admin01', 'Se registro la siguiente institucion: jkiuuiiuhi', '2018-01-03 02:53:05'),
(16, 'admin01', 'Se registro la siguiente institucion: dfvvdfvdfvd', '2018-01-03 02:53:39'),
(17, 'admin01', 'Se registro la siguiente institucion: sdcsdcsdc', '2018-01-03 02:54:49'),
(18, 'admin01', 'Se registro la siguiente institucion:  vdv dvdvd', '2018-01-03 02:55:02'),
(19, 'admin01', 'Se registro la siguiente institucion: otra mas', '2018-01-03 02:58:00'),
(20, 'admin01', 'Se registro la siguiente institucion: dfvdfvdfvdf', '2018-01-03 02:59:11'),
(21, 'admin01', 'Se registro la siguiente institucion: 111111', '2018-01-03 02:59:54'),
(22, 'admin01', 'Se registro la siguiente institucion: dcvdfvdfv', '2018-01-03 03:00:25'),
(23, 'admin01', 'Se registro la siguiente institucion: wqeqweqweq', '2018-01-03 03:01:16'),
(24, 'admin01', 'Se registro la siguiente institucion: aaaaaaaaaaaaaa', '2018-01-03 03:08:40'),
(25, 'admin01', 'se inserto al usuario sdfsdfsdf iuiuihuh', '2018-01-03 03:11:09'),
(26, 'admin01', 'Se registro la siguiente institucion: kkkkkkk', '2018-01-03 03:11:18'),
(27, 'admin01', 'Se registro la siguiente institucion: bbbbbbbbjjnjnj', '2018-01-03 03:13:16'),
(28, 'admin01', 'Se registro la siguiente institucion: uuuuuuuuuuuuuu', '2018-01-03 03:17:49'),
(29, 'admin01', 'Se registro la siguiente institucion: qqqqqqqqqqqqqqqq', '2018-01-03 03:18:03'),
(30, 'admin01', 'se dio de baja al usuario sdfsdfsdf iuiuihuh por el siguiente motivo: xk si se medio la pinch gna', '2018-01-03 03:18:27'),
(31, 'admin01', 'Se registro a la editorial Oceano', '2018-01-04 02:14:18'),
(32, 'admin01', 'se registro al autor Alfredo Espino', '2018-01-04 02:16:06'),
(33, 'admin01', 'se hizo el registro de 4 libros con el Titulo de Jicaras Tristes', '2018-01-04 02:19:16'),
(34, 'admin01', 'Se editaron los datos del libro Jicaras Tristes', '2018-01-04 02:19:56'),
(35, 'admin01', 'se actualizaron los datos del Autor Alfredo Espino', '2018-01-04 03:12:58'),
(36, 'admin01', 'se registro al autor Miguel Angel Espino', '2018-01-04 03:15:04'),
(37, 'admin01', 'se registro al autor Alberto Masferrer', '2018-01-04 03:16:53'),
(38, 'admin01', 'se actualizaron los datos del Autor Miguel Angel Espino', '2018-01-04 03:17:22'),
(39, 'admin01', 'el usuario sdfsdfsdf iuiuihuh presto los siguientes libros  Jicaras Tristes(CEJ-002-890-JI-0001-0001) Jicaras Tristes(CEJ-002-890-JI-0001-0002)', '2018-01-05 11:03:46'),
(40, 'admin01', 'se dio de baja al libro Jicaras Tristes(CEJ-002-890-JI-0001-0001)por el siguiente motivo: Danado', '2018-01-05 11:38:47'),
(41, 'admin01', 'se dio de baja al libro Jicaras Tristes(CEJ-002-890-JI-0001-0003)por el siguiente motivo: mojado', '2018-01-05 03:22:37'),
(42, 'admin01', 'se registro al autor Salvador Salazar Arrue', '2018-01-05 03:33:39'),
(43, 'admin01', 'se hizo el registro de 4 libros con el Titulo de Cuento de Barros', '2018-01-05 03:35:11'),
(44, 'admin01', 'se dio de baja al libro Cuento de Barros(CEJ-002-390-CU-0001-0003)por el siguiente motivo: probando', '2018-01-05 03:35:36'),
(45, 'admin01', 'El administrador admin01(Carlos Torres) inició sesión', '2018-01-06 02:17:51'),
(46, 'admin01', 'se dio de baja al libro Cuento de Barros(CEJ-002-390-CU-0001-0004)por el siguiente motivo: Extraviado', '2018-01-06 03:15:11'),
(47, 'admin01', 'se dio de baja al libro Cuento de Barros(CEJ-002-390-CU-0001-0002)por el siguiente motivo: undefined', '2018-01-06 03:22:17'),
(48, 'admin01', 'se dio de baja al libro Cuento de Barros(CEJ-002-390-CU-0001-0001)por el siguiente motivo: undefined', '2018-01-06 03:30:15'),
(49, 'admin01', 'se dio de baja al libro Jicaras Tristes(CEJ-002-890-JI-0001-0001)por el siguiente motivo: undefined', '2018-01-06 03:41:45'),
(50, 'admin01', 'se dio de baja al libro Cuento de Barros(CEJ-002-390-CU-0001-0002)por el siguiente motivo: undefined', '2018-01-06 03:43:44'),
(51, 'admin01', 'se dio de baja al libro Jicaras Tristes(CEJ-002-890-JI-0001-0002)por el siguiente motivo: undefined', '2018-01-06 03:50:57'),
(52, 'admin01', 'se dio de baja al libro Jicaras Tristes(CEJ-002-890-JI-0001-0004)por el siguiente motivo: undefined', '2018-01-06 03:51:16'),
(53, 'admin01', 'se dio de baja al libro Cuento de Barros(CEJ-002-390-CU-0001-0004)por el siguiente motivo: undefined', '2018-01-06 03:51:26'),
(54, 'admin01', 'se dio de baja al libro Jicaras Tristes(CEJ-002-890-JI-0001-0003)por el siguiente motivo: undefined', '2018-01-06 03:52:24'),
(55, 'admin01', 'se dio de baja al libro Jicaras Tristes(CEJ-002-890-JI-0001-0004)por el siguiente motivo: Dañado', '2018-01-06 03:53:57'),
(56, 'admin01', 'se dio de baja al libro Cuento de Barros(CEJ-002-390-CU-0001-0003)por el siguiente motivo: undefined', '2018-01-06 04:02:36'),
(57, 'admin01', 'se dio de baja al libro Cuento de Barros(CEJ-002-390-CU-0001-0002)por el siguiente motivo: undefined', '2018-01-06 04:03:19'),
(58, 'admin01', 'se dio de baja al libro Jicaras Tristes(CEJ-002-890-JI-0001-0002)por el siguiente motivo: undefined', '2018-01-06 04:04:04'),
(59, 'admin01', 'se dio de baja al libro Cuento de Barros(CEJ-002-390-CU-0001-0001)por el siguiente motivo: undefined', '2018-01-06 04:04:35'),
(60, 'admin01', 'se dio de baja al libro Cuento de Barros(CEJ-002-390-CU-0001-0001)por el siguiente motivo: undefined', '2018-01-06 05:03:59'),
(61, 'admin01', 'se dio de baja al libro Jicaras Tristes(CEJ-002-890-JI-0001-0001)por el siguiente motivo: undefined', '2018-01-06 05:04:32'),
(62, 'admin01', 'se dio de baja al libro Cuento de Barros(CEJ-002-390-CU-0001-0002)por el siguiente motivo: undefined', '2018-01-06 05:06:19'),
(63, 'admin01', 'se dio de baja al libro Jicaras Tristes(CEJ-002-890-JI-0001-0003)por el siguiente motivo: otro', '2018-01-06 05:07:28'),
(64, 'admin01', 'se dio de baja al libro Cuento de Barros(CEJ-002-390-CU-0001-0002)por el siguiente motivo: donado', '2018-01-06 05:09:48'),
(65, 'admin01', 'se dio de baja al libro Jicaras Tristes(CEJ-002-890-JI-0001-0002)por el siguiente motivo: Dañado', '2018-01-06 05:10:05'),
(66, 'admin01', 'se dio de baja al libro Cuento de Barros(CEJ-002-390-CU-0001-0004)por el siguiente motivo: Extraviado', '2018-01-06 05:10:14'),
(67, 'admin01', 'El administrador admin01(Carlos Torres) inició sesión', '2018-01-07 08:43:24'),
(68, 'admin01', 'se dio de baja al libro Cuento de Barros(CEJ-002-390-CU-0001-0003)por el siguiente motivo: Dañado', '2018-01-07 08:47:02'),
(69, 'admin01', 'se dio de baja al libro Cuento de Barros(CEJ-002-390-CU-0001-0001)por el siguiente motivo: Extraviado', '2018-01-07 08:47:12'),
(70, 'admin01', 'El administrador admin01(Carlos Torres) inició sesión', '2018-01-08 09:37:39'),
(71, 'admin01', 'se hizo el registro de 3 libros con el Titulo de Biografias', '2018-01-08 10:13:43'),
(72, 'admin01', 'se hizo el registro de 3 libros con el Titulo de Biografias', '2018-01-08 10:13:45'),
(73, 'admin01', 'se hizo el registro de 3 libros con el Titulo de Biografias', '2018-01-08 10:13:45'),
(74, 'admin01', 'se hizo el registro de 3 libros con el Titulo de Biografias', '2018-01-08 10:13:45'),
(75, 'admin01', 'Se registro la siguiente institucion: jklkmlkjknjknj', '2018-01-08 10:18:50'),
(76, 'admin01', 'se hizo el registro de 3 libros con el Titulo de Biografias', '2018-01-08 10:22:41'),
(77, 'admin01', 'se hizo el registro de 3 libros con el Titulo de Papirusa', '2018-01-08 10:24:57'),
(78, 'admin01', 'se hizo el registro de 2 libros con el Titulo de otro libro', '2018-01-08 10:27:49'),
(79, 'admin01', 'se registro al autor Hugo Aguirre', '2018-01-08 10:31:28'),
(80, 'admin01', 'Se registro a la editorial Harday Electric ', '2018-01-08 10:32:14'),
(81, 'admin01', 'el usuario sdfsdfsdf iuiuihuh finalizo su prestamo, con la siguiente observación: null', '2018-01-08 10:52:43'),
(82, 'admin01', 'el usuario sdfsdfsdf iuiuihuh finalizo su prestamo, con la siguiente observación: null', '2018-01-08 10:57:43'),
(83, 'admin01', 'el usuario sdfsdfsdf iuiuihuh finalizo su prestamo, con la siguiente observación: null', '2018-01-08 10:58:38'),
(84, 'admin01', 'el usuario sdfsdfsdf iuiuihuh finalizo su prestamo, con la siguiente observación: null', '2018-01-08 11:05:40'),
(85, 'admin01', 'el usuario sdfsdfsdf iuiuihuh finalizo su prestamo, con la siguiente observación: null', '2018-01-08 11:08:12'),
(86, 'admin01', 'el usuario sdfsdfsdf iuiuihuh finalizo su prestamo, con la siguiente observación: null', '2018-01-08 11:09:50'),
(87, 'admin01', 'el usuario sdfsdfsdf iuiuihuh finalizo su prestamo, con la siguiente observación: null', '2018-01-08 11:11:13'),
(88, 'admin01', 'el usuario sdfsdfsdf iuiuihuh finalizo su prestamo, con la siguiente observación: null', '2018-01-08 11:11:55'),
(89, 'admin01', 'el usuario sdfsdfsdf iuiuihuh finalizo su prestamo, con la siguiente observación: null', '2018-01-08 11:14:02'),
(90, 'admin01', 'el usuario sdfsdfsdf iuiuihuh finalizo su prestamo, con la siguiente observación: null', '2018-01-08 11:17:23'),
(91, 'admin01', 'el usuario sdfsdfsdf iuiuihuh finalizo su prestamo, con la siguiente observación: null', '2018-01-08 11:19:00'),
(92, 'admin01', 'el usuario sdfsdfsdf iuiuihuh finalizo su prestamo, con la siguiente observación: null', '2018-01-08 11:19:38'),
(93, 'admin01', 'se dio de baja al libro Biografias(CEJ-002-010-BI-0001-0006)por el siguiente motivo: ', '2018-01-08 11:30:57'),
(94, 'admin01', 'el usuario sdfsdfsdf iuiuihuh finalizo su prestamo, con la siguiente observación: ', '2018-01-08 11:34:22'),
(95, 'admin01', 'el usuario sdfsdfsdf iuiuihuh finalizo su prestamo, con la siguiente observación: null', '2018-01-08 11:34:54'),
(96, 'admin01', 'el usuario sdfsdfsdf iuiuihuh finalizo su prestamo, con la siguiente observación: Sin Problemas', '2018-01-08 11:36:14'),
(97, 'admin01', 'el usuario sdfsdfsdf iuiuihuh presto los siguientes libros  Biografias(CEJ-002-010-BI-0001-0001) ()', '2018-01-08 03:02:36'),
(98, 'admin01', 'el usuario sdfsdfsdf iuiuihuh presto los siguientes libros  Biografias(CEJ-002-010-BI-0001-0002) Papirusa(CEJ-002-890-PA-0001-0002)', '2018-01-08 03:04:43'),
(99, 'admin01', 'el usuario sdfsdfsdf iuiuihuh presto los siguientes libros  Jicaras Tristes(CEJ-002-890-JI-0001-0001)', '2018-01-08 03:09:41'),
(100, 'admin01', 'El administrador admin01(Carlos Torres) inició sesión', '2018-01-09 02:15:36'),
(101, 'admin01', 'El administrador admin01(Carlos Torres) inició sesión', '2018-01-10 09:14:50'),
(102, 'admin01', 'El administrador admin01(Carlos Torres) inició sesión', '2018-01-10 09:38:33'),
(103, 'admin01', 'se registro la siguiente tipo de activos: sillas', '2018-01-10 09:43:29'),
(104, 'admin01', 'se registro al siguiente proveedor:sillitas, con dirección san vicente, el salvador y teléfono 2342-0349', '2018-01-10 09:44:12'),
(105, 'admin01', 'se registraron 4 item tipo sillas con las siguientes características: color blancas, marca Sin Marca, dimensiones Sin Dimenciones, sistema operativo Sin Sistema Operativo, Memoria Ram Sin Memoria Ram, Modelo Sin Modelo', '2018-01-10 09:45:49'),
(106, 'admin01', 'se hizo el registro de  libros con el Titulo de ', '2018-01-10 10:00:21'),
(107, 'admin01', 'se dio de baja al libro Biografias(CEJ-002-010-BI-0001-0002)por el siguiente motivo: Dañado', '2018-01-10 10:02:30');

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
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`codigo_institucion`, `nombre`) VALUES
(1, 'indi'),
(2, 'karol'),
(3, 'fdhdh'),
(4, 'fdgbdfg'),
(5, 'kjbjb'),
(6, 'jkiuuiiuhi'),
(7, 'dfvvdfvdfvd'),
(8, 'sdcsdcsdc'),
(9, ' vdv dvdvd'),
(10, 'otra mas'),
(11, 'dfvdfvdfvdf'),
(12, '111111'),
(13, 'dcvdfvdfv'),
(14, 'wqeqweqweq'),
(15, 'aaaaaaaaaaaaaa'),
(16, 'kkkkkkk'),
(17, 'bbbbbbbbjjnjnj'),
(18, 'uuuuuuuuuuuuuu'),
(19, 'qqqqqqqqqqqqqqqq'),
(20, 'jklkmlkjknjknj');

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

--
-- Volcado de datos para la tabla `movimiento_libros`
--

INSERT INTO `movimiento_libros` (`codigo_libro`, `codigo_plibro`) VALUES
('CEJ-002-890-JI-0001-0001', 1),
('CEJ-002-890-JI-0001-0002', 1),
('CEJ-002-010-BI-0001-0001', 2),
('CEJ-002-010-BI-0001-0002', 3),
('CEJ-002-890-PA-0001-0002', 3),
('CEJ-002-890-JI-0001-0001', 4);

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

--
-- Volcado de datos para la tabla `prestamo_libros`
--

INSERT INTO `prestamo_libros` (`codigo_plibro`, `codigo_usuario`, `observaciones`, `fecha_devolucion`, `fecha_salida`, `estado`) VALUES
(1, 'SI17-1', 'Sin Problemas', '2018-01-18', '2018-01-05 00:00:00', 1),
(2, 'SI17-1', NULL, '2018-01-19', '2018-01-08 00:00:00', 0),
(3, 'SI17-1', NULL, '2018-01-27', '2018-01-08 00:00:00', 0),
(4, 'SI17-1', NULL, '2018-01-13', '2018-01-08 00:00:00', 0);

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
  `observaciones` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`codigo_usuario`, `codigo_institucion`, `nombre`, `apellido`, `telefono`, `correo`, `direccion`, `foto`, `sexo`, `estado`, `observaciones`) VALUES
('SI17-1', 1, 'sdfsdfsdf', 'iuiuihuh', '2342-3442', 'huihi@djcc.co', 'iuihuihuihi', 0x3030302e6a7067, 'Masculino', 0, 'xk si se medio la pinch gna');

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
