<?php
    // Sommaire :
        // 1. PHP (Hypertext Preprocessor) : 
            // Langage de programmation serveur utilisé pour développer des sites web dynamiques.

        // 2. Variable : 
            // Conteneur qui stocke des données. En PHP, une variable commence par un $.

        // 3. Chaîne de caractères (string) : 
            // Type de données qui représente du texte. En PHP, une chaîne est entourée de guillemets simples (') ou doubles (").

        // 4. Nombre entier (integer) : 
            // Type de données représentant un nombre entier sans décimales.

        // 5. Nombre à virgule flottante (float) : 
            // Type de données pour un nombre décimal.

        // 6. Tableau (array) : 
            // Structure de données permettant de stocker plusieurs valeurs sous une même variable.

        // 7. Constante : 
            // Une variable dont la valeur ne peut pas être changée une fois définie.

        // 8. Fonction : 
            // Un bloc de code réutilisable qui effectue une tâche spécifique.

        // 9. echo : 
            // Instruction pour afficher du texte ou la valeur d'une variable.

        // 10. include / require : 
            // Ces mots-clés permettent d'inclure des fichiers PHP dans un autre fichier.

        // 11. Condition (if / else) : 
            // Permet d'exécuter un bloc de code en fonction de la véracité d'une condition.

        // 12. Boucles (for, while, foreach) : 
            // Les boucles permettent de répéter un bloc de code plusieurs fois.

        // 13. isset() / empty() : 
            // isset() vérifie si une variable est définie et n'est pas NULL. empty() vérifie si une variable est vide.

        // 14. Formulaire (superglobales $_GET et $_POST) : 
            // Les formulaires HTML peuvent envoyer des données via GET ou POST. Ces données sont récupérables via $_GET et $_POST.

        // 15. Session : 
            // Les sessions permettent de stocker des informations utilisateur accessibles à travers différentes pages d'un site.

        // 16. Cookie : 
            // Un cookie est un petit fichier stocké sur l'ordinateur du client pour conserver des informations sur une longue durée.

        // 17. Classe (OOP - Programmation Orientée Objet) : 
            // Une classe est un modèle pour créer des objets avec des propriétés et des méthodes.

        // 18. GET / POST : 
            // Ce sont deux méthodes d'envoi de données via un formulaire. GET envoie les données via l'URL, POST les envoie dans le corps de la requête (plus sécurisé).

        // 19. SQL (Structured Query Language) : 
            // SQL est utilisé pour interagir avec des bases de données. En PHP, on utilise PDO ou MySQLi pour exécuter des requêtes SQL.

        // 20. Die / Exit : 
            // die() et exit() arrêtent immédiatement l'exécution du script.

        // 21. Commentaires : 
            // Les commentaires sont des notes dans le code, non exécutées, utiles pour expliquer des sections du script.

 
    
// 1. PHP (Hypertext Preprocessor) :
    // Langage de programmation serveur utilisé pour développer des sites web dynamiques.

// 2. Variable :
    //Conteneur qui stocke des données. En PHP, une variable commence par un $ (ex : $nom).
        $age = 25;
        // La variable $nom contient la chaîne de caractères "Alice", et la variable $age contient le nombre entier 30. On peut accéder et modifier ces valeurs à tout moment dans le script.

// 3. Chaîne de caractères (string) :
    // Type de données qui représente du texte. En PHP, une chaîne est entourée de guillemets simples (') ou doubles (").
        "$nom est un développeur.";
        // La variable $message contient une chaîne de texte. L'instruction echo affiche le texte "Bonjour, monde!" sur la page web.

// 4. Nombre entier (integer) :
    // Type de données représentant un nombre entier sans décimales.
        $age = 25;
        // La variable $age contient un nombre entier. L'instruction echo affiche "Âge: 25" en concaténant la chaîne de texte avec la variable.

// 5. Nombre à virgule flottante (float) :
    // Type de données pour un nombre décimal.
        $prix = 19.99;
        // La variable $prix contient un nombre décimal (19.99). PHP affichera "Le prix est : 19.99 euros."

// 6. Tableau (array) :
    // Structure de données permettant de stocker plusieurs valeurs sous une même variable.
        $fruits = array('pomme', 'banane', 'cerise');
        // Le tableau $fruits contient trois éléments. L'instruction echo $fruits[0] affiche le premier élément du tableau, soit "pomme".

// 7. Constante :
    // Une variable dont la valeur ne peut pas être changée une fois définie.
        define("PI", 3.14159);
        // La constante PI est définie avec la valeur 3.14159. Une fois définie, elle ne peut plus être modifiée. PHP affichera "La valeur de PI est 3.14159".

// 8. Fonction :
    //Un bloc de code réutilisable qui effectue une tâche spécifique. On peut passer des arguments à une fonction.
        function saluer($nom) {
            echo "Bonjour, " . $nom;
        }
    // La fonction saluer() prend un argument $nom et retourne une chaîne de caractères. PHP affichera "Bonjour, Alice" après avoir exécuté la fonction.

// 9. echo :
    // Instruction pour afficher du texte ou la valeur d'une variable.
        echo "Hello, world!";
    
// 10. include / require :
    // Ces mots-clés permettent d'inclure des fichiers PHP dans un autre fichier.
    // include n'arrête pas le script si le fichier n'est pas trouvé, alors que require le fait.
        include('header.php'); // Inclut un fichier appelé 'header.php'
        echo "Contenu de la page";

        require('config.php'); // Inclut un fichier 'config.php'
        echo "Suite du script"; // Si 'config.php' est manquant, cette ligne ne sera jamais exécutée.
        // include continue l'exécution même si le fichier est manquant, tandis que require génère une erreur fatale et arrête le script.

// 11. Condition (if / else) :
    // Permet d'exécuter un bloc de code en fonction de la véracité d'une condition.
        $age = 20;
        if ($age >= 18) {
            echo "Vous êtes majeur";
        } else {
            echo "Vous êtes mineur";
        }
    // si l'âge est supérieur ou égal à 18, PHP affiche "Vous êtes majeur", sinon il affiche "Vous êtes mineur".

// 12. Boucles (for, while, foreach) :
    // Les boucles permettent de répéter un bloc de code plusieurs fois.
        
    // Boucle for :
        for ($i = 0; $i < 5; $i++) {
            echo $i;
        }
        // for : Répète le code tant que la condition est vraie, ici il affichera les chiffres de 0 à 4.

    // Boucle while :
        $x = 0; 
        while ($x < 5) {
        echo $x;
        $x++;
        }
        // while : Répète le code tant que $x est inférieur à 5.

    // Boucle foreach :
        $fruits = array('pomme', 'banane', 'cerise');
        foreach ($fruits as $fruit) {
        echo $fruit;
        }
        // foreach : Parcourt chaque élément du tableau $fruits et les affiche.
        
// 13. isset() / empty() :
    // isset() est une fonction qui vérifie si une variable est définie et n'est pas NULL.
        $nom = "Alice";
        if (isset($nom)) {
            echo "La variable \$nom est définie.";
        }
        // Avec isset(), si la variable $nom est définie, le message "La variable $nom est définie." sera affiché.

    // empty() vérifie si une variable est vide. Une variable est considérée comme vide si elle vaut 0, false, NULL, une chaîne vide "", ou un tableau vide [].
        $nom = "";
        if (empty($nom)) {
        echo "La variable \$nom est vide.";
        }
        // Avec empty(), si $nom est une chaîne vide, la condition sera vraie et PHP affichera "La variable $nom est vide."

// 14. Formulaire (superglobales $_GET et $_POST) :
    // Les formulaires HTML peuvent envoyer des données via GET ou POST. Ces données sont récupérables via $_GET et $_POST.
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['nom'])) {
                echo "Nom soumis : " . $_POST['nom'];
            }
        } else {
            echo '<form method="POST" action="">';
            echo '<input type="text" name="nom" placeholder="Votre nom">';
            echo '<input type="submit" value="Envoyer">';
            echo '</form>';
        }
            // Après soumission du formulaire, le script PHP affichera "Nom soumis : Alice" (ou un autre nom soumis via le formulaire).

// 15. Session :
    // Les sessions permettent de stocker des informations utilisateur accessibles à travers différentes pages d'un site.
        session_start();
        $_SESSION['utilisateur'] = "Alice";
        echo "Bienvenue, " . $_SESSION['utilisateur'];
        // Exécute ce code pour voir "Bienvenue, Alice" s'afficher. La variable de session est conservée tant que la session est active.

// 16. Cookie :
    // Un cookie est un petit fichier stocké sur l'ordinateur du client pour conserver des informations sur une longue durée.
        setcookie("nom_utilisateur", "Alice", time() + (86400 * 30)); // Cookie valide 30 jours
        echo "Cookie défini : " . $_COOKIE['nom_utilisateur'];
        // Ce code définit un cookie et affiche "Cookie défini : Alice" dans le navigateur, à condition que le cookie ait bien été créé.

// 17. Classe (OOP - Programmation Orientée Objet) :
    // Une classe est un modèle pour créer des objets avec des propriétés et des méthodes.
        class Voiture_lexique {
            public $marque;
        
            public function demarrer() {
                echo "La voiture démarre<br>";
            }
        }
        
        $maVoiture = new Voiture_lexique();
        $maVoiture->marque = "Toyota";
        $maVoiture->demarrer();
        // Ce code crée une instance de la classe Voiture et affiche "La voiture démarre" dans le navigateur.

// 18. GET / POST :
    // Ce sont deux méthodes d'envoi de données via un formulaire. GET envoie les données via l'URL, POST les envoie dans le corps de la requête (plus sécurisé).
        echo "Nom envoyé via GET : " . $_GET['nom'];

// 19. SQL (Structured Query Language) :
    // SQL est utilisé pour interagir avec des bases de données. En PHP, on utilise PDO ou MySQLi pour exécuter des requêtes SQL.
        $pdo = new PDO('mysql:host=localhost;dbname=test', 'utilisateur', 'motdepasse');
        $sql = "SELECT * FROM utilisateurs";
        $stmt = $pdo->query($sql);

        while ($row = $stmt->fetch()) {
            echo "Nom : " . $row['nom'] . "<br>";
        }
        // Ce code se connecte à une base de données MySQL, exécute une requête pour récupérer les utilisateurs, et affiche chaque nom.

// 20. Die / Exit :
    // die() et exit() arrêtent immédiatement l'exécution du script.
        if (!file_exists("config.php")) {
            die("Erreur : le fichier config.php est introuvable.");
        }
        echo "Suite du script";
        // Si config.php est introuvable, PHP arrêtera le script et affichera "Erreur : le fichier config.php est introuvable."

// 21. Commentaires :
    // Les commentaires sont des notes dans le code, non exécutées, utiles pour expliquer des sections du script.
        // Commentaire sur une ligne
        $nom = "Alice"; // Déclaration d'une variable

        /*
        Ceci est un commentaire
        sur plusieurs lignes
        */
        echo "Nom : " . $nom;
        // Les commentaires sont là pour t'aider à te repérer dans le code. Le navigateur affichera "Nom : Alice", mais pas les commentaires.





        

    
        