


create view alleinfoverrichtingen as 
select bedrag,datum,persoon.idpersoon,omschrijving,naam,voornaam from ( verrichting 
join typeverrichting on typeverrichting.idtypeVerrichting = verrichting.idtypeVerrichting)
join persoon on persoon.idpersoon = verrichting.idpersoon;



