drop database if exists babylijst;

create database if not exists babylijst;

use babylijst;
  
  CREATE TABLE `babylijst` (
  `idbabylijst` varchar(8) NOT NULL ,
  `naam_babylijst` VARCHAR(45) NULL,
  `idproduct` int not null,
  PRIMARY KEY (`idbabylijst`));

create table `product` (
`idproduct` int not null, 
  `product` varchar(45),
  `prijs` varchar(45),
  `verkocht` varchar(45) not null ,
primary key(`idproduct`)
);





