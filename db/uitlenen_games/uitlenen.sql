drop database if exists uitleen_games;

create database uitleen_games;

use uitleen_games;


CREATE TABLE `uitleen_games`.`info_uitlenen` (
  `idinfo_uitlenen` INT NOT NULL AUTO_INCREMENT,
  `naam_uitlener` VARCHAR(45) NOT NULL,
  `Datum_uitgeleend` DATE NULL,
  PRIMARY KEY (`idinfo_uitlenen`));
