/* La liste des bureaux (adresse et ville) triés par pays décroissant puis par état */
/* RESULTAT ==> 7 lignes / 100 Market Street */
SELECT  `offices`.`addressLine1`, 
        `offices`.`addressLine2`, 
        `offices`.`postalCode`, 
        `offices`.`city`, 
        `offices`.`state`, 
        `offices`.`country`
FROM `offices`
ORDER BY `offices`.`country` DESC, `offices`.`state`;