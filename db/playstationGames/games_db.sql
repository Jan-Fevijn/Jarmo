drop database if exists playstationGames;

create database playstationGames;

use playstationGames;

CREATE TABLE `playstationgames`.`playstationgames` (
  `idPlaystationGames` INT NOT NULL AUTO_INCREMENT,
  `naam_game` VARCHAR(45) NULL,
  `uitgever` VARCHAR(45) NULL,
  `type_game` VARCHAR(45) NULL,
  `korte_inhoud` VARCHAR(200) NOT NULL,
  `aankoopDatum` DATE NULL,
  PRIMARY KEY (`idPlaystationGames`),
  UNIQUE INDEX `idPlaystationGames_UNIQUE` (`idPlaystationGames` ASC));

