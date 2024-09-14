DROP TABLE IF EXISTS T_Discipline;
CREATE TABLE T_Discipline (
    id_discipline_T_Discipline INT(4) AUTO_INCREMENT NOT NULL,
    nom_discipline_T_Discipline VARCHAR(70),
    id_sport_T_sport INTEGER(4),
    PRIMARY KEY (id_discipline_T_Discipline)
) ENGINE=InnoDB;

DROP TABLE IF EXISTS T_athlete;
CREATE TABLE T_athlete (
    id_athl_T_athlete INT(4) AUTO_INCREMENT NOT NULL,
    nom_athl_T_athlete VARCHAR(50),
    prenom_athl_T_athlete VARCHAR(50),
    dt_naiss_athl_T_athlete DATE,
    id_pays_T_pays INTEGER(4),
    id_sport_T_sport INTEGER(4),
    PRIMARY KEY (id_athl_T_athlete)
) ENGINE=InnoDB;

DROP TABLE IF EXISTS T_pays;
CREATE TABLE T_pays (
    id_pays_T_pays INT(4) AUTO_INCREMENT NOT NULL,
    nom_pays_T_pays VARCHAR(70),
    PRIMARY KEY (id_pays_T_pays)
) ENGINE=InnoDB;

DROP TABLE IF EXISTS T_competition;
CREATE TABLE T_competition (
    id_compet_T_competition INT(4) AUTO_INCREMENT NOT NULL,
    nom_compet_T_competition VARCHAR(70),
    dotation_compet_T_competition FLOAT(7,2),
    id_lieu_compet_T_lieu_competition INT(4),
    PRIMARY KEY (id_compet_T_competition)
) ENGINE=InnoDB;

DROP TABLE IF EXISTS T_lieu_competition;
CREATE TABLE T_lieu_competition (
    id_lieu_compet_T_lieu_competition INT(4) AUTO_INCREMENT NOT NULL,
    lieu_compet_T_lieu_competition VARCHAR(70),
    PRIMARY KEY (id_lieu_compet_T_lieu_competition)
) ENGINE=InnoDB;

DROP TABLE IF EXISTS T_sport;
CREATE TABLE T_sport (
    id_sport_T_sport INT(4) AUTO_INCREMENT NOT NULL,
    nom_sport_T_sport VARCHAR(50),
    PRIMARY KEY (id_sport_T_sport)
) ENGINE=InnoDB;

DROP TABLE IF EXISTS participer;
CREATE TABLE participer (
    id_athl_T_athlete INTEGER(4) NOT NULL,
    id_compet_T_competition INTEGER(4) NOT NULL,
    PRIMARY KEY (id_athl_T_athlete, id_compet_T_competition)
) ENGINE=InnoDB;

ALTER TABLE T_Discipline
    ADD CONSTRAINT FK_T_Discipline_id_sport_T_sport
    FOREIGN KEY (id_sport_T_sport)
    REFERENCES T_sport (id_sport_T_sport);

ALTER TABLE T_athlete
    ADD CONSTRAINT FK_T_athlete_id_pays_T_pays
    FOREIGN KEY (id_pays_T_pays)
    REFERENCES T_pays (id_pays_T_pays);

ALTER TABLE T_athlete
    ADD CONSTRAINT FK_T_athlete_id_sport_T_sport
    FOREIGN KEY (id_sport_T_sport)
    REFERENCES T_sport (id_sport_T_sport);

ALTER TABLE T_competition
    ADD CONSTRAINT FK_T_competition_id_lieu_compet_T_lieu_competition
    FOREIGN KEY (id_lieu_compet_T_lieu_competition)
    REFERENCES T_lieu_competition (id_lieu_compet_T_lieu_competition);

ALTER TABLE participer
    ADD CONSTRAINT FK_participer_id_athl_T_athlete
    FOREIGN KEY (id_athl_T_athlete)
    REFERENCES T_athlete (id_athl_T_athlete);

ALTER TABLE participer
    ADD CONSTRAINT FK_participer_id_compet_T_competition
    FOREIGN KEY (id_compet_T_competition)
    REFERENCES T_competition (id_compet_T_competition);




AJOUT DE LA FRANCE, DE L ESPAGNE ET ANGLETERRE DANS LA TABLE pays
        INSERT INTO T_pays (nom_pays_T_pays) VALUES ('France');
        INSERT INTO T_pays (nom_pays_T_pays) VALUES ('Espagne');
        INSERT INTO T_pays (nom_pays_T_pays) VALUES ('Angleterre');

-AJOUT DES COMPETIONS
-   Ajouter le lieu dans la table T_lieu_competition
    INSERT INTO T_lieu_competition (lieu_compet_T_lieu_competition) VALUES ('Paris');
    INSERT INTO T_lieu_competition (lieu_compet_T_lieu_competition) VALUES ('Londres');


-    Récupérer l ID du lieu
     SELECT id_lieu_compet_T_lieu_competition FROM T_lieu_competition WHERE lieu_compet_T_lieu_competition = 'Paris';
     SELECT id_lieu_compet_T_lieu_competition FROM T_lieu_competition WHERE lieu_compet_T_lieu_competition = 'Londres';


-   Ajouter la compétition "Roland Garros" dans la table
    INSERT INTO T_competition (nom_compet_T_competition, dotation_compet_T_competition, id_lieu_compet_T_lieu_competition) VALUES ('Roland Garros', 42000000.00, 1);
    INSERT INTO T_competition (nom_compet_T_competition, dotation_compet_T_competition, id_lieu_compet_T_lieu_competition) VALUES ('Wimbledon', 35000000.00, 2);

AJOUT DES INFORMATION POUR JO Wilfried Tsonga

-   INSERT INTO T_athlete (nom_athl_T_athlete, prenom_athl_T_athlete, dt_naiss_athl_T_athlete,  id_pays_T_pays, id_sport_T_sport)
    VALUES ('Tsonga', 'Jo-Wilfried', '1985-04-17', 1, 1);

AJOUT DES COMPETITIONS POUR JO Wilfried Tsonga
    INSERT INTO participer (id_athl_T_athlete, id_compet_T_competition)
VALUES (1, 2);
        INSERT INTO participer (id_athl_T_athlete, id_compet_T_competition)
VALUES (1, 1);

AJOUT DES DISCIPLINE ET CELLE DE TSONGA
    - Insérer "sports de raquettes" dans la table T_sport
        INSERT INTO T_sport (nom_sport_T_sport) VALUES ('sports de raquettes');

    Récupérer l ID du sport "sports de raquettes"
        SELECT id_sport_T_sport FROM T_sport WHERE nom_sport_T_sport = 'sports de raquettes';
        1

    Insérer "tennis" dans la table T_Discipline
        INSERT INTO T_Discipline (nom_discipline_T_Discipline, id_sport_T_sport) VALUES ('tennis',1);

--> REPONSE A LA QUESTION : -	La discipline de Jo-Wilfried Tsonga <--
    SELECT c.nom_compet_T_competition
    FROM T_athlete a
    JOIN participer p ON a.id_athl_T_athlete = p.id_athl_T_athlete
    JOIN T_competition c ON p.id_compet_T_competition = c.id_compet_T_competition
    WHERE a.nom_athl_T_athlete = 'Tsonga' AND a.prenom_athl_T_athlete = 'Jo-Wilfried';

    nom_compet_T_competition : 
    Roland Garros
    Wimbledon

--> REPONSE A LA QUESTION : - -	La liste des athlètes par pays <--
    SELECT p.nom_pays_T_pays AS Pays, a.nom_athl_T_athlete AS Nom, a.prenom_athl_T_athlete AS Prenom
    FROM T_athlete a
    JOIN T_pays p ON a.id_pays_T_pays = p.id_pays_T_pays
    ORDER BY p.nom_pays_T_pays, a.nom_athl_T_athlete;

    Pays     Nom     Prenom
    France Tsonga Jo-Wilfried

-	La liste des compétitions auxquelles participent Renaud Lavillenie

Ajouter le lieu "Paris" dans la table T_lieu_competition
    INSERT INTO T_lieu_competition (lieu_compet_T_lieu_competition) VALUES ('Paris');

Ajouter les Jeux Olympiques de Paris dans la table T_competition
    INSERT INTO T_competition (nom_compet_T_competition, dotation_compet_T_competition, id_lieu_compet_T_lieu_competition)
VALUES ('Jeux Olympiques de Paris 2024', 0.00, 1);

- Ajouter le sport athletisme et la discipline lancer de javelot
    INSERT INTO T_sport (nom_sport_T_sport) VALUES ('athlétisme');
    INSERT INTO T_Discipline (nom_discipline_T_Discipline, id_sport_T_sport) VALUES ('lancer de javelot', 2);

-   Ajouter Renaud Lavillenie
    INSERT INTO T_athlete (nom_athl_T_athlete, prenom_athl_T_athlete, dt_naiss_athl_T_athlete, id_pays_T_pays, id_sport_T_sport)
    VALUES ('Lavillenie', 'Renaud', '1986-09-18', 1, 2);

-   Faire participer Renaud Lavillenie au jo de Paris
    INSERT INTO participer (id_athl_T_athlete, id_compet_T_competition)
    VALUES (2, 3);

--> REPONSE A LA QUESTION : - La liste des compétitions auxquelles participent Renaud Lavillenie <--
    SELECT c.nom_compet_T_competition
    FROM T_athlete a
    JOIN participer p ON a.id_athl_T_athlete = p.id_athl_T_athlete
    JOIN T_competition c ON p.id_compet_T_competition = c.id_compet_T_competition
    WHERE a.nom_athl_T_athlete = 'Lavillenie' AND a.prenom_athl_T_athlete = 'Renaud';

    nom_compet_T_competition
    Jeux Olympiques de Paris 2024

--> REPONSE A LA QUESTION : - les lieux des compétitions sur Paris <--
    SELECT c.nom_compet_T_competition, l.lieu_compet_T_lieu_competition
    FROM T_competition c
    JOIN T_lieu_competition l ON c.id_lieu_compet_T_lieu_competition = l.id_lieu_compet_T_lieu_competition
    WHERE l.lieu_compet_T_lieu_competition = 'Paris';

    nom_compet_T_competition	         lieu_compet_T_lieu_competition	
        Roland Garros                               Paris
        Jeux Olympiques de Paris 2024               Paris

--> REPONSE A LA QUESTION : - La liste des athlètes participant à une compétition donnée. <--
    SELECT a.nom_athl_T_athlete, a.prenom_athl_T_athlete
    FROM T_athlete a
    JOIN participer p ON a.id_athl_T_athlete = p.id_athl_T_athlete
    JOIN T_competition c ON p.id_compet_T_competition = c.id_compet_T_competition
    WHERE c.nom_compet_T_competition = 'Jeux Olympiques de Paris 2024';
    
    nom_athl_T_athlete      prenom_athl_T_athlete
         Lavillenie                 Renaud


















