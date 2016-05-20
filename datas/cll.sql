-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema cll
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema cll
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `cll` DEFAULT CHARACTER SET utf8 ;
USE `cll` ;

-- -----------------------------------------------------
-- Table `cll`.`utilisateur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cll`.`utilisateur` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `lenom` VARCHAR(100) NULL,
  `lemail` VARCHAR(150) NULL,
  `lepass` VARCHAR(150) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `lenom_UNIQUE` (`lenom` ASC),
  UNIQUE INDEX `lemail_UNIQUE` (`lemail` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cll`.`section`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cll`.`section` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `lenom` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cll`.`image`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cll`.`image` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `lurl` VARCHAR(505) NULL,
  `lalt` VARCHAR(305) NULL,
  `section_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_image_section1_idx` (`section_id` ASC),
  CONSTRAINT `fk_image_section1`
    FOREIGN KEY (`section_id`)
    REFERENCES `cll`.`section` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cll`.`langue`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cll`.`langue` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `lalangue` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cll`.`texte`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cll`.`texte` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(250) NULL,
  `ladesc` TEXT NULL,
  `langue_id` INT UNSIGNED NOT NULL,
  `utilisateur_id` INT UNSIGNED NOT NULL,
  `image_id` INT UNSIGNED NOT NULL,
  `section_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_texte_langue_idx` (`langue_id` ASC),
  INDEX `fk_texte_utilisateur1_idx` (`utilisateur_id` ASC),
  INDEX `fk_texte_image1_idx` (`image_id` ASC),
  INDEX `fk_texte_section1_idx` (`section_id` ASC),
  CONSTRAINT `fk_texte_langue`
    FOREIGN KEY (`langue_id`)
    REFERENCES `cll`.`langue` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_texte_utilisateur1`
    FOREIGN KEY (`utilisateur_id`)
    REFERENCES `cll`.`utilisateur` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_texte_image1`
    FOREIGN KEY (`image_id`)
    REFERENCES `cll`.`image` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_texte_section1`
    FOREIGN KEY (`section_id`)
    REFERENCES `cll`.`section` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
