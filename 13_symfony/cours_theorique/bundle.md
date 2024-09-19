# Bundle
## Vich Uploader Bundle
### Explication
*Le VichUploaderBundle est un outil pour Symfony qui simplifie la gestion des uploads de fichiers (comme des images ou des documents). Il automatise des tâches importantes, comme :*
- Télécharger et stocker un fichier lié à une entité (par exemple, une image de profil liée à un utilisateur).
- Renommer automatiquement les fichiers pour éviter les doublons.
- Supprimer le fichier quand l'entité est supprimée dans la base de données.
- Générer facilement des liens vers les fichiers pour les afficher dans l'application.
- En gros, ce bundle te permet de gérer les fichiers associés à des entités sans devoir écrire tout le code toi-même.

#### Installation dans symfony
- On va se servir dans ce cas pour se servir pour les images 
    - Recherche du bundle
    https://packagist.org/
    └── rechercher vish
        └── composer require vich/uploader-bundle
            └── sur le site en dessous il y a un listing par rapport à la version
            └── plus bas il y a toutes les infos de base d'utilisation + l'acces au git du bundle 
                cliquer bien sur le bon lien, en l'occurence celui qui indique pour la documentation d'usage ( donc le guide d'utilisation )
                https://github.com/dustin10/VichUploaderBundle
        c'est un bundle qui va faciliter la gestion des images dans le projet symfony
        composer require 

    - Installation du bundle dans le projet symfony
        - vich/uploader-bundle
            └── Do you want to execute this recipe?
            [y] Yes
            [n] No
            [a] Yes for all packages, only for the current installation session
            [p] Yes permanently, never ask again for this project = on va utiliser ceci pour toujours executer cette recettes à chaque fois qu'on demande l'instalation d'un bundle pour ce projet
            (defaults to n):(donc p)

#### Création du lien entre l'image et la table qui correspond
nous sommes dans notre entité src\Entity\Brand.php
les champs orm sont des doctrines en lien avec la bdd, donc on va les créer avec des commandes
les champs qui n'ont pas d'orm doctrine serons à inserer manuellement
    1 - configurer correctement le fichier yaml vich_uploader.yaml ( voir le fichier )
        - On remplace le fichier products par brands (s car plusieurs marques)
    2 - on configure le ficher brand.php comme indiqué sur la doc git du bundle
        
        - on copie donc #[Vich\Uploadable]
          - on copie le use Vich\UploaderBundle\Mapping\Annotation as Vich; pour pouvoir se servir de vich et avoir son chemin d'acces
        - #[Vich\UploadableField(mapping: 'products', fileNameProperty: 'imageName', size: 'imageSize')] private ?File $imageFile = null;
            - Attention ! Il faut bien remplaccer le mapping:'products' par le 'mapping:brands'
            - On copie cette ligne car elle n'est pas une orm
            il y a une message d'erreur donc il fauit rajouter son use ( chemin d'acces)
            - use Symfony\Component\HttpFoundation\File\File;
        
        - On va utiliser la console pour ajouter les lignes orm car ce sont des doctrines en liens avec la bdd pour chaque nouvelle propriété sur l'entité brand pour que le bundle fonctionne avec notre table/entité (brand)
            - imageName
                1. symfony console make:entity
                    Brand -> imageName -> string -> 150 -> null ( yes )
                    - l'utilisation de la commande nous permet de créer les getteur et setteur de notre objet
                            public function setImageName(?string $imageName): void
                            {
                                $this->imageName = $imageName;
                            }

                            public function getImageName(): ?string
                            {
                                return $this->imageName;
                            }
                2. Quand nous aurons créer tous nos objet, cela pourra nous créer cette ligne grace à la migration (symfony.exe console make:migration)
                    = #[ORM\Column(nullable: true)]
                      private ?string $imageName = null;
            - imageSize
                1. symfony console make:entity
                    (on est deja dans brand) -> imageSize -> (?pour demander les types possible) integer -> null 
                    - l'utilisation de la commande nous permet de créer les getteur et setteur de notre objet
                            public function setImageSize(?int $imageSize): void
                            {
                                $this->imageSize = $imageSize;
                            }

                            public function getImageSize(): ?int
                            {
                                return $this->imageSize;
                            }
                2. Quand nous aurons créer tous nos objet, cela pourra nous créer cette ligne grace à la migration (symfony.exe console make:migration)
                    = #[ORM\Column(nullable: true)]
                      private ?int $imageSize = null;
            
            - updatedAt
                1. symfony console make:entity
                    (on est deja dans brand ) updateAt -> datetime_immutable -> null
                    #[ORM\Column(nullable: true)]
                2. Quand nous aurons créer tous nos objet, cela pourra nous créer cette ligne grace à la migration (symfony.exe console make:migration)
                    = #[ORM\Column(nullable: true)]
                      private ?\DateTimeImmutable $updatedAt = null;

            - symfony.exe console make:migration 

            - console doctrine:migrations:migrate

            - symfony console cache:clear

on a ajouter des propriété à notre entité/table brand apres la creation du CRUD, dans le dossier BrandType.php nous allons donc ajouter dans le builder directement
Nous voulons ajouter la propriété imageFile or celle ci n'est pas une ORM ( pas linké sur la bdd )
-> comment ajouter la propriete image file dans le dossier BrandType

            ->add('imageFile', FileType::class,[
                'label'=> 'Choix de l\'image de la marque',
                'required' => false
            ]) // Symfony nous crée le : use Symfony\Component\Form\Extension\Core\Type\FileType; lorsque l'on selection la completion du FileType::class

On veux afficher dans notre index des marque l'image de la marque
- L'image est une propriété de la marque donc on va aller chercher la propriété image de l'entité/table
        on va utiliser le dump and die
            - dump and die consiste à afficher le contenu d'une variable, puis à arrêter l'exécution du script  juste après.
                //  Dump and die en PHP :
                    var_dump($variable);
                    die();
                {# Dump en Twig #}
                {{ dump(variable) }}
        dans le brandcontroller la valeur de brand est un options brands qui utilise l'option findAll grace au repository
        'brands' => $brandRepository->findAll(),
            - qui est utilisé grace au use App\Repository\BrandRepository;
            - qui est affiché grace au brand/index.html.twig
        On veux proceder à de l'affichage donc on va modifier le fichier brand\index.html.twig
        code :
        <tbody>
        {% for brand in brands %}
        {{ dump(brands)}} ici on ajoute le dump and die soit {{ dump(variable) }}
            // dump resume 
            <tr>
                {# <td>{{ brand.id }}</td> #}
                <td>{{ brand.name }}</td> {# ici on utilise le dump and die #}
                <td>
                    <a href="{{ path('app_admin_brand_show', {'id': brand.id}) }}" class="btn btn-secondary">show</a>
                    <a href="{{ path('app_admin_brand_edit', {'id': brand.id}) }}" class="btn btn-primary">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan="2">Aucune marque n'a été créée</td>
            </tr>
        {% endfor %}
        </tbody>
        On peux lui appliquer du style dans assets\styles\app.css




on créer une class d'objet nommé Shoe et ajouter les proprieté suivante :

model string
src/Entity/Shoe.php
description textarea
imageFile(non mappé), 
imageName(string), 
imageSize(integer), 
updateAt dti, brand relation

on utilise la commande make entity

sauf pour imageFile(non mappé ou on resuit a nouveau la meme procedure que plus haut, sauf qu'on remplace le mapping brands par shoes) faut que je le réécrive poto

on passe au modele relationelle pour le lient entre les deux entitées/table brand et shoe
symfony console make:entity

 Class name of the entity to create or update (e.g. GrumpyGnome):
 > brand

 Your entity already exists! So let's add some new fields!

 New property name (press <return> to stop adding fields):
 > shoe

 Field type (enter ? to see all types) [string]:
 > relation

 What class should this entity be related to?:
 > Shoe ( clé primaire )

What type of relationship is this?
 ------------ ------------------------------------------------------------------ 
  Type         Description                                                       
 ------------ ------------------------------------------------------------------
  ManyToOne    Each Brand relates to (has) one Shoe.
               Each Shoe can relate to (can have) many Brand objects.

  OneToMany    Each Brand can relate to (can have) many Shoe objects.
               Each Shoe relates to (has) one Brand.

  ManyToMany   Each Brand can relate to (can have) many Shoe objects.
               Each Shoe can also relate to (can also have) many Brand objects.

  OneToOne     Each Brand relates to (has) exactly one Shoe.
               Each Shoe also relates to (has) exactly one Brand.
 ------------ ------------------------------------------------------------------
( ici c'est les cardinalité
    - rajouter l'explication des cardinalité, ca fait pas de mal)

A new property will also be added to the Shoe class so that you can access and set the related Brand object from it.

  New field name inside Shoe [brand]:
 >      

 Is the Shoe.brand property allowed to be null (nullable)? (yes/no) [yes]:
 > no

 Do you want to activate orphanRemoval on your relationship?
 A Shoe is "orphaned" when it is removed from its related Brand.
 e.g. $brand->removeShoe($shoe)

 NOTE: If a Shoe may *change* from one Brand to another, answer "no".

 Do you want to automatically delete orphaned App\Entity\Shoe objects (orphanRemoval)? (yes/no) [no]:
 > no

 updated: src/Entity/Brand.php
 updated: src/Entity/Shoe.php

 collection ? et ca change en fonction de la cardinalité ?

 Nous créons ensuite les fichier de migration et on fait la migration
 symfony console make:migration
  symfony console doctrine:migrations:migrate
PS D:\my_project_directory> symfony console make:crud

 The class name of the entity to create CRUD (e.g. TinyPuppy):
 > Shoe

 Choose a name for your controller class (e.g. ShoeController) [ShoeController]:
 > Admin\ShoeController

 Do you want to generate PHPUnit tests? [Experimental] (yes/no) [no]:
 >

 created: src/Controller/Admin/ShoeController.php
 created: src/Form/ShoeType.php
 created: templates/admin/shoe/_delete_form.html.twig
 created: templates/admin/shoe/_form.html.twig
 created: templates/admin/shoe/edit.html.twig
 created: templates/admin/shoe/index.html.twig
 created: templates/admin/shoe/new.html.twig
 created: templates/admin/shoe/show.html.twig

 
  Success! 
 

 Next: Check your new CRUD by going to /admin/shoe/
