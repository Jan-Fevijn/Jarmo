drop database if exists eindwerk;

create database if not exists eindwerk;

use eindwerk;

drop table  if exists klas ;
CREATE TABLE `eindwerk`.`klas` (
  `idklas` INT NOT NULL AUTO_INCREMENT,
  `naamKlas` VARCHAR(45) NULL,
  PRIMARY KEY (`idklas`));
  
  
  
drop table  if exists leerling;
CREATE TABLE `eindwerk`.`leerling` (
  `leerlingID` INT NOT NULL AUTO_INCREMENT,
  `naamLeerling` VARCHAR(45) NULL,
PRIMARY KEY (`leerlingID`));


drop table  if exists leerlingKlas;
CREATE TABLE `eindwerk`.`leerlingKlas` (
  `leerlingKlasID` INT NOT NULL AUTO_INCREMENT,
  `leelingID` int(11) NULL,
  `KlasID` int(11) NULL , 
PRIMARY KEY (`leerlingKlasID`));


drop table  if exists leerkrachten;
CREATE TABLE `eindwerk`.`leerkrachten` (
  `leerkrachtenID` INT NOT NULL AUTO_INCREMENT,
  `naam` varchar(45) NULL,
  `voornaam` varchar(45) NULL , 
PRIMARY KEY (`leerkrachtenID`));



