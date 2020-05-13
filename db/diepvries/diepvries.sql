drop database if exists diepvriesInhoud;

create database diepvriesInhoud;

use diepvriesInhoud;


CREATE TABLE `diepvriesinhoud`.`producten` (
  `idproducten` INT NOT NULL,
  `naamProduct` VARCHAR(45) NULL,
  `datum` DATE NULL,
  `productlade` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idproducten`));


