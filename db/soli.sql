-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema solicitudes_externas
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema solicitudes_externas
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `solicitudes_externas` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `solicitudes_externas` ;

-- -----------------------------------------------------
-- Table `solicitudes_externas`.`Registro_actvidades`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `solicitudes_externas`.`Registro_actvidades` (
  `Numero_registro` INT NOT NULL COMMENT '',
  `fecha` DATE NULL COMMENT '',
  `numero_folios` VARCHAR(45) NULL COMMENT '',
  `clase_documento` VARCHAR(45) NULL COMMENT '',
  `procedencia_documento` VARCHAR(45) NULL COMMENT '',
  `asunto` VARCHAR(45) NULL COMMENT '',
  `revision` VARCHAR(45) NULL COMMENT '',
  `observaciones` VARCHAR(45) NULL COMMENT '',
  `fecha_recibida` VARCHAR(45) NULL COMMENT '',
  
 PRIMARY KEY (`Numero_registro`)  COMMENT '')
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
