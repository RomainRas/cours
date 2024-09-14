<?php

// 1. Définition des inclusions :
    // Les inclusions permettent d'importer le contenu d'un fichier dans un autre fichier.
    // Cela permet de réutiliser du code sans le répéter.


// 2. Include et Require :

    // a) INCLUDE :
        // include() insère le contenu d'un fichier dans un autre. Si le fichier n'est pas trouvé, une erreur est affichée mais le script continue.
        echo "Début du script<br>";
        include('header.php'); // Inclut le fichier header.php s'il existe
        echo "Suite du script après include<br>";

        // Si le fichier header.php contient :
        // <h1>Bienvenue sur mon site</h1>
        // Le résultat sera :
        // Début du script
        // Bienvenue sur mon site
        // Suite du script après include

        // Si le fichier header.php est manquant, un avertissement est affiché mais le script continue :
        // Warning: include(header.php): failed to open stream...
        // Début du script
        // Suite du script après include

    // b) REQUIRE :
        // require() fonctionne comme include(), mais arrête l'exécution si le fichier est manquant.
        echo "Début du script<br>";
        require('config.php'); // Si le fichier est absent, le script s'arrête
        echo "Suite du script après require<br>";

        // Si le fichier config.php est manquant, une erreur fatale est générée :
        // Fatal error: require(): Failed opening required 'config.php'...


// 3. Différence entre include() et require() :
   
    // - include() : continue le script même si le fichier est manquant.
    // - require() : arrête le script en cas de fichier manquant.


// 4. include_once() et require_once() :
    // Ces fonctions empêchent d'inclure le même fichier plusieurs fois.

    // a) INCLUDE_ONCE :
        // include_once() vérifie si le fichier a déjà été inclus. Si c'est le cas, il ne l'inclut pas une seconde fois.
        include_once('header.php');
        include_once('header.php'); // Ignoré si déjà inclus

    // b) REQUIRE_ONCE :
        // require_once() fonctionne de la même manière que require(), mais n'inclut le fichier qu'une seule fois.
        require_once('config.php');
        require_once('config.php'); // Ignoré si déjà inclus


// 5. Bonnes pratiques :
    // - Utilisez include_once() et require_once() pour éviter des inclusions multiples accidentelles.
    // - Utilisez require() pour les fichiers critiques (comme une configuration), et include() pour les fichiers non essentiels (comme l'en-tête ou le pied de page).


// 6. Exemple pratique avec un fichier config.php pour la configuration et des fichiers header.php et footer.php pour la structure :

    // Exemple d'un fichier principal index.php :

    // Inclusion du fichier de configuration
    require('config.php');

    // Inclusion de l'en-tête
    include('header.php');

    // Contenu principal de la page
    echo "<h1>Page d'accueil</h1>";

    // Inclusion du pied de page
    include('footer.php');


    // Contenu des autres fichiers :

    // Fichier header.php :
    // <header>
    //     <h1>Mon Site Web</h1>
    // </header>

    // Fichier footer.php :
    // <footer>
    //     <p>&copy; 2024 Mon Site Web</p>
    // </footer>

    // Fichier config.php :
    /*
    // Configuration de la connexion à la base de données
    $db_host = 'localhost';
    $db_name = 'ma_base_de_donnees';
    $db_user = 'root';
    $db_pass = 'motdepasse';

    // Connexion à la base de données
    try {
        $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    } catch (PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }
    */


