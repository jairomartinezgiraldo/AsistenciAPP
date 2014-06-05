SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`cursos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`cursos` ;

CREATE TABLE IF NOT EXISTS `mydb`.`cursos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `nrc` VARCHAR(45) NULL,
  `cursocol` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `idcurso_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`estudiantes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`estudiantes` ;

CREATE TABLE IF NOT EXISTS `mydb`.`estudiantes` (
  `id` INT NOT NULL,
  `codigo` VARCHAR(45) NULL,
  `nombrel` VARCHAR(45) NULL,
  `apellido` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `idestudiante_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`profesores`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`profesores` ;

CREATE TABLE IF NOT EXISTS `mydb`.`profesores` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `codigo` VARCHAR(45) NULL,
  `nombre` VARCHAR(45) NULL,
  `profesorescol` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `idprofesores_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`grupos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`grupos` ;

CREATE TABLE IF NOT EXISTS `mydb`.`grupos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `profesores_id` INT NOT NULL,
  `cursos_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `idgrupos_UNIQUE` (`id` ASC),
  INDEX `fk_grupos_profesores1_idx` (`profesores_id` ASC),
  INDEX `fk_grupos_cursos1_idx` (`cursos_id` ASC),
  CONSTRAINT `fk_grupos_profesores1`
    FOREIGN KEY (`profesores_id`)
    REFERENCES `mydb`.`profesores` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_grupos_cursos1`
    FOREIGN KEY (`cursos_id`)
    REFERENCES `mydb`.`cursos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`estudiante_has_grupo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`estudiante_has_grupo` ;

CREATE TABLE IF NOT EXISTS `mydb`.`estudiante_has_grupo` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `estudiantes_id` INT NOT NULL,
  `grupos_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_estudiante_has_grupo_estudiantes1_idx` (`estudiantes_id` ASC),
  INDEX `fk_estudiante_has_grupo_grupos1_idx` (`grupos_id` ASC),
  CONSTRAINT `fk_estudiante_has_grupo_estudiantes1`
    FOREIGN KEY (`estudiantes_id`)
    REFERENCES `mydb`.`estudiantes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_estudiante_has_grupo_grupos1`
    FOREIGN KEY (`grupos_id`)
    REFERENCES `mydb`.`grupos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`asistencias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`asistencias` ;

CREATE TABLE IF NOT EXISTS `mydb`.`asistencias` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fecha` VARCHAR(45) NULL,
  `estudiante_has_grupo_id` INT NOT NULL,
  `Check` TINYINT(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `idasistencias_UNIQUE` (`id` ASC),
  INDEX `fk_asistencias_estudiante_has_grupo1_idx` (`estudiante_has_grupo_id` ASC),
  CONSTRAINT `fk_asistencias_estudiante_has_grupo1`
    FOREIGN KEY (`estudiante_has_grupo_id`)
    REFERENCES `mydb`.`estudiante_has_grupo` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
