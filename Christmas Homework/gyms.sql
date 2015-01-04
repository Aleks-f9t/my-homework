-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema gymstbl
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema gymstbl
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `gymstbl` DEFAULT CHARACTER SET utf8 ;
USE `gymstbl` ;

-- -----------------------------------------------------
-- Table `gymstbl`.`gyms`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gymstbl`.`gyms` (
  `GymID` INT(11) NOT NULL AUTO_INCREMENT,
  `Location` CHAR(127) NOT NULL,
  `SurfaceArea` FLOAT(10,2) NULL DEFAULT NULL,
  PRIMARY KEY (`GymID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gymstbl`.`customers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gymstbl`.`customers` (
  `CustomerID` INT(11) NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(127) NOT NULL,
  `Age` VARCHAR(127) NULL DEFAULT NULL,
  `Gender` ENUM('Male','Female') NULL DEFAULT NULL,
  `Gcard` DATE NOT NULL,
  `Edate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gyms_GymID` INT(11) NOT NULL,
  PRIMARY KEY (`CustomerID`),
  INDEX `fk_customers_gyms1_idx` (`gyms_GymID` ASC),
  UNIQUE INDEX `gyms_GymID_UNIQUE` (`gyms_GymID` ASC),
  CONSTRAINT `fk_customers_gyms1`
    FOREIGN KEY (`gyms_GymID`)
    REFERENCES `gymstbl`.`gyms` (`GymID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gymstbl`.`instructors`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gymstbl`.`instructors` (
  `InstructorID` INT(11) NOT NULL AUTO_INCREMENT,
  `Instructorname` VARCHAR(127) NOT NULL,
  PRIMARY KEY (`InstructorID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gymstbl`.`gyms_has_instructors`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gymstbl`.`gyms_has_instructors` (
  `gyms_GymID` INT(11) NOT NULL,
  `instructors_InstructorID` INT(11) NOT NULL,
  PRIMARY KEY (`gyms_GymID`, `instructors_InstructorID`),
  INDEX `fk_gyms_has_instructors_instructors1_idx` (`instructors_InstructorID` ASC),
  INDEX `fk_gyms_has_instructors_gyms_idx` (`gyms_GymID` ASC),
  CONSTRAINT `fk_gyms_has_instructors_gyms`
    FOREIGN KEY (`gyms_GymID`)
    REFERENCES `gymstbl`.`gyms` (`GymID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_gyms_has_instructors_instructors1`
    FOREIGN KEY (`instructors_InstructorID`)
    REFERENCES `gymstbl`.`instructors` (`InstructorID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
