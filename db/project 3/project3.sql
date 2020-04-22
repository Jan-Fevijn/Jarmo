drop database if exists project3 ; 
 
 CREATE SCHEMA project3;
use project3;

drop table  if exists brood ;
CREATE TABLE `project3`.`brood` (
  `BroodID` INT NOT NULL AUTO_INCREMENT,
  `naamBrood` VARCHAR(45) NULL,
  datum datetime,
  broodNr int(5),
  typeBrood varchar(45),
  
  PRIMARY KEY (`BroodID`));
  
  
  
drop table  if exists persoon;
CREATE TABLE `project3`.`persoon` (
  `PersoonID` INT NOT NULL AUTO_INCREMENT,
  `naamPersoon` VARCHAR(45) NULL,
  `voornaamPersoon` varchar(45) Null,
  
PRIMARY KEY (`PersoonID`));


drop table  if exists transactie;
CREATE TABLE `project3`.`transactie` (
  `transactieID` INT NOT NULL AUTO_INCREMENT,
  `broodID` int(11) NULL,
  `persoonsID` int(11) NULL , 
  `datum` datetime,
PRIMARY KEY (`transactieID`));


drop table  if exists saldo;
CREATE TABLE `project3`.`saldo` (
  `saldoID` INT NOT NULL AUTO_INCREMENT,
  `PersoonID` int(11) NULL,
  `saldo` decimal(10.2) NULL , 
  `BroodID` int(8),
  datum datetime,
PRIMARY KEY (`saldoID`));





