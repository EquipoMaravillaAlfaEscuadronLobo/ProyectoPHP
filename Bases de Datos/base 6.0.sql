SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `diseno1` DEFAULT CHARACTER SET latin1 ;
USE `diseno1` ;

-- -----------------------------------------------------
-- Table `diseno1`.`proveedores`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`proveedores` (
  `codigo_proveedor` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(40) NULL ,
  `apellido` VARCHAR(40) NULL ,
  `direccion` VARCHAR(150) NULL ,
  `telefono` VARCHAR(15) NULL ,
  `correo` VARCHAR(35) NULL ,
  `fax` VARCHAR(30) NULL ,
  PRIMARY KEY (`codigo_proveedor`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `diseno1`.`detalles`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`detalles` (
  `codigo_detalle` INT NOT NULL AUTO_INCREMENT ,
  `serie` VARCHAR(50) NULL ,
  `color` VARCHAR(50) NULL ,
  `marca` VARCHAR(30) NULL ,
  `modelo` VARCHAR(30) NULL ,
  `ram` VARCHAR(30) NULL ,
  `memoria` VARCHAR(50) NULL ,
  `sistema` VARCHAR(30) NULL ,
  `dimensiones` VARCHAR(50) NULL ,
  `foto` BINARY NULL ,
  `otros` VARCHAR(300) NULL ,
  PRIMARY KEY (`codigo_detalle`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `diseno1`.`tipo_activo`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`tipo_activo` (
  `codigo_tipo` VARCHAR(5) NOT NULL ,
  `nombre` VARCHAR(45) NULL ,
  PRIMARY KEY (`codigo_tipo`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `diseno1`.`administradores`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`administradores` (
  `codigo_administrador` VARCHAR(15) NOT NULL ,
  `pasword` VARCHAR(255) NULL ,
  `nivel` INT NULL ,
  `nombre` VARCHAR(25) NULL DEFAULT NULL ,
  `email` VARCHAR(35) NULL DEFAULT NULL ,
  `fecha` VARCHAR(35) NULL DEFAULT NULL ,
  `apellido` VARCHAR(25) NULL DEFAULT NULL ,
  `sexo` TINYINT(1) NULL DEFAULT NULL ,
  `dui` VARCHAR(11) NULL DEFAULT NULL ,
  `foto` BINARY NULL DEFAULT NULL ,
  `estado` INT NULL ,
  `observacion` VARCHAR(150) NULL ,
  PRIMARY KEY (`codigo_administrador`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `diseno1`.`actvos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`actvos` (
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


-- -----------------------------------------------------
-- Table `diseno1`.`autores`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`autores` (
  `codigo_autor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `apellido` varchar(25) DEFAULT NULL,
  `nacimiento` date DEFAULT NULL,
  `biografia` text NOT NULL,
  PRIMARY KEY (`codigo_autor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='	' AUTO_INCREMENT=3 ;


-- -----------------------------------------------------
-- Table `diseno1`.`editoriales`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`editoriales` (
 `codigo_editorial` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `pais` varchar(10) DEFAULT NULL,
  `email` varchar(15) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`codigo_editorial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;


-- -----------------------------------------------------
-- Table `diseno1`.`encargado_mantenimiento`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`encargado_mantenimiento` (
  `codigo_emantenimiento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `correo` varchar(35) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`codigo_emantenimiento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


-- -----------------------------------------------------
-- Table `diseno1`.`libros`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`libros` (
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

-- -----------------------------------------------------
-- Table `diseno1`.`mantenimientos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`mantenimientos` (
 `codigo_mantenimiento` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_activo` varchar(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `descripcion` text,
  `costo` double DEFAULT NULL,
  PRIMARY KEY (`codigo_mantenimiento`),
  KEY `fk_mantenimientos_actvos1_idx` (`codigo_activo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


-- -----------------------------------------------------
-- Table `diseno1`.`institucion`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`institucion` (
  `codigo_institucion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigo_institucion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;


-- -----------------------------------------------------
-- Table `diseno1`.`usuarios`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`usuarios` (
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


-- -----------------------------------------------------
-- Table `diseno1`.`prestamo_activos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`prestamo_activos` (
  `codigo_pactivo` int(11) NOT NULL AUTO_INCREMENT,
  `usuarios_codigo` varchar(45) NOT NULL,
  `observacion` text,
  `fecha_salida` datetime DEFAULT NULL,
  `fecha_devolucion` date DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo_pactivo`),
  KEY `fk_prestamo_activos_usuarios1_idx` (`usuarios_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


-- -----------------------------------------------------
-- Table `diseno1`.`prestamo_libros`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`prestamo_libros` (
   `codigo_plibro` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_usuario` varchar(15) NOT NULL,
  `observaciones` varchar(100) DEFAULT NULL,
  `fecha_devolucion` date DEFAULT NULL,
  `fecha_salida` datetime DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo_plibro`),
  KEY `fk_prestamo_libros_usuarios1_idx` (`codigo_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;


-- -----------------------------------------------------
-- Table `diseno1`.`bitacora`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`bitacora` (
  `codigo_bitacora` int(11) NOT NULL,
  `codigo_administrador` varchar(15) NOT NULL,
  `accion` varchar(1000) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`codigo_bitacora`),
  KEY `fk_bitacora_administradores1_idx` (`codigo_administrador`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- -----------------------------------------------------
-- Table `diseno1`.`movimiento_actvos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`movimiento_actvos` (
  `codigo_activo` varchar(11) NOT NULL,
  `codigo_pactivo` int(11) NOT NULL,
  KEY `fk_prestamo_activos_has_actvos_actvos1_idx` (`codigo_activo`),
  KEY `fk_prestamo_activos_has_actvos_prestamo_activos1_idx` (`codigo_pactivo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- -----------------------------------------------------
-- Table `diseno1`.`movimiento_mantenimientos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`movimiento_mantenimientos` (
   `codigo_emantenimiento` int(11) NOT NULL,
  `codigo_mantenimiento` int(11) NOT NULL,
  KEY `fk_encargado_mantenimiento_has_mantenimientos_mantenimiento_idx` (`codigo_mantenimiento`),
  KEY `fk_encargado_mantenimiento_has_mantenimientos_encargado_man_idx` (`codigo_emantenimiento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- -----------------------------------------------------
-- Table `diseno1`.`movimiento_libros`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`movimiento_libros` (
 `codigo_libro` varchar(45) NOT NULL,
  `codigo_plibro` int(11) NOT NULL,
  KEY `fk_libros_has_prestamo_libros_prestamo_libros1_idx` (`codigo_plibro`),
  KEY `fk_libros_has_prestamo_libros_libros1_idx` (`codigo_libro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- -----------------------------------------------------
-- Table `diseno1`.`movimiento_autores`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`movimiento_autores` (
  `codigo_libro` varchar(45) NOT NULL,
  `codigo_autor` int(11) NOT NULL,
  KEY `fk_libros_has_autores_autores1_idx` (`codigo_autor`),
  KEY `fk_libros_has_autores_libros1_idx` (`codigo_libro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

USE `diseno1` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
