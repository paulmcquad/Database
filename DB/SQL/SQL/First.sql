-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema MathsTeam
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema MathsTeam
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `MathsTeam` ;
USE `MathsTeam` ;

-- -----------------------------------------------------
-- Table `MathsTeam`.`People`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MathsTeam`.`People` (
  `ID_People` INT NOT NULL AUTO_INCREMENT,
  `First Name` VARCHAR(45) NOT NULL,
  `Last Name` VARCHAR(45) NOT NULL,
  `YouTube Handle` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ID_People`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `MathsTeam`.`Company`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MathsTeam`.`Company` (
  `ID_Company` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `Company Name` VARCHAR(45) NOT NULL,
  `ID_People` INT NULL,
  PRIMARY KEY (`ID_Company`),
  INDEX `ID_People_idx` (`ID_People` ASC) VISIBLE,
  CONSTRAINT `ID_People`
    FOREIGN KEY (`ID_People`)
    REFERENCES `MathsTeam`.`People` (`ID_People`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
