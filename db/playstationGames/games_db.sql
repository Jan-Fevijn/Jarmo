drop database if exists playstationGames;

create database playstationGames;

use playstationGames;

CREATE TABLE `playstationgames`.`playstationgames` (
  `idPlaystationGames` INT NOT NULL AUTO_INCREMENT,
  `naam_game` VARCHAR(45) NULL,
  `type_game` VARCHAR(45) NULL,
  `korte_inhoud` VARCHAR(200) NOT NULL,
  `aankoopDatum` DATE NULL,
  PRIMARY KEY (`idPlaystationGames`),
  UNIQUE INDEX `idPlaystationGames_UNIQUE` (`idPlaystationGames` ASC));

CREATE TABLE `playstationgames`.`uitgever` (
  `iduitgever` INT NOT NULL AUTO_INCREMENT,
  `naam_uitgever` VARCHAR(45) NULL,
  PRIMARY KEY (`iduitgever`));


CREATE TABLE `playstationgames`.`eigenschappen` (
  `idEigenschappen` INT NOT NULL AUTO_INCREMENT,
  `naam_eigenschap` VARCHAR(45) NULL,
  `type_eigenschap` VARCHAR(45) NULL,
  PRIMARY KEY (`idEigenschappen`),
  UNIQUE INDEX `idEigenschappen_UNIQUE` (`idEigenschappen` ASC));
  
  
  
CREATE TABLE `playstationgames`.`koppel_eigenschapGame` (
  `idkoppel_eigenschapGame` INT NOT NULL AUTO_INCREMENT,
  `idPlaystationGames` VARCHAR(45) NULL,
  `iduitgever` VARCHAR(45) NULL,
  `idEigenschappen` VARCHAR(45) NULL,
  PRIMARY KEY (`idkoppel_eigenschapGame`),
  UNIQUE INDEX `idkoppel_eigenschapGame_UNIQUE` (`idkoppel_eigenschapGame` ASC))  
  
  
  