-- COURS MYSQL

1 - Définition SQL : (Structured Query Language)
    https://sql.sh/
    
    Les bases de donnée : 
    Elle permet de stocker des donnée et de les exploiter, c’est un site dynamique

    On a besoin d’un SGBD ( Système de Gestion d’une base de données )

    A quoi sert une BDD ?
    Elle permet à un site d’etre dynamique mais aussi conserver les informations cliens
    4 Actions/Requettes ( Query ):
        - Afficher ( Select )
        - Ajouter ( Insert into )
        - Modifier ( Update )
        - Supprime ( Delete )

    Dans le back office, on retrouve des CRUD
    C => CREATE
    R => READ
    U => UPDATE
    D => DELETE

    Front office : ( J’affiche la base de donnée )

    Back office : ( Je manipule la base de donnée )
    CRUD => 
    Créer le CRUD des produits, afficher les produits que l’administrateur peux CRUD depuis la base de données

    Base de donnée : ( Je crée la base de donnée )
    Table Produits => Rajouter/Lister les produits

    Serveur local :
    XAMPP  (WINDOWS)
    WAMP   (WINDOWS)
    MAMP   (MAC)
    LAMP   (LINUX)

3 - LES TABLES
    
    Une base de données (BDD/DB) est composée de tables
    une table contient des champs / colonnes 

    un champ a au minimum un nom, un type et s il est null
    les types :
	    - VARCHAR    (limitation à 255 caractères) exemple : email, nom, prenom etc....
        - TEXT       exemple : description, un long texte
        - BOOLEAN    2 valeurs possibles : FALSE (0) et TRUE (1) Exemple : Activé Désactivé
        - INT (integer) nombre entier, exemple : stock
        - FLOAT/DOUBLE nombre décimal, exemple : prix
        - date (YYYY-mm-dd) exemple 1999-02-21
        - time (HH:ii:ss) 17:59:32
        - datetime (YYYY-mm-dd HH:ii:ss)
        - ENUM énumérer des valeurs, Exemple pour le sexe valeurs : 'homme' ou 'femme'
    

    Chaque table doit avoir sa clé primaire (Primary Key : PK) 
    on l appelle généralement "id" de type INT
    Il faut cocher la checkbox A_I (Auto_increment), automatiquement la clé primaire sera saisie

3 - INSTALATION DU SERVEUR 
    XAMPP  (WINDOWS)
    https://www.apachefriends.org/

    Xampp est à la racine du disque dur C
    Xampp est à la racine du disque dur C

    - Un serveur s allume
    - Dans le dossier htdocs, on place les projets PHP
    - Sur la pop up Control Panel, il faut allumer les modules Apache et Mysql

    Pour accéder à l interface PhpMyAdmin il faut cliquer sur le bouton Admin du module MySql

4 - GESTION DU TERMINAL
    -- Les élements dans un tableau () sont séparés par une VIRGULE, autrement dit apres le dernier élément d'un tableau, il n'y a pas de virgule
    -- Toute ligne de commande se termine obligatoirement pas un POINT VIRGULE

    -- Acceder au terminal =
    Accéder au Shell situé sur Control Panel
    Vous êtes situés à la racine du dossier xampp
    Pour accéder à PhpMyAdmin saisir la ligne de commande suivante :
    mysql -u root

    -- Dans le terminal, nous sommes situés à la racine des bases de données

    -- Afficher toutes les bases de données =
      SHOW DATABASES;

    -- Créer la base de donnée
        CREATE DATABASE vitrine;

    -- Acceder à la base de donnée vitrine
        USE vitrine;

    -- Créer une table
        CREATE TABLE user(
        email VARCHAR(255) NOT NULL,
        nom VARCHAR(255) NOT NULL,
        );

    -- Description (details) de la table
        DESC user;

    -- LES CHANGEMENT (ALTER)

        -- Rajouter une colonne
            ALTER TABLE user ADD prenom VARCHAR(255) NOT NULL; ou ALTER TABLE user ADD prenom VARCHAR(255) NOT NULL,ALTER TABLE user ADD prenom VARCHAR(255) NOT NULL; pour plusieurs commandes

        -- Suprimmer la colonne email
            ALTER TABLE user DROP email;
        
        -- Transformer le nom en age
            ALTER TABLE user CHANGE nom age INT NOT NULL;
        
        -- Modifier uniquement le type
            ALTER TABLE user MODIFY prenom INT NOT NULL;

    -- LES SUPRESSIONS
        
        -- Vider
            TRUNCATE user;

        -- Supprimer la table user
            DROP TABLE user;

        -- Suprimer la base de donnée
            DROP DATABASE vitrine;

    -- LES REQUETES
        4 requettes :
            - SELECT 
            - INSERT INTO
            - UPDATE
            - DELETE

        -- SELECT
                La requete SELECT permet de récupérer un jeu de résultats
                SELECT nom du champs qu on souhaite recuperer FROM nom de la table
                    SELECT prenom FROM employes; = afficher le prenom de tous les employes
                    SELECT prenom, nom FROM employes; = afficher le prenom et le nom de tous les employes
                    SELECT * FROM employes; = afficher toutes les colonnes

                WHERE 
                    C est la précision, en fr : "lorsque que"
                    SELECT prenom,nom FROM employes WHERE sexe = 'f'; -- afficher le prenom et le nom des employees
                    SELECT prenom,nom FROM employes WHERE id_employes = 802; -- Comment s appelle l employe N*802

                DISTINCT
                    SELECT DISTINCT service from employes; -- afficher le nom des services
                    DISTINCT + nom du champ => evite les doublons
                    SELECT DISTINCT service FROM employes; -- afficher le nom des service
                
                BETWEEN ** AND **
                    SELECT * FROM employes WHERE salaire BETWEEN 1800 AND 2300; -- afficher toutes les infos des employes ayant un salire entre 1800 et 2300

                LIKE 
                    SELECT prenom FROM employes WHERE prenom LIKE 'a%'; -- afficher les prenom dans la table employes ou le prenom commence par a
                    a% = qui commence par a
                    %a = qui se termine par a
                    %a% = qui contient la lettre a
                    a%a = qui commence et se termine par a
                    Inverse de LIKE = NOT LIKE

            -- LES OPERATEURS

                -- (>) = Strictement supérieur à
                -- (>=) = Supérieur ou égal à
                -- (<) = Strictement inférieur à
                -- (<=) = Inférieur ou égal à
                -- AND = Et
                -- OR = Ou
                SELECT * FROM employes WHERE service = 'commercial' AND salaire <= 2000; = Afficher les commerciaux gagnant un salaire inférieur ou egal a 2000 euros
                SELECT * FROM employes WHERE service = 'commercial' OR salaire <= 2000; = Afficher les commerciaux et les employes gagnant un salaire inferieur ou egal a 2000 euros

                -- ( = ) = Affectation, égal à (1 valeur)
                SELECT * FROM employes WHERE service = 'commercial'; = afficher les commerciaux

                -- ( != ) = Différent de (1 valeur)
                -- ( <> ) = Différent de (1 valeur)
                SELECT * FROM employes WHERE service != 'commercial'; = afficher les employes qui ne sont pas des commerciaux

                -- IN() = Affectation, égal à (1 ou plusieurs valeurs)
                -- NOT IN() = Différent de (1 ou plusieurs valeurs)
                    SELECT * FROM employes WHERE service IN('commercial', 'informatique' ) -- afficher les commerciaux et les informaticiens
                    SELECT * FROM employes WHERE service NOT IN('commercial', 'informatique') -- afficherr les employes qui ne sont pas des commerciaux ou des informaticiens

            -- ORDONNANCE
                Si on utilise ORDER BY c est que l on souhaite trier dans un sens ou dans l autre

                ORDER BY nom du champ sens (ASC-endant et DESC-endant) -- toujours en ASC de base
                SELECT prenom FROM employes ORDER BY prenom ASC; -- afficher les prenom des employees par ordre alphabetique 
                SELECT nom FROM employes ORDER BY nom DESC; -- Afficher les noms des employes par ordre alphabetique de Z a A
                SELECT * FROM employes ORDER BY service, nom; -- Afficher les employes par odre alphabetique entre chaque service

            -- LIMITATION

                - LIMIT position , quantité ( integers )
                ( 'fraise', 'pomme', 'kiwi', 'banane')
                    0         1       2        3  
                Dans un tableau, la premiere position est 0 et ce sont des nombres entiers

                SELECT * FROM employes ORDER BY salaire LIMIT 0,1; -- afficher l'employe qui gagne le moins
                SELECT * FROM employes ORDER BY salaire LIMIT 1; -- afficher l'employe qui gagne le moins
                SELECT * FROM employes ORDER BY salaire DESC LIMIT 5;-- afficher les 5 employes qui gagne le plus
                SELECT * FROM employes WHERE service IN('commercial') ORDER BY salaire LIMIT 2;-- afficher les deux commerciaux qui gagne le moins

                GROUP BY permet de regrouper une valeur
                SELECT service, COUNT(*) FROM employes GROUP BY service;-- Afficher le nombre d employes par service
                +---------------+----------+
                | service       | COUNT(*) |
                +---------------+----------+
                | assistant     |        1 |
                | commercial    |        6 |
                | communication |        1 |
                | comptabilite  |        1 |
                | direction     |        2 |
                | informatique  |        3 |
                | juridique     |        1 |
                | production    |        2 |
                | secretariat   |        3 |
                +---------------+----------+
                


            -- EXCERCICE

                SELECT service FROM employes WHERE id_employes = 547;-- Afficher la profession de l'employe 547 = Commercial
                +------------+
                | service    |
                +------------+
                | commercial |
                +------------+

                SELECT date_embauche FROM employes WHERE prenom = 'amandine'; -- Afficher la date d'embauche d'Amandine = 2014-01-23
                +---------------+
                | date_embauche |
                +---------------+
                | 2014-01-23    |
                +---------------+

                SELECT nom FROM employes WHERE prenom = 'guillaume';-- Afficher le nom de famille de Guillaume = MILLER
                +--------+
                | nom    |
                +--------+
                | Miller |
                +--------+

                SELECT * FROM employes ORDER BY nom ASC LIMIT 0,5; -- Afficher les 5 premiers employés aprés avoir classer leur nom de famille par ordre alphabétique
                +-------------+---------+----------+------+--------------+---------------+---------+
                | id_employes | prenom  | nom      | sexe | service      | date_embauche | salaire |
                +-------------+---------+----------+------+--------------+---------------+---------+
                |         592 | Laura   | Blanchet | f    | direction    | 2012-05-09    |    4500 |
                |         854 | Daniel  | Chevel   | m    | informatique | 2015-09-28    |    3100 |
                |         547 | Melanie | Collier  | f    | commercial   | 2012-01-08    |    3100 |
                |         699 | Julien  | Cottet   | m    | secretariat  | 2013-01-05    |    1390 |
                |         739 | Thierry | Desprez  | m    | secretariat  | 2013-07-17    |    1500 |
                +-------------+---------+----------+------+--------------+---------------+---------+

                SELECT * FROM employes WHERE service NOT IN ('production', 'secretariat') ORDER BY service; -- Afficher tous les employés (sauf ceux du service production et secrétariat)
                +-------------+-------------+----------+------+---------------+---------------+---------+
                | id_employes | prenom      | nom      | sexe | service       | date_embauche | salaire |
                +-------------+-------------+----------+------+---------------+---------------+---------+
                |         990 | Stephanie   | Lafaye   | f    | assistant     | 2017-03-01    |    1775 |
                |         933 | Emilie      | Sennard  | f    | commercial    | 2017-01-11    |    1800 |
                |         655 | Celine      | Perrin   | f    | commercial    | 2012-09-10    |    2700 |
                |         627 | Guillaume   | Miller   | m    | commercial    | 2012-07-02    |    1900 |
                |         547 | Melanie     | Collier  | f    | commercial    | 2012-01-08    |    3100 |
                |         415 | Thomas      | Winter   | m    | commercial    | 2011-05-03    |    3550 |
                |         388 | Clement     | Gallet   | m    | commercial    | 2010-12-15    |    2300 |
                |         780 | Amandine    | Thoyer   | f    | communication | 2014-01-23    |    2100 |
                |         509 | Fabrice     | Grand    | m    | comptabilite  | 2011-12-30    |    2900 |
                |         592 | Laura       | Blanchet | f    | direction     | 2012-05-09    |    4500 |
                |         350 | Jean-pierre | Laborde  | m    | direction     | 2010-12-09    |    5000 |
                |         854 | Daniel      | Chevel   | m    | informatique  | 2015-09-28    |    3100 |
                |         701 | Mathieu     | Vignal   | m    | informatique  | 2013-04-03    |    2500 |
                |         802 | Damien      | Durand   | m    | informatique  | 2014-07-05    |    2250 |
                |         876 | Nathalie    | Martin   | f    | juridique     | 2016-01-12    |    3550 |
                +-------------+-------------+----------+------+---------------+---------------+---------+

                SELECT * FROM employes WHERE service = 'commercial' AND sexe = 'm' AND date_embauche < '2012-01-01' AND salaire > 2500; -- Afficher les commerciaux ayant été recruté avant 2012 de sexe masculin et gagnant un salaire supérieur à 2500€
                +-------------+--------+--------+------+------------+---------------+---------+
                | id_employes | prenom | nom    | sexe | service    | date_embauche | salaire |
                +-------------+--------+--------+------+------------+---------------+---------+
                |         415 | Thomas | Winter | m    | commercial | 2011-05-03    |    3550 |
                +-------------+--------+--------+------+------------+---------------+---------+
                
                SELECT * FROM employes ORDER BY date_embauche DESC LIMIT 0,1; -- Qui a été embauché en dernier ?
                +-------------+-----------+--------+------+-----------+---------------+---------+
                | id_employes | prenom    | nom    | sexe | service   | date_embauche | salaire |
                +-------------+-----------+--------+------+-----------+---------------+---------+
                |         990 | Stephanie | Lafaye | f    | assistant | 2017-03-01    |    1775 |
                +-------------+-----------+--------+------+-----------+---------------+---------+
    
                SELECT * FROM employes WHERE service IN ('commercial') ORDER BY salaire DESC LIMIT 0,1;-- Afficher les informations sur l'employé du service commercial gagnant le salaire le plus élevé
                +-------------+--------+--------+------+------------+---------------+---------+
                | id_employes | prenom | nom    | sexe | service    | date_embauche | salaire |
                +-------------+--------+--------+------+------------+---------------+---------+
                |         415 | Thomas | Winter | m    | commercial | 2011-05-03    |    3550 |
                +-------------+--------+--------+------+------------+---------------+---------+

                SELECT prenom FROM employes WHERE service IN ('comptabilite') ORDER BY salaire DESC LIMIT 0,1;-- Afficher le prénom du comptable gagnant le meilleur salaire
                +---------+
                | prenom  |
                +---------+
                | Fabrice |
                +---------+

                SELECT prenom FROM employes WHERE service IN ('informatique') ORDER BY date_embauche LIMIT 0,1; -- Afficher le prénom de l'informaticien ayant été recruté en premier 
                +---------+
                | prenom  |
                +---------+
                | Mathieu |
                +---------+

            -- LES FONCTIONS

                -- Comprenhension des fonctions :
                    Creation de la fonctions :
                        function multiplication (number1, numer2){
                            number1 * number2;
                        }

                    Appel de la fonction :
                        multiplication(2, 6){
                            2 * 6
                        }
                -- En sql, il existe des fonctions prédéfinies,

                    AS permet renommer les champs si besoin avec un alias qui s écrit 'AS'
                    SELECT prenom, salaire*12 AS 'Salaire annuel' FROM employes; -- Afficher le prenom et le salaire annuel des employés 
                    -- il est possible de faire subir des opérations mathématiques à des champs, mais biensûr s'il s'agit de type nombre
                    +-------------+----------------+
                    | prenom      | Salaire annuel |
                    +-------------+----------------+
                    | Jean-pierre |          60000 |
                    | Clement     |          27600 |
                    | Thomas      |          42600 |
                    | Chloe       |          22800 |
                    | Elodie      |          19200 |
                    | Fabrice     |          34800 |
                    | Melanie     |          37200 |
                    | Laura       |          54000 |
                    | Guillaume   |          22800 |
                    | Celine      |          32400 |
                    | Julien      |          16680 |
                    | Mathieu     |          30000 |
                    | Thierry     |          18000 |
                    | Amandine    |          25200 |
                    | Damien      |          27000 |
                    | Daniel      |          37200 |
                    | Nathalie    |          42600 |
                    | Benoit      |          30600 |
                    | Emilie      |          21600 |
                    | Stephanie   |          21300 |
                    +-------------+----------------+

                    SUM() permet d additionner
                    SELECT SUM(salaire*12) AS 'masse salariale' FROM employes; -- indiquer la masse salariale de tous les employes
                    +-----------------+
                    | masse salariale |
                    +-----------------+
                    |          623580 |
                    +-----------------+

                    AVG permet de calculer une moyenne
                    SELECT AVG(salaire) AS 'salaire moyen' FROM employes; -- afficher les salaire moyen des employés
                    +---------------+
                    | salaire moyen |
                    +---------------+
                    |     2598.2500 |
                    +---------------+

                    ROUND permet d arrondire
                        il a 2 arguments,
                            1-le nombre qu on veux arrondire
                            2-le nombre de decimal apres la virgule ( integer )
                    SELECT ROUND(AVG(salaire),1) AS 'salaire moyen' FROM employes; -- afficher les salaire moyen des employés arrondi a 0.1
                    +---------------+
                    | salaire moyen |
                    +---------------+
                    |        2598.3 |
                    +---------------+

                    COUNT pour conter
                    SELECT COUNT(*) AS 'Nombre de femmes' FROM employes WHERE sexe ='f'; -- Combien de femmes il y a dans l'entreprise
                    +------------------+
                    | Nombre de femmes |
                    +------------------+
                    |                9 |
                    +------------------+
                    
                    MIN() permet de retourner la plus petite valeur du champ
                    SELECT MIN(salaire) FROM employes; -- cherche le plus petit salaire
                    +--------------+
                    | MIN(salaire) |
                    +--------------+
                    |         1390 |
                    +--------------+

                    MAX() permet de retourner la plus grande valeur du champ
                    SELECT MAX(salaire) FROM employes;
                    +--------------+
                    | MAX(salaire) |
                    +--------------+
                    |         5000 |
                    +--------------+

                    -- On peux regrouper les requette
                    SELECT * FROM employes WHERE salaire = 5000; -- Chercher les employes ayant un salaire de 5000
                    +-------------+-------------+---------+------+-----------+---------------+---------+
                    | id_employes | prenom      | nom     | sexe | service   | date_embauche | salaire |
                    +-------------+-------------+---------+------+-----------+---------------+---------+
                    |         350 | Jean-pierre | Laborde | m    | direction | 2010-12-09    |    5000 |
                    +-------------+-------------+---------+------+-----------+---------------+---------+
                    SELECT * FROM employes WHERE salaire = (SELECT MAX(salaire) FROM employes); -- Cherche l'employes ayant le salaire le plus élevé
                    +-------------+-------------+---------+------+-----------+---------------+---------+
                    | id_employes | prenom      | nom     | sexe | service   | date_embauche | salaire |
                    +-------------+-------------+---------+------+-----------+---------------+---------+
                    |         350 | Jean-pierre | Laborde | m    | direction | 2010-12-09    |    5000 |
                    +-------------+-------------+---------+------+-----------+---------------+---------+
        
        -- INSTERT INTO (Ajouter)

            INSERT INTO + nom de la table + tableau des champs + VALUES + tableau des valeurs
            INSERT INTO employes (prenom,sexe,salaire, date_embauche,nom, service) VALUES ('bart', 'm', 6000, CURDATE(), CURDATE(), 'lord', 'informatique')
            -- Il y a autant de champs que de valeurs (dans les tableaux)
            -- les positions dans les tableaux doivent matcher ( position 1 = position 1; l'ordre des valeurs doit correspondre à l'ordre des champs)
            -- Les champs ne s'écrivent entre quotes ( seuls les valeurs de type string (chaine de caracteres))
            -- Si un champs n'a pas de valeur, il faut définir NULL
            -- La fonction CURDATE() permet de retourner la date du jour ( Syntaxe : YYYY-MM-DD)
            
            -- On peux faire des insertions multiple ( voir fichier employe )
        
        -- UPDATE
            UPDATE + (table) + SET + champ = valeur
        
            SET permet la modification
            UPDATE employes SET salaire = 100, prenom = 'bart'; -- Changer tous les salaire à 100 et tous les prenom à bart

            UPDATE employes SET salaire = 100, prenom = 'bart' WHERE id_employes = 992; -- Changer le salaire à 100 et le prenom bart à l'employé avec l'id 992
            UPDATE employes SET salaire = 999 WHERE service = 'commercial'; -- Changer le salaire à 999 pour toutes les personnes du service commercial
            -- ATTENTION : PRECISER BIEN SINON TOUTES LES LIGNES SUBISSENT LE CHANGEMENT

        -- DELETE
            DELETE est la suppression

            DELETE FROM employes; -- Suppression de toutes les lignes de la table employes
            DELETE FROM employes WHERE id_employes = 990; -- Supprime la ligne de l'employes avec l'id 990
            DELETE FROM employes WHERE service = 'commercial'; -- Supprime les lignes des employés du service commercial

        -- EXERCICE

            -- 4 -- Afficher le nombre de personnes ayant un id_employe commençant par le chiffre 5
            SELECT COUNT(*) AS 'id commencant par 5' FROM employes WHERE id_employes LIKE '5%';
            SELECT COUNT(*) FROM employes WHERE id_employes LIKE '5%';
            +---------------------+
            | id commencant par 5 |
            +---------------------+
            |                   3 |
            +---------------------+

            -- 5 -- Afficher le nombre de commerciaux
            SELECT COUNT(*) AS 'nombre de commerciaux' FROM employes WHERE service IN ('commercial');
            SELECT COUNT(*) FROM employes WHERE service = 'commercial';
            +-----------------------+
            | nombre de commerciaux |
            +-----------------------+
            |                     6 |
            +-----------------------+

            -- 6 -- Afficher le salaire moyen des informaticiens
            SELECT ROUND(AVG(salaire),1) AS 'salaire moyen informaticiens' FROM employes WHERE service IN ('informatique');
            SELECT ROUND(AVG(salaire),2) FROM employes WHERE service = 'informatique';

            +------------------------------+
            | salaire moyen informaticiens |
            +------------------------------+
            |                       2616.7 |
            +------------------------------+

            -- 8 -- Afficher le coût de tous les employés du service commercial sur une année 
            SELECT SUM(salaire*12) AS 'masse salariale commerciale' FROM employes WHERE service IN ('informatique');
            SELECT SUM(salaire*12) FROM employes WHERE service = 'commercial';
            +-----------------------------+
            | masse salariale commerciale |
            +-----------------------------+
            |                       94200 |
            +-----------------------------+

            -- 9 -- Afficher le salaire moyen par service
            ORDER BY service
            SELECT service, ROUND(AVG(salaire),1) AS 'salaire moyen' FROM employes GROUP BY service;
            SELECT service, ROUND(AVG(salaire),2) FROM employes GROUP BY service;
            +---------------+---------------+
            | service       | salaire moyen |
            +---------------+---------------+
            | assistant     |        1775.0 |
            | commercial    |        2558.3 |
            | communication |        2100.0 |
            | comptabilite  |        2900.0 |
            | direction     |        4750.0 |
            | informatique  |        2616.7 |
            | juridique     |        3550.0 |
            | production    |        2225.0 |
            | secretariat   |        1496.7 |
            +---------------+---------------+

            -- 10 -- Afficher le nombre de recrutement sur l'année 2010
            SELECT date_embauche, COUNT(*) FROM employes WHERE date_embauche LIKE '2010%';
            SELECT COUNT(*) FROM employes WHERE date_embauche BETWEEN '2010-01-01' AND '2010-12-31';
            +---------------+----------+
            | date_embauche | COUNT(*) |
            +---------------+----------+
            | 2010-12-09    |        2 |
            +---------------+----------+

            
            -- 11 -- Afficher le salaire moyen appliqué lors des recrutements sur la période allant de 2011 à 2014 (inclus)
            SELECT ROUND(AVG(salaire),1) AS 'salaire moyen 2011 a 2014' FROM employes WHERE date_embauche BETWEEN '2011-01-01' AND '2014-12-31';
            SELECT ROUND(AVG(salaire),2) FROM employes WHERE date_embauche BETWEEN '2011-01-01' AND '2014-12-31';
            +---------------------------+
            | salaire moyen 2011 a 2014 |
            +---------------------------+
            |                    2453.1 |
            +---------------------------+

            -- 12 -- Afficher le nombre de service différent
            SELECT COUNT(DISTINCT service) AS 'nombres de service differents' FROM employes;
            SELECT COUNT(DISTINCT service) FROM employes;
            +-------------------------------+
            | nombres de service differents |
            +-------------------------------+
            |                             9 |
            +-------------------------------+

            -- 14 -- Afficher conjoitement le nombre d'homme et de femme dans l'entreprise
            SELECT sexe, COUNT(*) FROM employes GROUP BY sexe;
            +------+----------+
            | sexe | COUNT(*) |
            +------+----------+
            | m    |       11 |
            | f    |        9 |
            +------+----------+
            SELECT SUM(sexe = 'm') AS 'Nb d hommes', SUM(sexe = 'f') as 'Nombre de femmes' FROM employes;
            +-------------+------------------+
            | Nb d hommes | Nombre de femmes |
            +-------------+------------------+
            |          11 |                9 |
            +-------------+------------------+

            -- 20 -- Augmenter chaque employé de 100€ 
            UPDATE employes SET salaire = salaire + 100;

            -- 21 -- supprimer les employés du service secrétariat
            DELETE FROM employes WHERE service = 'secretariat';






        
                