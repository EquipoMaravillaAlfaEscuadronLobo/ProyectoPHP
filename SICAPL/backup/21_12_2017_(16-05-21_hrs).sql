SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS diseno1;

USE diseno1;

DROP TABLE IF EXISTS actvos;

CREATE TABLE `actvos` (
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




DROP TABLE IF EXISTS administradores;

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
  `foto` binary(1) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `observacion` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`codigo_administrador`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO administradores VALUES("dasdas","dasdadadwww","2","","","","","","","","","");
INSERT INTO administradores VALUES("k3k3","ehrqjhwrjerjkq","","","","","","","","","","");



DROP TABLE IF EXISTS autores;

CREATE TABLE `autores` (
  `codigo_autor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `apellido` varchar(25) DEFAULT NULL,
  `nacimiento` date DEFAULT NULL,
  `biografia` text NOT NULL,
  PRIMARY KEY (`codigo_autor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='	';




DROP TABLE IF EXISTS bitacora;

CREATE TABLE `bitacora` (
  `codigo_bitacora` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_administrador` varchar(15) NOT NULL,
  `accion` varchar(1000) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`codigo_bitacora`),
  KEY `fk_bitacora_administradores1_idx` (`codigo_administrador`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS detalles;

CREATE TABLE `detalles` (
  `codigo_detalle` int(11) NOT NULL AUTO_INCREMENT,
  `serie` varchar(50) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `marca` varchar(30) DEFAULT NULL,
  `modelo` varchar(30) DEFAULT NULL,
  `ram` varchar(30) DEFAULT NULL,
  `memoria` varchar(50) DEFAULT NULL,
  `sistema` varchar(30) DEFAULT NULL,
  `dimensiones` varchar(50) DEFAULT NULL,
  `foto` binary(1) DEFAULT NULL,
  `otros` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`codigo_detalle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS editoriales;

CREATE TABLE `editoriales` (
  `codigo_editorial` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `pais` varchar(10) DEFAULT NULL,
  `email` varchar(15) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`codigo_editorial`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS encargado_mantenimiento;

CREATE TABLE `encargado_mantenimiento` (
  `codigo_emantenimiento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `correo` varchar(35) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`codigo_emantenimiento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS institucion;

CREATE TABLE `institucion` (
  `codigo_institucion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigo_institucion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS libros;

CREATE TABLE `libros` (
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




DROP TABLE IF EXISTS mantenimientos;

CREATE TABLE `mantenimientos` (
  `codigo_mantenimiento` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_activo` varchar(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `descripcion` text,
  `costo` double DEFAULT NULL,
  PRIMARY KEY (`codigo_mantenimiento`),
  KEY `fk_mantenimientos_actvos1_idx` (`codigo_activo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS movimiento_actvos;

CREATE TABLE `movimiento_actvos` (
  `codigo_activo` varchar(11) NOT NULL,
  `codigo_pactivo` int(11) NOT NULL,
  KEY `fk_prestamo_activos_has_actvos_actvos1_idx` (`codigo_activo`),
  KEY `fk_prestamo_activos_has_actvos_prestamo_activos1_idx` (`codigo_pactivo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS movimiento_autores;

CREATE TABLE `movimiento_autores` (
  `codigo_libro` varchar(45) NOT NULL,
  `codigo_autor` int(11) NOT NULL,
  KEY `fk_libros_has_autores_autores1_idx` (`codigo_autor`),
  KEY `fk_libros_has_autores_libros1_idx` (`codigo_libro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS movimiento_libros;

CREATE TABLE `movimiento_libros` (
  `codigo_libro` varchar(45) NOT NULL,
  `codigo_plibro` int(11) NOT NULL,
  KEY `fk_libros_has_prestamo_libros_prestamo_libros1_idx` (`codigo_plibro`),
  KEY `fk_libros_has_prestamo_libros_libros1_idx` (`codigo_libro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS movimiento_mantenimientos;

CREATE TABLE `movimiento_mantenimientos` (
  `codigo_emantenimiento` int(11) NOT NULL,
  `codigo_mantenimiento` int(11) NOT NULL,
  KEY `fk_encargado_mantenimiento_has_mantenimientos_mantenimiento_idx` (`codigo_mantenimiento`),
  KEY `fk_encargado_mantenimiento_has_mantenimientos_encargado_man_idx` (`codigo_emantenimiento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS prestamo_activos;

CREATE TABLE `prestamo_activos` (
  `codigo_pactivo` int(11) NOT NULL AUTO_INCREMENT,
  `usuarios_codigo` varchar(45) NOT NULL,
  `observacion` text,
  `fecha_salida` datetime DEFAULT NULL,
  `fecha_devolucion` date DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo_pactivo`),
  KEY `fk_prestamo_activos_usuarios1_idx` (`usuarios_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS prestamo_libros;

CREATE TABLE `prestamo_libros` (
  `codigo_plibro` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_usuario` varchar(15) NOT NULL,
  `observaciones` varchar(100) DEFAULT NULL,
  `fecha_devolucion` date DEFAULT NULL,
  `fecha_salida` datetime DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo_plibro`),
  KEY `fk_prestamo_libros_usuarios1_idx` (`codigo_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS proveedores;

CREATE TABLE `proveedores` (
  `codigo_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) DEFAULT NULL,
  `apellido` varchar(40) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `correo` varchar(35) DEFAULT NULL,
  `fax` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`codigo_proveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tipo_activo;

CREATE TABLE `tipo_activo` (
  `codigo_tipo` varchar(5) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigo_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS usuarios;

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
  `observaciones` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`codigo_usuario`),
  UNIQUE KEY `sexo_UNIQUE` (`sexo`),
  KEY `fk_usuarios_institucion1_idx` (`codigo_institucion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




SET FOREIGN_KEY_CHECKS=1;