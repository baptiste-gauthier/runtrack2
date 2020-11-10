SELECT MAX(capacite),etage.nom, salles.nom AS "Biggest Room"
FROM `etage` 
INNER JOIN `salles` ON etage.id = salles.id_etage 
