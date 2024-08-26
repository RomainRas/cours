SELECT lib_livre_T_Livre,nom_auteur_T_AUTEUR,nom_editeur_T_Editeur,lib_genre_T_genre
FROM t_livre
INNER JOIN t_auteur ON t_livre.id_auteur_T_AUTEUR = t_auteur.id_auteur_T_AUTEUR
INNER JOIN t_editeur ON t_livre.id_editeur_T_Editeur = t_editeur.id_editeur_T_Editeur
INNER JOIN t_genre ON t_livre.id_genre_T_genre = t_genre.id_genre_T_genre;

SELECT nom_auteur_T_AUTEUR, prenom_auteur_T_AUTEUR, annee_naissance_T_AUTEUR, lib_ville_T_ville
FROM t_auteur
INNER JOIN t_ville ON t_ville.id_ville_T_Ville = t_auteur.id_ville_T_Ville;

SELECT lib_livre_T_Livre, lib_mag_t_magasin, prix_vente_vendre
FROM t_livre
INNER JOIN vendre ON t_livre.id_livre_T_Livre = vendre.id_livre_T_Livre
INNER JOIN t_magasin on t_magasin.id_mag_T_magasin = vendre.id_mag_T_magasin;

OU

SELECT lib_livre_T_Livre, lib_mag_t_magasin, prix_vente_vendre
FROM t_livre
NATURAL JOIN vendre
NATURAL JOIN t_magasin

Natural join fonctionne si c est le meme nom et le meme type sinon INNER JOIN

SELECT nom_auteur_t_auteur, prenom_auteur_t_auteur, lib_ville_t_ville
FROM t_auteur
NATURAL JOIN t_ville;