1. Entité (Entity)
    - Une entité est une classe PHP qui représente une table dans la base de données. Chaque instance de l'entité correspond à une ligne dans la table. Elle définit la structure des données (colonnes et leurs types) ainsi que les relations avec d'autres entités. Les entités sont gérées par l'ORM Doctrine dans Symfony.
    - Exemple dans un fichier :
        <?php
        namespace App\Entity;

        use Doctrine\ORM\Mapping as ORM;

        #[ORM\Entity]
        class Brand
        {
            #[ORM\Id]
            #[ORM\GeneratedValue]
            #[ORM\Column(type: 'integer')]
            private $id;

            #[ORM\Column(type: 'string', length: 255)]
            private $name;

            // Getters et Setters...
        }
        ?>

2. Repository
    - Un repository est une classe générée automatiquement ou manuellement, utilisée pour interagir avec la base de données en exécutant des requêtes liées à une entité spécifique. Il encapsule la logique de récupération des données et permet d'écrire des méthodes de requêtes personnalisées.
    - Exemple :
        <?php
        $brands = $brandRepository->findAll(); // Récupère toutes les marques
        ?>

3. Controller
    - Le contrôleur est une classe qui gère la logique métier de l'application. Il reçoit les requêtes HTTP, traite les données, et retourne une réponse HTTP. Il est généralement utilisé pour coordonner la récupération de données via des services ou des repositories, et pour renvoyer des vues à l'utilisateur.
    - Exemple dans un fichier :
        <?php
        namespace App\Controller;

        use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
        use Symfony\Component\HttpFoundation\Response;
        use Symfony\Component\Routing\Annotation\Route;

        class BrandController extends AbstractController
        {
            #[Route('/brand/new', name: 'brand_new')]
            public function new(): Response
            {
                // Traitement et réponse
                return $this->render('brand/new.html.twig');
            }
        }
        ?>
4. Formulaire (Form)
    - Les formulaires dans Symfony permettent de gérer facilement les formulaires HTML avec la validation des données et la gestion des erreurs. Les formulaires sont définis dans des classes spécifiques appelées FormType, où les champs et leur configuration sont décrits.
    - Exemple :
        use Symfony\Component\Form\Extension\Core\Type\TextType;

        $builder->add('name', TextType::class, [
            'label' => 'Nom de la marque',
            'attr' => ['class' => 'form-control']
        ]);

5. Twig ( voir cours twig )
    - Twig est le moteur de templates utilisé par Symfony pour générer des fichiers HTML dynamiques. Il permet d'intégrer des variables dans les templates, d'écrire des boucles, des conditions, et de réutiliser des fragments de code avec l'héritage des templates.
    - Exemple :
    <h1>{{ brand.name }}</h1>
    <p>{{ brand.description }}</p>

6. Annotations
    - Les annotations sont des commentaires spéciaux que Symfony utilise pour configurer des éléments comme les routes, les entités, ou les services directement dans le code. Les annotations les plus courantes sont celles des routes.
    - Exemple :
        #[Route('/brand/{id}', name: 'brand_show')]

7. Route
    - Les routes définissent les URL de l'application et mappent ces URL aux actions dans les contrôleurs. Elles peuvent être configurées via des annotations ou des fichiers de configuration.
    - Exemple d'annotation de route :
        #[Route('/brand/new', name: 'brand_new')]

8. Service
    - Un service est une classe qui contient de la logique réutilisable dans votre application, comme l'envoi d'e-mails ou la gestion des fichiers. Symfony encourage une architecture orientée services pour rendre le code modulaire et maintenable.

    - Les services sont définis dans des fichiers de configuration comme services.yaml ou automatiquement découverts grâce à l'autoconfiguration.

9. Doctrine
    - Doctrine est un ORM (Object-Relational Mapping) utilisé dans Symfony pour interagir avec la base de données. Il permet de manipuler les données sous forme d'objets PHP plutôt que d'écrire des requêtes SQL. Doctrine gère les entités, les relations entre elles, et les migrations de base de données.

10. Migration
    - Une migration est un fichier qui contient des instructions SQL pour mettre à jour la structure de la base de données. Les migrations sont générées automatiquement lorsque vous modifiez les entités et que vous souhaitez synchroniser la base de données.
    - Commande :
        symfony console make:migration

11. Template
    - Un template est un fichier Twig qui définit la structure HTML de la page. Il peut inclure des variables dynamiques transmises par le contrôleur et peut étendre d'autres templates pour réutiliser du code (héritage).
    - Exemple :
        {% extends 'base.html.twig' %}

        {% block body %}
            <h1>Liste des marques</h1>
            <ul>
                {% for brand in brands %}
                    <li>{{ brand.name }}</li>
                {% endfor %}
            </ul>
        {% endblock %}

12. Commandes Symfony
    - Les commandes Symfony sont des scripts exécutables via la console qui permettent de gérer divers aspects de l'application, comme la génération de code, la gestion de la base de données, etc.
    - Exemple utiles
        Créer une entité : php bin/console make:entity
        Créer un formulaire : php bin/console make:form
        Lancer un serveur de développement : php bin/console server:run
        Voir les routes : php bin/console debug:router

13. Bundle
    - Un bundle est un paquetage ou module réutilisable dans Symfony. Un bundle peut contenir du code PHP, des templates, des services, et des configurations qui peuvent être partagés et réutilisés dans plusieurs projets Symfony.

14. Form Themes (Thèmes de Formulaire)
    - Les thèmes de formulaire permettent de styliser les formulaires Symfony. Par exemple, en utilisant le thème Bootstrap pour donner une apparence moderne à vos formulaires.
        Exemple de configuration du thème Bootstrap :
        └── config
            └── packages
                └── twig.yaml
                        twig:
                            form_themes:
                                - 'bootstrap_5_layout.html.twig'




