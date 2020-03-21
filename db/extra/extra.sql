drop database if exists extra;

create database if not exists extra;

use extra;

drop table  if exists klas ;
CREATE TABLE `extra`.`klas` (
  `idklas` INT NOT NULL AUTO_INCREMENT,
  `naamKlas` VARCHAR(45) NULL,
  `leerlingID` VARCHAR(45) NULL,
  PRIMARY KEY (`idklas`));
  
  
  
drop table  if exists leerling;
CREATE TABLE `extra`.`leerling` (
  `leerlingID` INT NOT NULL AUTO_INCREMENT,
  `naamLeerling` VARCHAR(45) NULL,
PRIMARY KEY (`leerlingID`));


drop table  if exists leerlingKlas;
CREATE TABLE `extra`.`leerlingKlas` (
  `leerlingKlasID` INT NOT NULL AUTO_INCREMENT,
  `leelingID` int(11) NULL,
  `KlasID` int(11) NULL , 
PRIMARY KEY (`leerlingKlasID`));