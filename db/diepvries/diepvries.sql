drop database if exists diepvriesInhoud;

create database diepvriesInhoud;

use diepvriesInhoud;


CREATE TABLE `inhoud` (
  `idinhoud` INT NOT NULL,
  `omschrijving` VARCHAR(45) NULL,
  `houdbaarsheidsdatum` DATE NULL,
  PRIMARY KEY (`idinhoud`));

CREATE TABLE `lade` (
  `idlade` INT NOT NULL,
  `omschrijvingLade` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idlade`));
  
CREATE TABLE `inhoudLade` (
`idInhoudLade` INT NOT NULL auto_increment,
`idlade` int not null ,
`idinhoud` int not null,
`gewicht` int not null,
`invriesdatum` varchar(45),
  PRIMARY KEY (`idInhoudLade`));


ALTER TABLE `inhoudLade` 
ADD CONSTRAINT `FK_inhoudinhoudlade`
  FOREIGN KEY (`idinhoud`)
  REFERENCES `inhoud` (`idInhoud`);

