-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema pharmacytbl
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema pharmacytbl
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `pharmacytbl` DEFAULT CHARACTER SET utf8 ;
USE `pharmacytbl` ;

-- -----------------------------------------------------
-- Table `pharmacytbl`.`medicals`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pharmacytbl`.`medicals` (
  `MedicalID` INT(11) NOT NULL AUTO_INCREMENT,
  `Expiration date` DATE NOT NULL,
  `Distributor` VARCHAR(45) NOT NULL,
  `Stock` INT(11) NOT NULL,
  PRIMARY KEY (`MedicalID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pharmacytbl`.`pharmacists`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pharmacytbl`.`pharmacists` (
  `PharmacistID` INT(11) NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(45) NOT NULL,
  `Last name` VARCHAR(45) NOT NULL,
  `Gender` ENUM('Male','Female') NOT NULL,
  `PIN` VARCHAR(1023) NOT NULL,
  `Phone number` VARCHAR(1023) NOT NULL,
  `Age` INT(11) NOT NULL,
  `PharmacyID` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`PharmacistID`),
  UNIQUE INDEX `PharmacyID_UNIQUE` (`PharmacyID` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pharmacytbl`.`pharmacies`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pharmacytbl`.`pharmacies` (
  `PharmacyID` INT(11) NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(45) NOT NULL,
  `Address` VARCHAR(45) NOT NULL,
  `Pharmacists_PharmacistID` INT(11) NOT NULL,
  PRIMARY KEY (`PharmacyID`, `Pharmacists_PharmacistID`),
  INDEX `fk_Pharmacies_Pharmacists_idx` (`Pharmacists_PharmacistID` ASC),
  CONSTRAINT `fk_Pharmacies_Pharmacists`
    FOREIGN KEY (`Pharmacists_PharmacistID`)
    REFERENCES `pharmacytbl`.`pharmacists` (`PharmacistID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pharmacytbl`.`pharmacies_has_medicals`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pharmacytbl`.`pharmacies_has_medicals` (
  `Pharmacies_PharmacyID` INT(11) NOT NULL,
  `Pharmacies_Pharmacists_PharmacistID` INT(11) NOT NULL,
  `Medicals_MedicalID` INT(11) NOT NULL,
  PRIMARY KEY (`Pharmacies_PharmacyID`, `Pharmacies_Pharmacists_PharmacistID`, `Medicals_MedicalID`),
  INDEX `fk_Pharmacies_has_Medicals_Medicals1_idx` (`Medicals_MedicalID` ASC),
  INDEX `fk_Pharmacies_has_Medicals_Pharmacies1_idx` (`Pharmacies_PharmacyID` ASC, `Pharmacies_Pharmacists_PharmacistID` ASC),
  CONSTRAINT `fk_Pharmacies_has_Medicals_Medicals1`
    FOREIGN KEY (`Medicals_MedicalID`)
    REFERENCES `pharmacytbl`.`medicals` (`MedicalID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pharmacies_has_Medicals_Pharmacies1`
    FOREIGN KEY (`Pharmacies_PharmacyID` , `Pharmacies_Pharmacists_PharmacistID`)
    REFERENCES `pharmacytbl`.`pharmacies` (`PharmacyID` , `Pharmacists_PharmacistID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
