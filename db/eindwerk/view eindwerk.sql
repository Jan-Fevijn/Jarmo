
drop view if exists info_leerkracht;

create view info_leerkracht as 
select leerlingKlasID ,naamKlas ,leerling.naamLeerling  from ( leerlingklas
join leerling on leerlingklas.leelingID = leerling.leerlingID)
join klas on leerlingklas.KlasID = klas.idklas;