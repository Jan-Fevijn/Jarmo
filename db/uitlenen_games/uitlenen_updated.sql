drop database if exists uitleen_games;


create database uitleen_games;


use uitleen_games;


CREATE TABLE `uitleen_games`.`info_uitlenen` (
  `idinfo_uitlenen` INT NOT NULL AUTO_INCREMENT,
  `naam_uitlener` VARCHAR(45) NULL,
  `uitleen_datum` date null,
  datum_teruggave date null,
  `naam_game` varchar(45) not null,
  PRIMARY KEY (`idinfo_uitlenen`));


CREATE TABLE `uitleen_games`.`info_games` (
  `idinfo_games` INT NOT NULL AUTO_INCREMENT,
  `game_naam` VARCHAR(45) NULL,
  `game_omschrijving` VARCHAR(45) NULL,
  uitgevers varchar(45),
  `uitgeleend` varchar(45) Default 'niet uitgeleend',
  `nonactief` int(1) default '0',
  PRIMARY KEY (`idinfo_games`));




CREATE TABLE `uitleen_games`.`info_uitlener` (
  `idinfo_uitlener` INT NOT NULL AUTO_INCREMENT,
  `naam` VARCHAR(45) NULL,
  `voornaam` VARCHAR(45) NULL,
  `telefoon` VARCHAR(45) NULL,
  `adres` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  PRIMARY KEY (`idinfo_uitlener`));


CREATE TABLE `uitleen_games`.`genre` (
  `idgenre` INT NOT NULL AUTO_INCREMENT,
  `naam` VARCHAR(45) NULL,
  PRIMARY KEY (`idgenre`));


CREATE TABLE `uitleen_games`.`koppeltablegenre` (
  `idkoppeltablegenre` INT NOT NULL AUTO_INCREMENT,
  `info_games` VARCHAR(45) NULL,
  `genre` VARCHAR(45) NULL,
  PRIMARY KEY (`idkoppeltablegenre`));

