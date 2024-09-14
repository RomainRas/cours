### DICTIONNAIRE DES DONNEES

| NOM DES ATTRIBUTS     | DESCRIPTION                                                   | TYPE  | TAILLE | CONTRAINTES / REGLES DE CALCUL                                      | COMMENTAIRES                     |
|-----------------------|---------------------------------------------------------------|-------|--------|---------------------------------------------------------------------|----------------------------------|
| **t_ctrformation**     |                                                               |       |        |                                                                     |                                  |
| `id_ctrformation`      | Numero d'enregistrement du centre de formation                | AI    | 4      | Auto increment (AI). ID doit être en AI et c’est toujours le 1er champ d'une entité. | NOT NULL                        |
| `nom_ctrformation`     | Nom du centre de formation                                    | A     | 50     | NOT NULL                                                            |                                  |
| `tel_ctrformation`     | Téléphone du centre de formation                              | A     | 14     | NOT NULL - Format : xx-xx-xx-xx-xx                                  |                                  |
| `email_ctrformation`   | Adresse électronique du centre de formation                   | A     | 255    | NOT NULL                                                            |                                  |
| `adr_ctrformation`     | Adresse du centre de formation                                | A     | 150    | NOT NULL                                                            |                                  |

| **t_codespostaux**     |                                                               |       |        |                                                                     |                                  |
| `id_cp`                | Numéro d'enregistrement du code postal                        | AI    | 5      | NOT NULL                                                            |                                  |
| `cp_ctrformation`      | Code postal                                                   | I     | 5      | NOT NULL                                                            |                                  |

| **t_codespostaux (bis)**|                                                              |       |        |                                                                     |                                  |
| `cp`                   | Code postal                                                   | I     | 5      | NOT NULL                                                            | (si le code postal est un ID)    |

| **t_ville**            |                                                               |       |        |                                                                     |                                  |
| `id_ville`             | Numéro d'enregistrement de la ville                           | AI    | 5      | NOT NULL                                                            |                                  |
| `lib_ville`            | Nom de la ville                                               | A     | 70     | NOT NULL                                                            |                                  |

| **t_titre**            |                                                               |       |        |                                                                     |                                  |
| `id_titre`             | Numéro d'enregistrement du titre                              | AI    | 4      | NOT NULL                                                            |                                  |
| `lib_titre`            | Libellé du titre                                              | A     | 70     | NOT NULL                                                            |                                  |

| **t_niveau**           |                                                               |       |        |                                                                     |                                  |
| `id_niveau`            | Numéro d'enregistrement du niveau                             | AI    | 1      | NOT NULL                                                            |                                  |
| `lib_niveau`           | Libellé du niveau                                              | A     | 9      | NOT NULL                                                            |                                  |

| **t_stagiaire**        |                                                               |       |        |                                                                     |                                  |
| `id_stag`              | Numéro d'enregistrement du stagiaire                          | AI    | 6      | NOT NULL                                                            |                                  |
| `nom_stag`             | Nom du stagiaire                                              | A     | 50     | NOT NULL                                                            |                                  |
| `prenom_stag`          | Prénom du stagiaire                                           | A     | 50     | NOT NULL                                                            |                                  |
| `dt_naiss_stag`        | Date de naissance du stagiaire                                | D     | 10     | NOT NULL - Format : YYYY/MM/DD                                      |                                  |
| `adr_stag`             | Adresse du stagiaire                                          | A     | 150    | NOT NULL                                                            |                                  |
| `tel_stag`             | Téléphone du stagiaire                                        | A     | 15     | NOT NULL - Format : xx-xx-xx-xx-xx                                   |                                  |
| `email_stag`           | Adresse électronique du stagiaire                             | A     | 255    | NOT NULL                                                            |                                  |

| **t_opca**             |                                                               |       |        |                                                                     |                                  |
| `id_opca`              | Numéro d'enregistrement de l'OPCA                             | AI    | 4      | NOT NULL                                                            |                                  |
| `lib_opca`             | Libellé de l'OPCA                                             | A     | 70     | NOT NULL                                                            |                                  |

---

### Légende :
- **AI** : Auto Increment (Auto-incrémentation).
- **A** : Alphanumérique (VARCHAR).
- **I** : Integer (Entier).
- **D** : Date.
