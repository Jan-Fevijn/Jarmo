drop database if exists eindwerk;


create database eindwerk;


use eindwerk;


CREATE TABLE `klas` (
  `idklas` INT NOT NULL AUTO_INCREMENT,
  `naamKlas` VARCHAR(45) NULL,
  PRIMARY KEY (`idklas`));


CREATE TABLE `leerkracht` (
  `leerkrachtenID` INT NOT NULL AUTO_INCREMENT,
  `naam` VARCHAR(45) NULL,
  `voornaam` VARCHAR(45) NULL,
  PRIMARY KEY (`leerkrachtenID`));



CREATE TABLE `leerling` (
  `leerlingID` INT NOT NULL AUTO_INCREMENT,
  `naamLeerling` VARCHAR(45) NULL,
  `voornaam` VARCHAR(45) NULL,
  `leerkrachtID` VARCHAR(45) NULL,
  `hoeveel_keer_telaat` VARCHAR(45) NULL,
  PRIMARY KEY (`leerlingID`));


CREATE TABLE `leerlingklas` (
  `leerlingKlasID` INT NOT NULL AUTO_INCREMENT,
  `leelingID` VARCHAR(45) NULL,
   `KlasID` VARCHAR(45) NULL,
  PRIMARY KEY (`leerlingKlasID`));

INSERT INTO `eindwerk`.`klas` (`naamKlas`) VALUES ('6ITN');
INSERT INTO `eindwerk`.`leerkracht` (`naam`, `voornaam`) VALUES ('de kesel', 'Hannes');
INSERT INTO `eindwerk`.`leerling` (`naamLeerling`, `voornaam`, `leerkrachtID`, `hoeveel_keer_telaat`) VALUES ('van moeffaert', 'jarmo', '1', '0');
INSERT INTO `eindwerk`.`leerlingklas` (`leelingID`, `KlasID`) VALUES ('1', '1');


ALTER TABLE `eindwerk`.`leerlingklas` 
CHANGE COLUMN `leelingID` `leerlingID` VARCHAR(45) NULL DEFAULT NULL ;

