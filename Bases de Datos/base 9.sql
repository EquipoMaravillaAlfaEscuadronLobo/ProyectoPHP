-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-01-2018 a las 04:20:43
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
('CEJ-001-001-0001', 'CEJ-001-001', 4, 1, 'admin01', '2018-01-09', 5, 2, 0x2e2e2f666f746f41637469766f732f645f73696c6c612d6f666963696e613337312e6a7067, ' \n '),
('CEJ-001-001-0002', 'CEJ-001-001', 4, 2, 'admin01', '2018-01-09', 5, 1, 0x2e2e2f666f746f41637469766f732f645f73696c6c612d6f666963696e613337312e6a7067, ''),
('CEJ-001-001-0003', 'CEJ-001-001', 4, 3, 'admin01', '2018-01-09', 5, 1, 0x2e2e2f666f746f41637469766f732f645f73696c6c612d6f666963696e613337312e6a7067, ' \n '),
('CEJ-001-001-0004', 'CEJ-001-001', 4, 4, 'admin01', '2018-01-09', 5, 1, 0x2e2e2f666f746f41637469766f732f645f73696c6c612d6f666963696e613337312e6a7067, ' \n '),
('CEJ-001-001-0005', 'CEJ-001-001', 4, 5, 'admin01', '2018-01-09', 5, 1, 0x2e2e2f666f746f41637469766f732f645f73696c6c612d6f666963696e613337312e6a7067, ' \n  \n '),
('CEJ-001-001-0006', 'CEJ-001-001', 4, 6, 'admin01', '2018-01-09', 5, 2, 0x2e2e2f666f746f41637469766f732f645f73696c6c612d6f666963696e613337312e6a7067, ''),
('CEJ-001-001-0007', 'CEJ-001-001', 4, 7, 'admin01', '2018-01-09', 5, 2, 0x2e2e2f666f746f41637469766f732f645f73696c6c612d6f666963696e613337312e6a7067, ' \n '),
('CEJ-001-001-0008', 'CEJ-001-001', 4, 8, 'admin01', '2018-01-09', 5, 1, 0x2e2e2f666f746f41637469766f732f645f73696c6c612d6f666963696e613337312e6a7067, ''),
('CEJ-001-001-0009', 'CEJ-001-001', 4, 9, 'admin01', '2018-01-09', 5, 1, 0x2e2e2f666f746f41637469766f732f645f73696c6c612d6f666963696e613337312e6a7067, ''),
('CEJ-001-001-0010', 'CEJ-001-001', 4, 10, 'admin01', '2018-01-09', 5, 1, 0x2e2e2f666f746f41637469766f732f645f73696c6c612d6f666963696e613337312e6a7067, ''),
('CEJ-001-001-0011', 'CEJ-001-001', 4, 11, 'admin01', '2018-01-09', 5, 2, 0x2e2e2f666f746f41637469766f732f645f73696c6c612d6f666963696e613337312e6a7067, ''),
('CEJ-001-001-0012', 'CEJ-001-001', 4, 12, 'admin01', '2018-01-09', 5, 1, 0x2e2e2f666f746f41637469766f732f645f73696c6c612d6f666963696e613337312e6a7067, ''),
('CEJ-001-001-0013', 'CEJ-001-001', 4, 13, 'admin01', '2018-01-09', 5, 1, 0x2e2e2f666f746f41637469766f732f645f73696c6c612d6f666963696e613337312e6a7067, ''),
('CEJ-001-001-0014', 'CEJ-001-001', 4, 14, 'admin01', '2018-01-09', 5, 1, 0x2e2e2f666f746f41637469766f732f645f73696c6c612d6f666963696e613337312e6a7067, ''),
('CEJ-001-001-0015', 'CEJ-001-001', 4, 15, 'admin01', '2018-01-09', 5, 1, 0x2e2e2f666f746f41637469766f732f645f73696c6c612d6f666963696e613337312e6a7067, ''),
('CEJ-001-001-0016', 'CEJ-001-001', 2, 16, 'admin01', '2018-01-17', 2, 1, 0x2e2e2f666f746f41637469766f732f776972656c6573732d6d6f7573652d6d3332352e706e67, ''),
('CEJ-001-002-0001', 'CEJ-001-002', 1, 17, 'admin03', '2018-01-17', 2, 2, 0x2e2e2f666f746f41637469766f732f285829415a4f2d454e472d3230342e6a7067, ''),
('CEJ-001-002-0002', 'CEJ-001-002', 1, 18, 'admin03', '2018-01-17', 2, 2, 0x2e2e2f666f746f41637469766f732f285829415a4f2d454e472d3230342e6a7067, ''),
('CEJ-001-003-0001', 'CEJ-001-003', 1, 19, 'admin01', '2016-01-19', 60, 2, 0x2e2e2f666f746f41637469766f732f696d707265736f72612e706e67, ''),
('CEJ-001-004-0001', 'CEJ-001-004', 4, 20, 'admin04', '2018-01-09', 90, 2, 0x2e2e2f666f746f41637469766f732f6573637269746f72696f2e6a7067, ''),
('CEJ-001-004-0002', 'CEJ-001-004', 4, 21, 'admin04', '2018-01-09', 90, 2, 0x2e2e2f666f746f41637469766f732f6573637269746f72696f2e6a7067, ''),
('CEJ-001-004-0003', 'CEJ-001-004', 4, 22, 'admin04', '2018-01-09', 90, 1, 0x2e2e2f666f746f41637469766f732f6573637269746f72696f2e6a7067, ''),
('CEJ-001-005-0001', 'CEJ-001-005', 5, 23, 'admin03', '2018-01-01', 15, 1, 0x2e2e2f666f746f41637469766f732f6d6573612074726162616a6f2e6a7067, ''),
('CEJ-001-005-0002', 'CEJ-001-005', 5, 24, 'admin03', '2018-01-01', 15, 1, 0x2e2e2f666f746f41637469766f732f6d6573612074726162616a6f2e6a7067, ''),
('CEJ-001-006-0001', 'CEJ-001-006', 2, 25, 'admin02', '2018-01-02', 350, 1, 0x2e2e2f666f746f41637469766f732f636f6d70752e6a7067, ''),
('CEJ-001-006-0002', 'CEJ-001-006', 2, 26, 'admin02', '2018-01-17', 10, 1, 0x2e2e2f666f746f41637469766f732f636f6d70752e6a7067, ''),
('CEJ-001-006-0003', 'CEJ-001-006', 2, 27, 'admin02', '2018-01-17', 10, 1, 0x2e2e2f666f746f41637469766f732f636f6d70752e6a7067, ''),
('CEJ-001-006-0004', 'CEJ-001-006', 2, 28, 'admin02', '2018-01-17', 10, 1, 0x2e2e2f666f746f41637469766f732f636f6d70752e6a7067, ''),
('CEJ-001-006-0005', 'CEJ-001-006', 2, 29, 'admin02', '2018-01-17', 10, 1, 0x2e2e2f666f746f41637469766f732f636f6d70752e6a7067, ''),
('CEJ-001-006-0006', 'CEJ-001-006', 2, 30, 'admin02', '2018-01-17', 10, 2, 0x2e2e2f666f746f41637469766f732f636f6d70752e6a7067, ''),
('CEJ-001-006-0007', 'CEJ-001-006', 2, 31, 'admin02', '2018-01-17', 10, 1, 0x2e2e2f666f746f41637469766f732f636f6d70752e6a7067, ''),
('CEJ-001-006-0008', 'CEJ-001-006', 2, 32, 'admin02', '2018-01-17', 10, 2, 0x2e2e2f666f746f41637469766f732f636f6d70752e6a7067, ''),
('CEJ-001-006-0009', 'CEJ-001-006', 2, 33, 'admin02', '2018-01-17', 10, 2, 0x2e2e2f666f746f41637469766f732f636f6d70752e6a7067, ''),
('CEJ-001-006-0010', 'CEJ-001-006', 2, 34, 'admin02', '2018-01-17', 10, 4, 0x2e2e2f666f746f41637469766f732f636f6d70752e6a7067, ' \n no devolvio la computadora'),
('CEJ-001-006-0011', 'CEJ-001-006', 2, 35, 'admin02', '2018-01-17', 10, 1, 0x2e2e2f666f746f41637469766f732f636f6d70752e6a7067, ''),
('CEJ-001-007-0001', 'CEJ-001-007', 1, 36, 'admin01', '2016-01-13', 3, 1, 0x2e2e2f666f746f41637469766f732f706c6173746963612e6a7067, ''),
('CEJ-001-007-0002', 'CEJ-001-007', 1, 37, 'admin01', '2016-01-13', 3, 1, 0x2e2e2f666f746f41637469766f732f706c6173746963612e6a7067, ''),
('CEJ-001-007-0003', 'CEJ-001-007', 1, 38, 'admin01', '2016-01-13', 3, 1, 0x2e2e2f666f746f41637469766f732f706c6173746963612e6a7067, ''),
('CEJ-001-007-0004', 'CEJ-001-007', 1, 39, 'admin01', '2016-01-13', 3, 1, 0x2e2e2f666f746f41637469766f732f706c6173746963612e6a7067, ''),
('CEJ-001-007-0005', 'CEJ-001-007', 1, 40, 'admin01', '2016-01-13', 3, 1, 0x2e2e2f666f746f41637469766f732f706c6173746963612e6a7067, ''),
('CEJ-001-007-0006', 'CEJ-001-007', 1, 41, 'admin01', '2016-01-13', 3, 2, 0x2e2e2f666f746f41637469766f732f706c6173746963612e6a7067, ''),
('CEJ-001-007-0007', 'CEJ-001-007', 1, 42, 'admin01', '2016-01-13', 3, 1, 0x2e2e2f666f746f41637469766f732f706c6173746963612e6a7067, ''),
('CEJ-001-007-0008', 'CEJ-001-007', 1, 43, 'admin01', '2016-01-13', 3, 3, 0x2e2e2f666f746f41637469766f732f706c6173746963612e6a7067, ' \n una pata fue destrozada'),
('CEJ-001-007-0009', 'CEJ-001-007', 1, 44, 'admin01', '2016-01-13', 3, 1, 0x2e2e2f666f746f41637469766f732f706c6173746963612e6a7067, ''),
('CEJ-001-007-0010', 'CEJ-001-007', 1, 45, 'admin01', '2016-01-13', 3, 1, 0x2e2e2f666f746f41637469766f732f706c6173746963612e6a7067, ''),
('CEJ-001-007-0011', 'CEJ-001-007', 1, 46, 'admin01', '2016-01-13', 3, 1, 0x2e2e2f666f746f41637469766f732f706c6173746963612e6a7067, ''),
('CEJ-001-007-0012', 'CEJ-001-007', 1, 47, 'admin01', '2016-01-13', 3, 1, 0x2e2e2f666f746f41637469766f732f706c6173746963612e6a7067, ''),
('CEJ-001-007-0013', 'CEJ-001-007', 1, 48, 'admin01', '2016-01-13', 3, 1, 0x2e2e2f666f746f41637469766f732f706c6173746963612e6a7067, ''),
('CEJ-001-007-0014', 'CEJ-001-007', 1, 49, 'admin01', '2016-01-13', 3, 1, 0x2e2e2f666f746f41637469766f732f706c6173746963612e6a7067, ''),
('CEJ-001-007-0015', 'CEJ-001-007', 1, 50, 'admin01', '2016-01-13', 3, 2, 0x2e2e2f666f746f41637469766f732f706c6173746963612e6a7067, ''),
('CEJ-001-007-0016', 'CEJ-001-007', 1, 51, 'admin01', '2016-01-13', 3, 1, 0x2e2e2f666f746f41637469766f732f706c6173746963612e6a7067, ''),
('CEJ-001-007-0017', 'CEJ-001-007', 1, 52, 'admin01', '2016-01-13', 3, 1, 0x2e2e2f666f746f41637469766f732f706c6173746963612e6a7067, ''),
('CEJ-001-007-0018', 'CEJ-001-007', 1, 53, 'admin01', '2016-01-13', 3, 1, 0x2e2e2f666f746f41637469766f732f706c6173746963612e6a7067, ''),
('CEJ-001-007-0019', 'CEJ-001-007', 1, 54, 'admin01', '2016-01-13', 3, 1, 0x2e2e2f666f746f41637469766f732f706c6173746963612e6a7067, ''),
('CEJ-001-007-0020', 'CEJ-001-007', 1, 55, 'admin01', '2016-01-13', 3, 1, 0x2e2e2f666f746f41637469766f732f706c6173746963612e6a7067, ''),
('CEJ-001-008-0001', 'CEJ-001-008', 1, 56, 'admin04', '2017-06-13', 15, 2, 0x2e2e2f666f746f41637469766f732f323032323137383133363932315f322e6a7067, ''),
('CEJ-001-008-0002', 'CEJ-001-008', 1, 57, 'admin04', '2017-06-13', 15, 1, 0x2e2e2f666f746f41637469766f732f323032323137383133363932315f322e6a7067, ''),
('CEJ-001-009-0001', 'CEJ-001-009', 1, 58, 'admin03', '2018-01-10', 3, 1, 0x2e2e2f666f746f41637469766f732f7465636c61646f2e6a7067, ''),
('CEJ-001-009-0002', 'CEJ-001-009', 1, 59, 'admin03', '2018-01-10', 3, 2, 0x2e2e2f666f746f41637469766f732f7465636c61646f2e6a7067, ''),
('CEJ-001-009-0003', 'CEJ-001-009', 1, 60, 'admin03', '2018-01-10', 3, 1, 0x2e2e2f666f746f41637469766f732f7465636c61646f2e6a7067, ''),
('CEJ-001-011-0001', 'CEJ-001-011', 1, 61, 'admin04', '2018-01-10', 25, 1, 0x2e2e2f666f746f41637469766f732f726f75747265722e6a7067, ''),
('CEJ-001-012-0001', 'CEJ-001-012', 1, 62, 'admin01', '2018-01-10', 120, 1, 0x2e2e2f666f746f41637469766f732f616d706c6966696361646f722e6a7067, ''),
('CEJ-001-013-0001', 'CEJ-001-013', 1, 63, 'admin01', '2016-01-12', 43, 1, 0x2e2e2f666f746f41637469766f732f706c6173746963612e6a7067, ''),
('CEJ-001-013-0002', 'CEJ-001-013', 1, 64, 'admin01', '2016-01-12', 43, 1, 0x2e2e2f666f746f41637469766f732f706c6173746963612e6a7067, ''),
('CEJ-001-014-0001', 'CEJ-001-014', 1, 65, 'admin02', '2018-01-18', 52, 1, 0x2e2e2f666f746f41637469766f732f666f746f636f706961646f72612e6a7067, ''),
('CEJ-001-014-0002', 'CEJ-001-014', 1, 66, 'admin02', '2018-01-18', 52, 1, 0x2e2e2f666f746f41637469766f732f666f746f636f706961646f72612e6a7067, ''),
('CEJ-001-015-0001', 'CEJ-001-015', 4, 67, 'admin03', '2018-01-08', 1, 1, 0x2e2e2f666f746f41637469766f732f6261737572612e6a7067, ''),
('CEJ-001-015-0002', 'CEJ-001-015', 4, 68, 'admin03', '2018-01-08', 1, 3, 0x2e2e2f666f746f41637469766f732f6261737572612e6a7067, ' \n Esta roto de las esquinas'),
('CEJ-001-016-0001', 'CEJ-001-016', 1, 69, 'admin01', '2017-12-04', 7, 1, 0x2e2e2f666f746f41637469766f732f3164657365677267616d3530312d353030783530302e6a7067, ''),
('CEJ-001-017-0001', 'CEJ-001-017', 1, 70, 'admin03', '2018-01-17', 2, 1, 0x2e2e2f666f746f41637469766f732f4d4554524f20504c41535449434f2e4a5047, ''),
('CEJ-001-017-0002', 'CEJ-001-017', 1, 71, 'admin03', '2018-01-17', 2, 2, 0x2e2e2f666f746f41637469766f732f4d4554524f20504c41535449434f2e4a5047, ''),
('CEJ-001-017-0003', 'CEJ-001-017', 1, 72, 'admin03', '2018-01-17', 2, 1, 0x2e2e2f666f746f41637469766f732f4d4554524f20504c41535449434f2e4a5047, ' \n '),
('CEJ-001-017-0004', 'CEJ-001-017', 1, 73, 'admin03', '2018-01-17', 2, 2, 0x2e2e2f666f746f41637469766f732f4d4554524f20504c41535449434f2e4a5047, ''),
('CEJ-001-017-0005', 'CEJ-001-017', 1, 74, 'admin03', '2018-01-17', 2, 1, 0x2e2e2f666f746f41637469766f732f4d4554524f20504c41535449434f2e4a5047, ''),
('CEJ-001-018-0001', 'CEJ-001-018', 1, 75, 'admin01', '2002-01-16', 25, 1, 0x2e2e2f666f746f41637469766f732f7570732e6a7067, ' \n '),
('CEJ-001-018-0002', 'CEJ-001-018', 1, 76, 'admin01', '2002-01-16', 25, 1, 0x2e2e2f666f746f41637469766f732f7570732e6a7067, ''),
('CEJ-001-018-0003', 'CEJ-001-018', 1, 77, 'admin01', '2002-01-16', 25, 3, 0x2e2e2f666f746f41637469766f732f7570732e6a7067, ' \n ya no enciende'),
('CEJ-001-019-0001', 'CEJ-001-019', 3, 78, 'admin04', '2018-01-17', 2, 1, 0x2e2e2f666f746f41637469766f732f616a75656472657a2e6a7067, ' \n '),
('CEJ-001-019-0002', 'CEJ-001-019', 3, 79, 'admin04', '2018-01-17', 2, 1, 0x2e2e2f666f746f41637469766f732f616a75656472657a2e6a7067, ''),
('CEJ-001-019-0003', 'CEJ-001-019', 3, 80, 'admin04', '2018-01-17', 2, 1, 0x2e2e2f666f746f41637469766f732f616a75656472657a2e6a7067, ''),
('CEJ-001-019-0004', 'CEJ-001-019', 3, 81, 'admin04', '2018-01-17', 2, 1, 0x2e2e2f666f746f41637469766f732f616a75656472657a2e6a7067, ''),
('CEJ-001-019-0005', 'CEJ-001-019', 3, 82, 'admin04', '2018-01-17', 2, 1, 0x2e2e2f666f746f41637469766f732f616a75656472657a2e6a7067, ''),
('CEJ-001-020-0001', 'CEJ-001-020', 3, 83, 'admin04', '2018-01-17', 2, 1, 0x2e2e2f666f746f41637469766f732f6461612e6a7067, ''),
('CEJ-001-021-0001', 'CEJ-001-021', 4, 84, 'admin01', '2017-01-18', 5, 1, 0x2e2e2f666f746f41637469766f732f4d6573612e6a7067, '');

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
('admin01', '$2y$10$2rho0MAZ5MwLDYw851GwB.6eHCBN0gIKsWJboakQ6epu1IOqsjphy', 0, 'Carlos Antonio', 'correo@gmail.com', '10-07-1995', 'Torres Martinez', 0, '00000000-0', 0x61646d692e706e67, 1, ''),
('admin02', '$2y$10$NqXNbTcIuGPuxhOXKCWmI.6JF93lz67bPWryed1L8HIMHBfOySB6G', 1, 'Juan Gonzales', 'jose_perea@hotmail.com', '13-10-1998', 'Pérez Martínez ', 0, '10123390-0', 0x31696d616765732e6a7067, 1, 'este bicho es malo'),
('admin03', '$2y$10$vO0ftGsgoJ2NNhZFeB9Gd.TYnTdD7uCMXU608bruY7A4dyGttMKJe', 0, 'María Inéz', 'mariac@gmail.com', '06-09-1999', 'Hernández Maradiaga', 0, '00212334-5', 0x326d617269612e6a7067, 1, 'este bicho es malo'),
('admin04', '$2y$10$eNWMNA1jfljetJZpteYo/umpUXpfAg/q70vuXwmm2kKUlDtqEbOSW', 1, 'Maicol Felix', 'felix@yahoo.com', '22-04-1983', 'Paniagua Cerezo', 0, '09229345-6', 0x3361646d69332e6a7067, 1, 'este bicho es malo');

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
(1, 'Leys', ' Simon ', '1998-10-23', 'Simon_Leys.pdf'),
(2, 'Roth', 'Joseph', '2002-01-23', 'Joseph_Roth.pdf'),
(3, 'Rabelais', 'François', '2004-01-15', 'Gargantúa_y_Pantagruel.pdf'),
(4, 'Roth', 'Joseph', '2000-01-13', 'León_Tolstói.pdf'),
(5, 'Hawthorne', 'Nathaniel', '2002-01-17', 'Nathaniel_Hawthorne.pdf'),
(6, 'Schnitzler', 'Arthur', '1999-01-22', 'Arthur_Schnitzler.pdf'),
(7, 'Schnitzler', 'Arthur', '1999-01-22', 'Arthur_Schnitzler.pdf'),
(8, 'Chesterton', ' G. K.', '1999-01-28', 'G._K._Chesterton.pdf'),
(9, 'Simon', 'Reynolds', '1982-01-10', 'Simon_Reynolds.pdf'),
(10, 'Amiri ', 'Baraka', '1999-01-07', 'Amiri_Baraka.pdf'),
(11, 'John ', 'Waters', '1995-01-11', 'John_Waters.pdf'),
(12, 'María ', 'Dueñas', '1982-01-07', 'María_Dueñas.pdf'),
(13, 'Philip', ' K. Dick', '1982-01-14', 'Philip_K._Dick.pdf'),
(14, 'Juan ', 'Villoro', '1996-09-12', 'Juan_Villoro.pdf'),
(15, 'Ernesto ', 'Sabato', '1982-01-07', 'Ernesto_Sabato.pdf'),
(16, 'Anthony ', 'Burgess', '1979-01-16', 'Anthony_Burgess.pdf'),
(17, 'Young', 'Paul', '2018-01-16', 'William_Paul_Young.pdf');

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
(1, 'admin01', 'El administrador admin01(Carlos Antonio Torres Martinez) inició sesión', '2018-01-17 09:46:22'),
(2, 'admin01', 'Se registró la siguiente tipo de activos: Engrapadora', '2018-01-17 09:51:34'),
(3, 'admin01', 'Se registró la siguiente tipo de activos: Computadora', '2018-01-17 09:51:47'),
(4, 'admin01', 'Se registró la siguiente tipo de activos: Pupitres', '2018-01-17 09:52:05'),
(5, 'admin01', 'Se registró la siguiente tipo de activos: Impresora', '2018-01-17 09:52:31'),
(6, 'admin01', 'Se registró la siguiente tipo de activos: Escritorios', '2018-01-17 09:53:00'),
(7, 'admin01', 'Se registró la siguiente tipo de activos: Mesas de trabajo', '2018-01-17 09:53:56'),
(8, 'admin01', 'Se registró la siguiente tipo de activos: Computadoras', '2018-01-17 09:54:21'),
(9, 'admin01', 'Se registró la siguiente tipo de activos: Sillas plasticas', '2018-01-17 09:55:10'),
(10, 'admin01', 'Se registró la siguiente tipo de activos: Mesa de ping pong', '2018-01-17 09:56:24'),
(11, 'admin01', 'Se registró la siguiente tipo de activos: Basurero Plastico', '2018-01-17 09:56:56'),
(12, 'admin01', 'Se registró la siguiente tipo de activos: Router', '2018-01-17 09:57:12'),
(13, 'admin01', 'Se registró la siguiente tipo de activos: Teclado', '2018-01-17 09:59:38'),
(14, 'admin01', 'Se registró la siguiente tipo de activos: Teclado', '2018-01-17 09:59:57'),
(15, 'admin01', 'Se registró la siguiente tipo de activos: Mouse', '2018-01-17 10:00:12'),
(16, 'admin01', 'Se registró la siguiente tipo de activos: Router', '2018-01-17 10:01:09'),
(17, 'admin01', 'Se registró la siguiente tipo de activos: Amplificador de sonido', '2018-01-17 10:02:52'),
(18, 'admin01', 'Se registró la siguiente tipo de activos: Proyectores', '2018-01-17 10:03:22'),
(19, 'admin01', 'Se registró la siguiente tipo de activos: Foto Copiadora', '2018-01-17 10:03:59'),
(20, 'admin01', 'Se registró la siguiente tipo de activos: Foto Copiadora', '2018-01-17 10:04:28'),
(21, 'admin01', 'Se registró la siguiente tipo de activos: Bote de Basura', '2018-01-17 10:05:18'),
(22, 'admin01', 'Se registró la siguiente tipo de activos: Desengrapadoras', '2018-01-17 10:05:42'),
(23, 'admin01', 'Se registró la siguiente tipo de activos: Metro de Madera', '2018-01-17 10:06:18'),
(24, 'admin01', 'Se registró la siguiente tipo de activos: Batería UPS', '2018-01-17 10:06:38'),
(25, 'admin01', 'Se registró la siguiente tipo de activos: Juegos de Ajedrez', '2018-01-17 10:07:16'),
(26, 'admin01', 'Se registró la siguiente tipo de activos: Juego de Damas', '2018-01-17 10:07:38'),
(27, 'admin01', 'Se registró la siguiente tipo de activos: Camara Web', '2018-01-17 10:08:34'),
(28, 'admin01', 'Se registró la siguiente tipo de activos: Cámara Fotografica', '2018-01-17 10:09:53'),
(29, 'admin01', 'Se registró la siguiente tipo de activos: Mesa Plastica', '2018-01-17 10:11:39'),
(30, 'admin01', 'Se registro como administrador a Juan Gonzales Pérez Martínez ', '2018-01-17 09:20:42'),
(31, 'admin01', 'Se registro como administrador a María Inéz Hernández Maradiaga', '2018-01-17 09:23:18'),
(32, 'admin01', 'Se registro como administrador a Maicol Felix Paniagua Cerezo', '2018-01-17 09:25:25'),
(33, 'admin01', 'Se registró al siguiente proveedor:Comercial Gonzales, con dirección Av. Independencia No 531 Centro Tuxtepec y teléfono 2233-3445', '2018-01-17 09:30:53'),
(34, 'admin01', 'Se registró al siguiente proveedor:Compu Tec, con dirección Miguel Hidalgo No 409 Centro Tuxtepec y teléfono 7422-3322', '2018-01-17 09:33:18'),
(35, 'admin01', 'Se registró al siguiente proveedor:Industria El Papel y Lápiz, con dirección  Av. 5 De Mayo No 1014 Centro Tuxtepec y teléfono 2234-1123', '2018-01-17 09:36:24'),
(36, 'admin01', 'Se registró al siguiente proveedor:Distribuidora Lo que quiera, con dirección  Av. Jesus Carranza No 1651 Altos El Reposo Tuxtepec y teléfono 2223-4689', '2018-01-17 09:37:53'),
(37, 'admin01', 'El administrador admin01  cerró sesión', '2018-01-17 09:38:29'),
(38, 'admin02', 'El administrador admin02(Juan Gonzales Pérez Martínez ) inició sesión', '2018-01-17 09:39:18'),
(39, 'admin02', 'Se registró al siguiente proveedor:Proveedora el Reloj, con dirección  Av. Independencia No 117 La Piragua Tuxtepec y teléfono 7775-8585', '2018-01-17 09:40:33'),
(40, 'admin02', 'se registraron 15 item tipo sillas de oficina con las siguientes características: color Anaranjada, marca Copel, dimensiones Sin Dimenciones, sistema operativo Sin Sistema Operativo, Memoria Ram Sin Memoria Ram, Modelo Sin Modelo', '2018-01-17 09:43:16'),
(41, 'admin02', 'se registraron 1 item tipo sillas de oficina con las siguientes características: color Negro y Rojo, marca Sin Marca, dimensiones Sin Dimenciones, sistema operativo Sin Sistema Operativo, Memoria Ram Sin Memoria Ram, Modelo Sin Modelo', '2018-01-17 09:45:26'),
(42, 'admin02', 'se registraron 2 item tipo Engrapadora con las siguientes características: color Negra, marca Pegazo, dimensiones Sin Dimenciones, sistema operativo Sin Sistema Operativo, Memoria Ram Sin Memoria Ram, Modelo Sin Modelo', '2018-01-17 09:47:11'),
(43, 'admin02', 'se registraron 1 item tipo Impresora con las siguientes características: color Negra, marca Cannon, dimensiones Sin Dimenciones, sistema operativo Sin Sistema Operativo, Memoria Ram Sin Memoria Ram, Modelo Sin Modelo', '2018-01-17 09:49:32'),
(44, 'admin02', 'se registraron 3 item tipo Escritorios con las siguientes características: color Besh, marca Sin Marca, dimensiones Sin Dimenciones, sistema operativo Sin Sistema Operativo, Memoria Ram Sin Memoria Ram, Modelo Sin Modelo', '2018-01-17 09:51:55'),
(45, 'admin02', 'se registraron 1 item tipo Mesas de trabajo con las siguientes características: color Café, marca Sin Marca, dimensiones Sin Dimenciones, sistema operativo Sin Sistema Operativo, Memoria Ram Sin Memoria Ram, Modelo Sin Modelo', '2018-01-17 09:55:04'),
(46, 'admin02', 'se registraron 1 item tipo Mesas de trabajo con las siguientes características: color Café, marca Sin Marca, dimensiones Sin Dimenciones, sistema operativo Sin Sistema Operativo, Memoria Ram Sin Memoria Ram, Modelo Sin Modelo', '2018-01-17 09:55:11'),
(47, 'admin02', 'se registraron 1 item tipo Computadoras con las siguientes características: color Negra y Gris, marca HP, dimensiones Sin Dimenciones, sistema operativo Windows 10, Memoria Ram 4GB, Modelo G62', '2018-01-17 09:58:43'),
(48, 'admin02', 'se registraron 10 item tipo Computadoras con las siguientes características: color Negro y Gris, marca Compac, dimensiones Sin Dimenciones, sistema operativo Windows 7, Memoria Ram 6 GB, Modelo H223', '2018-01-17 10:00:28'),
(49, 'admin02', 'se registraron 20 item tipo Sillas plasticas con las siguientes características: color Azul, marca Sin Marca, dimensiones Sin Dimenciones, sistema operativo Sin Sistema Operativo, Memoria Ram Sin Memoria Ram, Modelo Sin Modelo', '2018-01-17 10:02:27'),
(50, 'admin02', 'se registraron 2 item tipo Mesa de ping pong con las siguientes características: color Verde, marca Sin Marca, dimensiones Sin Dimenciones, sistema operativo Sin Sistema Operativo, Memoria Ram Sin Memoria Ram, Modelo Sin Modelo', '2018-01-17 10:03:53'),
(51, 'admin04', 'El administrador admin04(Maicol Felix Paniagua Cerezo) inició sesión', '2018-01-17 09:32:02'),
(52, 'admin04', 'El administrador admin04  cerró sesión', '2018-01-17 09:32:11'),
(53, 'admin01', 'El administrador admin01(Carlos Antonio Torres Martinez) inició sesión', '2018-01-17 09:32:19'),
(54, 'admin01', 'Se actualizarón los datos del administrador admin03(María Inéz Hernández Maradiaga)', '2018-01-17 09:32:48'),
(55, 'admin01', 'El administrador admin01  cerró sesión', '2018-01-17 09:32:55'),
(56, 'admin03', 'El administrador admin03(María Inéz Hernández Maradiaga) inició sesión', '2018-01-17 09:33:11'),
(57, 'admin03', 'se registraron 3 item tipo Teclado con las siguientes características: color Negro, marca Sin Marca, dimensiones Sin Dimenciones, sistema operativo Sin Sistema Operativo, Memoria Ram Sin Memoria Ram, Modelo Sin Modelo', '2018-01-17 09:21:06'),
(58, 'admin03', 'se registraron 1 item tipo Router con las siguientes características: color Azul y Negro, marca Sinker, dimensiones Sin Dimenciones, sistema operativo Sin Sistema Operativo, Memoria Ram Sin Memoria Ram, Modelo Sin Modelo', '2018-01-17 09:22:44'),
(59, 'admin03', 'se registraron 1 item tipo Amplificador de sonido con las siguientes características: color Negro, marca Sin Marca, dimensiones Sin Dimenciones, sistema operativo Sin Sistema Operativo, Memoria Ram Sin Memoria Ram, Modelo Sin Modelo', '2018-01-17 09:24:02'),
(60, 'admin03', 'se registraron 2 item tipo Proyectores con las siguientes características: color Blanco, marca Sin Marca, dimensiones Sin Dimenciones, sistema operativo Sin Sistema Operativo, Memoria Ram Sin Memoria Ram, Modelo Sin Modelo', '2018-01-17 09:26:03'),
(61, 'admin03', 'se registraron 2 item tipo Foto Copiadora con las siguientes características: color Blanca, marca Sin Marca, dimensiones Sin Dimenciones, sistema operativo Sin Sistema Operativo, Memoria Ram Sin Memoria Ram, Modelo Sin Modelo', '2018-01-17 09:27:35'),
(62, 'admin03', 'se registraron 2 item tipo Bote de Basura con las siguientes características: color Morado, marca Sin Marca, dimensiones Sin Dimenciones, sistema operativo Sin Sistema Operativo, Memoria Ram Sin Memoria Ram, Modelo Sin Modelo', '2018-01-17 09:28:39'),
(63, 'admin03', 'se registraron 1 item tipo Desengrapadoras con las siguientes características: color Negra, marca Sin Marca, dimensiones Sin Dimenciones, sistema operativo Sin Sistema Operativo, Memoria Ram Sin Memoria Ram, Modelo Sin Modelo', '2018-01-17 09:29:36'),
(64, 'admin03', 'se registraron 5 item tipo Metro de Madera con las siguientes características: color Amarillos, marca Sin Marca, dimensiones Sin Dimenciones, sistema operativo Sin Sistema Operativo, Memoria Ram Sin Memoria Ram, Modelo Sin Modelo', '2018-01-17 09:32:35'),
(65, 'admin03', 'se registraron 3 item tipo Batería UPS con las siguientes características: color Negra, marca Sin Marca, dimensiones Sin Dimenciones, sistema operativo Sin Sistema Operativo, Memoria Ram Sin Memoria Ram, Modelo Sin Modelo', '2018-01-17 09:33:43'),
(66, 'admin03', 'se registraron 5 item tipo Juegos de Ajedrez con las siguientes características: color Mixto, marca Sin Marca, dimensiones Sin Dimenciones, sistema operativo Sin Sistema Operativo, Memoria Ram Sin Memoria Ram, Modelo Sin Modelo', '2018-01-17 09:36:11'),
(67, 'admin03', 'se registraron 1 item tipo Juego de Damas con las siguientes características: color Mixto, marca Sin Marca, dimensiones Sin Dimenciones, sistema operativo Sin Sistema Operativo, Memoria Ram Sin Memoria Ram, Modelo Sin Modelo', '2018-01-17 09:37:24'),
(68, 'admin03', 'se registraron 1 item tipo Mesa Plastica con las siguientes características: color Blanca, marca Sin Marca, dimensiones Sin Dimenciones, sistema operativo Sin Sistema Operativo, Memoria Ram Sin Memoria Ram, Modelo Sin Modelo', '2018-01-17 09:38:32'),
(69, 'admin03', 'Se registró al siguiente encargado de mantenimiento: Perez Fernandez, con direccion Calle Sebastian Ortiz No 690 Centro Tuxtepec, telefono 3334-4566, y correo Carlos@yaho.com', '2018-01-17 09:42:28'),
(70, 'admin03', 'Se registró al siguiente encargado de mantenimiento: Juan Jose, con direccion Gomez Bolaños, telefono 4534-5344, y correo chekaspeare@hotmail.com', '2018-01-17 09:43:31'),
(71, 'admin03', 'Se registró al siguiente encargado de mantenimiento: Andrez Gomez , con direccion  Carr. A Ojitlan No. 951-A Col. 5 De Mayo Tuxtepec, telefono 3423-4234, y correo Gomer@hotmail.com', '2018-01-17 09:45:24'),
(72, 'admin03', 'El usuario Jenniffer Joanna Abarca presto los siguientes activos  (CEJ-001-008-0001) Mesa de ping pong', '2018-01-17 09:49:42'),
(73, 'admin03', 'El usuario Deyvis Antonio Ayala Gomez  presto los siguientes activos  (CEJ-001-017-0002) Metro de Madera', '2018-01-17 09:51:41'),
(74, 'admin03', 'El usuario Benjamin Monterrosa Delgado presto los siguientes activos  (CEJ-001-001-0006) sillas de oficina', '2018-01-17 09:52:12'),
(75, 'admin03', 'El usuario Gercia Melina Hernández Castillo presto los siguientes activos  (CEJ-001-004-0002) Escritorios', '2018-01-17 09:54:31'),
(76, 'admin03', 'El usuario Benjamin Monterrosa Delgado presto los siguientes activos  (CEJ-001-007-0015) Sillas plasticas', '2018-01-17 09:55:11'),
(77, 'admin03', 'El usuario Franco Alvarado Oscar Adonay presto los siguientes activos  (CEJ-001-006-0010) Computadoras', '2018-01-17 09:57:03'),
(78, 'admin03', 'El usuario Harvin Jeffeth Ramos Alvarado presto los siguientes activos  (CEJ-001-001-0003) sillas de oficina (CEJ-001-001-0004) sillas de oficina (CEJ-001-001-0005) sillas de oficina', '2018-01-17 09:58:06'),
(79, 'admin03', 'El usuario Magdalena Del Carmen Cordova Flores presto los siguientes activos  (CEJ-001-017-0003) Metro de Madera (CEJ-001-019-0001) Juegos de Ajedrez', '2018-01-17 09:59:22'),
(80, 'admin03', 'El usuario Mirian Mabel Cornejo Portillo presto los siguientes activos  (CEJ-001-001-0001) sillas de oficina (CEJ-001-001-0007) sillas de oficina', '2018-01-17 10:00:52'),
(81, 'admin03', 'El usuario Deyvis Antonio Ayala Gomez  presto los siguientes activos  (CEJ-001-002-0001) Engrapadora', '2018-01-17 10:01:46'),
(82, 'admin03', 'El usuario Mirian Mabel Cornejo Portillo actualizo su prestamo de activo fijo para el dia 24-01-2018', '2018-01-17 10:02:10'),
(83, 'admin03', 'El usuario Franco Alvarado Oscar Adonay presto los siguientes activos  (CEJ-001-001-0011) sillas de oficina (CEJ-001-002-0002) Engrapadora', '2018-01-17 10:03:08'),
(84, 'admin03', 'El usuario Gerson Bladimir Durán González presto los siguientes activos  (CEJ-001-003-0001) Impresora (CEJ-001-009-0002) Teclado', '2018-01-17 10:04:51'),
(85, 'admin03', 'El usuario Gerson Bladimir Durán González presto los siguientes activos  (CEJ-001-007-0006) Sillas plasticas', '2018-01-17 10:05:26'),
(86, 'admin03', 'El usuario Gercia Melina Hernández Castillo presto los siguientes activos  (CEJ-001-004-0001) Escritorios', '2018-01-17 10:05:50'),
(87, 'admin03', 'El usuario Marcos Antonio Martínez Vásquez presto los siguientes activos  (CEJ-001-017-0004) Metro de Madera', '2018-01-17 10:06:22'),
(88, 'admin03', 'El usuario Saúl Alfredo Reyes Alvarado presto los siguientes activos  (CEJ-001-007-0008) Sillas plasticas', '2018-01-17 10:07:08'),
(89, 'admin03', 'El usuario Mayra Beatriz Quintanilla Guzmán presto los siguientes activos  (CEJ-001-018-0003) Batería UPS (CEJ-001-015-0002) Bote de Basura', '2018-01-17 10:07:49'),
(90, 'admin03', 'El usuario Rina de la Paz Melgar Peña presto los siguientes activos  (CEJ-001-006-0008) Computadoras', '2018-01-17 10:08:42'),
(91, 'admin03', 'El usuario William Ernesto Barrera Abarca presto los siguientes activos  (CEJ-001-006-0009) Computadoras', '2018-01-17 10:09:05'),
(92, 'admin03', 'El usuario Juan Carlos Moz Alfaro presto los siguientes activos  (CEJ-001-006-0006) Computadoras', '2018-01-17 10:09:29'),
(93, 'admin03', 'el usario Magdalena Del Carmen Cordova Flores finalizo su prestamo de activo fijo ', '2018-01-17 10:10:03'),
(94, 'admin03', 'el usario Saúl Alfredo Reyes Alvarado finalizo su prestamo de activo fijo ', '2018-01-17 10:10:37'),
(95, 'admin03', 'el usario Franco Alvarado Oscar Adonay finalizo su prestamo de activo fijo ', '2018-01-17 10:11:13'),
(96, 'admin03', 'el usario Mayra Beatriz Quintanilla Guzmán finalizo su prestamo de activo fijo ', '2018-01-17 10:11:57'),
(97, 'admin03', 'el usario Harvin Jeffeth Ramos Alvarado finalizo su prestamo de activo fijo ', '2018-01-17 10:12:28'),
(98, 'admin03', 'Se registró a la editorial Acantila', '2018-01-17 10:18:09'),
(99, 'admin03', 'Se registró a la editorial Aguilar', '2018-01-17 10:19:07'),
(100, 'admin03', 'Se registró a la editorial Alpha Decay', '2018-01-17 09:19:56'),
(101, 'admin03', 'Se registró a la editorial Atalanta', '2018-01-17 09:21:03'),
(102, 'admin03', 'Se registró a la editorial Gredos', '2018-01-17 09:22:17'),
(103, 'admin03', 'Se registró al autor Leys  Simon ', '2018-01-17 09:29:36'),
(104, 'admin03', 'Se registró al autor Roth Joseph', '2018-01-17 09:32:40'),
(105, 'admin03', 'Se registró al autor Rabelais François', '2018-01-17 09:35:25'),
(106, 'admin03', 'Se registró al autor Roth Joseph', '2018-01-17 09:36:48'),
(107, 'admin03', 'Se registró al autor Hawthorne Nathaniel', '2018-01-17 09:39:11'),
(108, 'admin03', 'Se registró al autor Schnitzler Arthur', '2018-01-17 09:40:16'),
(109, 'admin03', 'Se registró al autor Schnitzler Arthur', '2018-01-17 09:40:17'),
(110, 'admin03', 'Se registró al autor Chesterton  G. K.', '2018-01-17 09:41:14'),
(111, 'admin03', 'Se registró al autor Simon Reynolds', '2018-01-17 09:43:24'),
(112, 'admin03', 'Se registró al autor Amiri  Baraka', '2018-01-17 09:21:44'),
(113, 'admin03', 'Se registró al autor John  Waters', '2018-01-17 09:23:16'),
(114, 'admin03', 'Se registró al autor María  Dueñas', '2018-01-17 09:24:33'),
(115, 'admin03', 'Se registró al autor Philip  K. Dick', '2018-01-17 09:25:51'),
(116, 'admin03', 'Se registró al autor Juan  Villoro', '2018-01-17 09:26:44'),
(117, 'admin03', 'Se registró al autor Ernesto  Sabato', '2018-01-17 09:27:44'),
(118, 'admin03', 'Se registró al autor Anthony  Burgess', '2018-01-17 09:28:44'),
(119, 'admin03', 'Se registró al autor Young Paul', '2018-01-17 09:30:58'),
(120, 'admin03', 'Se hizo el registro de 8 libros con el Titulo de Cosas de la Cosa Nostra', '2018-01-17 09:44:36'),
(121, 'admin03', 'Se hizo el registro de 15 libros con el Titulo de La ciudad de las pasiones terribles', '2018-01-17 09:49:55'),
(122, 'admin03', 'Se hizo el registro de 18 libros con el Titulo de De cómo me convertí en alcalde y cambié el mundo', '2018-01-17 09:51:35'),
(123, 'admin03', 'Se hizo el registro de 7 libros con el Titulo de Tan poca vida', '2018-01-17 09:21:05'),
(124, 'admin03', 'Se hizo el registro de 8 libros con el Titulo de Entre el mundo y yo', '2018-01-17 09:22:15'),
(125, 'admin03', 'Se hizo el registro de 5 libros con el Titulo de Flores para Algernon', '2018-01-17 09:23:53'),
(126, 'admin03', 'Se hizo el registro de 6 libros con el Titulo de Una humilde propuesta,', '2018-01-17 09:26:13'),
(127, 'admin03', 'Se hizo el registro de 4 libros con el Titulo de En defensa de los animales', '2018-01-17 09:27:44'),
(128, 'admin03', 'Se hizo el registro de 11 libros con el Titulo de La forja de un rebelde.', '2018-01-17 09:28:45'),
(129, 'admin03', 'Se hizo el registro de 8 libros con el Titulo de El Filtro Burbuja. Cómo la Red decide lo que leemos y lo que pensamos', '2018-01-17 09:29:35'),
(130, 'admin03', 'Se hizo el registro de 11 libros con el Titulo de Capitalismo a la española', '2018-01-17 09:30:39'),
(131, 'admin03', 'Se hizo el registro de 6 libros con el Titulo de Jennifer Gobierno', '2018-01-17 09:33:30'),
(132, 'admin03', 'Se hizo el registro de 10 libros con el Titulo de Mañana. Una revolución en marcha', '2018-01-17 09:34:36'),
(133, 'admin03', 'Se hizo el registro de 9 libros con el Titulo de El mito de los deberes', '2018-01-17 09:35:35'),
(134, 'admin03', 'Se hizo el registro de 5 libros con el Titulo de Laudato Si, del Papa Francisco', '2018-01-17 09:36:28'),
(135, 'admin03', 'Se hizo el registro de 6 libros con el Titulo de La noche perdida', '2018-01-17 09:37:15'),
(136, 'admin03', 'Se hizo el registro de 9 libros con el Titulo de De puertas para adentro', '2018-01-17 09:39:04'),
(137, 'admin03', 'El usuario Gerson Bladimir Durán González presto los siguientes libros   Jennifer Gobierno(CEJ-002-030-JE-0003-0003) Mañana. Una revolución en marcha(CEJ-002-110-MA-0002-0004)', '2018-01-17 09:39:49'),
(138, 'admin03', 'El usuario Magdalena Del Carmen Cordova Flores presto los siguientes libros   Mañana. Una revolución en marcha(CEJ-002-110-MA-0002-0003) Flores para Algernon(CEJ-002-740-FL-0005-0004)', '2018-01-17 09:40:29'),
(139, 'admin03', 'El usuario Saúl Alfredo Reyes Alvarado presto los siguientes libros   De cómo me convertí en alcalde y cambié el mundo(CEJ-002-990-DE-0002-0011) Flores para Algernon(CEJ-002-740-FL-0005-0003)', '2018-01-17 09:41:48'),
(140, 'admin03', 'El usuario Jenniffer Joanna Abarca presto los siguientes libros   Mañana. Una revolución en marcha(CEJ-002-110-MA-0002-0005) Flores para Algernon(CEJ-002-740-FL-0005-0001)', '2018-01-17 09:42:26'),
(141, 'admin03', 'El usuario Gercia Melina Hernández Castillo presto los siguientes libros   El mito de los deberes(CEJ-002-290-EL-0003-0004) Cosas de la Cosa Nostra(CEJ-002-980-CO-0003-0005)', '2018-01-17 09:43:04'),
(142, 'admin03', 'El usuario Gerson Bladimir Durán González actualizó su prestamo a la siguiente fecha: 31-01-2018', '2018-01-17 09:43:22'),
(143, 'admin03', 'El usuario Jenniffer Joanna Abarca actualizó su prestamo a la siguiente fecha: 18-01-2018', '2018-01-17 09:43:27'),
(144, 'admin03', 'El usuario Saúl Alfredo Reyes Alvarado actualizó su prestamo a la siguiente fecha: 29-01-2018', '2018-01-17 09:43:35'),
(145, 'admin03', 'El usuario Josué Alfredo Alfaro Cruz presto los siguientes libros   La forja de un rebelde.(CEJ-002-070-LA-0004-0006) Flores para Algernon(CEJ-002-740-FL-0005-0002)', '2018-01-17 09:44:03'),
(146, 'admin03', 'El usuario William Ernesto Barrera Abarca presto los siguientes libros   El Filtro Burbuja. Cómo la Red decide lo que leemo(CEJ-002-110-EL-0004-0004) Una humilde propuesta,(CEJ-002-020-UN-0005-0006)', '2018-01-17 09:44:46'),
(147, 'admin03', 'El usuario Romario Abelardo Villalobos Rivas presto los siguientes libros   De puertas para adentro(CEJ-002-850-DE-0003-0001)', '2018-01-17 09:45:09'),
(148, 'admin03', 'El usuario Harvin Jeffeth Ramos Alvarado presto los siguientes libros   La forja de un rebelde.(CEJ-002-070-LA-0004-0001) Una humilde propuesta,(CEJ-002-020-UN-0005-0005)', '2018-01-17 09:46:22'),
(149, 'admin03', 'El usuario Franco Alvarado Oscar Adonay presto los siguientes libros   Tan poca vida(CEJ-002-090-TA-0003-0006)', '2018-01-17 09:47:05'),
(150, 'admin03', 'El usuario Carlos David Morales Orellana presto los siguientes libros   Mañana. Una revolución en marcha(CEJ-002-110-MA-0002-0002)', '2018-01-17 09:47:27'),
(151, 'admin03', 'El usuario Josué Alfredo Alfaro Cruz presto los siguientes libros   De puertas para adentro(CEJ-002-850-DE-0003-0007) Flores para Algernon(CEJ-002-740-FL-0005-0005)', '2018-01-17 09:47:58'),
(152, 'admin03', 'El usuario Mirian Mabel Cornejo Portillo presto los siguientes libros   El Filtro Burbuja. Cómo la Red decide lo que leemo(CEJ-002-110-EL-0004-0002) En defensa de los animales(CEJ-002-790-EN-0004-0003)', '2018-01-17 09:48:31'),
(153, 'admin03', 'El usuario Mayra Beatriz Quintanilla Guzmán presto los siguientes libros   La ciudad de las pasiones terribles(CEJ-002-130-LA-0004-0002) Laudato Si, del Papa Francisco(CEJ-002-550-LA-0004-0005)', '2018-01-17 09:49:04'),
(154, 'admin03', 'El usuario Magdalena Del Carmen Cordova Flores presto los siguientes libros   El mito de los deberes(CEJ-002-290-EL-0003-0006) Laudato Si, del Papa Francisco(CEJ-002-550-LA-0004-0001)', '2018-01-17 09:49:35'),
(155, 'admin03', 'El usuario Marvin Josué Hérnandez Diaz presto los siguientes libros   De puertas para adentro(CEJ-002-850-DE-0003-0003)', '2018-01-17 09:49:54'),
(156, 'admin03', 'El usuario Harvin Jeffeth Ramos Alvarado presto los siguientes libros   La forja de un rebelde.(CEJ-002-070-LA-0004-0002) Entre el mundo y yo(CEJ-002-390-EN-0004-0007)', '2018-01-17 09:50:24'),
(157, 'admin03', 'El usuario Marcos Antonio Martínez Vásquez presto los siguientes libros   De cómo me convertí en alcalde y cambié el mundo(CEJ-002-990-DE-0002-0004)', '2018-01-17 09:50:41'),
(158, 'admin03', 'El usuario Juan Antonio Bautista Peres Callejas M presto los siguientes libros   Tan poca vida(CEJ-002-090-TA-0003-0002)', '2018-01-17 09:50:59'),
(159, 'admin03', 'El usuario Josué Alfredo Alfaro Cruz presto los siguientes libros   La forja de un rebelde.(CEJ-002-070-LA-0004-0005)', '2018-01-17 09:51:18'),
(160, 'admin03', 'El usuario Josué Alfredo Alfaro Cruz finalizó su prestamo, con la siguiente observación: entrego los libros forja revelde y flores para algenon en buen estado', '2018-01-17 09:52:20'),
(161, 'admin03', 'El usuario William Ernesto Barrera Abarca finalizó su prestamo, con la siguiente observación: entrego el filtro Burbuja con paginas dañadas', '2018-01-17 09:53:02'),
(162, 'admin03', 'El usuario Harvin Jeffeth Ramos Alvarado devolvió el libro CEJ-002-070-LA-0004-0002', '2018-01-17 09:53:18'),
(163, 'admin03', 'El usuario Harvin Jeffeth Ramos Alvarado finalizó su prestamo, con la siguiente observación: entrego el libro el mundo y yo despues de la fecha estipulada', '2018-01-17 09:53:47'),
(164, 'admin03', 'El usuario Gercia Melina Hernández Castillo finalizó su prestamo, con la siguiente observación: entrego el libro nito de los deberes en perfecto estado', '2018-01-17 09:54:22'),
(165, 'admin03', 'El usuario Harvin Jeffeth Ramos Alvarado finalizó su prestamo, con la siguiente observación: entrego el libro forja de un rebelde con paginas ajadas ', '2018-01-17 09:56:13'),
(166, 'admin03', 'Se ralizó una copia de seguridad de los datos del sistema', '2018-01-17 09:59:47'),
(167, 'admin03', 'El administrador admin03  cerró sesión', '2018-01-17 10:06:17'),
(168, 'admin02', 'El administrador admin02(Juan Gonzales Pérez Martínez ) inició sesión', '2018-01-17 10:06:28'),
(169, 'admin02', 'El administrador admin02  cerró sesión', '2018-01-17 10:07:19'),
(170, 'admin01', 'El administrador admin01(Carlos Antonio Torres Martinez) inició sesión', '2018-01-17 10:07:32'),
(171, 'admin01', 'El administrador admin01  cerró sesión', '2018-01-17 10:08:10'),
(172, 'admin02', 'El administrador admin02(Juan Gonzales Pérez Martínez ) inició sesión', '2018-01-17 10:08:18'),
(173, 'admin02', 'El administrador Juan Gonzales Pérez Martínez  actualizó sus datos', '2018-01-17 10:08:42'),
(174, 'admin02', 'El administrador admin02  cerró sesión', '2018-01-17 10:08:46'),
(175, 'admin01', 'El administrador admin01(Carlos Antonio Torres Martinez) inició sesión', '2018-01-17 10:08:53'),
(176, 'admin01', 'El administrador Carlos Antonio Torres Martinez actualizó sus datos', '2018-01-17 10:12:48'),
(177, 'admin01', 'El administrador admin01  cerró sesión', '2018-01-17 10:12:53'),
(178, 'admin02', 'El administrador admin02(Juan Gonzales Pérez Martínez ) inició sesión', '2018-01-17 10:13:00'),
(179, 'admin02', 'El administrador admin02  cerró sesión', '2018-01-17 10:14:01'),
(180, 'admin03', 'El administrador admin03(María Inéz Hernández Maradiaga) inició sesión', '2018-01-17 10:14:14'),
(181, 'admin03', 'El administrador María Inéz Hernández Maradiaga actualizó sus datos', '2018-01-17 10:14:36'),
(182, 'admin03', 'El administrador admin03  cerró sesión', '2018-01-17 10:14:40'),
(183, 'admin01', 'El administrador admin01(Carlos Antonio Torres Martinez) inició sesión', '2018-01-17 10:14:48');

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
('CEJ-001-001', 'sillas de oficina'),
('CEJ-001-0010', 'Mouse'),
('CEJ-001-002', 'Engrapadora'),
('CEJ-001-003', 'Impresora'),
('CEJ-001-004', 'Escritorios'),
('CEJ-001-005', 'Mesas de trabajo'),
('CEJ-001-006', 'Computadoras'),
('CEJ-001-007', 'Sillas plasticas'),
('CEJ-001-008', 'Mesa de ping pong'),
('CEJ-001-009', 'Teclado'),
('CEJ-001-011', 'Router'),
('CEJ-001-012', 'Amplificador de sonido'),
('CEJ-001-013', 'Proyectores'),
('CEJ-001-014', 'Foto Copiadora'),
('CEJ-001-015', 'Bote de Basura'),
('CEJ-001-016', 'Desengrapadoras'),
('CEJ-001-017', 'Metro de Madera'),
('CEJ-001-018', 'Batería UPS'),
('CEJ-001-019', 'Juegos de Ajedrez'),
('CEJ-001-020', 'Juego de Damas'),
('CEJ-001-021', 'Mesa Plastica');

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
(1, 'Sin Numero de Serie', 'Anaranjada', 'Copel', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, 'las sillas adquiridas son nuevas', 'Sin Procesador'),
(2, 'Sin Numero de Serie', 'Anaranjada', 'Copel', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, 'las sillas adquiridas son nuevas', 'Sin Procesador'),
(3, 'Sin Numero de Serie', 'Anaranjada', 'Copel', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, 'las sillas adquiridas son nuevas', 'Sin Procesador'),
(4, 'Sin Numero de Serie', 'Anaranjada', 'Copel', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, 'las sillas adquiridas son nuevas', 'Sin Procesador'),
(5, 'Sin Numero de Serie', 'Anaranjada', 'Copel', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, 'las sillas adquiridas son nuevas', 'Sin Procesador'),
(6, 'Sin Numero de Serie', 'Anaranjada', 'Copel', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, 'las sillas adquiridas son nuevas', 'Sin Procesador'),
(7, 'Sin Numero de Serie', 'Anaranjada', 'Copel', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, 'las sillas adquiridas son nuevas', 'Sin Procesador'),
(8, 'Sin Numero de Serie', 'Anaranjada', 'Copel', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, 'las sillas adquiridas son nuevas', 'Sin Procesador'),
(9, 'Sin Numero de Serie', 'Anaranjada', 'Copel', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, 'las sillas adquiridas son nuevas', 'Sin Procesador'),
(10, 'Sin Numero de Serie', 'Anaranjada', 'Copel', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, 'las sillas adquiridas son nuevas', 'Sin Procesador'),
(11, 'Sin Numero de Serie', 'Anaranjada', 'Copel', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, 'las sillas adquiridas son nuevas', 'Sin Procesador'),
(12, 'Sin Numero de Serie', 'Anaranjada', 'Copel', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, 'las sillas adquiridas son nuevas', 'Sin Procesador'),
(13, 'Sin Numero de Serie', 'Anaranjada', 'Copel', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, 'las sillas adquiridas son nuevas', 'Sin Procesador'),
(14, 'Sin Numero de Serie', 'Anaranjada', 'Copel', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, 'las sillas adquiridas son nuevas', 'Sin Procesador'),
(15, 'Sin Numero de Serie', 'Anaranjada', 'Copel', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, 'las sillas adquiridas son nuevas', 'Sin Procesador'),
(16, 'Sin Numero de Serie', 'Negro y Rojo', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, 'Fueron adquiridos para las computadoras', 'Sin Procesador'),
(17, 'Sin Numero de Serie', 'Negra', 'Pegazo', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, 'Articulo de para la oficina', 'Sin Procesador'),
(18, 'Sin Numero de Serie', 'Negra', 'Pegazo', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, 'Articulo de para la oficina', 'Sin Procesador'),
(19, '00098-999-77', 'Negra', 'Cannon', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, 'Impresora multifuncional con cartuchos incluidos', 'Sin Procesador'),
(20, 'Sin Numero de Serie', 'Besh', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(21, 'Sin Numero de Serie', 'Besh', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(22, 'Sin Numero de Serie', 'Besh', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(23, 'Sin Numero de Serie', 'Café', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, 'Mesa destinada para los talleres', 'Sin Procesador'),
(24, 'Sin Numero de Serie', 'Café', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, 'Mesa destinada para los talleres', 'Sin Procesador'),
(25, 'Sin Numero de Serie', 'Negra y Gris', 'HP', 'G62', '4GB', '120 GB', 'Windows 10', 'Sin Dimenciones', NULL, '', 'Intel dual core'),
(26, 'Sin Numero de Serie', 'Negro y Gris', 'Compac', 'H223', '6 GB', '550 GB', 'Windows 7', 'Sin Dimenciones', NULL, '', 'i5'),
(27, 'Sin Numero de Serie', 'Negro y Gris', 'Compac', 'H223', '6 GB', '550 GB', 'Windows 7', 'Sin Dimenciones', NULL, '', 'i5'),
(28, 'Sin Numero de Serie', 'Negro y Gris', 'Compac', 'H223', '6 GB', '550 GB', 'Windows 7', 'Sin Dimenciones', NULL, '', 'i5'),
(29, 'Sin Numero de Serie', 'Negro y Gris', 'Compac', 'H223', '6 GB', '550 GB', 'Windows 7', 'Sin Dimenciones', NULL, '', 'i5'),
(30, 'Sin Numero de Serie', 'Negro y Gris', 'Compac', 'H223', '6 GB', '550 GB', 'Windows 7', 'Sin Dimenciones', NULL, '', 'i5'),
(31, 'Sin Numero de Serie', 'Negro y Gris', 'Compac', 'H223', '6 GB', '550 GB', 'Windows 7', 'Sin Dimenciones', NULL, '', 'i5'),
(32, 'Sin Numero de Serie', 'Negro y Gris', 'Compac', 'H223', '6 GB', '550 GB', 'Windows 7', 'Sin Dimenciones', NULL, '', 'i5'),
(33, 'Sin Numero de Serie', 'Negro y Gris', 'Compac', 'H223', '6 GB', '550 GB', 'Windows 7', 'Sin Dimenciones', NULL, '', 'i5'),
(34, 'Sin Numero de Serie', 'Negro y Gris', 'Compac', 'H223', '6 GB', '550 GB', 'Windows 7', 'Sin Dimenciones', NULL, '', 'i5'),
(35, 'Sin Numero de Serie', 'Negro y Gris', 'Compac', 'H223', '6 GB', '550 GB', 'Windows 7', 'Sin Dimenciones', NULL, '', 'i5'),
(36, 'Sin Numero de Serie', 'Azul', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(37, 'Sin Numero de Serie', 'Azul', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(38, 'Sin Numero de Serie', 'Azul', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(39, 'Sin Numero de Serie', 'Azul', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(40, 'Sin Numero de Serie', 'Azul', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(41, 'Sin Numero de Serie', 'Azul', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(42, 'Sin Numero de Serie', 'Azul', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(43, 'Sin Numero de Serie', 'Azul', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(44, 'Sin Numero de Serie', 'Azul', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(45, 'Sin Numero de Serie', 'Azul', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(46, 'Sin Numero de Serie', 'Azul', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(47, 'Sin Numero de Serie', 'Azul', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(48, 'Sin Numero de Serie', 'Azul', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(49, 'Sin Numero de Serie', 'Azul', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(50, 'Sin Numero de Serie', 'Azul', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(51, 'Sin Numero de Serie', 'Azul', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(52, 'Sin Numero de Serie', 'Azul', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(53, 'Sin Numero de Serie', 'Azul', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(54, 'Sin Numero de Serie', 'Azul', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(55, 'Sin Numero de Serie', 'Azul', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(56, 'Sin Numero de Serie', 'Verde', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(57, 'Sin Numero de Serie', 'Verde', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(58, 'Sin Numero de Serie', 'Negro', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(59, 'Sin Numero de Serie', 'Negro', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(60, 'Sin Numero de Serie', 'Negro', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(61, '2213446-4332', 'Azul y Negro', 'Sinker', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(62, '220338282', 'Negro', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(63, 'Sin Numero de Serie', 'Blanco', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(64, 'Sin Numero de Serie', 'Blanco', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(65, 'Sin Numero de Serie', 'Blanca', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(66, 'Sin Numero de Serie', 'Blanca', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(67, 'Sin Numero de Serie', 'Morado', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(68, 'Sin Numero de Serie', 'Morado', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(69, 'Sin Numero de Serie', 'Negra', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(70, 'Sin Numero de Serie', 'Amarillos', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(71, 'Sin Numero de Serie', 'Amarillos', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(72, 'Sin Numero de Serie', 'Amarillos', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(73, 'Sin Numero de Serie', 'Amarillos', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(74, 'Sin Numero de Serie', 'Amarillos', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(75, 'Sin Numero de Serie', 'Negra', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(76, 'Sin Numero de Serie', 'Negra', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(77, 'Sin Numero de Serie', 'Negra', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(78, 'Sin Numero de Serie', 'Mixto', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(79, 'Sin Numero de Serie', 'Mixto', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(80, 'Sin Numero de Serie', 'Mixto', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(81, 'Sin Numero de Serie', 'Mixto', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(82, 'Sin Numero de Serie', 'Mixto', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(83, 'Sin Numero de Serie', 'Mixto', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador'),
(84, 'Sin Numero de Serie', 'Blanca', 'Sin Marca', 'Sin Modelo', 'Sin Memoria Ram', 'Sin Disco Duro', 'Sin Sistema Operativo', 'Sin Dimenciones', NULL, '', 'Sin Procesador');

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
(1, 'Acantila', ' Av. 5 De Mayo Esq. Matamoros No 1070 Centro Tuxte', NULL, 'Alcandia@yahoo.', '3322-3423'),
(2, 'Aguilar', ' Calle Matamoros No. 40 Col.Centro Tuxtepec', NULL, 'Aguilar@hotmai.', '3323-4354'),
(3, 'Alpha Decay', 'Av. 5 De Mayo No. 1690 La Piragua', NULL, 'Alpha@hotmail.c', '3324-2343'),
(4, 'Atalanta', 'Av. Independencia No.166 Col.Centro\r\n', NULL, 'Atalanta@yahoo.', '3324-2322'),
(5, 'Gredos', 'Mariano Arista No 454 Centro Tuxtepec', NULL, 'verocakatalinic', '4445-5332');

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

--
-- Volcado de datos para la tabla `encargado_mantenimiento`
--

INSERT INTO `encargado_mantenimiento` (`codigo_emantenimiento`, `nombre`, `telefono`, `correo`, `direccion`) VALUES
(1, 'Perez Fernandez', '3334-4566', 'Carlos@yaho.com', 'Calle Sebastian Ortiz No 690 Centro Tuxtepec'),
(2, 'Juan Jose', '4534-5344', 'chekaspeare@hotmail.com', 'Gomez Bolaños'),
(3, 'Andrez Gomez ', '3423-4234', 'Gomer@hotmail.com', ' Carr. A Ojitlan No. 951-A Col. 5 De Mayo Tuxtepec');

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
('CEJ-002-020-UN-0005-0001', 5, 'Una humilde propuesta,', '0', '1990-01-17', 0x68756d696c64652d70726f7075657374615f454449494d4132303137303432305f303232315f312e6a7067, NULL),
('CEJ-002-020-UN-0005-0002', 5, 'Una humilde propuesta,', '0', '1990-01-17', 0x68756d696c64652d70726f7075657374615f454449494d4132303137303432305f303232315f312e6a7067, NULL),
('CEJ-002-020-UN-0005-0003', 5, 'Una humilde propuesta,', '0', '1990-01-17', 0x68756d696c64652d70726f7075657374615f454449494d4132303137303432305f303232315f312e6a7067, NULL),
('CEJ-002-020-UN-0005-0004', 5, 'Una humilde propuesta,', '0', '1990-01-17', 0x68756d696c64652d70726f7075657374615f454449494d4132303137303432305f303232315f312e6a7067, NULL),
('CEJ-002-020-UN-0005-0005', 5, 'Una humilde propuesta,', '0', '1990-01-17', 0x68756d696c64652d70726f7075657374615f454449494d4132303137303432305f303232315f312e6a7067, NULL),
('CEJ-002-020-UN-0005-0006', 5, 'Una humilde propuesta,', '0', '1990-01-17', 0x68756d696c64652d70726f7075657374615f454449494d4132303137303432305f303232315f312e6a7067, NULL),
('CEJ-002-030-JE-0003-0001', 3, 'Jennifer Gobierno', '0', '2001-01-10', 0x4a656e6e696665722d476f626965726e6f5f454449494d4132303137303431395f303733305f312e6a7067, NULL),
('CEJ-002-030-JE-0003-0002', 3, 'Jennifer Gobierno', '0', '2001-01-10', 0x4a656e6e696665722d476f626965726e6f5f454449494d4132303137303431395f303733305f312e6a7067, NULL),
('CEJ-002-030-JE-0003-0003', 3, 'Jennifer Gobierno', '2', '2001-01-10', 0x4a656e6e696665722d476f626965726e6f5f454449494d4132303137303431395f303733305f312e6a7067, NULL),
('CEJ-002-030-JE-0003-0004', 3, 'Jennifer Gobierno', '0', '2001-01-10', 0x4a656e6e696665722d476f626965726e6f5f454449494d4132303137303431395f303733305f312e6a7067, NULL),
('CEJ-002-030-JE-0003-0005', 3, 'Jennifer Gobierno', '0', '2001-01-10', 0x4a656e6e696665722d476f626965726e6f5f454449494d4132303137303431395f303733305f312e6a7067, NULL),
('CEJ-002-030-JE-0003-0006', 3, 'Jennifer Gobierno', '0', '2001-01-10', 0x4a656e6e696665722d476f626965726e6f5f454449494d4132303137303431395f303733305f312e6a7067, NULL),
('CEJ-002-070-LA-0004-0001', 4, 'La forja de un rebelde.', '0', '2000-01-06', 0x666f726a612d726562656c64655f454449494d4132303137303431385f303431335f312e6a7067, NULL),
('CEJ-002-070-LA-0004-0002', 4, 'La forja de un rebelde.', '0', '2000-01-06', 0x666f726a612d726562656c64655f454449494d4132303137303431385f303431335f312e6a7067, NULL),
('CEJ-002-070-LA-0004-0003', 4, 'La forja de un rebelde.', '0', '2000-01-06', 0x666f726a612d726562656c64655f454449494d4132303137303431385f303431335f312e6a7067, NULL),
('CEJ-002-070-LA-0004-0004', 4, 'La forja de un rebelde.', '0', '2000-01-06', 0x666f726a612d726562656c64655f454449494d4132303137303431385f303431335f312e6a7067, NULL),
('CEJ-002-070-LA-0004-0005', 4, 'La forja de un rebelde.', '2', '2000-01-06', 0x666f726a612d726562656c64655f454449494d4132303137303431385f303431335f312e6a7067, NULL),
('CEJ-002-070-LA-0004-0006', 4, 'La forja de un rebelde.', '0', '2000-01-06', 0x666f726a612d726562656c64655f454449494d4132303137303431385f303431335f312e6a7067, NULL),
('CEJ-002-070-LA-0004-0007', 4, 'La forja de un rebelde.', '0', '2000-01-06', 0x666f726a612d726562656c64655f454449494d4132303137303431385f303431335f312e6a7067, NULL),
('CEJ-002-070-LA-0004-0008', 4, 'La forja de un rebelde.', '0', '2000-01-06', 0x666f726a612d726562656c64655f454449494d4132303137303431385f303431335f312e6a7067, NULL),
('CEJ-002-070-LA-0004-0009', 4, 'La forja de un rebelde.', '0', '2000-01-06', 0x666f726a612d726562656c64655f454449494d4132303137303431385f303431335f312e6a7067, NULL),
('CEJ-002-070-LA-0004-0010', 4, 'La forja de un rebelde.', '0', '2000-01-06', 0x666f726a612d726562656c64655f454449494d4132303137303431385f303431335f312e6a7067, NULL),
('CEJ-002-070-LA-0004-0011', 4, 'La forja de un rebelde.', '0', '2000-01-06', 0x666f726a612d726562656c64655f454449494d4132303137303431385f303431335f312e6a7067, NULL),
('CEJ-002-090-TA-0003-0001', 3, 'Tan poca vida', '0', '2018-01-09', 0x506f72746164612d6c6962726f5f454449494d4132303136303932305f303832375f312e6a7067, NULL),
('CEJ-002-090-TA-0003-0002', 3, 'Tan poca vida', '2', '2018-01-09', 0x506f72746164612d6c6962726f5f454449494d4132303136303932305f303832375f312e6a7067, NULL),
('CEJ-002-090-TA-0003-0003', 3, 'Tan poca vida', '0', '2018-01-09', 0x506f72746164612d6c6962726f5f454449494d4132303136303932305f303832375f312e6a7067, NULL),
('CEJ-002-090-TA-0003-0004', 3, 'Tan poca vida', '0', '2018-01-09', 0x506f72746164612d6c6962726f5f454449494d4132303136303932305f303832375f312e6a7067, NULL),
('CEJ-002-090-TA-0003-0005', 3, 'Tan poca vida', '0', '2018-01-09', 0x506f72746164612d6c6962726f5f454449494d4132303136303932305f303832375f312e6a7067, NULL),
('CEJ-002-090-TA-0003-0006', 3, 'Tan poca vida', '2', '2018-01-09', 0x506f72746164612d6c6962726f5f454449494d4132303136303932305f303832375f312e6a7067, NULL),
('CEJ-002-090-TA-0003-0007', 3, 'Tan poca vida', '0', '2018-01-09', 0x506f72746164612d6c6962726f5f454449494d4132303136303932305f303832375f312e6a7067, NULL),
('CEJ-002-110-EL-0004-0001', 4, 'El Filtro Burbuja. Cómo la Red decide lo que leemo', '0', '2018-01-09', 0x46696c74726f2d42757262756a615f454449494d4132303137303431395f303830325f312e6a7067, NULL),
('CEJ-002-110-EL-0004-0002', 4, 'El Filtro Burbuja. Cómo la Red decide lo que leemo', '2', '2018-01-09', 0x46696c74726f2d42757262756a615f454449494d4132303137303431395f303830325f312e6a7067, NULL),
('CEJ-002-110-EL-0004-0003', 4, 'El Filtro Burbuja. Cómo la Red decide lo que leemo', '0', '2018-01-09', 0x46696c74726f2d42757262756a615f454449494d4132303137303431395f303830325f312e6a7067, NULL),
('CEJ-002-110-EL-0004-0004', 4, 'El Filtro Burbuja. Cómo la Red decide lo que leemo', '0', '2018-01-09', 0x46696c74726f2d42757262756a615f454449494d4132303137303431395f303830325f312e6a7067, NULL),
('CEJ-002-110-EL-0004-0005', 4, 'El Filtro Burbuja. Cómo la Red decide lo que leemo', '0', '2018-01-09', 0x46696c74726f2d42757262756a615f454449494d4132303137303431395f303830325f312e6a7067, NULL),
('CEJ-002-110-EL-0004-0006', 4, 'El Filtro Burbuja. Cómo la Red decide lo que leemo', '0', '2018-01-09', 0x46696c74726f2d42757262756a615f454449494d4132303137303431395f303830325f312e6a7067, NULL),
('CEJ-002-110-EL-0004-0007', 4, 'El Filtro Burbuja. Cómo la Red decide lo que leemo', '0', '2018-01-09', 0x46696c74726f2d42757262756a615f454449494d4132303137303431395f303830325f312e6a7067, NULL),
('CEJ-002-110-EL-0004-0008', 4, 'El Filtro Burbuja. Cómo la Red decide lo que leemo', '0', '2018-01-09', 0x46696c74726f2d42757262756a615f454449494d4132303137303431395f303830325f312e6a7067, NULL),
('CEJ-002-110-MA-0002-0001', 2, 'Mañana. Una revolución en marcha', '0', '1999-01-07', 0x4d616e616e612d7265766f6c7563696f6e2d6d61726368612d437972696c2d44696f6e5f454449494d4132303137303431395f303830315f312e6a7067, NULL),
('CEJ-002-110-MA-0002-0002', 2, 'Mañana. Una revolución en marcha', '2', '1999-01-07', 0x4d616e616e612d7265766f6c7563696f6e2d6d61726368612d437972696c2d44696f6e5f454449494d4132303137303431395f303830315f312e6a7067, NULL),
('CEJ-002-110-MA-0002-0003', 2, 'Mañana. Una revolución en marcha', '2', '1999-01-07', 0x4d616e616e612d7265766f6c7563696f6e2d6d61726368612d437972696c2d44696f6e5f454449494d4132303137303431395f303830315f312e6a7067, NULL),
('CEJ-002-110-MA-0002-0004', 2, 'Mañana. Una revolución en marcha', '2', '1999-01-07', 0x4d616e616e612d7265766f6c7563696f6e2d6d61726368612d437972696c2d44696f6e5f454449494d4132303137303431395f303830315f312e6a7067, NULL),
('CEJ-002-110-MA-0002-0005', 2, 'Mañana. Una revolución en marcha', '2', '1999-01-07', 0x4d616e616e612d7265766f6c7563696f6e2d6d61726368612d437972696c2d44696f6e5f454449494d4132303137303431395f303830315f312e6a7067, NULL),
('CEJ-002-110-MA-0002-0006', 2, 'Mañana. Una revolución en marcha', '0', '1999-01-07', 0x4d616e616e612d7265766f6c7563696f6e2d6d61726368612d437972696c2d44696f6e5f454449494d4132303137303431395f303830315f312e6a7067, NULL),
('CEJ-002-110-MA-0002-0007', 2, 'Mañana. Una revolución en marcha', '0', '1999-01-07', 0x4d616e616e612d7265766f6c7563696f6e2d6d61726368612d437972696c2d44696f6e5f454449494d4132303137303431395f303830315f312e6a7067, NULL),
('CEJ-002-110-MA-0002-0008', 2, 'Mañana. Una revolución en marcha', '0', '1999-01-07', 0x4d616e616e612d7265766f6c7563696f6e2d6d61726368612d437972696c2d44696f6e5f454449494d4132303137303431395f303830315f312e6a7067, NULL),
('CEJ-002-110-MA-0002-0009', 2, 'Mañana. Una revolución en marcha', '0', '1999-01-07', 0x4d616e616e612d7265766f6c7563696f6e2d6d61726368612d437972696c2d44696f6e5f454449494d4132303137303431395f303830315f312e6a7067, NULL),
('CEJ-002-110-MA-0002-0010', 2, 'Mañana. Una revolución en marcha', '0', '1999-01-07', 0x4d616e616e612d7265766f6c7563696f6e2d6d61726368612d437972696c2d44696f6e5f454449494d4132303137303431395f303830315f312e6a7067, NULL),
('CEJ-002-130-LA-0004-0001', 4, 'La ciudad de las pasiones terribles', '0', '2001-01-25', 0x6369756461642d706173696f6e65732d7465727269626c65735f454449494d4132303137303432315f303537365f312e6a7067, NULL),
('CEJ-002-130-LA-0004-0002', 4, 'La ciudad de las pasiones terribles', '2', '2001-01-25', 0x6369756461642d706173696f6e65732d7465727269626c65735f454449494d4132303137303432315f303537365f312e6a7067, NULL),
('CEJ-002-130-LA-0004-0003', 4, 'La ciudad de las pasiones terribles', '0', '2001-01-25', 0x6369756461642d706173696f6e65732d7465727269626c65735f454449494d4132303137303432315f303537365f312e6a7067, NULL),
('CEJ-002-130-LA-0004-0004', 4, 'La ciudad de las pasiones terribles', '0', '2001-01-25', 0x6369756461642d706173696f6e65732d7465727269626c65735f454449494d4132303137303432315f303537365f312e6a7067, NULL),
('CEJ-002-130-LA-0004-0005', 4, 'La ciudad de las pasiones terribles', '0', '2001-01-25', 0x6369756461642d706173696f6e65732d7465727269626c65735f454449494d4132303137303432315f303537365f312e6a7067, NULL),
('CEJ-002-130-LA-0004-0006', 4, 'La ciudad de las pasiones terribles', '0', '2001-01-25', 0x6369756461642d706173696f6e65732d7465727269626c65735f454449494d4132303137303432315f303537365f312e6a7067, NULL),
('CEJ-002-130-LA-0004-0007', 4, 'La ciudad de las pasiones terribles', '0', '2001-01-25', 0x6369756461642d706173696f6e65732d7465727269626c65735f454449494d4132303137303432315f303537365f312e6a7067, NULL),
('CEJ-002-130-LA-0004-0008', 4, 'La ciudad de las pasiones terribles', '0', '2001-01-25', 0x6369756461642d706173696f6e65732d7465727269626c65735f454449494d4132303137303432315f303537365f312e6a7067, NULL),
('CEJ-002-130-LA-0004-0009', 4, 'La ciudad de las pasiones terribles', '0', '2001-01-25', 0x6369756461642d706173696f6e65732d7465727269626c65735f454449494d4132303137303432315f303537365f312e6a7067, NULL),
('CEJ-002-130-LA-0004-0010', 4, 'La ciudad de las pasiones terribles', '0', '2001-01-25', 0x6369756461642d706173696f6e65732d7465727269626c65735f454449494d4132303137303432315f303537365f312e6a7067, NULL),
('CEJ-002-130-LA-0004-0011', 4, 'La ciudad de las pasiones terribles', '0', '2001-01-25', 0x6369756461642d706173696f6e65732d7465727269626c65735f454449494d4132303137303432315f303537365f312e6a7067, NULL),
('CEJ-002-130-LA-0004-0012', 4, 'La ciudad de las pasiones terribles', '0', '2001-01-25', 0x6369756461642d706173696f6e65732d7465727269626c65735f454449494d4132303137303432315f303537365f312e6a7067, NULL),
('CEJ-002-130-LA-0004-0013', 4, 'La ciudad de las pasiones terribles', '0', '2001-01-25', 0x6369756461642d706173696f6e65732d7465727269626c65735f454449494d4132303137303432315f303537365f312e6a7067, NULL),
('CEJ-002-130-LA-0004-0014', 4, 'La ciudad de las pasiones terribles', '0', '2001-01-25', 0x6369756461642d706173696f6e65732d7465727269626c65735f454449494d4132303137303432315f303537365f312e6a7067, NULL),
('CEJ-002-130-LA-0004-0015', 4, 'La ciudad de las pasiones terribles', '0', '2001-01-25', 0x6369756461642d706173696f6e65732d7465727269626c65735f454449494d4132303137303432315f303537365f312e6a7067, NULL),
('CEJ-002-190-CA-0004-0001', 4, 'Capitalismo a la española', '0', '2018-01-09', 0x4361706974616c69736d6f2d657370616e6f6c615f454449494d4132303137303431395f303731365f312e6a7067, NULL),
('CEJ-002-190-CA-0004-0002', 4, 'Capitalismo a la española', '0', '2018-01-09', 0x4361706974616c69736d6f2d657370616e6f6c615f454449494d4132303137303431395f303731365f312e6a7067, NULL),
('CEJ-002-190-CA-0004-0003', 4, 'Capitalismo a la española', '0', '2018-01-09', 0x4361706974616c69736d6f2d657370616e6f6c615f454449494d4132303137303431395f303731365f312e6a7067, NULL),
('CEJ-002-190-CA-0004-0004', 4, 'Capitalismo a la española', '0', '2018-01-09', 0x4361706974616c69736d6f2d657370616e6f6c615f454449494d4132303137303431395f303731365f312e6a7067, NULL),
('CEJ-002-190-CA-0004-0005', 4, 'Capitalismo a la española', '0', '2018-01-09', 0x4361706974616c69736d6f2d657370616e6f6c615f454449494d4132303137303431395f303731365f312e6a7067, NULL),
('CEJ-002-190-CA-0004-0006', 4, 'Capitalismo a la española', '0', '2018-01-09', 0x4361706974616c69736d6f2d657370616e6f6c615f454449494d4132303137303431395f303731365f312e6a7067, NULL),
('CEJ-002-190-CA-0004-0007', 4, 'Capitalismo a la española', '0', '2018-01-09', 0x4361706974616c69736d6f2d657370616e6f6c615f454449494d4132303137303431395f303731365f312e6a7067, NULL),
('CEJ-002-190-CA-0004-0008', 4, 'Capitalismo a la española', '0', '2018-01-09', 0x4361706974616c69736d6f2d657370616e6f6c615f454449494d4132303137303431395f303731365f312e6a7067, NULL),
('CEJ-002-190-CA-0004-0009', 4, 'Capitalismo a la española', '0', '2018-01-09', 0x4361706974616c69736d6f2d657370616e6f6c615f454449494d4132303137303431395f303731365f312e6a7067, NULL),
('CEJ-002-190-CA-0004-0010', 4, 'Capitalismo a la española', '0', '2018-01-09', 0x4361706974616c69736d6f2d657370616e6f6c615f454449494d4132303137303431395f303731365f312e6a7067, NULL),
('CEJ-002-190-CA-0004-0011', 4, 'Capitalismo a la española', '0', '2018-01-09', 0x4361706974616c69736d6f2d657370616e6f6c615f454449494d4132303137303431395f303731365f312e6a7067, NULL),
('CEJ-002-290-EL-0003-0001', 3, 'El mito de los deberes', '0', '2000-01-13', 0x6d69746f2d646562657265735f454449494d4132303137303432315f303632345f312e6a7067, NULL),
('CEJ-002-290-EL-0003-0002', 3, 'El mito de los deberes', '0', '2000-01-13', 0x6d69746f2d646562657265735f454449494d4132303137303432315f303632345f312e6a7067, NULL),
('CEJ-002-290-EL-0003-0003', 3, 'El mito de los deberes', '0', '2000-01-13', 0x6d69746f2d646562657265735f454449494d4132303137303432315f303632345f312e6a7067, NULL),
('CEJ-002-290-EL-0003-0004', 3, 'El mito de los deberes', '0', '2000-01-13', 0x6d69746f2d646562657265735f454449494d4132303137303432315f303632345f312e6a7067, NULL),
('CEJ-002-290-EL-0003-0005', 3, 'El mito de los deberes', '0', '2000-01-13', 0x6d69746f2d646562657265735f454449494d4132303137303432315f303632345f312e6a7067, NULL),
('CEJ-002-290-EL-0003-0006', 3, 'El mito de los deberes', '2', '2000-01-13', 0x6d69746f2d646562657265735f454449494d4132303137303432315f303632345f312e6a7067, NULL),
('CEJ-002-290-EL-0003-0007', 3, 'El mito de los deberes', '0', '2000-01-13', 0x6d69746f2d646562657265735f454449494d4132303137303432315f303632345f312e6a7067, NULL),
('CEJ-002-290-EL-0003-0008', 3, 'El mito de los deberes', '0', '2000-01-13', 0x6d69746f2d646562657265735f454449494d4132303137303432315f303632345f312e6a7067, NULL),
('CEJ-002-290-EL-0003-0009', 3, 'El mito de los deberes', '0', '2000-01-13', 0x6d69746f2d646562657265735f454449494d4132303137303432315f303632345f312e6a7067, NULL),
('CEJ-002-390-EN-0004-0001', 4, 'Entre el mundo y yo', '0', '1982-01-20', 0x6d756e646f5f454449494d4132303137303432315f303239345f312e6a7067, NULL),
('CEJ-002-390-EN-0004-0002', 4, 'Entre el mundo y yo', '0', '1982-01-20', 0x6d756e646f5f454449494d4132303137303432315f303239345f312e6a7067, NULL),
('CEJ-002-390-EN-0004-0003', 4, 'Entre el mundo y yo', '0', '1982-01-20', 0x6d756e646f5f454449494d4132303137303432315f303239345f312e6a7067, NULL),
('CEJ-002-390-EN-0004-0004', 4, 'Entre el mundo y yo', '0', '1982-01-20', 0x6d756e646f5f454449494d4132303137303432315f303239345f312e6a7067, NULL),
('CEJ-002-390-EN-0004-0005', 4, 'Entre el mundo y yo', '0', '1982-01-20', 0x6d756e646f5f454449494d4132303137303432315f303239345f312e6a7067, NULL),
('CEJ-002-390-EN-0004-0006', 4, 'Entre el mundo y yo', '0', '1982-01-20', 0x6d756e646f5f454449494d4132303137303432315f303239345f312e6a7067, NULL),
('CEJ-002-390-EN-0004-0007', 4, 'Entre el mundo y yo', '0', '1982-01-20', 0x6d756e646f5f454449494d4132303137303432315f303239345f312e6a7067, NULL),
('CEJ-002-390-EN-0004-0008', 4, 'Entre el mundo y yo', '0', '1982-01-20', 0x6d756e646f5f454449494d4132303137303432315f303239345f312e6a7067, NULL),
('CEJ-002-410-LA-0004-0001', 4, 'La noche perdida', '0', '2018-01-09', 0x6e6f6368652d706572646964615f454449494d4132303137303432305f303634335f312e6a7067, NULL),
('CEJ-002-410-LA-0004-0002', 4, 'La noche perdida', '0', '2018-01-09', 0x6e6f6368652d706572646964615f454449494d4132303137303432305f303634335f312e6a7067, NULL),
('CEJ-002-410-LA-0004-0003', 4, 'La noche perdida', '0', '2018-01-09', 0x6e6f6368652d706572646964615f454449494d4132303137303432305f303634335f312e6a7067, NULL),
('CEJ-002-410-LA-0004-0004', 4, 'La noche perdida', '0', '2018-01-09', 0x6e6f6368652d706572646964615f454449494d4132303137303432305f303634335f312e6a7067, NULL),
('CEJ-002-410-LA-0004-0005', 4, 'La noche perdida', '0', '2018-01-09', 0x6e6f6368652d706572646964615f454449494d4132303137303432305f303634335f312e6a7067, NULL),
('CEJ-002-410-LA-0004-0006', 4, 'La noche perdida', '0', '2018-01-09', 0x6e6f6368652d706572646964615f454449494d4132303137303432305f303634335f312e6a7067, NULL),
('CEJ-002-550-LA-0004-0001', 4, 'Laudato Si, del Papa Francisco', '2', '2018-01-17', 0x4c61756461746f5f454449494d4132303137303432315f303134375f312e6a7067, NULL),
('CEJ-002-550-LA-0004-0002', 4, 'Laudato Si, del Papa Francisco', '0', '2018-01-17', 0x4c61756461746f5f454449494d4132303137303432315f303134375f312e6a7067, NULL),
('CEJ-002-550-LA-0004-0003', 4, 'Laudato Si, del Papa Francisco', '0', '2018-01-17', 0x4c61756461746f5f454449494d4132303137303432315f303134375f312e6a7067, NULL),
('CEJ-002-550-LA-0004-0004', 4, 'Laudato Si, del Papa Francisco', '0', '2018-01-17', 0x4c61756461746f5f454449494d4132303137303432315f303134375f312e6a7067, NULL),
('CEJ-002-550-LA-0004-0005', 4, 'Laudato Si, del Papa Francisco', '2', '2018-01-17', 0x4c61756461746f5f454449494d4132303137303432315f303134375f312e6a7067, NULL),
('CEJ-002-740-FL-0005-0001', 5, 'Flores para Algernon', '2', '2018-01-09', 0x466c6f7265732d416c6765726e6f6e5f454449494d4132303137303432315f303238335f312e6a7067, NULL),
('CEJ-002-740-FL-0005-0002', 5, 'Flores para Algernon', '0', '2018-01-09', 0x466c6f7265732d416c6765726e6f6e5f454449494d4132303137303432315f303238335f312e6a7067, NULL),
('CEJ-002-740-FL-0005-0003', 5, 'Flores para Algernon', '2', '2018-01-09', 0x466c6f7265732d416c6765726e6f6e5f454449494d4132303137303432315f303238335f312e6a7067, NULL),
('CEJ-002-740-FL-0005-0004', 5, 'Flores para Algernon', '2', '2018-01-09', 0x466c6f7265732d416c6765726e6f6e5f454449494d4132303137303432315f303238335f312e6a7067, NULL),
('CEJ-002-740-FL-0005-0005', 5, 'Flores para Algernon', '2', '2018-01-09', 0x466c6f7265732d416c6765726e6f6e5f454449494d4132303137303432315f303238335f312e6a7067, NULL),
('CEJ-002-790-EN-0004-0001', 4, 'En defensa de los animales', '0', '2018-01-10', 0x646566656e73612d616e696d616c65735f454449494d4132303137303432315f303333345f312e6a7067, NULL),
('CEJ-002-790-EN-0004-0002', 4, 'En defensa de los animales', '0', '2018-01-10', 0x646566656e73612d616e696d616c65735f454449494d4132303137303432315f303333345f312e6a7067, NULL),
('CEJ-002-790-EN-0004-0003', 4, 'En defensa de los animales', '2', '2018-01-10', 0x646566656e73612d616e696d616c65735f454449494d4132303137303432315f303333345f312e6a7067, NULL),
('CEJ-002-790-EN-0004-0004', 4, 'En defensa de los animales', '0', '2018-01-10', 0x646566656e73612d616e696d616c65735f454449494d4132303137303432315f303333345f312e6a7067, NULL),
('CEJ-002-850-DE-0003-0001', 3, 'De puertas para adentro', '2', '1996-01-05', 0x707565727461732d6164656e74726f5f454449494d4132303137303431395f303638365f312e6a7067, NULL),
('CEJ-002-850-DE-0003-0002', 3, 'De puertas para adentro', '0', '1996-01-05', 0x707565727461732d6164656e74726f5f454449494d4132303137303431395f303638365f312e6a7067, NULL),
('CEJ-002-850-DE-0003-0003', 3, 'De puertas para adentro', '2', '1996-01-05', 0x707565727461732d6164656e74726f5f454449494d4132303137303431395f303638365f312e6a7067, NULL),
('CEJ-002-850-DE-0003-0004', 3, 'De puertas para adentro', '0', '1996-01-05', 0x707565727461732d6164656e74726f5f454449494d4132303137303431395f303638365f312e6a7067, NULL),
('CEJ-002-850-DE-0003-0005', 3, 'De puertas para adentro', '0', '1996-01-05', 0x707565727461732d6164656e74726f5f454449494d4132303137303431395f303638365f312e6a7067, NULL),
('CEJ-002-850-DE-0003-0006', 3, 'De puertas para adentro', '0', '1996-01-05', 0x707565727461732d6164656e74726f5f454449494d4132303137303431395f303638365f312e6a7067, NULL),
('CEJ-002-850-DE-0003-0007', 3, 'De puertas para adentro', '2', '1996-01-05', 0x707565727461732d6164656e74726f5f454449494d4132303137303431395f303638365f312e6a7067, NULL),
('CEJ-002-850-DE-0003-0008', 3, 'De puertas para adentro', '0', '1996-01-05', 0x707565727461732d6164656e74726f5f454449494d4132303137303431395f303638365f312e6a7067, NULL),
('CEJ-002-850-DE-0003-0009', 3, 'De puertas para adentro', '0', '1996-01-05', 0x707565727461732d6164656e74726f5f454449494d4132303137303431395f303638365f312e6a7067, NULL),
('CEJ-002-980-CO-0003-0001', 3, 'Cosas de la Cosa Nostra', '0', '2000-01-06', 0x436f7361732d436f73612d4e6f737472615f454449494d4132303137303432315f303236355f312e6a7067, NULL),
('CEJ-002-980-CO-0003-0002', 3, 'Cosas de la Cosa Nostra', '0', '2000-01-06', 0x436f7361732d436f73612d4e6f737472615f454449494d4132303137303432315f303236355f312e6a7067, NULL),
('CEJ-002-980-CO-0003-0003', 3, 'Cosas de la Cosa Nostra', '0', '2000-01-06', 0x436f7361732d436f73612d4e6f737472615f454449494d4132303137303432315f303236355f312e6a7067, NULL),
('CEJ-002-980-CO-0003-0004', 3, 'Cosas de la Cosa Nostra', '0', '2000-01-06', 0x436f7361732d436f73612d4e6f737472615f454449494d4132303137303432315f303236355f312e6a7067, NULL),
('CEJ-002-980-CO-0003-0005', 3, 'Cosas de la Cosa Nostra', '0', '2000-01-06', 0x436f7361732d436f73612d4e6f737472615f454449494d4132303137303432315f303236355f312e6a7067, NULL),
('CEJ-002-980-CO-0003-0006', 3, 'Cosas de la Cosa Nostra', '0', '2000-01-06', 0x436f7361732d436f73612d4e6f737472615f454449494d4132303137303432315f303236355f312e6a7067, NULL),
('CEJ-002-980-CO-0003-0007', 3, 'Cosas de la Cosa Nostra', '0', '2000-01-06', 0x436f7361732d436f73612d4e6f737472615f454449494d4132303137303432315f303236355f312e6a7067, NULL),
('CEJ-002-980-CO-0003-0008', 3, 'Cosas de la Cosa Nostra', '0', '2000-01-06', 0x436f7361732d436f73612d4e6f737472615f454449494d4132303137303432315f303236355f312e6a7067, NULL),
('CEJ-002-990-DE-0002-0001', 2, 'De cómo me convertí en alcalde y cambié el mundo', '0', '1998-01-22', 0x636f6e76657274692d616c63616c64655f454449494d4132303137303432305f303334315f312e6a7067, NULL),
('CEJ-002-990-DE-0002-0002', 2, 'De cómo me convertí en alcalde y cambié el mundo', '0', '1998-01-22', 0x636f6e76657274692d616c63616c64655f454449494d4132303137303432305f303334315f312e6a7067, NULL),
('CEJ-002-990-DE-0002-0003', 2, 'De cómo me convertí en alcalde y cambié el mundo', '0', '1998-01-22', 0x636f6e76657274692d616c63616c64655f454449494d4132303137303432305f303334315f312e6a7067, NULL),
('CEJ-002-990-DE-0002-0004', 2, 'De cómo me convertí en alcalde y cambié el mundo', '2', '1998-01-22', 0x636f6e76657274692d616c63616c64655f454449494d4132303137303432305f303334315f312e6a7067, NULL),
('CEJ-002-990-DE-0002-0005', 2, 'De cómo me convertí en alcalde y cambié el mundo', '0', '1998-01-22', 0x636f6e76657274692d616c63616c64655f454449494d4132303137303432305f303334315f312e6a7067, NULL),
('CEJ-002-990-DE-0002-0006', 2, 'De cómo me convertí en alcalde y cambié el mundo', '0', '1998-01-22', 0x636f6e76657274692d616c63616c64655f454449494d4132303137303432305f303334315f312e6a7067, NULL),
('CEJ-002-990-DE-0002-0007', 2, 'De cómo me convertí en alcalde y cambié el mundo', '0', '1998-01-22', 0x636f6e76657274692d616c63616c64655f454449494d4132303137303432305f303334315f312e6a7067, NULL),
('CEJ-002-990-DE-0002-0008', 2, 'De cómo me convertí en alcalde y cambié el mundo', '0', '1998-01-22', 0x636f6e76657274692d616c63616c64655f454449494d4132303137303432305f303334315f312e6a7067, NULL),
('CEJ-002-990-DE-0002-0009', 2, 'De cómo me convertí en alcalde y cambié el mundo', '0', '1998-01-22', 0x636f6e76657274692d616c63616c64655f454449494d4132303137303432305f303334315f312e6a7067, NULL),
('CEJ-002-990-DE-0002-0010', 2, 'De cómo me convertí en alcalde y cambié el mundo', '0', '1998-01-22', 0x636f6e76657274692d616c63616c64655f454449494d4132303137303432305f303334315f312e6a7067, NULL),
('CEJ-002-990-DE-0002-0011', 2, 'De cómo me convertí en alcalde y cambié el mundo', '2', '1998-01-22', 0x636f6e76657274692d616c63616c64655f454449494d4132303137303432305f303334315f312e6a7067, NULL),
('CEJ-002-990-DE-0002-0012', 2, 'De cómo me convertí en alcalde y cambié el mundo', '0', '1998-01-22', 0x636f6e76657274692d616c63616c64655f454449494d4132303137303432305f303334315f312e6a7067, NULL),
('CEJ-002-990-DE-0002-0013', 2, 'De cómo me convertí en alcalde y cambié el mundo', '0', '1998-01-22', 0x636f6e76657274692d616c63616c64655f454449494d4132303137303432305f303334315f312e6a7067, NULL),
('CEJ-002-990-DE-0002-0014', 2, 'De cómo me convertí en alcalde y cambié el mundo', '0', '1998-01-22', 0x636f6e76657274692d616c63616c64655f454449494d4132303137303432305f303334315f312e6a7067, NULL),
('CEJ-002-990-DE-0002-0015', 2, 'De cómo me convertí en alcalde y cambié el mundo', '0', '1998-01-22', 0x636f6e76657274692d616c63616c64655f454449494d4132303137303432305f303334315f312e6a7067, NULL),
('CEJ-002-990-DE-0002-0016', 2, 'De cómo me convertí en alcalde y cambié el mundo', '0', '1998-01-22', 0x636f6e76657274692d616c63616c64655f454449494d4132303137303432305f303334315f312e6a7067, NULL),
('CEJ-002-990-DE-0002-0017', 2, 'De cómo me convertí en alcalde y cambié el mundo', '0', '1998-01-22', 0x636f6e76657274692d616c63616c64655f454449494d4132303137303432305f303334315f312e6a7067, NULL),
('CEJ-002-990-DE-0002-0018', 2, 'De cómo me convertí en alcalde y cambié el mundo', '0', '1998-01-22', 0x636f6e76657274692d616c63616c64655f454449494d4132303137303432305f303334315f312e6a7067, NULL);

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

--
-- Volcado de datos para la tabla `mantenimientos`
--

INSERT INTO `mantenimientos` (`codigo_mantenimiento`, `codigo_activo`, `fecha`, `descripcion`, `costo`) VALUES
(1, NULL, '2018-01-18', 'Se cambiaron las baterias internas', 10),
(2, NULL, '2018-01-18', 'se reparo una ruedita floja', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento_actvos`
--

CREATE TABLE `movimiento_actvos` (
  `codigo_activo` varchar(16) NOT NULL,
  `codigo_pactivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `movimiento_actvos`
--

INSERT INTO `movimiento_actvos` (`codigo_activo`, `codigo_pactivo`) VALUES
('CEJ-001-008-0001', 1),
('CEJ-001-017-0002', 2),
('CEJ-001-001-0006', 3),
('CEJ-001-004-0002', 4),
('CEJ-001-007-0015', 5),
('CEJ-001-006-0010', 6),
('CEJ-001-001-0003', 7),
('CEJ-001-001-0004', 7),
('CEJ-001-001-0005', 7),
('CEJ-001-017-0003', 8),
('CEJ-001-019-0001', 8),
('CEJ-001-001-0001', 9),
('CEJ-001-001-0007', 9),
('CEJ-001-002-0001', 10),
('CEJ-001-001-0011', 11),
('CEJ-001-002-0002', 11),
('CEJ-001-003-0001', 12),
('CEJ-001-009-0002', 12),
('CEJ-001-007-0006', 13),
('CEJ-001-004-0001', 14),
('CEJ-001-017-0004', 15),
('CEJ-001-007-0008', 16),
('CEJ-001-018-0003', 17),
('CEJ-001-015-0002', 17),
('CEJ-001-006-0008', 18),
('CEJ-001-006-0009', 19),
('CEJ-001-006-0006', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento_actvos_mant`
--

CREATE TABLE `movimiento_actvos_mant` (
  `codigo_activo` varchar(16) NOT NULL,
  `codigo_mantenimiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `movimiento_actvos_mant`
--

INSERT INTO `movimiento_actvos_mant` (`codigo_activo`, `codigo_mantenimiento`) VALUES
('CEJ-001-018-0001', 1),
('CEJ-001-001-0005', 2);

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
('CEJ-002-980-CO-0003-0001', 2),
('CEJ-002-980-CO-0003-0002', 2),
('CEJ-002-980-CO-0003-0003', 2),
('CEJ-002-980-CO-0003-0004', 2),
('CEJ-002-980-CO-0003-0005', 2),
('CEJ-002-980-CO-0003-0006', 2),
('CEJ-002-980-CO-0003-0007', 2),
('CEJ-002-980-CO-0003-0008', 2),
('CEJ-002-130-LA-0004-0001', 1),
('CEJ-002-130-LA-0004-0001', 2),
('CEJ-002-130-LA-0004-0002', 1),
('CEJ-002-130-LA-0004-0002', 2),
('CEJ-002-130-LA-0004-0003', 1),
('CEJ-002-130-LA-0004-0003', 2),
('CEJ-002-130-LA-0004-0004', 1),
('CEJ-002-130-LA-0004-0004', 2),
('CEJ-002-130-LA-0004-0005', 1),
('CEJ-002-130-LA-0004-0005', 2),
('CEJ-002-130-LA-0004-0006', 1),
('CEJ-002-130-LA-0004-0006', 2),
('CEJ-002-130-LA-0004-0007', 1),
('CEJ-002-130-LA-0004-0007', 2),
('CEJ-002-130-LA-0004-0008', 1),
('CEJ-002-130-LA-0004-0008', 2),
('CEJ-002-130-LA-0004-0009', 1),
('CEJ-002-130-LA-0004-0009', 2),
('CEJ-002-130-LA-0004-0010', 1),
('CEJ-002-130-LA-0004-0010', 2),
('CEJ-002-130-LA-0004-0011', 1),
('CEJ-002-130-LA-0004-0011', 2),
('CEJ-002-130-LA-0004-0012', 1),
('CEJ-002-130-LA-0004-0012', 2),
('CEJ-002-130-LA-0004-0013', 1),
('CEJ-002-130-LA-0004-0013', 2),
('CEJ-002-130-LA-0004-0014', 1),
('CEJ-002-130-LA-0004-0014', 2),
('CEJ-002-130-LA-0004-0015', 1),
('CEJ-002-130-LA-0004-0015', 2),
('CEJ-002-990-DE-0002-0001', 4),
('CEJ-002-990-DE-0002-0002', 4),
('CEJ-002-990-DE-0002-0003', 4),
('CEJ-002-990-DE-0002-0004', 4),
('CEJ-002-990-DE-0002-0005', 4),
('CEJ-002-990-DE-0002-0006', 4),
('CEJ-002-990-DE-0002-0007', 4),
('CEJ-002-990-DE-0002-0008', 4),
('CEJ-002-990-DE-0002-0009', 4),
('CEJ-002-990-DE-0002-0010', 4),
('CEJ-002-990-DE-0002-0011', 4),
('CEJ-002-990-DE-0002-0012', 4),
('CEJ-002-990-DE-0002-0013', 4),
('CEJ-002-990-DE-0002-0014', 4),
('CEJ-002-990-DE-0002-0015', 4),
('CEJ-002-990-DE-0002-0016', 4),
('CEJ-002-990-DE-0002-0017', 4),
('CEJ-002-990-DE-0002-0018', 4),
('CEJ-002-090-TA-0003-0001', 1),
('CEJ-002-090-TA-0003-0001', 4),
('CEJ-002-090-TA-0003-0002', 1),
('CEJ-002-090-TA-0003-0002', 4),
('CEJ-002-090-TA-0003-0003', 1),
('CEJ-002-090-TA-0003-0003', 4),
('CEJ-002-090-TA-0003-0004', 1),
('CEJ-002-090-TA-0003-0004', 4),
('CEJ-002-090-TA-0003-0005', 1),
('CEJ-002-090-TA-0003-0005', 4),
('CEJ-002-090-TA-0003-0006', 1),
('CEJ-002-090-TA-0003-0006', 4),
('CEJ-002-090-TA-0003-0007', 1),
('CEJ-002-090-TA-0003-0007', 4),
('CEJ-002-390-EN-0004-0001', 5),
('CEJ-002-390-EN-0004-0002', 5),
('CEJ-002-390-EN-0004-0003', 5),
('CEJ-002-390-EN-0004-0004', 5),
('CEJ-002-390-EN-0004-0005', 5),
('CEJ-002-390-EN-0004-0006', 5),
('CEJ-002-390-EN-0004-0007', 5),
('CEJ-002-390-EN-0004-0008', 5),
('CEJ-002-740-FL-0005-0001', 15),
('CEJ-002-740-FL-0005-0001', 16),
('CEJ-002-740-FL-0005-0002', 15),
('CEJ-002-740-FL-0005-0002', 16),
('CEJ-002-740-FL-0005-0003', 15),
('CEJ-002-740-FL-0005-0003', 16),
('CEJ-002-740-FL-0005-0004', 15),
('CEJ-002-740-FL-0005-0004', 16),
('CEJ-002-740-FL-0005-0005', 15),
('CEJ-002-740-FL-0005-0005', 16),
('CEJ-002-020-UN-0005-0001', 14),
('CEJ-002-020-UN-0005-0001', 15),
('CEJ-002-020-UN-0005-0002', 14),
('CEJ-002-020-UN-0005-0002', 15),
('CEJ-002-020-UN-0005-0003', 14),
('CEJ-002-020-UN-0005-0003', 15),
('CEJ-002-020-UN-0005-0004', 14),
('CEJ-002-020-UN-0005-0004', 15),
('CEJ-002-020-UN-0005-0005', 14),
('CEJ-002-020-UN-0005-0005', 15),
('CEJ-002-020-UN-0005-0006', 14),
('CEJ-002-020-UN-0005-0006', 15),
('CEJ-002-790-EN-0004-0001', 12),
('CEJ-002-790-EN-0004-0001', 17),
('CEJ-002-790-EN-0004-0002', 12),
('CEJ-002-790-EN-0004-0002', 17),
('CEJ-002-790-EN-0004-0003', 12),
('CEJ-002-790-EN-0004-0003', 17),
('CEJ-002-790-EN-0004-0004', 12),
('CEJ-002-790-EN-0004-0004', 17),
('CEJ-002-070-LA-0004-0001', 9),
('CEJ-002-070-LA-0004-0001', 11),
('CEJ-002-070-LA-0004-0002', 9),
('CEJ-002-070-LA-0004-0002', 11),
('CEJ-002-070-LA-0004-0003', 9),
('CEJ-002-070-LA-0004-0003', 11),
('CEJ-002-070-LA-0004-0004', 9),
('CEJ-002-070-LA-0004-0004', 11),
('CEJ-002-070-LA-0004-0005', 9),
('CEJ-002-070-LA-0004-0005', 11),
('CEJ-002-070-LA-0004-0006', 9),
('CEJ-002-070-LA-0004-0006', 11),
('CEJ-002-070-LA-0004-0007', 9),
('CEJ-002-070-LA-0004-0007', 11),
('CEJ-002-070-LA-0004-0008', 9),
('CEJ-002-070-LA-0004-0008', 11),
('CEJ-002-070-LA-0004-0009', 9),
('CEJ-002-070-LA-0004-0009', 11),
('CEJ-002-070-LA-0004-0010', 9),
('CEJ-002-070-LA-0004-0010', 11),
('CEJ-002-070-LA-0004-0011', 9),
('CEJ-002-070-LA-0004-0011', 11),
('CEJ-002-110-EL-0004-0001', 12),
('CEJ-002-110-EL-0004-0001', 14),
('CEJ-002-110-EL-0004-0002', 12),
('CEJ-002-110-EL-0004-0002', 14),
('CEJ-002-110-EL-0004-0003', 12),
('CEJ-002-110-EL-0004-0003', 14),
('CEJ-002-110-EL-0004-0004', 12),
('CEJ-002-110-EL-0004-0004', 14),
('CEJ-002-110-EL-0004-0005', 12),
('CEJ-002-110-EL-0004-0005', 14),
('CEJ-002-110-EL-0004-0006', 12),
('CEJ-002-110-EL-0004-0006', 14),
('CEJ-002-110-EL-0004-0007', 12),
('CEJ-002-110-EL-0004-0007', 14),
('CEJ-002-110-EL-0004-0008', 12),
('CEJ-002-110-EL-0004-0008', 14),
('CEJ-002-190-CA-0004-0001', 15),
('CEJ-002-190-CA-0004-0001', 16),
('CEJ-002-190-CA-0004-0002', 15),
('CEJ-002-190-CA-0004-0002', 16),
('CEJ-002-190-CA-0004-0003', 15),
('CEJ-002-190-CA-0004-0003', 16),
('CEJ-002-190-CA-0004-0004', 15),
('CEJ-002-190-CA-0004-0004', 16),
('CEJ-002-190-CA-0004-0005', 15),
('CEJ-002-190-CA-0004-0005', 16),
('CEJ-002-190-CA-0004-0006', 15),
('CEJ-002-190-CA-0004-0006', 16),
('CEJ-002-190-CA-0004-0007', 15),
('CEJ-002-190-CA-0004-0007', 16),
('CEJ-002-190-CA-0004-0008', 15),
('CEJ-002-190-CA-0004-0008', 16),
('CEJ-002-190-CA-0004-0009', 15),
('CEJ-002-190-CA-0004-0009', 16),
('CEJ-002-190-CA-0004-0010', 15),
('CEJ-002-190-CA-0004-0010', 16),
('CEJ-002-190-CA-0004-0011', 15),
('CEJ-002-190-CA-0004-0011', 16),
('CEJ-002-030-JE-0003-0001', 9),
('CEJ-002-030-JE-0003-0001', 10),
('CEJ-002-030-JE-0003-0002', 9),
('CEJ-002-030-JE-0003-0002', 10),
('CEJ-002-030-JE-0003-0003', 9),
('CEJ-002-030-JE-0003-0003', 10),
('CEJ-002-030-JE-0003-0004', 9),
('CEJ-002-030-JE-0003-0004', 10),
('CEJ-002-030-JE-0003-0005', 9),
('CEJ-002-030-JE-0003-0005', 10),
('CEJ-002-030-JE-0003-0006', 9),
('CEJ-002-030-JE-0003-0006', 10),
('CEJ-002-110-MA-0002-0001', 2),
('CEJ-002-110-MA-0002-0001', 16),
('CEJ-002-110-MA-0002-0002', 2),
('CEJ-002-110-MA-0002-0002', 16),
('CEJ-002-110-MA-0002-0003', 2),
('CEJ-002-110-MA-0002-0003', 16),
('CEJ-002-110-MA-0002-0004', 2),
('CEJ-002-110-MA-0002-0004', 16),
('CEJ-002-110-MA-0002-0005', 2),
('CEJ-002-110-MA-0002-0005', 16),
('CEJ-002-110-MA-0002-0006', 2),
('CEJ-002-110-MA-0002-0006', 16),
('CEJ-002-110-MA-0002-0007', 2),
('CEJ-002-110-MA-0002-0007', 16),
('CEJ-002-110-MA-0002-0008', 2),
('CEJ-002-110-MA-0002-0008', 16),
('CEJ-002-110-MA-0002-0009', 2),
('CEJ-002-110-MA-0002-0009', 16),
('CEJ-002-110-MA-0002-0010', 2),
('CEJ-002-110-MA-0002-0010', 16),
('CEJ-002-290-EL-0003-0001', 13),
('CEJ-002-290-EL-0003-0001', 14),
('CEJ-002-290-EL-0003-0002', 13),
('CEJ-002-290-EL-0003-0002', 14),
('CEJ-002-290-EL-0003-0003', 13),
('CEJ-002-290-EL-0003-0003', 14),
('CEJ-002-290-EL-0003-0004', 13),
('CEJ-002-290-EL-0003-0004', 14),
('CEJ-002-290-EL-0003-0005', 13),
('CEJ-002-290-EL-0003-0005', 14),
('CEJ-002-290-EL-0003-0006', 13),
('CEJ-002-290-EL-0003-0006', 14),
('CEJ-002-290-EL-0003-0007', 13),
('CEJ-002-290-EL-0003-0007', 14),
('CEJ-002-290-EL-0003-0008', 13),
('CEJ-002-290-EL-0003-0008', 14),
('CEJ-002-290-EL-0003-0009', 13),
('CEJ-002-290-EL-0003-0009', 14),
('CEJ-002-550-LA-0004-0001', 3),
('CEJ-002-550-LA-0004-0002', 3),
('CEJ-002-550-LA-0004-0003', 3),
('CEJ-002-550-LA-0004-0004', 3),
('CEJ-002-550-LA-0004-0005', 3),
('CEJ-002-410-LA-0004-0001', 14),
('CEJ-002-410-LA-0004-0002', 14),
('CEJ-002-410-LA-0004-0003', 14),
('CEJ-002-410-LA-0004-0004', 14),
('CEJ-002-410-LA-0004-0005', 14),
('CEJ-002-410-LA-0004-0006', 14),
('CEJ-002-850-DE-0003-0001', 13),
('CEJ-002-850-DE-0003-0002', 13),
('CEJ-002-850-DE-0003-0003', 13),
('CEJ-002-850-DE-0003-0004', 13),
('CEJ-002-850-DE-0003-0005', 13),
('CEJ-002-850-DE-0003-0006', 13),
('CEJ-002-850-DE-0003-0007', 13),
('CEJ-002-850-DE-0003-0008', 13),
('CEJ-002-850-DE-0003-0009', 13);

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
('CEJ-002-030-JE-0003-0003', 1),
('CEJ-002-110-MA-0002-0004', 1),
('CEJ-002-110-MA-0002-0003', 2),
('CEJ-002-740-FL-0005-0004', 2),
('CEJ-002-990-DE-0002-0011', 3),
('CEJ-002-740-FL-0005-0003', 3),
('CEJ-002-110-MA-0002-0005', 4),
('CEJ-002-740-FL-0005-0001', 4),
('CEJ-002-290-EL-0003-0004', 5),
('CEJ-002-980-CO-0003-0005', 5),
('CEJ-002-070-LA-0004-0006', 6),
('CEJ-002-740-FL-0005-0002', 6),
('CEJ-002-110-EL-0004-0004', 7),
('CEJ-002-020-UN-0005-0006', 7),
('CEJ-002-850-DE-0003-0001', 8),
('CEJ-002-070-LA-0004-0001', 9),
('CEJ-002-020-UN-0005-0005', 9),
('CEJ-002-090-TA-0003-0006', 10),
('CEJ-002-110-MA-0002-0002', 11),
('CEJ-002-850-DE-0003-0007', 12),
('CEJ-002-740-FL-0005-0005', 12),
('CEJ-002-110-EL-0004-0002', 13),
('CEJ-002-790-EN-0004-0003', 13),
('CEJ-002-130-LA-0004-0002', 14),
('CEJ-002-550-LA-0004-0005', 14),
('CEJ-002-290-EL-0003-0006', 15),
('CEJ-002-550-LA-0004-0001', 15),
('CEJ-002-850-DE-0003-0003', 16),
('CEJ-002-070-LA-0004-0002', 17),
('CEJ-002-390-EN-0004-0007', 17),
('CEJ-002-990-DE-0002-0004', 18),
('CEJ-002-090-TA-0003-0002', 19),
('CEJ-002-070-LA-0004-0005', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento_mantenimientos`
--

CREATE TABLE `movimiento_mantenimientos` (
  `codigo_emantenimiento` int(11) NOT NULL,
  `codigo_mantenimiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `movimiento_mantenimientos`
--

INSERT INTO `movimiento_mantenimientos` (`codigo_emantenimiento`, `codigo_mantenimiento`) VALUES
(1, 1),
(1, 2);

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

--
-- Volcado de datos para la tabla `prestamo_activos`
--

INSERT INTO `prestamo_activos` (`codigo_pactivo`, `usuarios_codigo`, `observacion`, `fecha_salida`, `fecha_devolucion`, `estado`) VALUES
(1, 'JA18-1', NULL, '2018-01-17 00:00:00', '2018-01-20', 0),
(2, 'DA18-4', NULL, '2018-01-17 00:00:00', '2018-01-18', 0),
(3, 'BM18-18', NULL, '2018-01-17 00:00:00', '2018-01-30', 0),
(4, 'GH18-13', NULL, '2018-01-17 00:00:00', '2018-01-25', 0),
(5, 'BM18-18', NULL, '2018-01-17 00:00:00', '2018-01-20', 0),
(6, 'FO18-12', '', '2018-01-17 00:00:00', '2018-01-18', 1),
(7, 'HR18-23', '', '2018-01-17 00:00:00', '2018-01-18', 1),
(8, 'MC18-8', '', '2018-01-17 00:00:00', '2018-01-18', 1),
(9, 'MC18-9', 'le faltan piezas', '2018-01-17 00:00:00', '2018-01-24', 0),
(10, 'DA18-4', NULL, '2018-01-17 00:00:00', '2018-01-18', 0),
(11, 'FO18-12', NULL, '2018-01-17 00:00:00', '2018-01-18', 0),
(12, 'GD18-11', NULL, '2018-01-17 00:00:00', '2018-01-18', 0),
(13, 'GD18-11', NULL, '2018-01-17 00:00:00', '2018-01-27', 0),
(14, 'GH18-13', NULL, '2018-01-17 00:00:00', '2018-01-18', 0),
(15, 'MM18-15', NULL, '2018-01-17 00:00:00', '2018-01-18', 0),
(16, 'SR18-24', '', '2018-01-17 00:00:00', '2018-01-18', 1),
(17, 'MQ18-22', '', '2018-01-17 00:00:00', '2018-01-18', 1),
(18, 'RM18-16', NULL, '2018-01-17 00:00:00', '2018-01-31', 0),
(19, 'WB18-5', NULL, '2018-01-17 00:00:00', '2018-01-18', 0),
(20, 'JM18-20', NULL, '2018-01-17 00:00:00', '2018-01-18', 0);

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
(1, 'GD18-11', NULL, '2018-01-31', '2018-01-17 00:00:00', 0),
(2, 'MC18-8', NULL, '2018-01-27', '2018-01-17 00:00:00', 0),
(3, 'SR18-24', NULL, '2018-01-29', '2018-01-17 00:00:00', 0),
(4, 'JA18-1', NULL, '2018-01-18', '2018-01-17 00:00:00', 0),
(5, 'GH18-13', 'entrego el libro nito de los deberes en perfecto estado', '2018-01-18', '2018-01-17 00:00:00', 1),
(6, 'JA18-2', 'entrego los libros forja revelde y flores para algenon en buen estado', '2018-01-18', '2018-01-17 00:00:00', 1),
(7, 'WB18-5', 'entrego el filtro Burbuja con paginas dañadas', '2018-01-26', '2018-01-17 00:00:00', 1),
(8, 'RV18-26', NULL, '2018-01-18', '2018-01-17 00:00:00', 0),
(9, 'HR18-23', 'entrego el libro forja de un rebelde con paginas ajadas ', '2018-01-30', '2018-01-17 00:00:00', 1),
(10, 'FO18-12', NULL, '2018-01-18', '2018-01-17 00:00:00', 0),
(11, 'CM18-19', NULL, '2018-01-27', '2018-01-17 00:00:00', 0),
(12, 'JA18-2', NULL, '2018-01-18', '2018-01-17 00:00:00', 0),
(13, 'MC18-9', NULL, '2018-01-18', '2018-01-17 00:00:00', 0),
(14, 'MQ18-22', NULL, '2018-01-18', '2018-01-17 00:00:00', 0),
(15, 'MC18-8', NULL, '2018-01-18', '2018-01-17 00:00:00', 0),
(16, 'MH18-14', NULL, '2018-01-18', '2018-01-17 00:00:00', 0),
(17, 'HR18-23', 'entrego el libro el mundo y yo despues de la fecha estipulada', '2018-01-18', '2018-01-17 00:00:00', 1),
(18, 'MM18-15', NULL, '2018-01-18', '2018-01-17 00:00:00', 0),
(19, 'JB18-6', NULL, '2018-01-18', '2018-01-17 00:00:00', 0),
(20, 'JA18-2', NULL, '2018-01-18', '2018-01-17 00:00:00', 0);

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
(1, 'Comercial Gonzales', NULL, 'Av. Independencia No 531 Centro Tuxtepec', '2233-3445', 'comercial@yahoo.com', 'Sin Fax'),
(2, 'Compu Tec', NULL, 'Miguel Hidalgo No 409 Centro Tuxtepec', '7422-3322', 'hidalgo@gmail.com', 'Sin Fax'),
(3, 'Industria El Papel y Lápiz', NULL, ' Av. 5 De Mayo No 1014 Centro Tuxtepec', '2234-1123', 'lapizpapel@hotmail.com', '0998 455879'),
(4, 'Distribuidora Lo que quiera', NULL, ' Av. Jesus Carranza No 1651 Altos El Reposo Tuxtepec', '2223-4689', 'loquequiera@yahoo.com', '1235 009322'),
(5, 'Proveedora el Reloj', NULL, ' Av. Independencia No 117 La Piragua Tuxtepec', '7775-8585', 'elreloj@hotmail.es', '3334 009423');

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
('AC18-7', 4, 'Alex Francisco ', 'Callejas Morales', '7342-4729', 'jhutado@idomas.udea.edu.com', ' Centro Pinero Matamoros No 71', 0x3663616c6c656a612e6a7067, 'Masculino', 0, 'cometio una falta de respeto', 'fue eliminado'),
('BM18-17', 4, 'Boris Ricardo', 'Miranda Ayala', '3844-4444', 'michael.keller@udp.cl', ' Carr. A Ojitlan No. 951-A Col. 5 De Mayo Tuxtepec', 0x3136626f7269732e6a7067, 'Masculino', 1, '', ''),
('BM18-18', 5, 'Benjamin', 'Monterrosa Delgado', '7739-3933', 'vkunstmann@gmail.com', ' Avenida 3 Calle 2 Fraccionamiento Costa Verde', 0x31376d6f6e74652e6a7067, 'Masculino', 1, '', ''),
('CA18-3', 5, 'Carlos Gilberto', 'Alvarez Landaverde', '7755-2235', 'dcanas@idiomas.udea.edu.co', ' Principal S/N. Temazcal. Sn.Miguel Soyaltepec', 0x326361726c6f732067696c626572742e6a7067, 'Masculino', 1, '', ''),
('CM18-19', 2, 'Carlos David', 'Morales Orellana', '3840-3848', 'carmenluzlabbe@gmail.com', 'Calle Sebastian Ortiz No 690 Centro Tuxtepec', 0x31386d6f72616c65732e6a7067, 'Masculino', 1, '', ''),
('DA18-4', 2, 'Deyvis Antonio', 'Ayala Gomez ', '7422-4421', 'julianaparis@hotmail.com', 'Av. Independencia No. 1457 Col.La Piragua Tuxtepec', 0x336465797669732e6a7067, 'Masculino', 1, '', ''),
('FO18-12', 3, 'Franco Alvarado', 'Oscar Adonay', '7394-3939', 'MPULIDO@LATINMAIL.COM', 'Boulevard Benito Juarez Esq. Independencia La Piragua', 0x31316672616e636f2e6a7067, 'Masculino', 1, '', ''),
('GD18-11', 1, 'Gerson Bladimir', 'Durán González', '3742-3829', 'andresiocarga@hotmail.com', ' Miguel Hidalgo No 689 Lazaro Cardenas Tuxtepec', 0x31307465746f2e6a7067, 'Masculino', 1, '', ''),
('GH18-13', 2, 'Gercia Melina', 'Hernández Castillo', '8392-8382', 'yessy_39@hotmail.com', ' Av. 5 De Mayo No. 1400 Col.Centro Tuxtepec.Oax.', 0x31326772656369612e6a7067, 'Femenino', 1, '', ''),
('HR18-23', 5, 'Harvin Jeffeth', 'Ramos Alvarado', '7349-3383', 'rlillo_2000@hotmail.com', ' Matamoros No 149 Centro Tuxtepec', 0x323268617276692e6a7067, 'Masculino', 1, '', ''),
('JA18-1', 3, 'Jenniffer Joanna', 'Abarca', '2449-7352', 'juribe@idiomas.udea.edu.co', 'Calle Agustin Lara No. 69-B Col. Ex-Normal Tuxtepec', 0x306a6f616e612e6a7067, 'Femenino', 1, '', ''),
('JA18-2', 3, 'Josué Alfredo', 'Alfaro Cruz', '7633-3332', 'hersy@epm.net.co', ' Av. Principal S/N. Temascal', 0x316a6f736520616c667265646f2e6a7067, 'Masculino', 1, '', ''),
('JB18-6', 4, 'Juan Antonio', 'Bautista Peres Callejas M', '7234-0987', 'aguevara@idiomas.udea.edu.com', ' Prol. Av 5 De Mayo No 109 Maria Eugenia Tuxepec', 0x35746f6e792e6a7067, 'Masculino', 1, '', ''),
('JM18-20', 1, 'Juan Carlos', 'Moz Alfaro', '7939-3838', 'escobilla3carretes@hotmail.com', ' C 1O De Mayo No 4 Ampl.Mexico Loma Bonita', 0x31396d6f7a2e6a7067, 'Masculino', 1, '', ''),
('MC18-8', 2, 'Magdalena Del Carmen', 'Cordova Flores', '7349-3820', 'juandavidlopez@ubicar.com', ' Matamoros 40 Centro', 0x376d616764616c656e612e6a7067, 'Masculino', 1, '', ''),
('MC18-9', 5, 'Mirian Mabel', 'Cornejo Portillo', '2349-2838', 'vivian_981@yahoo.com', 'Benito Juarez 25 Centro', 0x386d6162656c2e6a7067, 'Masculino', 1, '', ''),
('MH18-14', 3, 'Marvin Josué', 'Hérnandez Diaz', '7204-3832', 'reinald_34@hotmail.com', ' Av. Libertad No. 1961 Col. La Piragua Tuxtepec', 0x31336d617276696e2e6a7067, 'Masculino', 1, '', ''),
('MM18-15', 2, 'Marcos Antonio', 'Martínez Vásquez', '3744-3832', 'jferdusi@terra.com', ' Av. 5 De Mayo Esq. Matamoros No 1070 Centro Tuxtepec', 0x31346d6172636f732e6a7067, 'Masculino', 1, '', ''),
('MQ18-22', 4, 'Mayra Beatriz', 'Quintanilla Guzmán', '7843-3834', 'amarantasol@gmail.com', 'Mariano Arista No 454 Centro Tuxtepec', 0x32316d617972612e6a7067, 'Masculino', 1, '', ''),
('RM18-16', 3, 'Rina de la Paz', 'Melgar Peña', '7369-3833', 'verocakatalinic@hotmail.com', ' Aldama No 1212 Lazaro Cardenas Tuxtepec', 0x313572696e612e6a7067, 'Femenino', 1, '', ''),
('RV18-26', 5, 'Romario Abelardo', 'Villalobos Rivas', '8493-8338', 'juanmaceratta@hotmail.com', 'Av. Independencia No 531 Centro Tuxtepec', 0x3235726f6d612e6a7067, 'Masculino', 1, '', ''),
('SR18-24', 5, 'Saúl Alfredo', 'Reyes Alvarado', '8333-3993', 'flobato.c@gmail.com', 'Av. Independencia No. 608 Col.Centro Tuxtepec.Oax.', 0x32337361756c2e6a7067, 'Masculino', 1, '', ''),
('VP18-21', 3, 'Verónica Concepción', 'Portillo Valladares', '8384-9984', 'glazo@mbienes.cl', ' Av. Jesus Carranza No 1651 Altos El Reposo Tuxtepec', 0x32307665726f6e6963612e6a7067, 'Masculino', 1, '', ''),
('WB18-5', 5, 'William Ernesto', 'Barrera Abarca', '2234-2234', 'juanspider39@hotmail.com', ' Av. 5 De Mayo No. 551 Col.Centro Tuxtepec', 0x3477696c6c69616d206865726e6573746f2e6a7067, 'Masculino', 1, '', ''),
('YC18-10', 3, 'Yanci Steeffany', 'Cubias Flores', '7394-3849', 'vivian_981@yahoo.com', 'Blvd. Benito Juarez No. 197-A Col.Oaxaca Tuxtepec', 0x3979616e63792e6a7067, 'Masculino', 1, '', '');

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
  MODIFY `codigo_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `codigo_bitacora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;
--
-- AUTO_INCREMENT de la tabla `detalles`
--
ALTER TABLE `detalles`
  MODIFY `codigo_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  MODIFY `codigo_editorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `encargado_mantenimiento`
--
ALTER TABLE `encargado_mantenimiento`
  MODIFY `codigo_emantenimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `codigo_institucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  MODIFY `codigo_mantenimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `prestamo_activos`
--
ALTER TABLE `prestamo_activos`
  MODIFY `codigo_pactivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `prestamo_libros`
--
ALTER TABLE `prestamo_libros`
  MODIFY `codigo_plibro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `codigo_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
