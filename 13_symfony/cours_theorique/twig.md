# Introduction à Twig
*Twig est un **moteur de templates** utilisé principalement dans les projets Symfony, mais également dans d'autres frameworks PHP. Il permet de générer des fichiers HTML dynamiques à partir de templates, en intégrant des variables, des boucles, des conditions, et d'autres éléments dynamiques. L'idée derrière Twig est de séparer la logique d'affichage de la logique métier (qui est souvent implémentée dans le code PHP), ce qui facilite la gestion du front-end et du back-end dans une application web.*

## Caractéristiques principales de Twig

1. **Séparation logique / présentation** : 
   Twig permet de séparer la logique de présentation des données, ce qui signifie que l'affichage des données est géré dans des fichiers de template séparés du code PHP. Cela rend le code plus lisible et plus maintenable.

2. **Syntaxe simple et expressive** : 
   Twig utilise une syntaxe qui est à la fois intuitive et puissante. Elle est proche d’autres langages de templating populaires, comme Jinja (utilisé dans le framework Python Flask/Django).

## Structure de base de Twig

Twig utilise trois types de délimiteurs :
- **Double accolades `{{ }}`** : pour afficher des variables.
- **Paires de `{% %}`** : pour écrire des structures de contrôle (conditions, boucles, etc.).
- **Accolades avec `#` `{# #}`** : pour les commentaires.

### 1. Afficher des variables
*Pour afficher une variable passée depuis le contrôleur, vous utilisez les doubles accolades `{{ }}`.*
Exemple :
`twig`
    `<p>Bonjour, {{ name }} !</p>`
Si la variable name est definie dans le controleur Symfony comme ceci :
`return $this->render('hello.html.twig', ['name' => 'Alice']);`

le rendu sera alors :
`<p>Bonjour, Alice !</p>`

### 2. Conditions (if)
*Twig permet d’évaluer des conditions avec des blocs `{% if %}.`*
Exemple :
`{% if user.isLoggedIn %}`
    `<p>Bienvenue, {{ user.name }} !</p>`
`{% else %}`
    `<p>Bienvenue, cher invité !</p>`
`{% endif %}`
Cela affichera un message différent en fonction de l'état de connexion de l'utilisateur.

### 3. Boucles (for)
*Les boucles en Twig sont gérées via la balise `{% for %}.`*
Exemple :
`<ul>`
    `{% for product in produtcs %}`
        `<li>{{ product.name }} - {{ product.price }} €</li>`
    `{% else %}`
        `<li>Aucun produit disponible</li>`
    `{% endfor %}`
`</ul>`
Ce code affiche une liste de produits, et s'il n'y a pas de produits dans la variable products, il affiche "Aucun produit disponible".

### 4. Heritage des templates
*Twig utilise le concept d'héritage de templates pour permettre une structure modulaire et réutilisable. Vous pouvez définir un template de base, puis le réutiliser dans d'autres templates en le personnalisant.*

La template de base se trouve :
my_project_directory
└── templates
    └── home_page
        └── base.html.twig

Il peux y avoir une template enfant egalement, qui peut "hériter" du template de base et remplacer certains blocs.
└── templates
    └── home_page
        └── child.html.twig
(Cela permet de définir une structure commune pour toute l'application et de n'écrire que les parties spécifiques dans les templates enfants.)






