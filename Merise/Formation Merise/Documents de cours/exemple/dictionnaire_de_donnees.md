# DICTIONNAIRE DES DONNEES

## Table: t_ctrformation

| **Nom des attributs**    | **Description**                                 | **Type** | **Taille** | **Contraintes / Règles de calcul**                                        | **Commentaires**                |
|--------------------------|-------------------------------------------------|----------|------------|---------------------------------------------------------------------------|---------------------------------|
| `id_ctrformation`         | Numéro d'enregistrement du centre de formation  | AI       | 4          | Auto-incrémentation. ID doit être le 1er champ d'une entité.              | NOT NULL                        |
| `nom_ctrformation`        | Nom du centre de formation                      | A        | 50         | NOT NULL                                                                  |                                 |
| `tel_ctrformation`        | Téléphone du centre de formation                | A        | 14         | NOT NULL. Format : xx-xx-xx-xx-xx                                         |                                 |
| `email_ctrformation`      | Adresse électronique du centre de formation     | A        | 255        | NOT NULL                                                                  |                                 |
| `adr_ctrformation`        | Adresse du centre de formation                  | A        | 150        | NOT NULL                                                                  |                                 |

## Table: t_codespostaux

| **Nom des attributs**     | **Description**                                 | **Type** | **Taille** | **Contraintes / Règles de calcul**                                        | **Commentaires**                |
|--------------------------|-------------------------------------------------|----------|------------|---------------------------------------------------------------------------|---------------------------------|
| `id_cp`                   | Numéro d'enregistrement du code postal          | AI       | 5          | NOT NULL                                                                  |                                 |
| `cp_ctrformation`         | Code postal                                     | I        | 5          | NOT NULL                                                                  |                                 |

## Table: t_ville

| **Nom des attributs**     | **Description**                                 | **Type** | **Taille** | **Contraintes / Règles de calcul**                                        | **Commentaires**                |
|--------------------------|-------------------------------------------------|----------|------------|---------------------------------------------------------------------------|---------------------------------|
| `id_ville`                | Numéro d'enregistrement de la ville             | AI       | 5          | NOT NULL                                                                  |                                 |
| `lib_ville`               | Nom de la ville                                 | A        | 70         | NOT NULL                                                                  |                                 |

## Table: t_titre

| **Nom des attributs**     | **Description**                                 | **Type** | **Taille** | **Contraintes / Règles de calcul**                                        | **Commentaires**                |
|--------------------------|-------------------------------------------------|----------|------------|---------------------------------------------------------------------------|---------------------------------|
| `id_titre`                | Numéro d'enregistrement du titre                | AI       | 4          | NOT NULL                                                                  |                                 |
| `lib_titre`               | Libellé du titre                                | A        | 70         | NOT NULL                                                                  |                                 |

## Table: t_niveau

| **Nom des attributs**     | **Description**                                 | **Type** | **Taille** | **Contraintes / Règles de calcul**                                        | **Commentaires**                |
|--------------------------|-------------------------------------------------|----------|------------|---------------------------------------------------------------------------|---------------------------------|
| `id_niveau`               | Numéro d'enregistrement du niveau               | AI       | 1          | NOT NULL                                                                  |                                 |
| `lib_niveau`              | Libellé du niveau                               | A        | 9          | NOT NULL                                                                  |                                 |

## Table: t_stagiaire

| **Nom des attributs**     | **Description**                                 | **Type** | **Taille** | **Contraintes / Règles de calcul**                                        | **Commentaires**                |
|--------------------------|-------------------------------------------------|----------|------------|---------------------------------------------------------------------------|---------------------------------|
| `id_stag`                 | Numéro d'enregistrement du stagiaire            | AI       | 6          | NOT NULL                                                                  |                                 |
| `nom_stag`                | Nom du stagiaire                                | A        | 50         | NOT NULL                                                                  |                                 |
| `prenom_stag`             | Prénom du stagiaire                             | A        | 50         | NOT NULL                                                                  |                                 |
| `dt_naiss_stag`           | Date de naissance du stagiaire                  | D        | 10         | NOT NULL. Format : YYYY/MM/DD                                              |                                 |
| `adr_stag`                | Adresse du stagiaire                            | A        | 150        | NOT NULL                                                                  |                                 |
| `tel_stag`                | Téléphone du stagiaire                          | A        | 15         | NOT NULL. Format : xx-xx-xx-xx-xx                                          |                                 |
| `email_stag`              | Adresse électronique du stagiaire               | A        | 255        | NOT NULL                                                                  |                                 |

## Table: t_opca

| **Nom des attributs**     | **Description**                                 | **Type** | **Taille** | **Contraintes / Règles de calcul**                                        | **Commentaires**                |
|--------------------------|-------------------------------------------------|----------|------------|---------------------------------------------------------------------------|---------------------------------|
| `id_opca`                 | Numéro d'enregistrement de l'OPCA               | AI       | 4          | NOT NULL                                                                  |                                 |
| `lib_opca`                | Libellé de l'OPCA                               | A        | 70         | NOT NULL                                                                  |                                 |

---

### Légende :

- **AI** : Auto Increment (Auto-incrémentation).
- **A** : Alphanumérique (VARCHAR).
- **I** : Integer (Entier).
- **D** : Date.
