**Intro**
- symfony console make:controler
- creation d'un controller/HomePageController
    templates/home_page/index.html.twig
    
# Creation de la base de données

## Configuration on du fichier .env   
*Symfony utilise un fichier .env pour stocker les informations de configuration, y compris celles liées à la base de données. Ouvrez le fichier .env à la racine de votre projet et configurez les informations de connexion à votre base de données :*
- Ligne 28 : DATABASE_URL="mysql://user:password@127.0.0.1:3306/db_name";
    - User : Remplacer par votre nom d'utilisateur MySQL
    - password : Remplacer par votre mot de passe MySQL
    - 127.0.0.1:3306 : adresse de votre serveur de base de données
    - db_name : Nom de votre base de données

### Creation de la base de donées
*Symfony fournit une commade pour créer la base de données defini dans la configuration*
- Ouvrir le serveur symfony serveur:start
- Executer la commande suivante dans le terminal : ```` symfony console doctrine:database:create ````
  <symfony console doctrine:database:create>
  Cela créera la base de données si elle n'existe pas encore

#### Creation d'une entité(table)
*Generer une entité (table) ou mettre à jour une existante* 
*Generer une entité dans symfony correspond à une table dans la bdd.*
- Executer la commande suivante dans le terminal  ````symfony console make:entity ````
    - Nom de la table
        > Brand
    - Add the ability to broadcast entity updates using Symfony UX Turbo? (yes/no) [no]:
        > no

    created: src/Entity/Brand.php
        *Creation de l'entité brand 
        - Cette entité sera utilisée pour gérer les informations sur des marques dans la bdd.
    created: src/Repository/BrandRepository.php
        - Creation du repository qui est un referentiel qui conteint la logique pour interagir avec une bdd pour une entité specifique.  
        *Un repository permet de centraliser les opérations de lecture (et éventuellement d'écriture) sur une table de base de données. Il suit le modèle de conception Repository Pattern, qui vise à isoler la logique d'accès aux données du reste de l'application.*

    - Ajout des proprieté (champs) de l'entitée
        > name
    - Ajoute du type a la proprieté
        > String
    - Details du type ( longueure etc ...)
        > 150
    - Ce champs peux il etre nul (yes/no)
        > no
    - Ajouter d'autres proprieté
        > enter pour non / sinon inserrer le nom de la nouvelle proprieté

##### Generation et execution de la migration

1. Generer une migration
*Maintenant que l'entité est créée, nous devons générer un fichier de migration pour appliquer ces changements à la base de données. Cela créera un fichier SQL pour ajouter la nouvelle table avec les colonnes spécifiées dans l'entité.*
- On execute la commande : ````symfony console make:migration ````
    Symfony genere un fichier de mirgration dans le dossier migration/version... qui contiendra les instrunction pour créer la table (brand)

2. Executer la migration
*Il faut ensuite appliquer la migration et crééer la table dans la base de données*
- On execute la commande : ````symfony console doctrine:migrations:migrate ````
    Symfony demandera de confirmer l'exécution de la migration. Tapez yes pour continuer.
    La table brand sera créée dans votre base de données.

# Résumé 
1. Configurer le fichier .env avec les informations de la base de données.

2. Créer la base de données :
    ```` symfony console doctrine:database:create ````
3. Créer une entité (table) :
    ````symfony console make:entity ````
4. Générer une migration :
    ````symfony console make:migration ````
5. Exécuter la migration :
    ````symfony console doctrine:migrations:migrate ````

# Creation du crud de l'entitié(table)
*Le terme CRUD désigne un ensemble d'opérations de base utilisées pour interagir avec une base de données ou un système de gestion de données. CRUD est un acronyme pour Create, Read, Update, Delete, qui sont les quatre opérations principales que l'on peut effectuer sur les données.*

## Explications
1. Create (Créer) :

Il s'agit de l'opération qui permet d'ajouter de nouvelles données dans une base de données.
Par exemple, dans un système de gestion de produits, cela correspondrait à ajouter un nouveau produit dans la base de données.
En SQL, cela se traduit généralement par une commande INSERT INTO.

2. Read (Lire) :

Cette opération permet de récupérer ou de lire des données déjà présentes dans la base de données.
C'est souvent utilisé pour afficher des informations à l'utilisateur ou pour récupérer des données pour des traitements.
En SQL, cela se traduit par une commande SELECT.

3. Update (Mettre à jour) :

Cette opération permet de modifier des données existantes dans la base de données.
Par exemple, on peut mettre à jour le prix d'un produit ou corriger une information erronée.
En SQL, cela se traduit par une commande UPDATE.

4. Delete (Supprimer) :

Cette opération permet de supprimer des données d'une base de données.
Par exemple, dans un système de gestion de produits, cela correspondrait à la suppression d'un produit devenu obsolète ou incorrect.
En SQL, cela se traduit par une commande DELETE.

### Creation du crud
*Lorsque vous exécutez ````symfony console make:crud ```` Symfony génère un contrôleur CRUD complet ainsi que les vues associées pour une entité donnée.*

- Voici ce qui est généré automatiquement :
  - Contrôleur CRUD : dans src/Controller/NomDuController.php
    Un fichier de contrôleur qui gère les actions de création, lecture, mise à jour et suppression.

- Templates Twig : dans ````templates/admin\brand````
    - Des fichiers de templates Twig pour chaque opération (liste des éléments, formulaire de création, formulaire de modification, etc.).

- Routes : que l'on peux voir avec ````symphony console debug:router````
    - Symfony génère les routes associées à chaque action (liste, création, mise à jour, suppression).

- On execute la commande ````symfony console make:crud````
    - Choisir le nom de l'entité(tables) 
        > Brand
    - Choisir le nom pour la class du controller (et du fichier php) 
        >Admin\BrandController 
            On ajoute un dossier Admin, pour plus d'organisation et de lisibilité car il va y avoir beaucoup de controller de class etc ...
    - Do you want to generate PHPUnit tests? [Experimental] (yes/no) [no]:
         > no
    - Creation de la structure cité plus haut :

        - Le Controleur :
        created: src/Controller/Admin/BrandController.php
            - Il gere les actions suivante
              - Index (brand_index) : Liste tous les enregistrements de l'entité.
              - New (brand_new) : Crée un nouvel enregistrement.
              - Show : Affiche les détails d'un enregistrement spécifique.
              - Edit : Modifie un enregistrement existant.
              - Delete : Supprime un enregistrement.

        created: src/Form/BrandType.php
            - définir la structure d'un formulaire pour l'entité Brand
            - Dans le cadre des opérations CRUD (Create, Read, Update, Delete) il permet de générer des formulaires pour la création et la modification d'objets de type Brand dans votre application.
            - Définit les champs du formulaire qui correspondent aux propriétés de l'entité
            - Le fichier BrandType.php permet de séparer la logique de la présentation des formulaires (c'est-à-dire la définition des champs) de la logique du contrôleur ou du modèle de données.

        - Formulaire de suppression d'une marque.
        created: templates/admin/brand/_delete_form.html.twig
            - Formulaire permettant de supprimer une marque. Il est généralement inclus dans d'autres vues comme show.html.twig ou index.html.twig pour permettre à l'utilisateur de supprimer un élément. Il utilise une requête HTTP POST avec un bouton pour confirmer la suppression.
        
        - Formulaire partagé pour la création et la modification des marques.
        created: templates/admin/brand/_form.html.twig
            - formulaire commun utilisé à la fois pour la création et la modification des marques. Il est réutilisé dans les templates new.html.twig et edit.html.twig pour éviter la redondance du code.

        - Vue pour modifier une marque existante.
        created: templates/admin/brand/edit.html.twig
            - page de modification d'une marque. Il inclut généralement le formulaire d'édition (utilisant _form.html.twig) et peut aussi inclure un lien pour retourner à la liste des marques.

        created: templates/admin/brand/index.html.twig
            - affiche la liste de toutes les marques présentes dans la base de données. Il contient généralement un tableau ou une liste des marques, avec des actions possibles pour les voir, les modifier ou les supprimer.

        created: templates/admin/brand/new.html.twig
            - afficher le formulaire permettant de créer une nouvelle marque. Il inclut généralement _form.html.twig pour afficher le formulaire de création.

        created: templates/admin/brand/show.html.twig
            - affiche les détails d'une marque spécifique. Il inclut généralement un lien pour modifier ou supprimer la marque, ainsi qu'un lien pour revenir à la liste.

qu'est ce qu'un repository qui se créer en meme temps que l'on créer l'entité
    Logique du repository non compris

c'est quoi les 
composer require --dev symfony/maker-bundle
c'est quoi les Deprecations 1