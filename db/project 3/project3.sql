drop database if exists project3;
CREATE DATABASE if not exists project3;

USE project3;

CREATE TABLE `klant` (
  `idklant` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(45) NOT NULL,
  `code` int(11) NOT NULL,
  PRIMARY KEY (`idklant`)
) ;

CREATE TABLE `broodtype` (
  `idbroodtype` int(11) NOT NULL AUTO_INCREMENT,
  `broodnaam` varchar(45) NOT NULL,
  PRIMARY KEY (`idbroodtype`)
) ;
CREATE TABLE `broodpositiedatum` (
  `idbroodpositieDatum` int(11) NOT NULL AUTO_INCREMENT,
  `idbrood` int(11) NOT NULL,
  `positie` int(11) NOT NULL,
  `Datum` date NOT NULL,
  `aantalIn` int(11) NOT NULL,
  `kostprijs` decimal(8,2) NOT NULL,
  PRIMARY KEY (`idbroodpositieDatum`),
  KEY `FKBestaandBrood` (`idbrood`),
  CONSTRAINT `FKBestaandBrood` FOREIGN KEY (`idbrood`) REFERENCES `broodtype` (`idbroodtype`)
);

CREATE TABLE `saldo` (
  `idsaldo` int(11) NOT NULL AUTO_INCREMENT,
  `idklant` int(11) NOT NULL,
  `saldo` decimal(8,2) DEFAULT NULL,
  `datum` date DEFAULT NULL,
  `broodpositiedatum` int(11) DEFAULT NULL,
  PRIMARY KEY (`idsaldo`),
  KEY `FKklantsaldo` (`idklant`),
  KEY `FKaankoop` (`broodpositiedatum`),
  CONSTRAINT `FKaankoop` FOREIGN KEY (`broodpositiedatum`) REFERENCES `broodpositiedatum` (`idbroodpositieDatum`),
  CONSTRAINT `FKklantsaldo` FOREIGN KEY (`idklant`) REFERENCES `klant` (`idklant`)
) ;


INSERT INTO `klant` (`naam`, `code`) VALUES ('jarmo', '987654321');
INSERT INTO `broodtype` (`broodnaam`) VALUES ('wit brood');
INSERT INTO `broodtype` (`broodnaam`) VALUES ('bruin brood');
INSERT INTO `broodpositiedatum` (`idbrood`,`positie`, `Datum`, `aantalIn`, `kostprijs`) VALUES ('1', '0', '0000-00-00', '0', '0.00');
INSERT INTO `broodpositiedatum` (`idbrood`, `positie`, `Datum`, `aantalIn`, `kostprijs`) VALUES ('2', '2', '2020-04-20', '8', '1.30');
INSERT INTO `broodpositiedatum` (`idbrood`, `positie`, `Datum`, `aantalIn`, `kostprijs`) VALUES ('2', '2', '2020-04-19', '8', '1.30');
INSERT INTO `saldo` (`idklant`, `saldo`, `datum`, `broodpositiedatum`) VALUES ('1', '-1.3', '2020-04-21', '2');
INSERT INTO `saldo` (`idklant`, `saldo`, `datum`, `broodpositiedatum`) VALUES ('1', '-1.3', '2020-04-21', '2');
INSERT INTO `saldo` (`idklant`, `saldo`, `datum`, `broodpositiedatum`) VALUES ('1', '20', '2020-04-18', '1');



