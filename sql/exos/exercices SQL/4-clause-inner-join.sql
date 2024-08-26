/* La liste des employés (nom, prénom et fonction) et des bureaux (adresse et ville) dans lequel ils travaillent */
/* RESULTAT ==> 23 lignes / Diane Murphy */
SELECT  `employees`.`firstName`,  
        `employees`.`lastName`,  
        `employees`.`jobTitle`, 
        `offices`.`addressLine1`, 
        `offices`.`addressLine2`,
        `offices`.`postalCode`, 
        `offices`.`city`, 
        `offices`.`state`, 
        `offices`.`country`
FROM `employees`
JOIN `offices` ON  `offices`.`officeCode` = `employees`.`officeCode`
ORDER BY `employees`.`jobTitle`


/* La liste des clients français ou américains (nom du client, nom, prénom du contact et pays) et de leur commercial dédié (nom et prénom) triés par nom et prénom du contact */
/* RESULTAT ==> 48 lignes / Miguel Barajas */
SELECT  `customers`.`customerNumber`, 
        `customers`.`customerName`, 
        `customers`.`contactLastName`,
        `customers`.`contactFirstName`, 
        `customers`.`country`,
        `employees`.`lastName`, 
        `employees`.`firstName`
FROM `customers`
JOIN `employees` ON `employees`.`employeeNumber` = `customers`.`salesRepEmployeeNumber`
WHERE `country` IN ('France', 'USA')
ORDER BY `customers`.`contactLastName`, `customers`.`contactFirstName`;


/* La liste des lignes de commande (numéro de commande, code, nom et ligne de produit) et la remise appliquée aux voitures ou motos commandées triées par numéro de commande puis par remise décroissante */
/* RESULTAT ==> 2026 lignes / 34 */
