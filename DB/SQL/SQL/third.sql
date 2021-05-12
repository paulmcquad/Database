-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema movies
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema movies
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `movies` ;
USE `movies` ;

-- -----------------------------------------------------
-- Table `movies`.`movies`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `movies`.`movies` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) NOT NULL,
  `year` INT NOT NULL,
  `image_url` VARCHAR(255) NOT NULL,
  `certificate` VARCHAR(45) NULL,
  `runtime` INT NULL,
  `imdb_rating` FLOAT NULL,
  `description` TEXT NULL,
  `metascore` INT NULL,
  `votes` INT NULL,
  `gross` INT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `title_UNIQUE` (`title` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `movies`.`directors`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `movies`.`directors` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `about` TEXT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `movies`.`stars`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `movies`.`stars` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `about` TEXT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `movies`.`genres`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `movies`.`genres` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `movies`.`movies_directors`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `movies`.`movies_directors` (
  `movies_id` INT NOT NULL,
  `directors_id` INT NOT NULL,
  PRIMARY KEY (`movies_id`, `directors_id`),
  INDEX `fk_movies_has_directors_directors1_idx` (`directors_id` ASC) ,
  INDEX `fk_movies_has_directors_movies_idx` (`movies_id` ASC) ,
  CONSTRAINT `fk_movies_has_directors_movies`
    FOREIGN KEY (`movies_id`)
    REFERENCES `movies`.`movies` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_movies_has_directors_directors1`
    FOREIGN KEY (`directors_id`)
    REFERENCES `movies`.`directors` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `movies`.`movies_stars`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `movies`.`movies_stars` (
  `movies_id` INT NOT NULL,
  `stars_id` INT NOT NULL,
  PRIMARY KEY (`movies_id`, `stars_id`),
  INDEX `fk_movies_has_stars_stars1_idx` (`stars_id` ASC) ,
  INDEX `fk_movies_has_stars_movies1_idx` (`movies_id` ASC) ,
  CONSTRAINT `fk_movies_has_stars_movies1`
    FOREIGN KEY (`movies_id`)
    REFERENCES `movies`.`movies` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_movies_has_stars_stars1`
    FOREIGN KEY (`stars_id`)
    REFERENCES `movies`.`stars` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `movies`.`movies_genres`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `movies`.`movies_genres` (
  `movies_id` INT NOT NULL,
  `genres_id` INT NOT NULL,
  PRIMARY KEY (`movies_id`, `genres_id`),
  INDEX `fk_movies_has_genres_genres1_idx` (`genres_id` ASC) ,
  INDEX `fk_movies_has_genres_movies1_idx` (`movies_id` ASC) ,
  CONSTRAINT `fk_movies_has_genres_movies1`
    FOREIGN KEY (`movies_id`)
    REFERENCES `movies`.`movies` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_movies_has_genres_genres1`
    FOREIGN KEY (`genres_id`)
    REFERENCES `movies`.`genres` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
