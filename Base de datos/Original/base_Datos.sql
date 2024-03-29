-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`tbl_tipo_lugares`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_tipo_lugares` (
  `codigo_tipo_lugar` INT NOT NULL AUTO_INCREMENT,
  `tipo_lugar` VARCHAR(400) NOT NULL,
  PRIMARY KEY (`codigo_tipo_lugar`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_lugares`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_lugares` (
  `codigo_lugar` INT NOT NULL AUTO_INCREMENT,
  `codigo_tipo_lugar` INT NOT NULL,
  `codigo_lugar_padre` INT NULL,
  `nombre_lugar` VARCHAR(400) NOT NULL,
  PRIMARY KEY (`codigo_lugar`),
  INDEX `fk_tbl_lugares_tbl_lugares1_idx` (`codigo_lugar_padre` ASC),
  INDEX `fk_tbl_lugares_tbl_tipo_lugares1_idx` (`codigo_tipo_lugar` ASC),
  CONSTRAINT `fk_tbl_lugares_tbl_lugares1`
    FOREIGN KEY (`codigo_lugar_padre`)
    REFERENCES `mydb`.`tbl_lugares` (`codigo_lugar`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_lugares_tbl_tipo_lugares1`
    FOREIGN KEY (`codigo_tipo_lugar`)
    REFERENCES `mydb`.`tbl_tipo_lugares` (`codigo_tipo_lugar`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_planes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_planes` (
  `codigo_plan` INT NOT NULL AUTO_INCREMENT,
  `nombre_plan` VARCHAR(200) NOT NULL,
  `almacenamiento` VARCHAR(200) NOT NULL,
  `precio` FLOAT NOT NULL,
  PRIMARY KEY (`codigo_plan`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_redes_sociales`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_redes_sociales` (
  `codigo_red_social` INT NOT NULL AUTO_INCREMENT,
  `red_social` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`codigo_red_social`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_usuarios` (
  `codigo_usuario` INT NOT NULL AUTO_INCREMENT,
  `codigo_plan` INT NOT NULL,
  `codigo_lugar_nacimiento` INT NOT NULL,
  `codigo_lugar_residencia` INT NOT NULL,
  `genero` VARCHAR(1) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `fecha_registro` DATE NOT NULL,
  `fecha_nacimiento` DATE NOT NULL,
  `alias` VARCHAR(45) NULL,
  `clave` VARCHAR(45) NULL,
  `telefono` VARCHAR(45) NULL,
  `api_red_social` VARCHAR(45) NULL,
  `fotografia` BLOB NULL,
  `codigo_red_social` INT NOT NULL,
  PRIMARY KEY (`codigo_usuario`),
  INDEX `fk_tbl_usuarios_tbl_lugares1_idx` (`codigo_lugar_nacimiento` ASC),
  INDEX `fk_tbl_usuarios_tbl_lugares2_idx` (`codigo_lugar_residencia` ASC),
  INDEX `fk_tbl_usuarios_tbl_planes1_idx` (`codigo_plan` ASC),
  INDEX `fk_tbl_usuarios_tbl_redes_sociales1_idx` (`codigo_red_social` ASC),
  CONSTRAINT `fk_tbl_usuarios_tbl_lugares1`
    FOREIGN KEY (`codigo_lugar_nacimiento`)
    REFERENCES `mydb`.`tbl_lugares` (`codigo_lugar`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_usuarios_tbl_lugares2`
    FOREIGN KEY (`codigo_lugar_residencia`)
    REFERENCES `mydb`.`tbl_lugares` (`codigo_lugar`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_usuarios_tbl_planes1`
    FOREIGN KEY (`codigo_plan`)
    REFERENCES `mydb`.`tbl_planes` (`codigo_plan`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_usuarios_tbl_redes_sociales1`
    FOREIGN KEY (`codigo_red_social`)
    REFERENCES `mydb`.`tbl_redes_sociales` (`codigo_red_social`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_tipo_archivos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_tipo_archivos` (
  `codigo_tipo_archivo` INT NOT NULL,
  `tipo_archivo` VARCHAR(200) NOT NULL,
  `extension` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`codigo_tipo_archivo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_privacidad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_privacidad` (
  `codigo_privacidad` INT NOT NULL AUTO_INCREMENT,
  `tipo_privacidad` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`codigo_privacidad`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_archivos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_archivos` (
  `codigo_archivo` INT NOT NULL AUTO_INCREMENT,
  `codigo_usuario` INT NOT NULL,
  `codigo_tipo_archivo` INT NOT NULL,
  `codigo_privacidad` INT NOT NULL,
  `nombre_archivo` VARCHAR(100) NOT NULL,
  `tamanio_archivo` VARCHAR(4000) NOT NULL,
  `fecha_creacion` DATE NOT NULL,
  `archivo` BLOB NOT NULL,
  `descripcion` VARCHAR(1000) NOT NULL,
  PRIMARY KEY (`codigo_archivo`),
  INDEX `fk_tbl_archivos_tbl_usuarios_idx` (`codigo_usuario` ASC),
  INDEX `fk_tbl_archivos_tbl_tipo_archivos1_idx` (`codigo_tipo_archivo` ASC),
  INDEX `fk_tbl_archivos_tbl_privacidad1_idx` (`codigo_privacidad` ASC),
  CONSTRAINT `fk_tbl_archivos_tbl_usuarios`
    FOREIGN KEY (`codigo_usuario`)
    REFERENCES `mydb`.`tbl_usuarios` (`codigo_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_archivos_tbl_tipo_archivos1`
    FOREIGN KEY (`codigo_tipo_archivo`)
    REFERENCES `mydb`.`tbl_tipo_archivos` (`codigo_tipo_archivo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_archivos_tbl_privacidad1`
    FOREIGN KEY (`codigo_privacidad`)
    REFERENCES `mydb`.`tbl_privacidad` (`codigo_privacidad`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = '		';


-- -----------------------------------------------------
-- Table `mydb`.`tbl_permisos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_permisos` (
  `codigo_permiso` INT NOT NULL AUTO_INCREMENT,
  `tipo_permiso` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`codigo_permiso`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_permisos_archivos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_permisos_archivos` (
  `codigo_archivo` INT NOT NULL,
  `codigo_usuario` INT NOT NULL,
  `codigo_permiso` INT NOT NULL,
  INDEX `fk_table1_tbl_archivos1_idx` (`codigo_archivo` ASC),
  INDEX `fk_table1_tbl_usuarios1_idx` (`codigo_usuario` ASC),
  PRIMARY KEY (`codigo_archivo`, `codigo_usuario`, `codigo_permiso`),
  INDEX `fk_table1_tbl_permisos1_idx` (`codigo_permiso` ASC),
  CONSTRAINT `fk_table1_tbl_archivos1`
    FOREIGN KEY (`codigo_archivo`)
    REFERENCES `mydb`.`tbl_archivos` (`codigo_archivo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_table1_tbl_usuarios1`
    FOREIGN KEY (`codigo_usuario`)
    REFERENCES `mydb`.`tbl_usuarios` (`codigo_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_table1_tbl_permisos1`
    FOREIGN KEY (`codigo_permiso`)
    REFERENCES `mydb`.`tbl_permisos` (`codigo_permiso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_organizaciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_organizaciones` (
  `codigo_organizacion` INT NOT NULL AUTO_INCREMENT,
  `codigo_admin` INT NOT NULL,
  `codigo_lugar` INT NOT NULL,
  `fecha_creacion` DATE NOT NULL,
  `nombre` VARCHAR(200) NOT NULL,
  `descripcion` VARCHAR(800) NULL,
  `telefono` VARCHAR(50) NULL,
  `fotografia` BLOB NULL,
  PRIMARY KEY (`codigo_organizacion`),
  INDEX `fk_tbl_organizaciones_tbl_usuarios1_idx` (`codigo_admin` ASC),
  INDEX `fk_tbl_organizaciones_tbl_lugares1_idx` (`codigo_lugar` ASC),
  CONSTRAINT `fk_tbl_organizaciones_tbl_usuarios1`
    FOREIGN KEY (`codigo_admin`)
    REFERENCES `mydb`.`tbl_usuarios` (`codigo_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_organizaciones_tbl_lugares1`
    FOREIGN KEY (`codigo_lugar`)
    REFERENCES `mydb`.`tbl_lugares` (`codigo_lugar`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_permisos_org`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_permisos_org` (
  `codigo_permiso` INT NOT NULL,
  `codigo_usuario` INT NOT NULL,
  `codigo_organizacion` INT NOT NULL,
  INDEX `fk_tbl_permisos_org_tbl_permisos1_idx` (`codigo_permiso` ASC),
  PRIMARY KEY (`codigo_permiso`, `codigo_usuario`, `codigo_organizacion`),
  INDEX `fk_tbl_permisos_org_tbl_usuarios1_idx` (`codigo_usuario` ASC),
  INDEX `fk_tbl_permisos_org_tbl_organizaciones1_idx` (`codigo_organizacion` ASC),
  CONSTRAINT `fk_tbl_permisos_org_tbl_permisos1`
    FOREIGN KEY (`codigo_permiso`)
    REFERENCES `mydb`.`tbl_permisos` (`codigo_permiso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_permisos_org_tbl_usuarios1`
    FOREIGN KEY (`codigo_usuario`)
    REFERENCES `mydb`.`tbl_usuarios` (`codigo_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_permisos_org_tbl_organizaciones1`
    FOREIGN KEY (`codigo_organizacion`)
    REFERENCES `mydb`.`tbl_organizaciones` (`codigo_organizacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_facturacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_facturacion` (
  `codigo_factura` INT NOT NULL AUTO_INCREMENT,
  `codigo_usuario` INT NOT NULL,
  `codigo_plan` INT NOT NULL,
  `monto` FLOAT NOT NULL,
  `descuento` FLOAT NULL,
  `fecha_pago` DATE NOT NULL,
  `fecha_expiracion` DATE NOT NULL,
  PRIMARY KEY (`codigo_factura`),
  INDEX `fk_tbl_facturacion_tbl_usuarios1_idx` (`codigo_usuario` ASC),
  INDEX `fk_tbl_facturacion_tbl_planes1_idx` (`codigo_plan` ASC),
  CONSTRAINT `fk_tbl_facturacion_tbl_usuarios1`
    FOREIGN KEY (`codigo_usuario`)
    REFERENCES `mydb`.`tbl_usuarios` (`codigo_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_facturacion_tbl_planes1`
    FOREIGN KEY (`codigo_plan`)
    REFERENCES `mydb`.`tbl_planes` (`codigo_plan`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_aplicaciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_aplicaciones` (
  `codigo_aplicacion` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `descripcion` VARCHAR(400) NOT NULL,
  `icono` BLOB NULL,
  PRIMARY KEY (`codigo_aplicacion`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_conexiones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_conexiones` (
  `codigo_conexion` INT NOT NULL AUTO_INCREMENT,
  `codigo_usuario` INT NOT NULL,
  `codigo_aplicacion` INT NOT NULL,
  `datos` BLOB NOT NULL,
  PRIMARY KEY (`codigo_conexion`),
  INDEX `fk_tbl_conexiones_tbl_usuarios1_idx` (`codigo_usuario` ASC),
  INDEX `fk_tbl_conexiones_tbl_aplicaciones1_idx` (`codigo_aplicacion` ASC),
  CONSTRAINT `fk_tbl_conexiones_tbl_usuarios1`
    FOREIGN KEY (`codigo_usuario`)
    REFERENCES `mydb`.`tbl_usuarios` (`codigo_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_conexiones_tbl_aplicaciones1`
    FOREIGN KEY (`codigo_aplicacion`)
    REFERENCES `mydb`.`tbl_aplicaciones` (`codigo_aplicacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_usuarios_x_org`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_usuarios_x_org` (
  `codigo_organizacion` INT NOT NULL,
  `codigo_usuario` INT NOT NULL,
  `fecha_registro` DATE NOT NULL,
  PRIMARY KEY (`codigo_organizacion`, `codigo_usuario`),
  INDEX `fk_tbl_organizaciones_has_tbl_usuarios_tbl_usuarios1_idx` (`codigo_usuario` ASC),
  INDEX `fk_tbl_organizaciones_has_tbl_usuarios_tbl_organizaciones1_idx` (`codigo_organizacion` ASC),
  CONSTRAINT `fk_tbl_organizaciones_has_tbl_usuarios_tbl_organizaciones1`
    FOREIGN KEY (`codigo_organizacion`)
    REFERENCES `mydb`.`tbl_organizaciones` (`codigo_organizacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_organizaciones_has_tbl_usuarios_tbl_usuarios1`
    FOREIGN KEY (`codigo_usuario`)
    REFERENCES `mydb`.`tbl_usuarios` (`codigo_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_backups`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_backups` (
  `codigo_backup` INT NOT NULL AUTO_INCREMENT,
  `fecha_backup` DATE NOT NULL,
  `fecha_sig_backup` DATE NULL,
  `descripcion` VARCHAR(200) NULL,
  `codigo_usuario` INT NOT NULL,
  PRIMARY KEY (`codigo_backup`),
  INDEX `fk_tbl_backups_tbl_usuarios1_idx` (`codigo_usuario` ASC),
  CONSTRAINT `fk_tbl_backups_tbl_usuarios1`
    FOREIGN KEY (`codigo_usuario`)
    REFERENCES `mydb`.`tbl_usuarios` (`codigo_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_carpetas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_carpetas` (
  `codigo_carpeta` INT NOT NULL AUTO_INCREMENT,
  `codigo_usuario` INT NOT NULL,
  `codigo_carpeta_padre` INT NULL,
  `codigo_organizacion` INT NULL,
  `codigo_privacidad` INT NOT NULL,
  `nombre_carpeta` VARCHAR(200) NOT NULL,
  `fecha_creacion` DATE NOT NULL,
  `descripcion` VARCHAR(1000) NULL,
  PRIMARY KEY (`codigo_carpeta`),
  INDEX `fk_tbl_carpetas_tbl_usuarios1_idx` (`codigo_usuario` ASC),
  INDEX `fk_tbl_carpetas_tbl_carpetas1_idx` (`codigo_carpeta_padre` ASC),
  INDEX `fk_tbl_carpetas_tbl_privacidad1_idx` (`codigo_privacidad` ASC),
  INDEX `fk_tbl_carpetas_tbl_organizaciones1_idx` (`codigo_organizacion` ASC),
  CONSTRAINT `fk_tbl_carpetas_tbl_usuarios1`
    FOREIGN KEY (`codigo_usuario`)
    REFERENCES `mydb`.`tbl_usuarios` (`codigo_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_carpetas_tbl_carpetas1`
    FOREIGN KEY (`codigo_carpeta_padre`)
    REFERENCES `mydb`.`tbl_carpetas` (`codigo_carpeta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_carpetas_tbl_privacidad1`
    FOREIGN KEY (`codigo_privacidad`)
    REFERENCES `mydb`.`tbl_privacidad` (`codigo_privacidad`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_carpetas_tbl_organizaciones1`
    FOREIGN KEY (`codigo_organizacion`)
    REFERENCES `mydb`.`tbl_organizaciones` (`codigo_organizacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_archivos_x_backup`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_archivos_x_backup` (
  `codigo_backup` INT NOT NULL,
  `codigo_conexion` INT NULL,
  `codigo_archivo` INT NULL,
  `codigo_carpeta` INT NULL,
  INDEX `fk_tbl_archivos_x_backup_tbl_backups1_idx` (`codigo_backup` ASC),
  UNIQUE INDEX `tbl_backups_codigo_backup_UNIQUE` (`codigo_backup` ASC),
  PRIMARY KEY (`codigo_backup`),
  INDEX `fk_tbl_archivos_x_backup_tbl_conexiones1_idx` (`codigo_conexion` ASC),
  UNIQUE INDEX `tbl_conexiones_codigo_conexion_UNIQUE` (`codigo_conexion` ASC),
  INDEX `fk_tbl_archivos_x_backup_tbl_archivos1_idx` (`codigo_archivo` ASC),
  INDEX `fk_tbl_archivos_x_backup_tbl_carpetas1_idx` (`codigo_carpeta` ASC),
  UNIQUE INDEX `tbl_archivos_codigo_archivo_UNIQUE` (`codigo_archivo` ASC),
  UNIQUE INDEX `tbl_carpetas_codigo_carpeta_UNIQUE` (`codigo_carpeta` ASC),
  CONSTRAINT `fk_tbl_archivos_x_backup_tbl_backups1`
    FOREIGN KEY (`codigo_backup`)
    REFERENCES `mydb`.`tbl_backups` (`codigo_backup`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_archivos_x_backup_tbl_conexiones1`
    FOREIGN KEY (`codigo_conexion`)
    REFERENCES `mydb`.`tbl_conexiones` (`codigo_conexion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_archivos_x_backup_tbl_archivos1`
    FOREIGN KEY (`codigo_archivo`)
    REFERENCES `mydb`.`tbl_archivos` (`codigo_archivo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_archivos_x_backup_tbl_carpetas1`
    FOREIGN KEY (`codigo_carpeta`)
    REFERENCES `mydb`.`tbl_carpetas` (`codigo_carpeta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_suscripciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_suscripciones` (
  `codigo_usuario` INT NOT NULL,
  `codigo_suscriptor` INT NOT NULL,
  `codigo_carpeta` INT NOT NULL,
  `codigo_archivo` INT NOT NULL,
  `fecha_suscripcion` DATE NOT NULL,
  INDEX `fk_tbl_suscripciones_tbl_usuarios1_idx` (`codigo_usuario` ASC),
  UNIQUE INDEX `tbl_usuarios_codigo_usuario_UNIQUE` (`codigo_usuario` ASC),
  UNIQUE INDEX `tbl_usuarios_codigo_usuario1_UNIQUE` (`codigo_suscriptor` ASC),
  INDEX `fk_tbl_suscripciones_tbl_carpetas1_idx` (`codigo_carpeta` ASC),
  INDEX `fk_tbl_suscripciones_tbl_archivos1_idx` (`codigo_archivo` ASC),
  CONSTRAINT `fk_tbl_suscripciones_tbl_usuarios1`
    FOREIGN KEY (`codigo_usuario`)
    REFERENCES `mydb`.`tbl_usuarios` (`codigo_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_suscripciones_tbl_usuarios2`
    FOREIGN KEY (`codigo_suscriptor`)
    REFERENCES `mydb`.`tbl_usuarios` (`codigo_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_suscripciones_tbl_carpetas1`
    FOREIGN KEY (`codigo_carpeta`)
    REFERENCES `mydb`.`tbl_carpetas` (`codigo_carpeta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_suscripciones_tbl_archivos1`
    FOREIGN KEY (`codigo_archivo`)
    REFERENCES `mydb`.`tbl_archivos` (`codigo_archivo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_recientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_recientes` (
  `codigo_usuario` INT NOT NULL,
  `codigo_archivo` INT NOT NULL,
  `codigo_carpeta` INT NOT NULL,
  `fecha_visitado` DATE NOT NULL,
  INDEX `fk_tbl_recientes_tbl_usuarios1_idx` (`codigo_usuario` ASC),
  INDEX `fk_tbl_recientes_tbl_archivos1_idx` (`codigo_archivo` ASC),
  INDEX `fk_tbl_recientes_tbl_carpetas1_idx` (`codigo_carpeta` ASC),
  UNIQUE INDEX `codigo_usuario_UNIQUE` (`codigo_usuario` ASC),
  UNIQUE INDEX `codigo_archivo_UNIQUE` (`codigo_archivo` ASC),
  UNIQUE INDEX `codigo_carpeta_UNIQUE` (`codigo_carpeta` ASC),
  CONSTRAINT `fk_tbl_recientes_tbl_usuarios1`
    FOREIGN KEY (`codigo_usuario`)
    REFERENCES `mydb`.`tbl_usuarios` (`codigo_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_recientes_tbl_archivos1`
    FOREIGN KEY (`codigo_archivo`)
    REFERENCES `mydb`.`tbl_archivos` (`codigo_archivo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_recientes_tbl_carpetas1`
    FOREIGN KEY (`codigo_carpeta`)
    REFERENCES `mydb`.`tbl_carpetas` (`codigo_carpeta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_permisos_carpetas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_permisos_carpetas` (
  `codigo_permiso` INT NOT NULL,
  `codigo_usuario` INT NOT NULL,
  `codigo_carpeta` INT NOT NULL,
  INDEX `fk_tbl_permisos_carpetas_tbl_permisos1_idx` (`codigo_permiso` ASC),
  INDEX `fk_tbl_permisos_carpetas_tbl_usuarios1_idx` (`codigo_usuario` ASC),
  PRIMARY KEY (`codigo_permiso`, `codigo_usuario`, `codigo_carpeta`),
  INDEX `fk_tbl_permisos_carpetas_tbl_carpetas1_idx` (`codigo_carpeta` ASC),
  CONSTRAINT `fk_tbl_permisos_carpetas_tbl_permisos1`
    FOREIGN KEY (`codigo_permiso`)
    REFERENCES `mydb`.`tbl_permisos` (`codigo_permiso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_permisos_carpetas_tbl_usuarios1`
    FOREIGN KEY (`codigo_usuario`)
    REFERENCES `mydb`.`tbl_usuarios` (`codigo_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_permisos_carpetas_tbl_carpetas1`
    FOREIGN KEY (`codigo_carpeta`)
    REFERENCES `mydb`.`tbl_carpetas` (`codigo_carpeta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_favoritos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_favoritos` (
  `codigo_carpeta` INT NOT NULL,
  `codigo_usuario` INT NOT NULL,
  `codigo_archivo` INT NOT NULL,
  `fecha_registo` DATE NOT NULL,
  INDEX `fk_tbl_favoritos_tbl_carpetas1_idx` (`codigo_carpeta` ASC),
  INDEX `fk_tbl_favoritos_tbl_usuarios1_idx` (`codigo_usuario` ASC),
  INDEX `fk_tbl_favoritos_tbl_archivos1_idx` (`codigo_archivo` ASC),
  CONSTRAINT `fk_tbl_favoritos_tbl_carpetas1`
    FOREIGN KEY (`codigo_carpeta`)
    REFERENCES `mydb`.`tbl_carpetas` (`codigo_carpeta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_favoritos_tbl_usuarios1`
    FOREIGN KEY (`codigo_usuario`)
    REFERENCES `mydb`.`tbl_usuarios` (`codigo_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_favoritos_tbl_archivos1`
    FOREIGN KEY (`codigo_archivo`)
    REFERENCES `mydb`.`tbl_archivos` (`codigo_archivo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_archivos_x_carpetas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_archivos_x_carpetas` (
  `codigo_archivo` INT NOT NULL,
  `codigo_carpeta` INT NOT NULL,
  INDEX `fk_archivos_x_carpetas_tbl_archivos1_idx` (`codigo_archivo` ASC),
  INDEX `fk_archivos_x_carpetas_tbl_carpetas1_idx` (`codigo_carpeta` ASC),
  PRIMARY KEY (`codigo_archivo`, `codigo_carpeta`),
  CONSTRAINT `fk_archivos_x_carpetas_tbl_archivos1`
    FOREIGN KEY (`codigo_archivo`)
    REFERENCES `mydb`.`tbl_archivos` (`codigo_archivo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_archivos_x_carpetas_tbl_carpetas1`
    FOREIGN KEY (`codigo_carpeta`)
    REFERENCES `mydb`.`tbl_carpetas` (`codigo_carpeta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_papelera_archivos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_papelera_archivos` (
  `codigo_archivo` INT NOT NULL,
  `fecha_eliminado` DATE NOT NULL,
  INDEX `fk_tbl_papelera_archivos_tbl_archivos1_idx` (`codigo_archivo` ASC),
  PRIMARY KEY (`codigo_archivo`),
  CONSTRAINT `fk_tbl_papelera_archivos_tbl_archivos1`
    FOREIGN KEY (`codigo_archivo`)
    REFERENCES `mydb`.`tbl_archivos` (`codigo_archivo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_papelera_carpetas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_papelera_carpetas` (
  `codigo_carpeta` INT NOT NULL,
  `fecha_eliminado` DATE NOT NULL,
  INDEX `fk_tbl_papelera_carpetas_tbl_carpetas1_idx` (`codigo_carpeta` ASC),
  PRIMARY KEY (`codigo_carpeta`),
  CONSTRAINT `fk_tbl_papelera_carpetas_tbl_carpetas1`
    FOREIGN KEY (`codigo_carpeta`)
    REFERENCES `mydb`.`tbl_carpetas` (`codigo_carpeta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_hist_shares`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_hist_shares` (
  `codigo_carpeta` INT NOT NULL,
  `codigo_archivo` INT NOT NULL,
  `codigo_usuario` INT NOT NULL,
  `fecha_compartido` DATE NOT NULL,
  INDEX `fk_tbl_hist_shares_tbl_carpetas1_idx` (`codigo_carpeta` ASC),
  INDEX `fk_tbl_hist_shares_tbl_archivos1_idx` (`codigo_archivo` ASC),
  INDEX `fk_tbl_hist_shares_tbl_usuarios1_idx` (`codigo_usuario` ASC),
  UNIQUE INDEX `codigo_carpeta_UNIQUE` (`codigo_carpeta` ASC),
  UNIQUE INDEX `codigo_archivo_UNIQUE` (`codigo_archivo` ASC),
  UNIQUE INDEX `codigo_usuario_UNIQUE` (`codigo_usuario` ASC),
  CONSTRAINT `fk_tbl_hist_shares_tbl_carpetas1`
    FOREIGN KEY (`codigo_carpeta`)
    REFERENCES `mydb`.`tbl_carpetas` (`codigo_carpeta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_hist_shares_tbl_archivos1`
    FOREIGN KEY (`codigo_archivo`)
    REFERENCES `mydb`.`tbl_archivos` (`codigo_archivo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_hist_shares_tbl_usuarios1`
    FOREIGN KEY (`codigo_usuario`)
    REFERENCES `mydb`.`tbl_usuarios` (`codigo_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_hist_accesos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_hist_accesos` (
  `codigo_acceso` INT NOT NULL,
  `codigo_archivo` INT NOT NULL,
  `codigo_usuario` INT NOT NULL,
  `direccion_ip` VARCHAR(45) NULL,
  `fecha_acceso` DATE NULL,
  PRIMARY KEY (`codigo_acceso`),
  INDEX `fk_tbl_hist_accesos_tbl_archivos1_idx` (`codigo_archivo` ASC),
  INDEX `fk_tbl_hist_accesos_tbl_usuarios1_idx` (`codigo_usuario` ASC),
  CONSTRAINT `fk_tbl_hist_accesos_tbl_archivos1`
    FOREIGN KEY (`codigo_archivo`)
    REFERENCES `mydb`.`tbl_archivos` (`codigo_archivo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_hist_accesos_tbl_usuarios1`
    FOREIGN KEY (`codigo_usuario`)
    REFERENCES `mydb`.`tbl_usuarios` (`codigo_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_comentarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_comentarios` (
  `codigo_comentario` INT NOT NULL AUTO_INCREMENT,
  `codigo_usuario` INT NOT NULL,
  `codigo_archivo` INT NOT NULL,
  `codigo_comentario_padre` INT NULL,
  `comentario` VARCHAR(3000) NOT NULL,
  `fecha_publicacion` DATE NOT NULL,
  PRIMARY KEY (`codigo_comentario`),
  INDEX `fk_tbl_comentarios_tbl_usuarios1_idx` (`codigo_usuario` ASC),
  INDEX `fk_tbl_comentarios_tbl_archivos1_idx` (`codigo_archivo` ASC),
  INDEX `fk_tbl_comentarios_tbl_comentarios1_idx` (`codigo_comentario_padre` ASC),
  CONSTRAINT `fk_tbl_comentarios_tbl_usuarios1`
    FOREIGN KEY (`codigo_usuario`)
    REFERENCES `mydb`.`tbl_usuarios` (`codigo_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_comentarios_tbl_archivos1`
    FOREIGN KEY (`codigo_archivo`)
    REFERENCES `mydb`.`tbl_archivos` (`codigo_archivo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_comentarios_tbl_comentarios1`
    FOREIGN KEY (`codigo_comentario_padre`)
    REFERENCES `mydb`.`tbl_comentarios` (`codigo_comentario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_versiones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_versiones` (
  `codigo_version` INT NOT NULL AUTO_INCREMENT,
  `codigo_archivo` INT NOT NULL,
  `codigo_version_padre` INT NULL,
  `descripcion` VARCHAR(1000) NULL,
  `fecha_modificacion` DATE NOT NULL,
  PRIMARY KEY (`codigo_version`),
  INDEX `fk_tbl_versiones_tbl_archivos1_idx` (`codigo_archivo` ASC),
  INDEX `fk_tbl_versiones_tbl_versiones1_idx` (`codigo_version_padre` ASC),
  CONSTRAINT `fk_tbl_versiones_tbl_archivos1`
    FOREIGN KEY (`codigo_archivo`)
    REFERENCES `mydb`.`tbl_archivos` (`codigo_archivo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_versiones_tbl_versiones1`
    FOREIGN KEY (`codigo_version_padre`)
    REFERENCES `mydb`.`tbl_versiones` (`codigo_version`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_formularios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_formularios` (
  `codigo_formulario` INT NOT NULL AUTO_INCREMENT,
  `codigo_usuario` INT NOT NULL,
  `nombre_form` VARCHAR(100) NOT NULL,
  `fecha_creacion` DATE NULL,
  `descripcion` VARCHAR(3000) NOT NULL,
  PRIMARY KEY (`codigo_formulario`),
  INDEX `fk_tbl_formularios_tbl_usuarios1_idx` (`codigo_usuario` ASC),
  CONSTRAINT `fk_tbl_formularios_tbl_usuarios1`
    FOREIGN KEY (`codigo_usuario`)
    REFERENCES `mydb`.`tbl_usuarios` (`codigo_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_tipo_preguntas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_tipo_preguntas` (
  `codigo_tipo_pregunta` INT NOT NULL,
  `tipo_pregunta` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`codigo_tipo_pregunta`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_preguntas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_preguntas` (
  `codigo_pregunta` INT NOT NULL AUTO_INCREMENT,
  `codigo_formulario` INT NOT NULL,
  `codigo_tipo_pregunta` INT NOT NULL,
  `pregunta` VARCHAR(500) NOT NULL,
  `fecha_registro` DATE NOT NULL,
  PRIMARY KEY (`codigo_pregunta`),
  INDEX `fk_tbl_preguntas_tbl_formularios1_idx` (`codigo_formulario` ASC),
  INDEX `fk_tbl_preguntas_tbl_tipo_pregunta1_idx` (`codigo_tipo_pregunta` ASC),
  CONSTRAINT `fk_tbl_preguntas_tbl_formularios1`
    FOREIGN KEY (`codigo_formulario`)
    REFERENCES `mydb`.`tbl_formularios` (`codigo_formulario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_preguntas_tbl_tipo_pregunta1`
    FOREIGN KEY (`codigo_tipo_pregunta`)
    REFERENCES `mydb`.`tbl_tipo_preguntas` (`codigo_tipo_pregunta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_form_selects`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_form_selects` (
  `codigo_form_select` INT NOT NULL,
  `codigo_pregunta` INT NOT NULL,
  `contenido` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`codigo_form_select`),
  INDEX `fk_tbl_form_selects_tbl_preguntas1_idx` (`codigo_pregunta` ASC),
  CONSTRAINT `fk_tbl_form_selects_tbl_preguntas1`
    FOREIGN KEY (`codigo_pregunta`)
    REFERENCES `mydb`.`tbl_preguntas` (`codigo_pregunta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_form_radios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_form_radios` (
  `codigo_form_radio` INT NOT NULL,
  `codigo_pregunta` INT NOT NULL,
  `contenido` VARCHAR(45) NULL,
  PRIMARY KEY (`codigo_form_radio`),
  INDEX `fk_tbl_form_radios_tbl_preguntas1_idx` (`codigo_pregunta` ASC),
  CONSTRAINT `fk_tbl_form_radios_tbl_preguntas1`
    FOREIGN KEY (`codigo_pregunta`)
    REFERENCES `mydb`.`tbl_preguntas` (`codigo_pregunta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = '				';


-- -----------------------------------------------------
-- Table `mydb`.`tbl_respuestas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_respuestas` (
  `codigo_respuesta` INT NOT NULL AUTO_INCREMENT,
  `codigo_pregunta` INT NOT NULL,
  `codigo_form_select` INT NULL,
  `codigo_form_radio` INT NULL,
  `respuesta` VARCHAR(100) NOT NULL,
  `fecha_respuesta` DATE NOT NULL,
  PRIMARY KEY (`codigo_respuesta`),
  INDEX `fk_tbl_respuestas_tbl_preguntas1_idx` (`codigo_pregunta` ASC),
  INDEX `fk_tbl_respuestas_tbl_form_selects1_idx` (`codigo_form_select` ASC),
  INDEX `fk_tbl_respuestas_tbl_form_radios1_idx` (`codigo_form_radio` ASC),
  UNIQUE INDEX `codigo_pregunta_UNIQUE` (`codigo_pregunta` ASC),
  CONSTRAINT `fk_tbl_respuestas_tbl_preguntas1`
    FOREIGN KEY (`codigo_pregunta`)
    REFERENCES `mydb`.`tbl_preguntas` (`codigo_pregunta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_respuestas_tbl_form_selects1`
    FOREIGN KEY (`codigo_form_select`)
    REFERENCES `mydb`.`tbl_form_selects` (`codigo_form_select`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_respuestas_tbl_form_radios1`
    FOREIGN KEY (`codigo_form_radio`)
    REFERENCES `mydb`.`tbl_form_radios` (`codigo_form_radio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_form_checkbox`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_form_checkbox` (
  `codigo_form_checkbox` INT NOT NULL,
  `codigo_pregunta` INT NOT NULL,
  `contenido` VARCHAR(45) NULL,
  PRIMARY KEY (`codigo_form_checkbox`),
  INDEX `fk_tbl_form_checkbox_tbl_preguntas1_idx` (`codigo_pregunta` ASC),
  CONSTRAINT `fk_tbl_form_checkbox_tbl_preguntas1`
    FOREIGN KEY (`codigo_pregunta`)
    REFERENCES `mydb`.`tbl_preguntas` (`codigo_pregunta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tbl_resp_x_checkbox`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tbl_resp_x_checkbox` (
  `codigo_respuesta` INT NOT NULL,
  `codigo_form_checkbox` INT NOT NULL,
  PRIMARY KEY (`codigo_respuesta`, `codigo_form_checkbox`),
  INDEX `fk_tbl_respuestas_has_tbl_form_checkbox_tbl_form_checkbox1_idx` (`codigo_form_checkbox` ASC),
  INDEX `fk_tbl_respuestas_has_tbl_form_checkbox_tbl_respuestas1_idx` (`codigo_respuesta` ASC),
  CONSTRAINT `fk_tbl_respuestas_has_tbl_form_checkbox_tbl_respuestas1`
    FOREIGN KEY (`codigo_respuesta`)
    REFERENCES `mydb`.`tbl_respuestas` (`codigo_respuesta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_respuestas_has_tbl_form_checkbox_tbl_form_checkbox1`
    FOREIGN KEY (`codigo_form_checkbox`)
    REFERENCES `mydb`.`tbl_form_checkbox` (`codigo_form_checkbox`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
