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

INSERT INTO administradores VALUES("ADDDDDD","$2y$10$5FjYyJL46yZtz2tmSoP8yOzJrjZYkcYVZdIkLzrfvz7awT5npYGly","1","nombre","ADDDDD@SSS","11-12-2017","ADDDDDD","0","43545345-3","","1","este bicho es malo");
INSERT INTO administradores VALUES("admin01","$2y$10$5FjYyJL46yZtz2tmSoP8yOzJrjZYkcYVZdIkLzrfvz7awT5npYGly","0","Jose  @","Correow@sss","12-12-2017","Perez @","0","32423423-4","","","");
INSERT INTO administradores VALUES("fer001","$2y$10$MUEKSXP6WvrnwrZwlOGwiOE5zXU4en8oBfn4O4Mi4N7H5BaY.wFb2","","Fernando","dkkdkdk@sd","11-12-2017","fadfadf","1","45354534-6","","1","este bicho es malo");
INSERT INTO administradores VALUES("miranda01","$2y$10$5FjYyJL46yZtz2tmSoP8yOzJrjZYkcYVZdIkLzrfvz7awT5npYGly","1","antonio","CCCCC@SSSS","05-12-2017","miranda","0","34323423-4","","1","este bicho es malo");
INSERT INTO administradores VALUES("nmnmnmn","$2y$10$g69q7ukaQnJ01Jeh3rMl5eJw6wEVYCHj/cVYBs25pYf9hbwuf9ePS","0","Mnmnmnmmn","hhhhh@fff","18-12-2017","nmnmnmnm","0","56564565-6","","1","este bicho es malo");
INSERT INTO administradores VALUES("sdlfjlaksdfjla","$2y$10$5FjYyJL46yZtz2tmSoP8yOzJrjZYkcYVZdIkLzrfvz7awT5npYGly","0","juliacan","dfakdfkjdfa@dkdkkd","03-12-2017","dfka;lsdkfa;skdf;a","0","33333333-3","","0","dddddddddddddddd");
INSERT INTO administradores VALUES("WWWWW01","$2y$10$1Hm48Otq/S.bIYvTra9ZGehNM5DFrLRTbVDnkxKW4VC4W5CtR9Cqy","0","WWWWWWw","ddddd@dss","11-12-2017","WWWWWWWW","0","34342342-3","","1","este bicho es malo");



DROP TABLE IF EXISTS autores;

CREATE TABLE `autores` (
  `codigo_autor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `apellido` varchar(25) DEFAULT NULL,
  `nacimiento` date DEFAULT NULL,
  `biografia` text NOT NULL,
  PRIMARY KEY (`codigo_autor`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='	';

INSERT INTO autores VALUES("1","Juanchis","herbnabdez lala","0000-00-00","PAR 3.pdf");



DROP TABLE IF EXISTS bitacora;

CREATE TABLE `bitacora` (
  `codigo_bitacora` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_administrador` varchar(15) NOT NULL,
  `accion` varchar(1000) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`codigo_bitacora`),
  KEY `fk_bitacora_administradores1_idx` (`codigo_administrador`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

INSERT INTO bitacora VALUES("1","admin01","El administrador admin01( ) inició sesión","2017-12-23 12:28:53");
INSERT INTO bitacora VALUES("2","admin01","se inserto al usuario kdkdkdkdk djdjdjdj","2017-12-23 12:30:21");
INSERT INTO bitacora VALUES("3","admin01","se inserto al usuario dkfaldskfjalkdjfla ndfasdkfljasldfjakl","2017-12-23 12:30:45");
INSERT INTO bitacora VALUES("4","admin01","se inserto al usuario CCCCCCCCC DDDDDDD","2017-12-23 12:37:10");
INSERT INTO bitacora VALUES("5","admin01","se inserto al usuario xxXXXXXX XXXXXXXX","2017-12-23 12:39:28");
INSERT INTO bitacora VALUES("6","admin01","se actualizaron los datos del usuario xxXXXXXX XXXXXXXX","2017-12-23 12:39:38");
INSERT INTO bitacora VALUES("7","admin01","Se registro como administrador a WWWWWWw WWWWWWWW","2017-12-23 12:41:49");
INSERT INTO bitacora VALUES("8","admin01","Se registro como administrador a antonio miranda","2017-12-23 12:45:17");
INSERT INTO bitacora VALUES("9","admin01","El administrador admin01( ) inició sesión","2017-12-23 12:53:07");
INSERT INTO bitacora VALUES("10","miranda01","El administrador miranda01(antonio miranda) inició sesión","2017-12-23 12:07:40");
INSERT INTO bitacora VALUES("11","miranda01","Se registro como administrador a fer01 fadfadf","2017-12-23 12:11:28");
INSERT INTO bitacora VALUES("12","fer001","El administrador fer001(fer01 fadfadf) inició sesión","2017-12-23 12:11:47");
INSERT INTO bitacora VALUES("13","fer001","El administrador fer001(fer01 fadfadf) inició sesión","2017-12-23 12:11:48");
INSERT INTO bitacora VALUES("14","fer001","Se registro como administrador a dmfalsdjflajdlfjska dfka;lsdkfa;skdf;a","2017-12-23 12:13:59");
INSERT INTO bitacora VALUES("15","admin01","El administrador admin01( ) inició sesión","2017-12-23 12:23:06");
INSERT INTO bitacora VALUES("16","admin01","El administrador admin01( ) inició sesión","2017-12-23 12:24:08");
INSERT INTO bitacora VALUES("17","admin01","Se registro como administrador a ADDDDDDD ADDDDDD","2017-12-23 12:25:04");
INSERT INTO bitacora VALUES("18","fer001","El administrador fer001(fer01 fadfadf) inició sesión","2017-12-23 12:25:46");
INSERT INTO bitacora VALUES("19","fer001","el administrador fer01 fadfadf actualizo sus datos","2017-12-23 12:14:22");
INSERT INTO bitacora VALUES("20","fer001","el administrador Fernando fadfadf actualizo sus datos","2017-12-23 12:14:45");
INSERT INTO bitacora VALUES("21","fer001","el administrador Fernando fadfadf actualizo sus datos","2017-12-23 12:15:16");
INSERT INTO bitacora VALUES("22","fer001","el administrador Fernando fadfadf actualizo sus datos","2017-12-23 12:18:16");
INSERT INTO bitacora VALUES("23","fer001","el administrador Fernando fadfadf actualizo sus datos","2017-12-23 12:18:53");
INSERT INTO bitacora VALUES("24","admin01","El administrador admin01( ) inició sesión","2017-12-23 12:31:05");
INSERT INTO bitacora VALUES("25","admin01","el administrador Jose  Perez actualizo sus datos","2017-12-23 12:39:53");
INSERT INTO bitacora VALUES("26","admin01","El administrador admin01(Jose  Perez) inició sesión","2017-12-23 12:40:06");
INSERT INTO bitacora VALUES("27","admin01","el administrador Jose  Perez actualizo sus datos","2017-12-23 12:40:46");
INSERT INTO bitacora VALUES("28","admin01","El administrador admin01(Jose  Perez) inició sesión","2017-12-23 12:41:12");
INSERT INTO bitacora VALUES("29","admin01","El administrador admin01(Jose  Perez) inició sesión","2017-12-23 12:42:29");
INSERT INTO bitacora VALUES("30","admin01","El administrador admin01(Jose  Perez) inició sesión","2017-12-23 12:44:40");
INSERT INTO bitacora VALUES("31","admin01","el administrador Jose  Perez actualizo sus datos","2017-12-23 12:44:55");
INSERT INTO bitacora VALUES("32","admin01","el administrador Jose  Perez @ actualizo sus datos","2017-12-23 12:45:13");
INSERT INTO bitacora VALUES("33","admin01","el administrador Jose  Perez @ actualizo sus datos","2017-12-23 12:46:00");
INSERT INTO bitacora VALUES("34","miranda01","El administrador miranda01(antonio miranda) inició sesión","2017-12-23 12:47:35");
INSERT INTO bitacora VALUES("35","miranda01","el administrador antonio miranda @ actualizo sus datos","2017-12-23 12:47:55");
INSERT INTO bitacora VALUES("36","miranda01","el administrador antonio miranda @ actualizo sus datos","2017-12-23 12:48:24");
INSERT INTO bitacora VALUES("37","miranda01","El administrador miranda01(antonio miranda @) inició sesión","2017-12-23 12:48:45");
INSERT INTO bitacora VALUES("38","admin01","El administrador admin01(Jose  Perez @) inició sesión","2017-12-23 12:53:14");
INSERT INTO bitacora VALUES("39","admin01","El administrador admin01(Jose  Perez @) inició sesión","2017-12-23 12:54:50");
INSERT INTO bitacora VALUES("40","admin01","El administrador admin01(Jose  Perez @) inició sesión","2017-12-23 12:24:17");
INSERT INTO bitacora VALUES("41","admin01","el administrador Jose @ Perez @ actualizo sus datos","2017-12-23 12:25:47");
INSERT INTO bitacora VALUES("42","admin01","el administrador Jose @ Perez @ actualizo sus datos","2017-12-23 12:25:59");
INSERT INTO bitacora VALUES("43","admin01","el administrador Jose  Perez  actualizo sus datos","2017-12-23 12:26:09");
INSERT INTO bitacora VALUES("44","admin01","El administrador admin01(Jose  Perez @) inició sesión","2017-12-23 12:27:21");
INSERT INTO bitacora VALUES("45","admin01","el administrador Jose  Perez @ actualizo sus datos","2017-12-23 12:27:48");
INSERT INTO bitacora VALUES("46","admin01","el administrador Jose @ Perez @ actualizo sus datos","2017-12-23 12:15:11");
INSERT INTO bitacora VALUES("47","admin01","el administrador Jose  @ Perez @ actualizo sus datos","2017-12-23 12:16:40");
INSERT INTO bitacora VALUES("48","admin01","el administrador Jose  @ Perez @ actualizo sus datos","2017-12-23 12:19:59");
INSERT INTO bitacora VALUES("49","admin01","El administrador admin01(Jose  @ Perez @) inició sesión","2017-12-23 12:20:18");
INSERT INTO bitacora VALUES("50","admin01","El administrador admin01(Jose  @ Perez @) inició sesión","2017-12-23 12:20:34");
INSERT INTO bitacora VALUES("51","admin01","el administrador Jose  @ Perez @ actualizo sus datos","2017-12-23 12:21:28");
INSERT INTO bitacora VALUES("52","admin01","El administrador admin01(Jose  @ Perez @) inició sesión","2017-12-23 12:29:34");
INSERT INTO bitacora VALUES("53","admin01","se actualizaron los datos del administrador nombre ADDDDDD","2017-12-23 12:08:56");
INSERT INTO bitacora VALUES("54","admin01","se actualizaron los datos del administrador antonio miranda","2017-12-23 12:11:06");
INSERT INTO bitacora VALUES("55","admin01","se actualizaron los datos del administrador Fernando fadfadf","2017-12-23 12:06:31");
INSERT INTO bitacora VALUES("56","fer001","El administrador fer001(Fernando fadfadf) inició sesión","2017-12-23 12:06:42");
INSERT INTO bitacora VALUES("57","fer001","el administrador Fernando fadfadf actualizo sus datos","2017-12-23 12:11:09");
INSERT INTO bitacora VALUES("58","admin01","El administrador admin01(Jose  @ Perez @) inició sesión","2017-12-23 12:11:30");
INSERT INTO bitacora VALUES("59","admin01","Se registro como administrador a Mnmnmnmmn nmnmnmnm","2017-12-23 12:13:35");
INSERT INTO bitacora VALUES("60","fer001","El administrador fer001(Fernando fadfadf) inició sesión","2017-12-23 12:06:44");
INSERT INTO bitacora VALUES("61","admin01","El administrador admin01(Jose  @ Perez @) inició sesión","2017-12-23 12:07:08");
INSERT INTO bitacora VALUES("62","fer001","El administrador fer001(Fernando fadfadf) inició sesión","2017-12-23 12:08:12");
INSERT INTO bitacora VALUES("63","fer001","el administrador Fernando fadfadf actualizo sus datos","2017-12-23 12:22:00");
INSERT INTO bitacora VALUES("64","fer001","se inserto al usuario juanchi hernandez","2017-12-23 12:23:45");
INSERT INTO bitacora VALUES("65","fer001","se actualizaron los datos del usuario Manolo DDDDDDD","2017-12-23 12:28:17");
INSERT INTO bitacora VALUES("66","fer001","se dio de baja al usuario Manolo DDDDDDD por el siguiente motivo: lamenteablemebte la gago","2017-12-23 12:28:59");
INSERT INTO bitacora VALUES("67","fer001","Se registro la siguiente institucion: Utec panamericana","2017-12-23 12:36:13");
INSERT INTO bitacora VALUES("68","fer001","el administrador Fernando fadfadf actualizo sus datos","2017-12-23 12:37:44");
INSERT INTO bitacora VALUES("69","fer001","El administrador fer001(Fernando fadfadf) inició sesión","2017-12-23 12:40:34");
INSERT INTO bitacora VALUES("70","admin01","El administrador admin01(Jose  @ Perez @) inició sesión","2017-12-23 12:11:32");
INSERT INTO bitacora VALUES("71","admin01","El administrador admin01(Jose  @ Perez @) inició sesión","2017-12-23 12:13:00");
INSERT INTO bitacora VALUES("72","admin01","El administrador admin01(Jose  @ Perez @) inició sesión","2017-12-23 12:14:15");
INSERT INTO bitacora VALUES("73","admin01","El administrador admin01  cerro sesión","2017-12-23 12:17:02");
INSERT INTO bitacora VALUES("74","admin01","El administrador admin01(Jose  @ Perez @) inició sesión","2017-12-23 12:18:10");
INSERT INTO bitacora VALUES("75","admin01","se actualizaron los datos del administrador FFFFFF dfka;lsdkfa;skdf;a","2017-12-23 12:18:38");
INSERT INTO bitacora VALUES("76","admin01","se actualizaron los datos del administrador sdlfjlaksdfjla(juliacan dfka;lsdkfa;skdf;a)","2017-12-23 12:21:55");
INSERT INTO bitacora VALUES("77","admin01","se dio de baja al administrador juliacan dfka;lsdkfa;skdf;apor el siguiente motivo: dddddddddddddddd","2017-12-23 12:37:26");
INSERT INTO bitacora VALUES("78","admin01","se registro al autor Juanchis herbnabdez","2017-12-23 12:40:17");
INSERT INTO bitacora VALUES("79","admin01","Se registro a la editorial djdjdjj","2017-12-23 12:40:48");
INSERT INTO bitacora VALUES("80","admin01","se hizo el registro de 15 libros con el Titulo de dddddddddd","2017-12-23 12:41:52");
INSERT INTO bitacora VALUES("81","admin01","Se editaron los datos del libro don quijote de la mancha","2017-12-23 12:44:13");
INSERT INTO bitacora VALUES("82","admin01","se actualizaron los datos del Autor Juanchis herbnabdez lala","2017-12-23 12:46:30");
INSERT INTO bitacora VALUES("83","admin01","se actualizaron los datos de editorial santillana Mayor dirección actual sdjfasdjfaljdfladjfla, email dfakjdajfalj@vz, telefono 3432-4234","2017-12-23 12:47:16");
INSERT INTO bitacora VALUES("84","admin01","se actualizaron los datos de editorial santillana Mayor dirección actual sdjfasdjfaljdfladjfla, email santillana@ddd, telefono 3432-4234","2017-12-23 12:49:48");
INSERT INTO bitacora VALUES("85","admin01","se hizo el registro de 5 libros con el Titulo de La toalla del mojado","2017-12-23 12:39:44");
INSERT INTO bitacora VALUES("86","admin01","el xxXXXXXX XXXXXXXX presto los siguientes libros  el quijote (CEJ-002-140-DD-0001-0007) el quijote (CEJ-002-050-LA-0001-0003)","2017-12-23 12:14:12");
INSERT INTO bitacora VALUES("87","admin01","se inserto al usuario Boris Miranda","2017-12-23 12:16:04");
INSERT INTO bitacora VALUES("88","admin01","el usuarioxxXXXXXX XXXXXXXX presto los siguientes libros  el quijote (CEJ-002-140-DD-0001-0005) el quijote (CEJ-002-050-LA-0001-0003)","2017-12-23 12:17:23");
INSERT INTO bitacora VALUES("89","admin01","el usuarioxxXXXXXX XXXXXXXX presto los siguientes libros  el quijote (CEJ-002-140-DD-0001-0004) el quijote (CEJ-002-050-LA-0001-0003)","2017-12-23 12:19:43");
INSERT INTO bitacora VALUES("90","admin01","el usuariojuanchi hernandez presto los siguientes libros  don quijote de la mancha(CEJ-002-140-DD-0001-0001) La toalla del mojado(CEJ-002-050-LA-0001-0001)","2017-12-23 12:36:46");
INSERT INTO bitacora VALUES("91","admin01","el usuario juanchi hernandez presto los siguientes libros  don quijote de la mancha(CEJ-002-140-DD-0001-0004) La toalla del mojado(CEJ-002-050-LA-0001-0005)","2017-12-23 12:53:54");
INSERT INTO bitacora VALUES("92","","el usuario  finalizo su prestamo, con la siguiente observación: borisito devolvio el libro y de milagro no lo jodio","2017-12-23 12:12:23");
INSERT INTO bitacora VALUES("93","","el usuario  finalizo su prestamo, con la siguiente observación: no lo jodio ","2017-12-23 12:12:31");
INSERT INTO bitacora VALUES("94","admin01","el usuario  finalizo su prestamo, con la siguiente observación: esto es tora prueva ","2017-12-23 12:22:07");
INSERT INTO bitacora VALUES("95","admin01","el usuario juanchi hernandez presto los siguientes libros  don quijote de la mancha(CEJ-002-140-DD-0001-0005) La toalla del mojado(CEJ-002-050-LA-0001-0004)","2017-12-23 12:23:20");
INSERT INTO bitacora VALUES("96","admin01","el usuario  finalizo su prestamo, con la siguiente observación: esta es otra mas prueba ","2017-12-23 12:25:50");
INSERT INTO bitacora VALUES("97","admin01","el usuario Boris Miranda presto los siguientes libros  don quijote de la mancha(CEJ-002-140-DD-0001-0007) La toalla del mojado(CEJ-002-050-LA-0001-0004)","2017-12-23 12:39:06");
INSERT INTO bitacora VALUES("98","admin01","el usuario  finalizo su prestamo, con la siguiente observación: joder kira","2017-12-23 12:40:01");
INSERT INTO bitacora VALUES("99","admin01","el usuario juanchi hernandez presto los siguientes libros  don quijote de la mancha(CEJ-002-140-DD-0001-0001) La toalla del mojado(CEJ-002-050-LA-0001-0001)","2017-12-23 12:43:00");
INSERT INTO bitacora VALUES("100","admin01","el usuario  finalizo su prestamo, con la siguiente observación: DDDDDDDDDDDDDDDD","2017-12-23 12:43:14");
INSERT INTO bitacora VALUES("101","admin01","el usuario kdkdkdkdk djdjdjdj presto los siguientes libros  don quijote de la mancha(CEJ-002-140-DD-0001-0007)","2017-12-23 12:44:49");
INSERT INTO bitacora VALUES("102","admin01","el usuario kdkdkdkdk djdjdjdj finalizo su prestamo, con la siguiente observación: BRRRRRRRRRRRR","2017-12-23 12:45:00");
INSERT INTO bitacora VALUES("103","admin01","se dio de baja al libro don quijote de la mancha por el siguiente motivo don quijote valio","2017-12-23 12:18:52");
INSERT INTO bitacora VALUES("104","admin01","se dio de baja al libro don quijote de la mancha(CEJ-002-140-DD-0001-0008)por el siguiente motivo: otro don quijote que valio","2017-12-23 12:21:26");



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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO editoriales VALUES("1","santillana Mayor","sdjfasdjfaljdfladjfla","","santillana@ddd","3432-4234");



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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO institucion VALUES("7","instituto");
INSERT INTO institucion VALUES("8","ddddddddddd");
INSERT INTO institucion VALUES("9","INSAVI");
INSERT INTO institucion VALUES("10","Utec panamericana");



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

INSERT INTO libros VALUES("CEJ-002-050-LA-0001-0001","1","La toalla del mojado","0","2017-12-05","hqdefault.jpg","");
INSERT INTO libros VALUES("CEJ-002-050-LA-0001-0002","1","La toalla del mojado","0","2017-12-05","hqdefault.jpg","");
INSERT INTO libros VALUES("CEJ-002-050-LA-0001-0003","1","La toalla del mojado","0","2017-12-05","hqdefault.jpg","");
INSERT INTO libros VALUES("CEJ-002-050-LA-0001-0004","1","La toalla del mojado","0","2017-12-05","hqdefault.jpg","");
INSERT INTO libros VALUES("CEJ-002-050-LA-0001-0005","1","La toalla del mojado","0","2017-12-05","hqdefault.jpg","");
INSERT INTO libros VALUES("CEJ-002-140-DD-0001-0001","1","don quijote de la mancha","1","2017-12-04","hqdefault.jpg","valio madres");
INSERT INTO libros VALUES("CEJ-002-140-DD-0001-0002","1","don quijote de la mancha","0","2017-12-04","hqdefault.jpg","");
INSERT INTO libros VALUES("CEJ-002-140-DD-0001-0003","1","don quijote de la mancha","1","2017-12-04","hqdefault.jpg","don quijote valio verga ");
INSERT INTO libros VALUES("CEJ-002-140-DD-0001-0004","1","don quijote de la mancha","1","2017-12-04","hqdefault.jpg","don quijote valio");
INSERT INTO libros VALUES("CEJ-002-140-DD-0001-0005","1","don quijote de la mancha","0","2017-12-04","hqdefault.jpg","");
INSERT INTO libros VALUES("CEJ-002-140-DD-0001-0006","1","don quijote de la mancha","0","2017-12-04","hqdefault.jpg","");
INSERT INTO libros VALUES("CEJ-002-140-DD-0001-0007","1","don quijote de la mancha","0","2017-12-04","hqdefault.jpg","");
INSERT INTO libros VALUES("CEJ-002-140-DD-0001-0008","1","don quijote de la mancha","1","2017-12-04","hqdefault.jpg","otro don quijote que valio");
INSERT INTO libros VALUES("CEJ-002-140-DD-0001-0009","1","don quijote de la mancha","0","2017-12-04","hqdefault.jpg","");
INSERT INTO libros VALUES("CEJ-002-140-DD-0001-0010","1","don quijote de la mancha","0","2017-12-04","hqdefault.jpg","");
INSERT INTO libros VALUES("CEJ-002-140-DD-0001-0011","1","don quijote de la mancha","0","2017-12-04","hqdefault.jpg","");
INSERT INTO libros VALUES("CEJ-002-140-DD-0001-0012","1","don quijote de la mancha","0","2017-12-04","hqdefault.jpg","");
INSERT INTO libros VALUES("CEJ-002-140-DD-0001-0013","1","don quijote de la mancha","0","2017-12-04","hqdefault.jpg","");
INSERT INTO libros VALUES("CEJ-002-140-DD-0001-0014","1","don quijote de la mancha","0","2017-12-04","hqdefault.jpg","");
INSERT INTO libros VALUES("CEJ-002-140-DD-0001-0015","1","don quijote de la mancha","0","2017-12-04","hqdefault.jpg","");
INSERT INTO libros VALUES("CEJ-002-140-DD-0001-0016","1","don quijote de la mancha","0","2017-12-04","hqdefault.jpg","");
INSERT INTO libros VALUES("CEJ-002-140-DD-0001-0017","1","don quijote de la mancha","0","2017-12-04","hqdefault.jpg","");
INSERT INTO libros VALUES("CEJ-002-140-DD-0001-0018","1","don quijote de la mancha","0","2017-12-04","hqdefault.jpg","");
INSERT INTO libros VALUES("CEJ-002-140-DD-0001-0019","1","don quijote de la mancha","0","2017-12-04","hqdefault.jpg","");
INSERT INTO libros VALUES("CEJ-002-140-DD-0001-0020","1","don quijote de la mancha","0","2017-12-04","hqdefault.jpg","");
INSERT INTO libros VALUES("CEJ-002-140-DD-0001-0021","1","don quijote de la mancha","0","2017-12-04","hqdefault.jpg","");
INSERT INTO libros VALUES("CEJ-002-140-DD-0001-0022","1","don quijote de la mancha","0","2017-12-04","hqdefault.jpg","");
INSERT INTO libros VALUES("CEJ-002-140-DD-0001-0023","1","don quijote de la mancha","0","2017-12-04","hqdefault.jpg","");
INSERT INTO libros VALUES("CEJ-002-140-DD-0001-0024","1","don quijote de la mancha","0","2017-12-04","hqdefault.jpg","");
INSERT INTO libros VALUES("CEJ-002-140-DD-0001-0025","1","don quijote de la mancha","0","2017-12-04","hqdefault.jpg","");
INSERT INTO libros VALUES("CEJ-002-140-DD-0001-0026","1","don quijote de la mancha","0","2017-12-04","hqdefault.jpg","");
INSERT INTO libros VALUES("CEJ-002-140-DD-0001-0027","1","don quijote de la mancha","0","2017-12-04","hqdefault.jpg","");
INSERT INTO libros VALUES("CEJ-002-140-DD-0001-0028","1","don quijote de la mancha","0","2017-12-04","hqdefault.jpg","");
INSERT INTO libros VALUES("CEJ-002-140-DD-0001-0029","1","don quijote de la mancha","0","2017-12-04","hqdefault.jpg","");



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

INSERT INTO movimiento_autores VALUES("CEJ-002-140-DD-0001-0001","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-140-DD-0001-0002","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-140-DD-0001-0003","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-140-DD-0001-0004","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-140-DD-0001-0005","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-140-DD-0001-0006","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-140-DD-0001-0007","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-140-DD-0001-0008","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-140-DD-0001-0009","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-140-DD-0001-0010","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-140-DD-0001-0011","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-140-DD-0001-0012","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-140-DD-0001-0013","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-140-DD-0001-0014","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-140-DD-0001-0015","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-140-DD-0001-0016","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-140-DD-0001-0017","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-140-DD-0001-0018","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-140-DD-0001-0019","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-140-DD-0001-0020","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-140-DD-0001-0021","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-140-DD-0001-0022","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-140-DD-0001-0023","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-140-DD-0001-0024","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-140-DD-0001-0025","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-140-DD-0001-0026","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-140-DD-0001-0027","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-140-DD-0001-0028","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-140-DD-0001-0029","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-050-LA-0001-0001","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-050-LA-0001-0002","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-050-LA-0001-0003","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-050-LA-0001-0004","1");
INSERT INTO movimiento_autores VALUES("CEJ-002-050-LA-0001-0005","1");



DROP TABLE IF EXISTS movimiento_libros;

CREATE TABLE `movimiento_libros` (
  `codigo_libro` varchar(45) NOT NULL,
  `codigo_plibro` int(11) NOT NULL,
  KEY `fk_libros_has_prestamo_libros_prestamo_libros1_idx` (`codigo_plibro`),
  KEY `fk_libros_has_prestamo_libros_libros1_idx` (`codigo_libro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO movimiento_libros VALUES("CEJ-002-140-DD-0001-0013","1");
INSERT INTO movimiento_libros VALUES("CEJ-002-140-DD-0001-0008","2");
INSERT INTO movimiento_libros VALUES("CEJ-002-140-DD-0001-0022","2");
INSERT INTO movimiento_libros VALUES("CEJ-002-140-DD-0001-0010","3");
INSERT INTO movimiento_libros VALUES("CEJ-002-140-DD-0001-0008","3");
INSERT INTO movimiento_libros VALUES("CEJ-002-140-DD-0001-0019","4");
INSERT INTO movimiento_libros VALUES("CEJ-002-140-DD-0001-0022","4");
INSERT INTO movimiento_libros VALUES("CEJ-002-140-DD-0001-0013","5");
INSERT INTO movimiento_libros VALUES("CEJ-002-140-DD-0001-0028","5");
INSERT INTO movimiento_libros VALUES("CEJ-002-140-DD-0001-0003","6");
INSERT INTO movimiento_libros VALUES("CEJ-002-050-LA-0001-0003","6");
INSERT INTO movimiento_libros VALUES("CEJ-002-140-DD-0001-0007","7");
INSERT INTO movimiento_libros VALUES("CEJ-002-050-LA-0001-0003","7");
INSERT INTO movimiento_libros VALUES("CEJ-002-140-DD-0001-0005","8");
INSERT INTO movimiento_libros VALUES("CEJ-002-050-LA-0001-0003","8");
INSERT INTO movimiento_libros VALUES("CEJ-002-140-DD-0001-0004","9");
INSERT INTO movimiento_libros VALUES("CEJ-002-050-LA-0001-0003","9");
INSERT INTO movimiento_libros VALUES("CEJ-002-140-DD-0001-0004","10");
INSERT INTO movimiento_libros VALUES("CEJ-002-050-LA-0001-0003","10");
INSERT INTO movimiento_libros VALUES("CEJ-002-140-DD-0001-0005","11");
INSERT INTO movimiento_libros VALUES("CEJ-002-050-LA-0001-0002","11");
INSERT INTO movimiento_libros VALUES("CEJ-002-140-DD-0001-0003","12");
INSERT INTO movimiento_libros VALUES("CEJ-002-050-LA-0001-0002","12");
INSERT INTO movimiento_libros VALUES("CEJ-002-140-DD-0001-0003","13");
INSERT INTO movimiento_libros VALUES("CEJ-002-050-LA-0001-0002","13");
INSERT INTO movimiento_libros VALUES("CEJ-002-140-DD-0001-0001","14");
INSERT INTO movimiento_libros VALUES("CEJ-002-050-LA-0001-0001","14");
INSERT INTO movimiento_libros VALUES("CEJ-002-140-DD-0001-0004","15");
INSERT INTO movimiento_libros VALUES("CEJ-002-050-LA-0001-0005","15");
INSERT INTO movimiento_libros VALUES("CEJ-002-140-DD-0001-0005","16");
INSERT INTO movimiento_libros VALUES("CEJ-002-050-LA-0001-0004","16");
INSERT INTO movimiento_libros VALUES("CEJ-002-140-DD-0001-0007","17");
INSERT INTO movimiento_libros VALUES("CEJ-002-050-LA-0001-0004","17");
INSERT INTO movimiento_libros VALUES("CEJ-002-140-DD-0001-0001","18");
INSERT INTO movimiento_libros VALUES("CEJ-002-050-LA-0001-0001","18");
INSERT INTO movimiento_libros VALUES("CEJ-002-140-DD-0001-0007","19");



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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

INSERT INTO prestamo_libros VALUES("12","BM17-6","","2017-12-23","2017-12-23 00:00:00","1");
INSERT INTO prestamo_libros VALUES("13","BM17-6","borisito devolvio el libro y de milagro no lo jodio","2017-12-23","2017-12-23 00:00:00","1");
INSERT INTO prestamo_libros VALUES("14","JH17-5","esto es tora prueva ","2017-12-23","2017-12-23 00:00:00","1");
INSERT INTO prestamo_libros VALUES("15","JH17-5","no lo jodio ","2018-01-26","2017-12-23 00:00:00","1");
INSERT INTO prestamo_libros VALUES("16","JH17-5","esta es otra mas prueba ","2017-12-23","2017-12-23 00:00:00","1");
INSERT INTO prestamo_libros VALUES("17","BM17-6","joder kira","2017-12-23","2017-12-23 00:00:00","1");
INSERT INTO prestamo_libros VALUES("18","JH17-5","DDDDDDDDDDDDDDDD","2017-12-23","2017-12-23 00:00:00","1");
INSERT INTO prestamo_libros VALUES("19","KD17-1","BRRRRRRRRRRRR","2017-12-23","2017-12-23 00:00:00","1");



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
  KEY `fk_usuarios_institucion1_idx` (`codigo_institucion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO usuarios VALUES("BM17-6","9","Boris","Miranda","3242-4234","brmiranda@gmail","volonia las mercerdez","","Masculino","1","");
INSERT INTO usuarios VALUES("CD17-3","1","Manolo","DDDDDDD","3423-4234","FSdfsd@djdj","MMMMMMdkdd","","Masculino","0","lamenteablemebte la gago");
INSERT INTO usuarios VALUES("DN17-2","7","dkfaldskfjalkdjfla","ndfasdkfljasldfjakl","3242-3423","djdjdjdj@hdssdhj","dfjakldsjfaldjfsaeieie","","Masculino","1","");
INSERT INTO usuarios VALUES("JH17-5","7","juanchi","hernandez","1111-1111","corrr@xxxx","colonia la mercesedz","","Masculino","1","");
INSERT INTO usuarios VALUES("KD17-1","7","kdkdkdkdk","djdjdjdj","9999-9999","hfjsdfhj@djdjdj","jfdkfksjdfksd","","Masculino","1","");
INSERT INTO usuarios VALUES("XX17-4","1","xxXXXXXX","XXXXXXXX","2312-3123","XXXX@sksk","XXXXXXXXXXX","","Masculino","1","");



SET FOREIGN_KEY_CHECKS=1;