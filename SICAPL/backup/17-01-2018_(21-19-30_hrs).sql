SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS diseno1;

USE diseno1;

DROP TABLE IF EXISTS actvos;

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
  `observacion` text,
  PRIMARY KEY (`codigo_activo`),
  KEY `fk_actvos_proveedores1_idx` (`codigo_proveedor`),
  KEY `fk_actvos_detalles1_idx` (`codigo_detalle`),
  KEY `fk_actvos_tipo_activo1_idx` (`codigo_tipo`),
  KEY `fk_actvos_administradores1_idx` (`codigo_administrador`),
  CONSTRAINT `fk_act_adm` FOREIGN KEY (`codigo_administrador`) REFERENCES `administradores` (`codigo_administrador`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_act_det` FOREIGN KEY (`codigo_detalle`) REFERENCES `detalles` (`codigo_detalle`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_act_prov` FOREIGN KEY (`codigo_proveedor`) REFERENCES `proveedores` (`codigo_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_act_tipo` FOREIGN KEY (`codigo_tipo`) REFERENCES `categoria` (`codigo_tipo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO actvos VALUES("CEJ-001-001-0001","CEJ-001-001","1","1","admin01","0000-00-00","10","1","","1");
INSERT INTO actvos VALUES("CEJ-001-001-0002","CEJ-001-001","1","2","admin01","0000-00-00","10","1","","1");
INSERT INTO actvos VALUES("CEJ-001-001-0003","CEJ-001-001","1","3","admin01","0000-00-00","10","1","","1");
INSERT INTO actvos VALUES("CEJ-001-001-0004","CEJ-001-001","1","4","admin01","0000-00-00","10","1","","1");



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
  `foto` longblob,
  `estado` int(11) DEFAULT NULL,
  `observacion` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`codigo_administrador`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO administradores VALUES("admin01","$2y$10$2rho0MAZ5MwLDYw851GwB.6eHCBN0gIKsWJboakQ6epu1IOqsjphy","0","nombre","correo@gmail.com","10-07-1995","apellido","0","00000000-0","hqdefault.jpg","1","");
INSERT INTO administradores VALUES("boris01","$2y$10$8drnGPNn/jgIa0sXXdy.cuGwfZnVDciTkOgj/akhvsNrKz16lcM72","1","Boris Ricardo","brmiranda@dd","12-10-1999","Miranda Ayala","0","45345345-3","1Captura de pantalla 2017-11-18 21.58.36.png","0","por maje yy pendejo");
INSERT INTO administradores VALUES("fffff01","$2y$10$9ZfBnc5qLTQ/NHteBcJxB.v3g8pOjw5RYsMJUDY56aN/9pyuVYHhO","0","GGGGgF","FG@ddd.com","12-10-1999","fFFFFf","0","22222222-3","3Captura de pantalla 2017-11-18 22.16.15.png","1","este bicho es malo");
INSERT INTO administradores VALUES("miranda01","$2y$10$m4LWBhZrCTD9pBx5INKBf.oP2ZvAy6vQ7g44w6qKqVzUjkrNN/ppi","1","Miranda","br@gmail.com","19-10-1999","ayala","0","48949499-4","2Captura de pantalla 2017-11-10 13.49.35.png","1","este bicho es malo");



DROP TABLE IF EXISTS autores;

CREATE TABLE `autores` (
  `codigo_autor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `apellido` varchar(25) DEFAULT NULL,
  `nacimiento` date DEFAULT NULL,
  `biografia` text NOT NULL,
  PRIMARY KEY (`codigo_autor`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COMMENT='	';

INSERT INTO autores VALUES("1","Alfredo","Espino","1900-01-08","MAPA_WEB_4.0.pdf");
INSERT INTO autores VALUES("2","Miguel Angel","Espino","1902-12-17","mysql.pdf");
INSERT INTO autores VALUES("3","Alberto","Masferrer","1868-07-24","Practica Evaluada.pdf");
INSERT INTO autores VALUES("4","Salvador Salazar","Arrue","1870-01-19","mysql.pdf");
INSERT INTO autores VALUES("5","Hugo","Aguirre","1943-01-19","portal[1]");



DROP TABLE IF EXISTS bitacora;

CREATE TABLE `bitacora` (
  `codigo_bitacora` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_administrador` varchar(15) NOT NULL,
  `accion` varchar(1000) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`codigo_bitacora`),
  KEY `fk_bitacora_administradores1_idx` (`codigo_administrador`),
  CONSTRAINT `fk_adm_bit` FOREIGN KEY (`codigo_administrador`) REFERENCES `administradores` (`codigo_administrador`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=150 DEFAULT CHARSET=latin1;

INSERT INTO bitacora VALUES("108","admin01","Se dió de baja al usuario Alex Francisco  Callejas Morales por el siguiente motivo: esti es siki yba oryega","2018-01-14 12:15:17");
INSERT INTO bitacora VALUES("109","admin01","Se dió de baja al usuario Alex Francisco  Callejas Morales por el siguiente motivo: esta es una prueva de eliminacion","2018-01-14 12:16:46");
INSERT INTO bitacora VALUES("110","admin01","Se dió de baja al usuario Benjamin Monterrosa Delgado por el siguiente motivo: valio monte","2018-01-14 11:51:28");
INSERT INTO bitacora VALUES("111","admin01","Se restauro al usuario ","2018-01-14 11:53:06");
INSERT INTO bitacora VALUES("112","admin01","Se restauro al usuario Benjamin","2018-01-14 11:54:28");
INSERT INTO bitacora VALUES("113","admin01","Se restauro al usuario Benjamin","2018-01-14 11:54:30");
INSERT INTO bitacora VALUES("114","admin01","Se restauro al usuario Benjamin","2018-01-14 11:54:30");
INSERT INTO bitacora VALUES("115","admin01","Se restauro al usuario Benjamin","2018-01-14 11:54:31");
INSERT INTO bitacora VALUES("116","admin01","Se restauro al usuario Benjamin","2018-01-14 11:54:31");
INSERT INTO bitacora VALUES("117","admin01","Se dió de baja al usuario Benjamin Monterrosa Delgado por el siguiente motivo: muere monte","2018-01-14 11:55:23");
INSERT INTO bitacora VALUES("118","admin01","Se restauro al usuario Benjamin","2018-01-14 11:55:41");
INSERT INTO bitacora VALUES("119","admin01","Se dió de baja al usuario Boris Ricardo Miranda Ayala por el siguiente motivo: muero yo perro","2018-01-14 11:56:57");
INSERT INTO bitacora VALUES("120","admin01","Se restauro al usuario Boris Ricardo","2018-01-14 11:57:03");
INSERT INTO bitacora VALUES("122","admin01","El administrador admin01(nombre apellido) inició sesión","2018-01-14 11:51:29");
INSERT INTO bitacora VALUES("123","admin01","El usuario Boris Ricardo Miranda Ayala presto los siguientes libros  ","2018-01-14 11:56:30");
INSERT INTO bitacora VALUES("124","admin01","El administrador admin01(nombre apellido) inició sesión","2018-01-14 12:07:28");
INSERT INTO bitacora VALUES("125","admin01","Se ralizó una copia de seguridad de los datos del sistema","2018-01-14 12:19:15");
INSERT INTO bitacora VALUES("126","admin01","El administrador admin01  cerró sesión","2018-01-14 12:29:53");
INSERT INTO bitacora VALUES("127","admin01","El administrador admin01(nombre apellido) inició sesión","2018-01-14 12:30:02");
INSERT INTO bitacora VALUES("128","admin01","El administrador Boris apellido actualizó sus datos","2018-01-14 11:53:21");
INSERT INTO bitacora VALUES("129","admin01","Se registro como administrador a Boris Ricardo Miranda Ayala","2018-01-17 03:49:24");
INSERT INTO bitacora VALUES("130","admin01","Los activos de el administrador boris01 fueron transferidos a admin01","2018-01-17 04:05:33");
INSERT INTO bitacora VALUES("131","admin01","Se dió de baja al administrador Boris Ricardo Miranda Ayala por el siguiente motivo: esta es una prueba de eliminacion","2018-01-17 04:05:33");
INSERT INTO bitacora VALUES("132","admin01","Se registro como administrador a Miranda ayala","2018-01-17 04:06:37");
INSERT INTO bitacora VALUES("133","admin01","Se registro como administrador a GGGGgF fFFFFf","2018-01-17 04:07:38");
INSERT INTO bitacora VALUES("134","admin01","El administrador admin01(nombre apellido) inició sesión","2018-01-17 03:47:59");
INSERT INTO bitacora VALUES("135","admin01","El administrador admin01  cerró sesión","2018-01-17 03:48:47");
INSERT INTO bitacora VALUES("136","admin01","El administrador admin01(nombre apellido) inició sesión","2018-01-17 03:48:55");
INSERT INTO bitacora VALUES("137","admin01","El administrador admin01  cerró sesión","2018-01-17 03:49:26");
INSERT INTO bitacora VALUES("138","admin01","El administrador admin01(nombre apellido) inició sesión","2018-01-17 03:49:34");
INSERT INTO bitacora VALUES("139","admin01","El administrador admin01(nombre apellido) inició sesión","2018-01-17 03:43:56");
INSERT INTO bitacora VALUES("140","admin01","Se restauró al administrador Boris Ricardo Miranda Ayala","2018-01-17 03:56:57");
INSERT INTO bitacora VALUES("141","admin01","Los activos de el administrador boris01 fueron transferidos a boris01","2018-01-17 03:59:18");
INSERT INTO bitacora VALUES("142","admin01","Se dió de baja al administrador Boris Ricardo Miranda Ayala por el siguiente motivo: por maje yy pendejo","2018-01-17 03:59:18");
INSERT INTO bitacora VALUES("143","admin01","El administrador nombre apellido actualizó sus datos","2018-01-17 03:43:23");
INSERT INTO bitacora VALUES("144","admin01","El administrador nombre apellido actualizó sus datos","2018-01-17 04:02:42");
INSERT INTO bitacora VALUES("145","admin01","El administrador nombre apellido actualizó sus datos","2018-01-17 04:04:27");
INSERT INTO bitacora VALUES("146","admin01","El administrador nombre apellido actualizó sus datos","2018-01-17 04:18:04");
INSERT INTO bitacora VALUES("147","admin01","El administrador nombre apellido actualizó sus datos","2018-01-17 04:18:39");
INSERT INTO bitacora VALUES("148","admin01","El administrador nombre apellido actualizó sus datos","2018-01-17 04:18:49");
INSERT INTO bitacora VALUES("149","admin01","El administrador nombre apellido actualizó sus datos","2018-01-17 04:19:31");



DROP TABLE IF EXISTS categoria;

CREATE TABLE `categoria` (
  `codigo_tipo` varchar(13) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigo_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO categoria VALUES("CEJ-001-001","sillas");



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
  `otros` text,
  `procesador` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigo_detalle`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO detalles VALUES("1","Sin Numero de Serie","blancas","Sin Marca","Sin Modelo","Sin Memoria Ram","Sin Disco Duro","Sin Sistema Operativo","Sin Dimenciones","","","Sin Procesador");
INSERT INTO detalles VALUES("2","Sin Numero de Serie","blancas","Sin Marca","Sin Modelo","Sin Memoria Ram","Sin Disco Duro","Sin Sistema Operativo","Sin Dimenciones","","","Sin Procesador");
INSERT INTO detalles VALUES("3","Sin Numero de Serie","blancas","Sin Marca","Sin Modelo","Sin Memoria Ram","Sin Disco Duro","Sin Sistema Operativo","Sin Dimenciones","","","Sin Procesador");
INSERT INTO detalles VALUES("4","Sin Numero de Serie","blancas","Sin Marca","Sin Modelo","Sin Memoria Ram","Sin Disco Duro","Sin Sistema Operativo","Sin Dimenciones","","","Sin Procesador");



DROP TABLE IF EXISTS editoriales;

CREATE TABLE `editoriales` (
  `codigo_editorial` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `pais` varchar(10) DEFAULT NULL,
  `email` varchar(15) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`codigo_editorial`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO editoriales VALUES("1","Oceano","San Salvador, El Salvador","","oceano@correo.c","2939-8999");
INSERT INTO editoriales VALUES("2","Harday Electric ","San Vicente, El Salvador","","harday@gmail.co","4829-3298");



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
  `nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`codigo_institucion`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO institucion VALUES("1","Sin Institucion");
INSERT INTO institucion VALUES("2","Instituto Nacional Dr. Sarbelio Navarrete");
INSERT INTO institucion VALUES("3","Universidad Nacional de El Salvador");
INSERT INTO institucion VALUES("4","Centro escolar Presbitero Norberto Marroquí");
INSERT INTO institucion VALUES("5","Centro Escolar Guadalupe Cárcamo");



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
  KEY `fk_libros_editoriales1_idx` (`editoriales_codigo`),
  CONSTRAINT `fk_edit` FOREIGN KEY (`editoriales_codigo`) REFERENCES `editoriales` (`codigo_editorial`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO libros VALUES("CEJ-002-010-BI-0001-0001","1","Biografias","0","2018-01-07","1059000_yugioh-wallpapers-wallpapers-cave_1920x1200_h.jpg","");
INSERT INTO libros VALUES("CEJ-002-010-BI-0001-0002","1","Biografias","1","2018-01-07","1059000_yugioh-wallpapers-wallpapers-cave_1920x1200_h.jpg","Dañado");
INSERT INTO libros VALUES("CEJ-002-010-BI-0001-0003","1","Biografias","0","2018-01-07","1059000_yugioh-wallpapers-wallpapers-cave_1920x1200_h.jpg","");
INSERT INTO libros VALUES("CEJ-002-010-BI-0001-0004","1","Biografias","0","2018-01-07","1059000_yugioh-wallpapers-wallpapers-cave_1920x1200_h.jpg","");
INSERT INTO libros VALUES("CEJ-002-010-BI-0001-0005","1","Biografias","0","2018-01-07","1059000_yugioh-wallpapers-wallpapers-cave_1920x1200_h.jpg","");
INSERT INTO libros VALUES("CEJ-002-010-BI-0001-0006","1","Biografias","0","2018-01-07","1059000_yugioh-wallpapers-wallpapers-cave_1920x1200_h.jpg","");
INSERT INTO libros VALUES("CEJ-002-010-BI-0001-0007","1","Biografias","0","2018-01-07","1059000_yugioh-wallpapers-wallpapers-cave_1920x1200_h.jpg","");
INSERT INTO libros VALUES("CEJ-002-010-BI-0001-0008","1","Biografias","0","2018-01-07","1059000_yugioh-wallpapers-wallpapers-cave_1920x1200_h.jpg","");
INSERT INTO libros VALUES("CEJ-002-010-BI-0001-0009","1","Biografias","0","2018-01-07","1059000_yugioh-wallpapers-wallpapers-cave_1920x1200_h.jpg","");
INSERT INTO libros VALUES("CEJ-002-010-BI-0001-0010","1","Biografias","0","2018-01-07","1059000_yugioh-wallpapers-wallpapers-cave_1920x1200_h.jpg","");
INSERT INTO libros VALUES("CEJ-002-010-BI-0001-0011","1","Biografias","0","2018-01-07","1059000_yugioh-wallpapers-wallpapers-cave_1920x1200_h.jpg","");
INSERT INTO libros VALUES("CEJ-002-010-BI-0001-0012","1","Biografias","0","2018-01-07","1059000_yugioh-wallpapers-wallpapers-cave_1920x1200_h.jpg","");
INSERT INTO libros VALUES("CEJ-002-010-BI-0001-0013","1","Biografias","0","2018-01-07","1059000_yugioh-wallpapers-wallpapers-cave_1920x1200_h.jpg","");
INSERT INTO libros VALUES("CEJ-002-010-BI-0001-0014","1","Biografias","0","2018-01-07","1059000_yugioh-wallpapers-wallpapers-cave_1920x1200_h.jpg","");
INSERT INTO libros VALUES("CEJ-002-010-BI-0001-0015","1","Biografias","0","2018-01-07","1059000_yugioh-wallpapers-wallpapers-cave_1920x1200_h.jpg","");
INSERT INTO libros VALUES("CEJ-002-390-CU-0001-0001","1","Cuento de Barros","0","2018-01-05","00.jpg","");
INSERT INTO libros VALUES("CEJ-002-390-CU-0001-0002","1","Cuento de Barros","0","2018-01-05","00.jpg","");
INSERT INTO libros VALUES("CEJ-002-390-CU-0001-0003","1","Cuento de Barros","0","2018-01-05","00.jpg","");
INSERT INTO libros VALUES("CEJ-002-390-CU-0001-0004","1","Cuento de Barros","0","2018-01-05","00.jpg","");
INSERT INTO libros VALUES("CEJ-002-890-JI-0001-0001","1","Jicaras Tristes","0","2001-01-04","Espino20001.jpg","");
INSERT INTO libros VALUES("CEJ-002-890-JI-0001-0002","1","Jicaras Tristes","0","2001-01-04","Espino20001.jpg","");
INSERT INTO libros VALUES("CEJ-002-890-JI-0001-0003","1","Jicaras Tristes","0","2001-01-04","Espino20001.jpg","");
INSERT INTO libros VALUES("CEJ-002-890-JI-0001-0004","1","Jicaras Tristes","0","2001-01-04","Espino20001.jpg","");
INSERT INTO libros VALUES("CEJ-002-890-PA-0001-0001","1","Papirusa","0","2018-01-01","Captura de pantalla (1).png","");
INSERT INTO libros VALUES("CEJ-002-890-PA-0001-0002","1","Papirusa","0","2018-01-01","Captura de pantalla (1).png","");
INSERT INTO libros VALUES("CEJ-002-890-PA-0001-0003","1","Papirusa","0","2018-01-01","Captura de pantalla (1).png","");
INSERT INTO libros VALUES("CEJ-002-980-OT-0001-0001","1","otro libro","0","2018-01-01","Captura de pantalla (8).png","");
INSERT INTO libros VALUES("CEJ-002-980-OT-0001-0002","1","otro libro","0","2018-01-01","Captura de pantalla (8).png","");



DROP TABLE IF EXISTS mantenimientos;

CREATE TABLE `mantenimientos` (
  `codigo_mantenimiento` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_activo` varchar(16) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `descripcion` text,
  `costo` double DEFAULT NULL,
  PRIMARY KEY (`codigo_mantenimiento`),
  KEY `fk_mantenimientos_actvos1_idx` (`codigo_mantenimiento`) USING BTREE,
  KEY `fk_mant_act` (`codigo_activo`),
  CONSTRAINT `fk_mant_act` FOREIGN KEY (`codigo_activo`) REFERENCES `actvos` (`codigo_activo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS movimiento_actvos;

CREATE TABLE `movimiento_actvos` (
  `codigo_activo` varchar(16) NOT NULL,
  `codigo_pactivo` int(11) NOT NULL,
  KEY `fk_prestamo_activos_has_actvos_actvos1_idx` (`codigo_activo`),
  KEY `fk_prestamo_activos_has_actvos_prestamo_activos1_idx` (`codigo_pactivo`),
  CONSTRAINT `fk_p_act` FOREIGN KEY (`codigo_activo`) REFERENCES `actvos` (`codigo_activo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_p_act2` FOREIGN KEY (`codigo_pactivo`) REFERENCES `prestamo_activos` (`codigo_pactivo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS movimiento_actvos_mant;

CREATE TABLE `movimiento_actvos_mant` (
  `codigo_activo` varchar(16) NOT NULL,
  `codigo_mantenimiento` int(11) NOT NULL,
  KEY `fk_mantenimientos_mantenimiento_has_actvos_actvos2_idx` (`codigo_activo`),
  KEY `fk_actvos_has_mantenimientos_actvos2_idx` (`codigo_mantenimiento`),
  CONSTRAINT `fk_mov_act` FOREIGN KEY (`codigo_activo`) REFERENCES `actvos` (`codigo_activo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_mov_mant` FOREIGN KEY (`codigo_mantenimiento`) REFERENCES `mantenimientos` (`codigo_mantenimiento`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS movimiento_autores;

CREATE TABLE `movimiento_autores` (
  `codigo_libro` varchar(45) NOT NULL,
  `codigo_autor` int(11) NOT NULL,
  KEY `fk_libros_has_autores_autores1_idx` (`codigo_autor`),
  KEY `fk_libros_has_autores_libros1_idx` (`codigo_libro`),
  CONSTRAINT `fk_mov_autores` FOREIGN KEY (`codigo_libro`) REFERENCES `libros` (`codigo_libro`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_mov_autores2` FOREIGN KEY (`codigo_autor`) REFERENCES `autores` (`codigo_autor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO movimiento_autores VALUES("CEJ-002-890-JI-0001-0001","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-890-JI-0001-0002","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-890-JI-0001-0003","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-890-JI-0001-0004","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-390-CU-0001-0001","4");
INSERT INTO movimiento_autores VALUES("CEJ-002-390-CU-0001-0002","4");
INSERT INTO movimiento_autores VALUES("CEJ-002-390-CU-0001-0003","4");
INSERT INTO movimiento_autores VALUES("CEJ-002-390-CU-0001-0004","4");
INSERT INTO movimiento_autores VALUES("CEJ-002-010-BI-0001-0001","3");
INSERT INTO movimiento_autores VALUES("CEJ-002-010-BI-0001-0002","3");
INSERT INTO movimiento_autores VALUES("CEJ-002-010-BI-0001-0003","3");
INSERT INTO movimiento_autores VALUES("CEJ-002-010-BI-0001-0004","3");
INSERT INTO movimiento_autores VALUES("CEJ-002-010-BI-0001-0005","3");
INSERT INTO movimiento_autores VALUES("CEJ-002-010-BI-0001-0006","3");
INSERT INTO movimiento_autores VALUES("CEJ-002-010-BI-0001-0007","3");
INSERT INTO movimiento_autores VALUES("CEJ-002-010-BI-0001-0008","3");
INSERT INTO movimiento_autores VALUES("CEJ-002-010-BI-0001-0009","3");
INSERT INTO movimiento_autores VALUES("CEJ-002-010-BI-0001-0010","3");
INSERT INTO movimiento_autores VALUES("CEJ-002-010-BI-0001-0011","3");
INSERT INTO movimiento_autores VALUES("CEJ-002-010-BI-0001-0012","3");
INSERT INTO movimiento_autores VALUES("CEJ-002-010-BI-0001-0013","3");
INSERT INTO movimiento_autores VALUES("CEJ-002-010-BI-0001-0014","3");
INSERT INTO movimiento_autores VALUES("CEJ-002-010-BI-0001-0015","3");
INSERT INTO movimiento_autores VALUES("CEJ-002-890-PA-0001-0001","2");
INSERT INTO movimiento_autores VALUES("CEJ-002-890-PA-0001-0001","4");
INSERT INTO movimiento_autores VALUES("CEJ-002-890-PA-0001-0002","2");
INSERT INTO movimiento_autores VALUES("CEJ-002-890-PA-0001-0002","4");
INSERT INTO movimiento_autores VALUES("CEJ-002-890-PA-0001-0003","2");
INSERT INTO movimiento_autores VALUES("CEJ-002-890-PA-0001-0003","4");
INSERT INTO movimiento_autores VALUES("CEJ-002-980-OT-0001-0001","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-980-OT-0001-0002","1");



DROP TABLE IF EXISTS movimiento_libros;

CREATE TABLE `movimiento_libros` (
  `codigo_libro` varchar(45) NOT NULL,
  `codigo_plibro` int(11) NOT NULL,
  KEY `fk_libros_has_prestamo_libros_prestamo_libros1_idx` (`codigo_plibro`),
  KEY `fk_libros_has_prestamo_libros_libros1_idx` (`codigo_libro`),
  CONSTRAINT `fk_lib` FOREIGN KEY (`codigo_libro`) REFERENCES `libros` (`codigo_libro`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_p_lib` FOREIGN KEY (`codigo_plibro`) REFERENCES `prestamo_libros` (`codigo_plibro`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS movimiento_mantenimientos;

CREATE TABLE `movimiento_mantenimientos` (
  `codigo_emantenimiento` int(11) NOT NULL,
  `codigo_mantenimiento` int(11) NOT NULL,
  KEY `fk_encargado_mantenimiento_has_mantenimientos_mantenimiento_idx` (`codigo_mantenimiento`),
  KEY `fk_encargado_mantenimiento_has_mantenimientos_encargado_man_idx` (`codigo_emantenimiento`),
  CONSTRAINT `fk_mov_emant` FOREIGN KEY (`codigo_emantenimiento`) REFERENCES `encargado_mantenimiento` (`codigo_emantenimiento`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_mov_mant_en` FOREIGN KEY (`codigo_mantenimiento`) REFERENCES `mantenimientos` (`codigo_mantenimiento`) ON DELETE CASCADE ON UPDATE CASCADE
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
  KEY `fk_prestamo_activos_usuarios1_idx` (`usuarios_codigo`),
  CONSTRAINT `fk_p_user_act` FOREIGN KEY (`usuarios_codigo`) REFERENCES `usuarios` (`codigo_usuario`) ON DELETE CASCADE ON UPDATE CASCADE
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
  KEY `fk_prestamo_libros_usuarios1_idx` (`codigo_usuario`),
  CONSTRAINT `fk_p_user` FOREIGN KEY (`codigo_usuario`) REFERENCES `usuarios` (`codigo_usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO prestamo_libros VALUES("1","BM18-17","","2018-01-14","2018-01-14 00:00:00","0");



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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO proveedores VALUES("1","sillitas","","san vicente, el salvador","2342-0349","sdjfsdjk@fjdnj.com","Sin Fax");



DROP TABLE IF EXISTS recuperacion;

CREATE TABLE `recuperacion` (
  `idrecuperacion` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_administrador` varchar(15) NOT NULL,
  `url_secreta` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`idrecuperacion`),
  KEY `fk_recuperacion` (`codigo_administrador`),
  CONSTRAINT `fk_recuperacion` FOREIGN KEY (`codigo_administrador`) REFERENCES `administradores` (`codigo_administrador`) ON DELETE CASCADE ON UPDATE CASCADE
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
  `motivo_eliminacion` varchar(150) DEFAULT NULL,
  `observaciones` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`codigo_usuario`),
  KEY `fk_usuarios_institucion1_idx` (`codigo_institucion`),
  CONSTRAINT `fk_inst` FOREIGN KEY (`codigo_institucion`) REFERENCES `institucion` (`codigo_institucion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO usuarios VALUES("AC18-7","4","Alex Francisco ","Callejas Morales","7342-4729","jhutado@idomas.udea.edu.com"," Centro Pinero Matamoros No 71","6calleja.jpg","Masculino","0","ddddddddddddddddd","ddddddddddddddddd");
INSERT INTO usuarios VALUES("BM18-17","4","Boris Ricardo","Miranda Ayala","3844-4444","michael.keller@udp.cl"," Carr. A Ojitlan No. 951-A Col. 5 De Mayo Tuxtepec","16boris.jpg","Masculino","1","","");
INSERT INTO usuarios VALUES("BM18-18","5","Benjamin","Monterrosa Delgado","7739-3933","vkunstmann@gmail.com"," Avenida 3 Calle 2 Fraccionamiento Costa Verde","17monte.jpg","Masculino","1","","");
INSERT INTO usuarios VALUES("CA18-3","5","Carlos Gilberto","Alvarez Landaverde","7755-2235","dcanas@idiomas.udea.edu.co"," Principal S/N. Temazcal. Sn.Miguel Soyaltepec","2carlos gilbert.jpg","Masculino","1","","");
INSERT INTO usuarios VALUES("CM18-19","2","Carlos David","Morales Orellana","3840-3848","carmenluzlabbe@gmail.com","Calle Sebastian Ortiz No 690 Centro Tuxtepec","18morales.jpg","Masculino","1","","");
INSERT INTO usuarios VALUES("CT18-25","3","Carlos Antonio","Torres Martínez","7484-4938","lorerlv@hotmail.com"," Av.Independencia No 672 Centro Tuxtepec","24buba.jpg","Masculino","1","","");
INSERT INTO usuarios VALUES("DA18-4","2","Deyvis Antonio","Ayala Gomez ","7422-4421","julianaparis@hotmail.com","Av. Independencia No. 1457 Col.La Piragua Tuxtepec","3deyvis.jpg","Masculino","1","","");
INSERT INTO usuarios VALUES("FO18-12","3","Franco Alvarado","Oscar Adonay","7394-3939","MPULIDO@LATINMAIL.COM","Boulevard Benito Juarez Esq. Independencia La Piragua","11franco.jpg","Masculino","1","","");
INSERT INTO usuarios VALUES("GD18-11","1","Gerson Bladimir","Durán González","3742-3829","andresiocarga@hotmail.com"," Miguel Hidalgo No 689 Lazaro Cardenas Tuxtepec","10teto.jpg","Masculino","1","","");
INSERT INTO usuarios VALUES("GH18-13","2","Gercia Melina","Hernández Castillo","8392-8382","yessy_39@hotmail.com"," Av. 5 De Mayo No. 1400 Col.Centro Tuxtepec.Oax.","12grecia.jpg","Femenino","1","","");
INSERT INTO usuarios VALUES("HR18-23","5","Harvin Jeffeth","Ramos Alvarado","7349-3383","rlillo_2000@hotmail.com"," Matamoros No 149 Centro Tuxtepec","22harvi.jpg","Masculino","1","","");
INSERT INTO usuarios VALUES("JA18-1","3","Jenniffer Joanna","Abarca","2449-7352","juribe@idiomas.udea.edu.co","Calle Agustin Lara No. 69-B Col. Ex-Normal Tuxtepec","0joana.jpg","Femenino","1","","");
INSERT INTO usuarios VALUES("JA18-2","3","Josué Alfredo","Alfaro Cruz","7633-3332","hersy@epm.net.co"," Av. Principal S/N. Temascal","1jose alfredo.jpg","Masculino","1","","");
INSERT INTO usuarios VALUES("JB18-6","4","Juan Antonio","Bautista Peres Callejas M","7234-0987","aguevara@idiomas.udea.edu.com"," Prol. Av 5 De Mayo No 109 Maria Eugenia Tuxepec","5tony.jpg","Masculino","1","","");
INSERT INTO usuarios VALUES("JM18-20","1","Juan Carlos","Moz Alfaro","7939-3838","escobilla3carretes@hotmail.com"," C 1O De Mayo No 4 Ampl.Mexico Loma Bonita","19moz.jpg","Masculino","1","","");
INSERT INTO usuarios VALUES("MC18-8","2","Magdalena Del Carmen","Cordova Flores","7349-3820","juandavidlopez@ubicar.com"," Matamoros 40 Centro","7magdalena.jpg","Masculino","1","","");
INSERT INTO usuarios VALUES("MC18-9","5","Mirian Mabel","Cornejo Portillo","2349-2838","vivian_981@yahoo.com","Benito Juarez 25 Centro","8mabel.jpg","Masculino","1","","");
INSERT INTO usuarios VALUES("MH18-14","3","Marvin Josué","Hérnandez Diaz","7204-3832","reinald_34@hotmail.com"," Av. Libertad No. 1961 Col. La Piragua Tuxtepec","13marvin.jpg","Masculino","1","","");
INSERT INTO usuarios VALUES("MM18-15","2","Marcos Antonio","Martínez Vásquez","3744-3832","jferdusi@terra.com"," Av. 5 De Mayo Esq. Matamoros No 1070 Centro Tuxtepec","14marcos.jpg","Masculino","1","","");
INSERT INTO usuarios VALUES("MQ18-22","4","Mayra Beatriz","Quintanilla Guzmán","7843-3834","amarantasol@gmail.com","Mariano Arista No 454 Centro Tuxtepec","21mayra.jpg","Masculino","1","","");
INSERT INTO usuarios VALUES("RM18-16","3","Rina de la Paz","Melgar Peña","7369-3833","verocakatalinic@hotmail.com"," Aldama No 1212 Lazaro Cardenas Tuxtepec","15rina.jpg","Femenino","1","","");
INSERT INTO usuarios VALUES("RV18-26","5","Romario Abelardo","Villalobos Rivas","8493-8338","juanmaceratta@hotmail.com","Av. Independencia No 531 Centro Tuxtepec","25roma.jpg","Masculino","1","","");
INSERT INTO usuarios VALUES("SR18-24","5","Saúl Alfredo","Reyes Alvarado","8333-3993","flobato.c@gmail.com","Av. Independencia No. 608 Col.Centro Tuxtepec.Oax.","23saul.jpg","Masculino","1","","");
INSERT INTO usuarios VALUES("VP18-21","3","Verónica Concepción","Portillo Valladares","8384-9984","glazo@mbienes.cl"," Av. Jesus Carranza No 1651 Altos El Reposo Tuxtepec","20veronica.jpg","Masculino","1","","");
INSERT INTO usuarios VALUES("WB18-5","5","William Ernesto","Barrera Abarca","2234-2234","juanspider39@hotmail.com"," Av. 5 De Mayo No. 551 Col.Centro Tuxtepec","4william hernesto.jpg","Masculino","1","","");
INSERT INTO usuarios VALUES("YC18-10","3","Yanci Steeffany","Cubias Flores","7394-3849","vivian_981@yahoo.com","Blvd. Benito Juarez No. 197-A Col.Oaxaca Tuxtepec","9yancy.jpg","Masculino","1","","");



SET FOREIGN_KEY_CHECKS=1;