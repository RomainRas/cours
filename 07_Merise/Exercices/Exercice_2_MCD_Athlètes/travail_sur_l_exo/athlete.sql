CREATE DATABASE IF NOT EXISTS dbathlete;
USE dbathlete;

DROP TABLE IF EXISTS t_athlete;
CREATE TABLE t_athlete (
    id_athlete INT AUTO_INCREMENT NOT NULL,
    nom_athlete VARCHAR(50),
    prenom_athlete VARCHAR(50),
    date_naissance_athlete DATE,
    id_pays INT,
    PRIMARY KEY (id_athlete)
) ENGINE=InnoDB;

DROP TABLE IF EXISTS t_sport;
CREATE TABLE t_sport (
    id_sport INT AUTO_INCREMENT NOT NULL,
    nom_sport VARCHAR(50),
    id_discipline INT,
    PRIMARY KEY (id_sport)
) ENGINE=InnoDB;

DROP TABLE IF EXISTS t_nationalite;
CREATE TABLE t_nationalite (
    id_pays INT AUTO_INCREMENT NOT NULL,
    pays VARCHAR(50),
    PRIMARY KEY (id_pays)
) ENGINE=InnoDB;

DROP TABLE IF EXISTS t_competition;
CREATE TABLE t_competition (
    id_competition INT AUTO_INCREMENT NOT NULL,
    nom_competition VARCHAR(50),
    PRIMARY KEY (id_competition)
) ENGINE=InnoDB;

DROP TABLE IF EXISTS t_lieu_competition;
CREATE TABLE t_lieu_competition (
    id_lieu_competition INT AUTO_INCREMENT NOT NULL,
    lieu_competition VARCHAR(50),
    PRIMARY KEY (id_lieu_competition)
) ENGINE=InnoDB;

DROP TABLE IF EXISTS discipline;
CREATE TABLE discipline (
    id_discipline INT AUTO_INCREMENT NOT NULL,
    nom_discipline VARCHAR(50),
    PRIMARY KEY (id_discipline)
) ENGINE=InnoDB;

DROP TABLE IF EXISTS pratique;
CREATE TABLE pratique (
    id_athlete INT NOT NULL,
    id_sport INT NOT NULL,
    PRIMARY KEY (id_athlete, id_sport)
) ENGINE=InnoDB;

DROP TABLE IF EXISTS participe;
CREATE TABLE participe (
    id_athlete INT NOT NULL,
    id_competition INT NOT NULL,
    PRIMARY KEY (id_athlete, id_competition)
) ENGINE=InnoDB;

DROP TABLE IF EXISTS se_deroule_a;
CREATE TABLE se_deroule_a (
    id_competition INT NOT NULL,
    id_lieu_competition INT NOT NULL,
    date_debut_competition DATE,
    date_fin_competition DATE,
    PRIMARY KEY (id_competition, id_lieu_competition)
) ENGINE=InnoDB;

ALTER TABLE t_athlete ADD CONSTRAINT FK_t_athlete_id_pays FOREIGN KEY (id_pays) REFERENCES t_nationalite(id_pays);

ALTER TABLE t_sport ADD CONSTRAINT FK_t_sport_id_discipline FOREIGN KEY (id_discipline) REFERENCES discipline(id_discipline);

ALTER TABLE pratique ADD CONSTRAINT FK_pratique_id_athlete FOREIGN KEY (id_athlete) REFERENCES t_athlete(id_athlete);
ALTER TABLE pratique ADD CONSTRAINT FK_pratique_id_sport FOREIGN KEY (id_sport) REFERENCES t_sport(id_sport);

ALTER TABLE participe ADD CONSTRAINT FK_participe_id_athlete FOREIGN KEY (id_athlete) REFERENCES t_athlete(id_athlete);
ALTER TABLE participe ADD CONSTRAINT FK_participe_id_competition FOREIGN KEY (id_competition) REFERENCES t_competition(id_competition);

ALTER TABLE se_deroule_a ADD CONSTRAINT FK_se_deroule_a_id_competition FOREIGN KEY (id_competition) REFERENCES t_competition(id_competition);
ALTER TABLE se_deroule_a ADD CONSTRAINT FK_se_deroule_a_id_lieu_competition FOREIGN KEY (id_lieu_competition) REFERENCES t_lieu_competition(id_lieu_competition);


REQUETTES :

INSERT INTO t_nationalite (pays) 
VALUES 
('France'),
('Allemagne'),
('Espagne'),
('Italie'),
('Royaume-Uni');

INSERT INTO discipline (nom_discipline) VALUES ('Sports de raquette');
INSERT INTO discipline (nom_discipline) VALUES ('Athlétisme');
INSERT INTO discipline (nom_discipline) VALUES ('Natation');

INSERT INTO t_sport (nom_sport, id_discipline) 
VALUES 
('Tennis', 4),
('Badminton', 4),      
('100 mètres', 5),    
('Saut à la perche', 5),
('100 metres nage libre', 6),
('200 metres nage libre', 6);

INSERT INTO t_athlete (nom_athlete, prenom_athlete, date_naissance_athlete, id_pays) 
VALUES 
('Marchand', 'Léon', '2002-05-17', 1), 
('Müller', 'Hans', '1996-06-23', 2),     
('Garcia', 'Carlos', '1994-08-14', 3),  
('Rossi', 'Luca', '1993-09-19', 4),      
('Smith', 'John', '1992-11-30', 5);      

INSERT INTO t_athlete (nom_athlete, prenom_athlete, date_naissance_athlete, id_pays) 
VALUES 
('Tsonga', 'Jo-Wilfried', '1985-04-17', 1),
('Zverev', 'Alexander', '1997-04-20', 2),    
('Nadal', 'Rafael', '1986-06-03', 3),       
('Berrettini', 'Matteo', '1996-04-12', 4),  
('Murray', 'Andy', '1987-05-15', 5);          

INSERT INTO t_athlete (nom_athlete, prenom_athlete, date_naissance_athlete, id_pays) 
VALUES 
('Lavillenie', 'Renaud', '1986-09-18', 1),   
('Krause', 'Gesa-Felicitas', '1992-11-03', 2),  
('Ortega', 'Orlando', '1991-07-29', 3),     
('Tamberi', 'Gianmarco', '1992-06-01', 4),  
('Farah', 'Mo', '1983-03-23', 5);      

INSERT INTO t_competition (nom_competition) 
VALUES 
('Jeux Olympiques 2024'),   
('Roland Garros 2024'),     
('Wimbledon 2024'),       
('Championnat du Monde d Athlétisme 2024'), 
('Tournoi de Madrid 2024'); 

INSERT INTO t_lieu_competition (lieu_competition) 
VALUES 
('Paris'), 
('Londres'),    
('Budapest'),   
('Madrid');     

SELECT 
    t_nationalite.pays AS Pays,
    t_athlete.nom_athlete AS Nom,
    t_athlete.prenom_athlete AS Prénom,
    t_athlete.date_naissance_athlete AS Date_de_Naissance
FROM 
    t_athlete
JOIN 
    t_nationalite ON t_athlete.id_pays = t_nationalite.id_pays
ORDER BY 
    t_nationalite.pays, t_athlete.nom_athlete, t_athlete.prenom_athlete;


Pays	Nom	Prénom	Date_de_Naissance	
Allemagne	Krause	Gesa-Felicitas	1992-11-03	
Allemagne	Müller	Hans	1996-06-23	
Allemagne	Zverev	Alexander	1997-04-20	
Espagne	Garcia	Carlos	1994-08-14	
Espagne	Nadal	Rafael	1986-06-03	
Espagne	Ortega	Orlando	1991-07-29	
France	Lavillenie	Renaud	1986-09-18	
France	Marchand	Léon	2002-05-17	
France	Tsonga	Jo-Wilfried	1985-04-17	
Italie	Berrettini	Matteo	1996-04-12	
Italie	Rossi	Luca	1993-09-19	
Italie	Tamberi	Gianmarco	1992-06-01	
Royaume-Uni	Farah	Mo	1983-03-23	
Royaume-Uni	Murray	Andy	1987-05-15	
Royaume-Uni	Smith	John	1992-11-30	

Il n y avait pas d association entre la table t_athlete et la table t_sport, il faut y ajouter la cle etrangere FK_participe_id_athlete
ALTER TABLE t_athlete ADD COLUMN id_sport INT;
ALTER TABLE t_athlete 
ADD CONSTRAINT FK_t_athlete_id_sport 
FOREIGN KEY (id_sport) 
REFERENCES t_sport(id_sport);


UPDATE t_athlete SET id_sport = 4 WHERE nom_athlete IN ('Tsonga', 'Zverev', 'Nadal', 'Berrettini', 'Murray');
UPDATE t_athlete SET id_sport = 7 WHERE nom_athlete = 'Lavillenie' AND prenom_athlete = 'Renaud';

INSERT INTO participe (id_athlete, id_competition) 
VALUES 
(1, 2),  -- Jeux Olympiques 2024
(1, 3);  -- Championnat du Monde d'Athlétisme 2024

-- Associer les Jeux Olympiques 2024 à Paris
INSERT INTO se_deroule_a (id_competition, id_lieu_competition, date_debut_competition, date_fin_competition) 
VALUES (2, 1, '2024-07-26', '2024-08-11');  -- Dates fictives, à ajuster selon vos données

-- Associer le Championnat du Monde d'Athlétisme 2024 à Paris
INSERT INTO se_deroule_a (id_competition, id_lieu_competition, date_debut_competition, date_fin_competition) 
VALUES (3, 1, '2024-08-19', '2024-08-27');  -- Dates fictives, à ajuster selon vos données
