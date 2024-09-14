/* La liste des motos (nom, vendeur, quantité et marge) triés par marge décroissante */
/* RESULTAT ==> 13 lignes / 2003 Harley-Davidson Eagle Drag Bike */
SELECT 	`productCode`, 
		`productName`, 
		`productVendor`, 
		`quantityInStock`, 
		ROUND(`MSRP` - `buyPrice`, 2)
FROM `products` 
WHERE `productLine` = 'Motorcycles' 
ORDER BY ROUND(`MSRP` - `buyPrice`, 2) DESC;


/* La liste des commandes (numéro, date de commande, date d'expédition, 
écart en jours entre les deux dates et statut) qui sont en cours de 
traitement ou qui ont été expédiées et ont un écart de plus de 10j triés 
par écart décroissant puis par date de commande */
/* RESULTAT ==> 7  lignes / commande 10165 */
SELECT  `orderNumber`, 
		`orderDate`, 
		`shippedDate`,
		DATEDIFF(`shippedDate`, `orderDate`) AS `ecart`, 
		`status`
FROM `orders` 
WHERE `status` = 'In Process' OR (`status` = 'Shipped' AND DATEDIFF(`shippedDate`, `orderDate`) >= 10)
ORDER BY `ecart` DESC, `orderDate` ASC;
/* OU */
SELECT  `orderNumber`, 
		`orderDate`, 
		`shippedDate`,
		DATEDIFF(`shippedDate`, `orderDate`) AS `ecart`, 
		`status`
FROM `orders` 
HAVING `status` = 'In Process' OR (`status` = 'Shipped' AND `ecart` >= 10)
ORDER BY `ecart` DESC, `orderDate` ASC;


/*La liste des produits (nom et valeur du stock à la vente) des années 1960 */
/* RESULTAT ==> 16 lignes / 1969 Harley Davidson Ultimate Chopper */
SELECT `productName`, ROUND(`quantityInStock` * `MSRP`, 2) AS `stockValue`
FROM `products`
WHERE `productName` LIKE '196%'
ORDER BY `productName` ASC;