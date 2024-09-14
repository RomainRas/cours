CREATE DATABASE IF NOT EXISTS DbLivres;
USE DbLivres;
DROP TABLE IF EXISTS T_Livre ;
CREATE TABLE T_Livre (id_livre_T_Livre INT(4) AUTO_INCREMENT NOT NULL,
lib_livre_T_Livre VARCHAR(50),
id_genre_T_genre INTEGER(4),
id_editeur_T_Editeur INTEGER(4),
id_auteur_T_AUTEUR INTEGER(4),
PRIMARY KEY (id_livre_T_Livre)) ENGINE=InnoDB;

DROP TABLE IF EXISTS T_Auteur ;
CREATE TABLE T_Auteur (id_auteur_T_AUTEUR INT(4) AUTO_INCREMENT NOT NULL,
nom_auteur_T_AUTEUR VARCHAR(50),
prenom_auteur_T_AUTEUR VARCHAR(50),
annee_naissance_T_AUTEUR INT(4),
id_ville_T_Ville INTEGER(4),
PRIMARY KEY (id_auteur_T_AUTEUR)) ENGINE=InnoDB;

DROP TABLE IF EXISTS T_Editeur ;
CREATE TABLE T_Editeur (id_editeur_T_Editeur INT(4) AUTO_INCREMENT NOT NULL,
nom_editeur_T_Editeur VARCHAR(50),
PRIMARY KEY (id_editeur_T_Editeur)) ENGINE=InnoDB;

DROP TABLE IF EXISTS T_genre ;
CREATE TABLE T_genre (id_genre_T_genre INT(2) AUTO_INCREMENT NOT NULL,
lib_genre_T_genre VARCHAR(50),
PRIMARY KEY (id_genre_T_genre)) ENGINE=InnoDB;

DROP TABLE IF EXISTS T_magasin ;
CREATE TABLE T_magasin (id_mag_T_magasin INT(2) AUTO_INCREMENT NOT NULL,
lib_mag_T_magasin VARCHAR(50),
PRIMARY KEY (id_mag_T_magasin)) ENGINE=InnoDB;

DROP TABLE IF EXISTS T_ville ;
CREATE TABLE T_ville (id_ville_T_Ville INT(4) AUTO_INCREMENT NOT NULL,
lib_ville_T_ville VARCHAR(50),
PRIMARY KEY (id_ville_T_Ville)) ENGINE=InnoDB;

DROP TABLE IF EXISTS vendre ;
CREATE TABLE vendre (id_livre_T_Livre INTEGER(4) AUTO_INCREMENT NOT NULL,
id_mag_T_magasin INTEGER(4) NOT NULL,
prix_vente_vendre FLOAT(3),
PRIMARY KEY (id_livre_T_Livre,
 id_mag_T_magasin)) ENGINE=InnoDB;

ALTER TABLE T_Livre ADD CONSTRAINT FK_T_Livre_id_genre_T_genre FOREIGN KEY (id_genre_T_genre) REFERENCES T_genre (id_genre_T_genre);

ALTER TABLE T_Livre ADD CONSTRAINT FK_T_Livre_id_editeur_T_Editeur FOREIGN KEY (id_editeur_T_Editeur) REFERENCES T_Editeur (id_editeur_T_Editeur);
ALTER TABLE T_Livre ADD CONSTRAINT FK_T_Livre_id_auteur_T_AUTEUR FOREIGN KEY (id_auteur_T_AUTEUR) REFERENCES T_Auteur (id_auteur_T_AUTEUR);
ALTER TABLE T_Auteur ADD CONSTRAINT FK_T_Auteur_id_ville_T_Ville FOREIGN KEY (id_ville_T_Ville) REFERENCES T_ville (id_ville_T_Ville);
ALTER TABLE vendre ADD CONSTRAINT FK_vendre_id_livre_T_Livre FOREIGN KEY (id_livre_T_Livre) REFERENCES T_Livre (id_livre_T_Livre);
ALTER TABLE vendre ADD CONSTRAINT FK_vendre_id_mag_T_magasin FOREIGN KEY (id_mag_T_magasin) REFERENCES T_magasin (id_mag_T_magasin);
