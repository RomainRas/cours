# DICTIONNAIRE DES DONNEES

## Table: [Nom de la table]

| **Nom des attributs**    | **Description**                                 | **Type** | **Taille** | **Contraintes / Règles de calcul**                                        | **Commentaires**                |
|--------------------------|-------------------------------------------------|----------|------------|---------------------------------------------------------------------------|---------------------------------|
| `[nom_attribut_1]`        | [Description de l'attribut 1]                   | [Type]   | [Taille]   | [Contraintes : NOT NULL, Clé primaire, etc.]                              | [Commentaires facultatifs]      |
| `[nom_attribut_2]`        | [Description de l'attribut 2]                   | [Type]   | [Taille]   | [Contraintes]                                                             | [Commentaires]                  |
| `[nom_attribut_3]`        | [Description de l'attribut 3]                   | [Type]   | [Taille]   | [Contraintes]                                                             | [Commentaires]                  |

## Table: [Nom de la table 2]

| **Nom des attributs**    | **Description**                                 | **Type** | **Taille** | **Contraintes / Règles de calcul**                                        | **Commentaires**                |
|--------------------------|-------------------------------------------------|----------|------------|---------------------------------------------------------------------------|---------------------------------|
| `[nom_attribut_1]`        | [Description de l'attribut 1]                   | [Type]   | [Taille]   | [Contraintes]                                                             | [Commentaires]                  |
| `[nom_attribut_2]`        | [Description de l'attribut 2]                   | [Type]   | [Taille]   | [Contraintes]                                                             | [Commentaires]                  |
| `[nom_attribut_3]`        | [Description de l'attribut 3]                   | [Type]   | [Taille]   | [Contraintes]                                                             | [Commentaires]                  |

## Table: [Nom de la table 3]

| **Nom des attributs**    | **Description**                                 | **Type** | **Taille** | **Contraintes / Règles de calcul**                                        | **Commentaires**                |
|--------------------------|-------------------------------------------------|----------|------------|---------------------------------------------------------------------------|---------------------------------|
| `[nom_attribut_1]`        | [Description de l'attribut 1]                   | [Type]   | [Taille]   | [Contraintes]                                                             | [Commentaires]                  |
| `[nom_attribut_2]`        | [Description de l'attribut 2]                   | [Type]   | [Taille]   | [Contraintes]                                                             | [Commentaires]                  |
| `[nom_attribut_3]`        | [Description de l'attribut 3]                   | [Type]   | [Taille]   | [Contraintes]                                                             | [Commentaires]                  |

---

### Légende :

- **AI** : Auto Increment (Auto-incrémentation).
- **A** : Alphanumérique (VARCHAR).
- **I** : Integer (Entier).
- **D** : Date.

## Table: t_utilisateurs

| **Nom des attributs**    | **Description**                                 | **Type** | **Taille** | **Contraintes / Règles de calcul**                                        | **Commentaires**                |
|--------------------------|-------------------------------------------------|----------|------------|---------------------------------------------------------------------------|---------------------------------|
| `id_utilisateur`          | Numéro d'enregistrement de l'utilisateur        | AI       | 6          | Clé primaire, Auto-incrémentée                                             | NOT NULL                        |
| `nom_utilisateur`         | Nom de l'utilisateur                            | A        | 50         | NOT NULL                                                                  |                                 |
| `email_utilisateur`       | Adresse électronique de l'utilisateur           | A        | 255        | NOT NULL, UNIQUE                                                          |                                 |
| `date_naissance`          | Date de naissance                               | D        | 10         | NOT NULL                                                                  |                                 |
