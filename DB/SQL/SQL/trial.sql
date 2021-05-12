-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema traouve
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema traouve
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `traouve` ;
USE `traouve` ;

-- -----------------------------------------------------
-- Table `traouve`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `traouve`.`user` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(255) NOT NULL,
  `lastname` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `phone` VARCHAR(255) NULL,
  `picture` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `traouve`.`category`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `traouve`.`category` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `label` VARCHAR(255) NOT NULL,
  `icon` VARCHAR(255) NOT NULL,
  `color` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `traouve`.`state`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `traouve`.`state` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `label` VARCHAR(255) NOT NULL,
  `color` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `traouve`.`county`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `traouve`.`county` (
  `id` BIGINT NOT NULL,
  `label` VARCHAR(255) NOT NULL,
  `zipcode` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `traouve`.`traobject`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `traouve`.`traobject` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
  `picture` VARCHAR(255) NULL,
  `description` TEXT NULL,
  `event_at` DATETIME NOT NULL,
  `date_end` DATETIME NULL,
  `city` VARCHAR(255) NOT NULL,
  `address` VARCHAR(255) NULL,
  `created_at` DATETIME NOT NULL,
  `updated_at` DATETIME NULL,
  `category_id` BIGINT NOT NULL,
  `state_id` BIGINT NOT NULL,
  `user_id` BIGINT NOT NULL,
  `county_id` BIGINT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_traobject_category_idx` (`category_id` ASC) ,
  INDEX `fk_traobject_state1_idx` (`state_id` ASC) ,
  INDEX `fk_traobject_user1_idx` (`user_id` ASC) ,
  INDEX `fk_traobject_county1_idx` (`county_id` ASC) ,
  CONSTRAINT `fk_traobject_category`
    FOREIGN KEY (`category_id`)
    REFERENCES `traouve`.`category` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_traobject_state1`
    FOREIGN KEY (`state_id`)
    REFERENCES `traouve`.`state` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_traobject_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `traouve`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_traobject_county1`
    FOREIGN KEY (`county_id`)
    REFERENCES `traouve`.`county` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `traouve`.`comment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `traouve`.`comment` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `content` TEXT NOT NULL,
  `created_at` DATETIME NOT NULL,
  `user_id` BIGINT NOT NULL,
  `traobject_id` BIGINT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_comment_user1_idx` (`user_id` ASC) ,
  INDEX `fk_comment_traobject1_idx` (`traobject_id` ASC) ,
  CONSTRAINT `fk_comment_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `traouve`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_comment_traobject1`
    FOREIGN KEY (`traobject_id`)
    REFERENCES `traouve`.`traobject` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `traouve`.`message`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `traouve`.`message` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `content` VARCHAR(255) NOT NULL,
  `created_at` VARCHAR(255) NOT NULL,
  `user_form` BIGINT NOT NULL,
  `user_to` BIGINT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_message_user1_idx` (`user_form` ASC) ,
  INDEX `fk_message_user2_idx` (`user_to` ASC) ,
  CONSTRAINT `fk_message_user1`
    FOREIGN KEY (`user_form`)
    REFERENCES `traouve`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_message_user2`
    FOREIGN KEY (`user_to`)
    REFERENCES `traouve`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
