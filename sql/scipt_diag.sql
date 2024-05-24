-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema stock_db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema stock_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `stock_db` DEFAULT CHARACTER SET utf8 ;
USE `stock_db` ;

-- -----------------------------------------------------
-- Table `stock_db`.`produit`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `stock_db`.`produit` ;

CREATE TABLE IF NOT EXISTS `stock_db`.`produit` (
  `codeproduit` VARCHAR(10) NOT NULL,
  `nomprod` VARCHAR(100) NULL,
  `prix` INT(11) NULL,
  `cpa` INT(10) NULL,
  `taux de possession` FLOAT NULL,
  `Quantite anuelle` INT(10) NULL,
  PRIMARY KEY (`codeproduit`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `stock_db`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `stock_db`.`user` ;

CREATE TABLE IF NOT EXISTS `stock_db`.`user` (
  `userID` INT(11) NOT NULL AUTO_INCREMENT,
  `fullName` VARCHAR(255) NULL,
  `username` VARCHAR(255) NULL,
  `password` VARCHAR(255) NULL,
  `status` VARCHAR(45) NULL,
  PRIMARY KEY (`userID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `stock_db`.`mouvement`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `stock_db`.`mouvement` ;

CREATE TABLE IF NOT EXISTS `stock_db`.`mouvement` (
  `idmv` INT(11) NOT NULL,
  `quantite` INT(11) NULL,
  `nature` VARCHAR(20) NULL,
  `date` VARCHAR(10) NULL,
  `codeproduit` VARCHAR(10) NOT NULL,
  `userID` INT(11) NOT NULL,
  PRIMARY KEY (`idmv`, `codeproduit`, `userID`),
  INDEX `fk_mouvement_produit_idx` (`codeproduit` ASC) ,
  INDEX `fk_mouvement_user1_idx` (`userID` ASC) ,
  CONSTRAINT `fk_mouvement_produit`
    FOREIGN KEY (`codeproduit`)
    REFERENCES `stock_db`.`produit` (`codeproduit`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_mouvement_user1`
    FOREIGN KEY (`userID`)
    REFERENCES `stock_db`.`user` (`userID`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
