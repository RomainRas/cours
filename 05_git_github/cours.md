!image(assets readme/capture.png)

- [INSTALATION](#instalation)
- [CREER UN SOMAIRE](#creer-un-somaire)
- [IMPORTER LES MODIFS SUR GitHub](#importer-les-modifs-sur-github)
- [COMMENT MODIFIER SON TEXT et SOMMAIRE](#comment-modifier-son-text-et-sommaire)
- [INSERTION D'IMAGE](#insertion-dimage)
- [LES BRANCHES](#les-branches)

# INSTALATION

1-- git init

2-- git add index.html ou git add . (pour tous les fichiers)

3-- git commit -m "first commit"

4-- git branch -M main

5-- git remote add origin https://github.com/pseudo/depot.git

6-- git push -u origin main

# CREER UN SOMAIRE

sur VSC, CTRL + SHIFT + P
Rechercher Markdown ... create table contents
générer automatiquement un sommaire avec tous les titres du readme


# IMPORTER LES MODIFS SUR GitHub

1-- On définit les fichiers à ajouter
``` >git add . ou > git add "nom du fichier ``` 

2-- On créé un commit contenant les fichiers ajoutés
``` >git commit -m "nom du commit" ```

3-- On pousse le commit(contenant les fichiers) sur le dépôt de Github
``` >git push ```
# COMMENT MODIFIER SON TEXT et SOMMAIRE

1-- Citation
> = Citation niveau 1 <
>> = citation niveau 2 <<

2-- Texte en gras
** = **Texte en gras**

3-- Texte en italique
_ = _Texte en Italique_

4-- Citer du code
``` 
    Trois accents graves, citation de code
```

# INSERTION D'IMAGE
```![MCD](./assets/Capture.PNG) ```
![MCD](./assets/Capture.PNG)

# LES BRANCHES
-- Afficher toutes les branches : ``` > git branch ```

-- Créer une branche : ``` > git branch nomdelabranche ```

-- Changer de branche : ``` > git checkout nomdelabranche ```

-- Fusionner une branche : ``` > git merge nomdelabranche ```

-- Renommer une branche active : ``` > git branch -m nouveaunomdebranche ```

-- Renommer une branche non active : ``` > git branch -m anciennomdebranche nouveaunomdebranche ```

-- Supprimer une branche : ``` > git branch -d nomdelabranche ```