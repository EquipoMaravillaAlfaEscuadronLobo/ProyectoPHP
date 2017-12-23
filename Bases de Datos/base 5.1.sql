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
  `pasword` VARCHAR(15) NULL ,
  `nivel` INT NULL ,
  `nombre` VARCHAR(25) NULL DEFAULT NULL ,
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
  `codigo_activo` VARCHAR(11) NOT NULL ,
  `codigo_tipo` VARCHAR(5) NOT NULL ,
  `codigo_proveedor` INT NOT NULL ,
  `codigo_detalle` INT NOT NULL ,
  `codigo_administrador` VARCHAR(20) NOT NULL ,
  `fecha_adquicision` DATE NULL ,
  `precio` DOUBLE NULL DEFAULT NULL ,
  `estado` INT NULL DEFAULT NULL ,
  `foto` BINARY NULL ,
  `observacion` VARCHAR(175) NULL ,
  PRIMARY KEY (`codigo_activo`) ,
  INDEX `fk_actvos_proveedores1_idx` (`codigo_proveedor` ASC) ,
  INDEX `fk_actvos_detalles1_idx` (`codigo_detalle` ASC) ,
  INDEX `fk_actvos_tipo_activo1_idx` (`codigo_tipo` ASC) ,
  INDEX `fk_actvos_administradores1_idx` (`codigo_administrador` ASC) ,
  CONSTRAINT `fk_actvos_proveedores1`
    FOREIGN KEY (`codigo_proveedor` )
    REFERENCES `diseno1`.`proveedores` (`codigo_proveedor` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_actvos_detalles1`
    FOREIGN KEY (`codigo_detalle` )
    REFERENCES `diseno1`.`detalles` (`codigo_detalle` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_actvos_tipo_activo1`
    FOREIGN KEY (`codigo_tipo` )
    REFERENCES `diseno1`.`tipo_activo` (`codigo_tipo` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_actvos_administradores1`
    FOREIGN KEY (`codigo_administrador` )
    REFERENCES `diseno1`.`administradores` (`codigo_administrador` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `diseno1`.`autores`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`autores` (
  `codigo_autor` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(25) NULL ,
  `apellido` VARCHAR(25) NULL DEFAULT NULL ,
  `nacimiento` DATE NULL DEFAULT NULL ,
  PRIMARY KEY (`codigo_autor`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COMMENT = '	';


-- -----------------------------------------------------
-- Table `diseno1`.`editoriales`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`editoriales` (
  `codigo_editorial` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(30) NULL ,
  `direccion` VARCHAR(50) NULL DEFAULT NULL ,
  `pais` VARCHAR(10) NULL DEFAULT NULL ,
  `email` VARCHAR(15) NULL DEFAULT NULL ,
  `telefono` VARCHAR(15) NULL DEFAULT NULL ,
  PRIMARY KEY (`codigo_editorial`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `diseno1`.`encargado_mantenimiento`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`encargado_mantenimiento` (
  `codigo_emantenimiento` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(25) NULL DEFAULT NULL ,
  `telefono` VARCHAR(10) NULL ,
  `correo` VARCHAR(35) NULL DEFAULT NULL ,
  `direccion` VARCHAR(150) NULL ,
  PRIMARY KEY (`codigo_emantenimiento`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `diseno1`.`libros`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`libros` (
  `codigo_libro` VARCHAR(45) NOT NULL ,
  `codigo_administrador` VARCHAR(15) NOT NULL ,
  `editoriales_codigo` INT NOT NULL ,
  `titulo` VARCHAR(50) NULL ,
  `estado` VARCHAR(25) NULL ,
  `origen` VARCHAR(50) NULL DEFAULT NULL ,
  `fecha_publicacion` DATE NULL DEFAULT NULL ,
  `foto` BINARY NULL ,
  PRIMARY KEY (`codigo_libro`) ,
  INDEX `fk_libros_editoriales1_idx` (`editoriales_codigo` ASC) ,
  INDEX `fk_libros_administradores1_idx` (`codigo_administrador` ASC) ,
  CONSTRAINT `fk_libros_editoriales1`
    FOREIGN KEY (`editoriales_codigo` )
    REFERENCES `diseno1`.`editoriales` (`codigo_editorial` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_libros_administradores1`
    FOREIGN KEY (`codigo_administrador` )
    REFERENCES `diseno1`.`administradores` (`codigo_administrador` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `diseno1`.`mantenimientos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`mantenimientos` (
  `codigo_mantenimiento` INT NOT NULL AUTO_INCREMENT ,
  `codigo_activo` VARCHAR(11) NOT NULL ,
  `fecha` DATE NULL ,
  `descripcion` VARCHAR(150) NULL ,
  `costo` DOUBLE NULL ,
  PRIMARY KEY (`codigo_mantenimiento`) ,
  INDEX `fk_mantenimientos_actvos1_idx` (`codigo_activo` ASC) ,
  CONSTRAINT `fk_mantenimientos_actvos1`
    FOREIGN KEY (`codigo_activo` )
    REFERENCES `diseno1`.`actvos` (`codigo_activo` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `diseno1`.`institucion`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`institucion` (
  `codigo_institucion` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NULL ,
  PRIMARY KEY (`codigo_institucion`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `diseno1`.`usuarios`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`usuarios` (
  `codigo_usuario` VARCHAR(15) NOT NULL ,
  `codigo_institucion` INT NOT NULL ,
  `nombre` VARCHAR(25) NULL ,
  `apellido` VARCHAR(25) NULL DEFAULT NULL ,
  `telefono` VARCHAR(10) NULL ,
  `correo` VARCHAR(35) NULL DEFAULT NULL ,
  `direccion` VARCHAR(100) NULL ,
  `foto` BINARY NULL ,
  `sexo` TINYINT(1) NULL DEFAULT NULL ,
  `estado` INT NULL ,
  PRIMARY KEY (`codigo_usuario`) ,
  INDEX `fk_usuarios_institucion1_idx` (`codigo_institucion` ASC) ,
  CONSTRAINT `fk_usuarios_institucion1`
    FOREIGN KEY (`codigo_institucion` )
    REFERENCES `diseno1`.`institucion` (`codigo_institucion` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `diseno1`.`prestamo_activos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`prestamo_activos` (
  `codigo_pactivo` INT NOT NULL AUTO_INCREMENT ,
  `usuarios_codigo` VARCHAR(45) NOT NULL ,
  `observacion` VARCHAR(300) NULL DEFAULT NULL ,
  `fecha_salida` DATETIME NULL DEFAULT NULL ,
  `fecha_devolucion` DATE NULL ,
  `estado` INT NULL ,
  PRIMARY KEY (`codigo_pactivo`) ,
  INDEX `fk_prestamo_activos_usuarios1_idx` (`usuarios_codigo` ASC) ,
  CONSTRAINT `fk_prestamo_activos_usuarios1`
    FOREIGN KEY (`usuarios_codigo` )
    REFERENCES `diseno1`.`usuarios` (`codigo_usuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `diseno1`.`prestamo_libros`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`prestamo_libros` (
  `codigo_plibro` INT NOT NULL AUTO_INCREMENT ,
  `codigo_usuario` VARCHAR(15) NOT NULL ,
  `observaciones` VARCHAR(100) NULL ,
  `fecha_devolucion` DATE NULL ,
  `fecha_salida` DATETIME NULL ,
  PRIMARY KEY (`codigo_plibro`) ,
  INDEX `fk_prestamo_libros_usuarios1_idx` (`codigo_usuario` ASC) ,
  CONSTRAINT `fk_prestamo_libros_usuarios1`
    FOREIGN KEY (`codigo_usuario` )
    REFERENCES `diseno1`.`usuarios` (`codigo_usuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `diseno1`.`bitacora`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`bitacora` (
  `codigo_bitacora` INT NOT NULL ,
  `codigo_administrador` VARCHAR(15) NOT NULL ,
  `accion` VARCHAR(100) NULL ,
  `fecha` DATETIME NULL ,
  PRIMARY KEY (`codigo_bitacora`) ,
  INDEX `fk_bitacora_administradores1_idx` (`codigo_administrador` ASC) ,
  CONSTRAINT `fk_bitacora_administradores1`
    FOREIGN KEY (`codigo_administrador` )
    REFERENCES `diseno1`.`administradores` (`codigo_administrador` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `diseno1`.`movimiento_actvos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`movimiento_actvos` (
  `codigo_activo` VARCHAR(11) NOT NULL ,
  `codigo_pactivo` INT NOT NULL ,
  INDEX `fk_prestamo_activos_has_actvos_actvos1_idx` (`codigo_activo` ASC) ,
  INDEX `fk_prestamo_activos_has_actvos_prestamo_activos1_idx` (`codigo_pactivo` ASC) ,
  CONSTRAINT `fk_prestamo_activos_has_actvos_prestamo_activos1`
    FOREIGN KEY (`codigo_pactivo` )
    REFERENCES `diseno1`.`prestamo_activos` (`codigo_pactivo` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_prestamo_activos_has_actvos_actvos1`
    FOREIGN KEY (`codigo_activo` )
    REFERENCES `diseno1`.`actvos` (`codigo_activo` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `diseno1`.`movimiento_mantenimientos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`movimiento_mantenimientos` (
  `codigo_emantenimiento` INT NOT NULL ,
  `codigo_mantenimiento` INT NOT NULL ,
  INDEX `fk_encargado_mantenimiento_has_mantenimientos_mantenimiento_idx` (`codigo_mantenimiento` ASC) ,
  INDEX `fk_encargado_mantenimiento_has_mantenimientos_encargado_man_idx` (`codigo_emantenimiento` ASC) ,
  CONSTRAINT `fk_encargado_mantenimiento_has_mantenimientos_encargado_mante1`
    FOREIGN KEY (`codigo_emantenimiento` )
    REFERENCES `diseno1`.`encargado_mantenimiento` (`codigo_emantenimiento` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_encargado_mantenimiento_has_mantenimientos_mantenimientos1`
    FOREIGN KEY (`codigo_mantenimiento` )
    REFERENCES `diseno1`.`mantenimientos` (`codigo_mantenimiento` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `diseno1`.`movimiento_libros`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`movimiento_libros` (
  `codigo_libro` VARCHAR(45) NOT NULL ,
  `codigo_plibro` INT NOT NULL ,
  INDEX `fk_libros_has_prestamo_libros_prestamo_libros1_idx` (`codigo_plibro` ASC) ,
  INDEX `fk_libros_has_prestamo_libros_libros1_idx` (`codigo_libro` ASC) ,
  CONSTRAINT `fk_libros_has_prestamo_libros_libros1`
    FOREIGN KEY (`codigo_libro` )
    REFERENCES `diseno1`.`libros` (`codigo_libro` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_libros_has_prestamo_libros_prestamo_libros1`
    FOREIGN KEY (`codigo_plibro` )
    REFERENCES `diseno1`.`prestamo_libros` (`codigo_plibro` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `diseno1`.`movimiento_autores`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `diseno1`.`movimiento_autores` (
  `codigo_libro` VARCHAR(45) NOT NULL ,
  `codigo_autor` INT NOT NULL ,
  INDEX `fk_libros_has_autores_autores1_idx` (`codigo_autor` ASC) ,
  INDEX `fk_libros_has_autores_libros1_idx` (`codigo_libro` ASC) ,
  CONSTRAINT `fk_libros_has_autores_libros1`
    FOREIGN KEY (`codigo_libro` )
    REFERENCES `diseno1`.`libros` (`codigo_libro` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_libros_has_autores_autores1`
    FOREIGN KEY (`codigo_autor` )
    REFERENCES `diseno1`.`autores` (`codigo_autor` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

USE `diseno1` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
