-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema easyparking
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema easyparking
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `easyparking` DEFAULT CHARACTER SET latin1 ;
USE `easyparking` ;

-- -----------------------------------------------------
-- Table `easyparking`.`estado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `easyparking`.`estado` (
  `id_estado` INT(11) NOT NULL AUTO_INCREMENT,
  `sigla` CHAR(2) NOT NULL,
  PRIMARY KEY (`id_estado`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `easyparking`.`cidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `easyparking`.`cidade` (
  `id_cidade` INT(11) NOT NULL AUTO_INCREMENT,
  `nm_cidade` VARCHAR(30) NOT NULL,
  `id_estado` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_cidade`),
  INDEX `fk_id_estado` (`id_estado` ASC) ,
  CONSTRAINT `fk_id_estado`
    FOREIGN KEY (`id_estado`)
    REFERENCES `easyparking`.`estado` (`id_estado`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `easyparking`.`rua`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `easyparking`.`rua` (
  `id_rua` INT(11) NOT NULL AUTO_INCREMENT,
  `nm_rua` VARCHAR(30) NOT NULL,
  `qt_vaga` INT(5) NOT NULL,
  `id_cidade` INT(11) NOT NULL,
  PRIMARY KEY (`id_rua`),
  INDEX `fk_id_cidade` (`id_cidade` ASC) ,
  CONSTRAINT `fk_id_cidade`
    FOREIGN KEY (`id_cidade`)
    REFERENCES `easyparking`.`cidade` (`id_cidade`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `easyparking`.`vaga`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `easyparking`.`vaga` (
  `id_vaga` INT(11) NOT NULL AUTO_INCREMENT,
  `nr_vaga` INT(5) NOT NULL,
  `id_rua` INT(11) NOT NULL,
  PRIMARY KEY (`id_vaga`),
  INDEX `fk_id_vaga` (`id_rua` ASC) ,
  CONSTRAINT `fk_id_vaga`
    FOREIGN KEY (`id_rua`)
    REFERENCES `easyparking`.`rua` (`id_rua`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `easyparking`.`movimentacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `easyparking`.`movimentacao` (
  `id_movimentacao` INT(11) NOT NULL AUTO_INCREMENT,
  `id_vaga` INT(11) NOT NULL,
  `id_rua` INT(11) NOT NULL,
  `status` VARCHAR(1) NOT NULL DEFAULT 'L',
  PRIMARY KEY (`id_movimentacao`),
  INDEX `fk_id_movimentacao_vaga` (`id_vaga` ASC) ,
  INDEX `fk_id_movimentacao_rua` (`id_rua` ASC) ,
  CONSTRAINT `fk_id_movimentacao_rua`
    FOREIGN KEY (`id_rua`)
    REFERENCES `easyparking`.`rua` (`id_rua`),
  CONSTRAINT `fk_id_movimentacao_vaga`
    FOREIGN KEY (`id_vaga`)
    REFERENCES `easyparking`.`vaga` (`id_vaga`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
