
drop view if exists info_leerkracht;

create view info_leerkracht as 
select leerlingKlasID,naam,voornaam,klas.naamKlas,leerling.naamLeerling ,leelingID,leerlingID,leerkrachten.leerkrachtenID as idleerkracht,leerlingklas.leerkrachtenID,idklas from ( leerlingklas
join leerling on leerling.leerlingID = leerlingklas.leelingID
join leerkrachten on leerkrachten.leerkrachtenID = leerlingklas.leerkrachtenID)
join klas on klas.idKlas = leerlingklas.KlasID;