<?php
echo '<h2>0 Intro </h2>';
      
    // Info prof : tdidomenico@testibuzz.com
    // Demander info sur stage marketing web


    // le but du php est de créer de l interactivité à l inverse du css/html qui n est que de l integration
    // le php est un language back
    // - le front est interprété par le navigateur
    // - le back est interprété par le serveur ( xampp pour windows ) 

    

echo '<h2>1 Affichage </h2>';

    // Commentaire d'un seule ligne //
    /* Commentaire de plusieurs 
    lignes */

    // J'affiche la chaine de caractère Bonjour :
    echo 'Bonjour';

    // On peux ecrire du HTML :
    echo '<br>' ;
    echo 'Bienvenue';
    
    echo ' Voici du text </p>';

    // On peux quiter pour du HTML et revenir sur du PHP
    

echo '<hr>';
echo '<h2>2 Variables : types, déclaration, affectation </h2>';
        
    // Créer et affecter une variable 
        // $ + ... = balise d'une variable + sa denomination 
        $prenom = 'Richard';
        // j'affiche la valeur de la variable 
        echo $prenom;
        echo '<br>';

    // Gettype
        $a = 127;
        // gettype est une fonction qui permet de verifier le type est la variable, les () indique que c'est une fonction 
            echo gettype($a);
            // echo = affiche + le type de la variable + la dite variable 
            //Le navigateur affiche : INTEGER = un nombre entier 
            // Les verifs de ce type sont importantes, car elle permettent de savoir au prealable si le type est bon en fonction de son but 
            echo '<br>';

            $b = 1.5;
            echo gettype($b);
            // Le navigateur affiche : double
            // c'est un DOUBLE, un FLOAT en SQL
            echo '<br>';

            $c = 'texte';
            echo gettype($c);
            // Le navigateur affiche : string
            // c'est un STRING = une chaine de caractères 
            echo '<br>';

            $d = '127';
            echo gettype($d);
            // Le navigateur affiche : string
            // c'est un STRING = une chaine de caractères, meme si c'est numeraire c'est entre '' donc chaine de caractères 
            echo '<br>';

            $e = TRUE;
            echo gettype($e);
            // Le navigateur affiche : bolean
            // c'est un BOLEAN = type de données qui ne peut prendre que deux valeurs 
            echo '<br>';

            // On peux modifier la valeur d'une variable 
            $prenom = 'Amin';
            echo $prenom;

    
echo '<hr>';
echo '<h2>3 Concatenation </h2>';
    
    // On peux afficher plusieurs chaine de caracteres dans une seule instruction echo grace a la concatenation : //
        echo 'Bonjour' . 'tout le monde' . '<br>';
        echo 'Bonjour' . $prenom . ',comment ca va ?<br>';

    // Ajouter une valeur à une variable : //
        $prenom = 'Abdelkader';
        $prenom .= ' Bakouche';
        // Grace à la concatenation on a afficher la variable prenom + celle qu'on vient d'ajouter ( .= ) //
        echo $prenom;

    

echo '<hr>';
echo '<h2>4 Guillemets et Quotes</h2>';
    
    // $message2 = 'ajourd'hui'; = le ' de 'hui est consideré comme une quotes, ceci crée une erreur 
        // pour corriger on peux : 
        $message1 = "aujourd'hui";
        $message2 = 'aujourd\'hui';

        echo $message1 . '<br>' . $message2 . '<br>';

    // dans des guillemets la variable est interpretee : //
    echo "Bonjour comment ca va $message1 ? <br>";
    // Dans des quotes la variable n'est pas interpretee : //
    echo 'Bonjour comment ca va $message1 ? <br>';
    // Il faut concatener : //
    echo 'Bonjour comment ca va ' . $message1 . ' ? <br> ';
    // Ceci aide a avoir les variables plus en evidences pour tous le monde //

    

echo '<hr>';
echo '<h2>5 Constantes</h2>';
    
    // Definir une constante : ( c'est une variable que l'on ne peux pas modifier )//
        define('CAPITALE', 'Paris');
        // Toujours en MAJ//
        // A partir de la ligne 121 je stock dans la constante CAPITALE, la valeur Paris qu'on ne pourras pas modifier //
       
        echo CAPITALE; 

        // On ne peux pas modifier la valeur d'une constante ://
        // define ('CAPITALE', 'Lyon');//
        // echo CAPITALE;//
        // Paris s'affichera toujours, nous aurons un message d'erreur//

    // Constantes prédéfinies ( voir sur la doc php ) //
        echo __FILE__;
        echo '<br>';
        echo __LINE__;
        

echo '<hr>';
echo '<h2>6 Operateurs Arithmetiques</h2>';
    
    $a = 10; // Variable $a avec la valeur 10.
    $b = 2;  // Variable $b avec la valeur 2.

    // On peut effectuer différentes opérations mathématiques :

    // Addition : $a + $b
        echo $a + $b . '<br>'; 
        // Affiche 12 car 10 + 2 = 12.

    // Soustraction : $a - $b
        echo $a - $b . '<br>';
        // Affiche 8 car 10 - 2 = 8.

    // Multiplication : $a * $b
        echo $a * $b . '<br>';
        // Affiche 20 car 10 * 2 = 20.

    // Division : $a / $b
        echo $a / $b . '<br>';
        // Affiche 5 car 10 / 2 = 5.

    // On peut ajouter une valeur à une variable avec l'opérateur += :
        $a += $b; 
        // Cela revient à faire $a = $a + $b. Ici, $a (10) devient 12 car 10 + 2 = 12.

    echo $a; 
        // Affiche la nouvelle valeur de $a qui est 12.


echo '<hr>';
echo '<h2>7 Structures conditionnelles ( conditions )</h2>';   
    
    $a = 10;
    $b = 5;
    $c = 2;

    // Si $a est supérieur à $b, on affiche un message :
    if ($a > $b) {
        // Le code dans ce bloc est exécuté seulement si la condition est vraie.
        echo 'a est bien supérieur à b<br>';
    }

    // Redéfinition des variables $a, $b, $c.
    $a = 10;
    $b = 5;
    $c = 2;

    // Si $a est supérieur à $b, on affiche un message, sinon on en affiche un autre :
    if ($a > $b) {
        echo 'a est bien supérieur à b<br>';
    } else {
        // Sinon (if condition est fausse), ce code est exécuté.
        echo 'b est supérieur à a<br>';
    }

    // Condition combinée avec AND (&&)
    // SI $a est supérieur à $b ET que $b est supérieur à $c
    if ($a > $b && $b > $c) {
        echo 'a est supérieur à b et b est supérieur à c<br>';
    }

    // Condition imbriquée (une condition dans une condition)
    if ($a > $b) {
        echo 'Première condition valide<br>';
        if ($b < $c) {
            // Cette condition sera testée seulement si la première condition ($a > $b) est vraie.
            echo 'Deuxième condition valide<br>';
        }
    }

    // Condition avec OR (||) : une seule des deux conditions doit être vraie
    // SI $a est égal à 9 OU $b est supérieur à $c
    if ($a == 9 || $b > $c) {
        echo 'a est égal à 9 OU b est supérieur à c<br>';
    }

    // Condition avec XOR : une seule des deux conditions doit être vraie, mais pas les deux
    if ($a == 10 XOR $b > $c) {
        echo 'a est égal à 10 OU b est supérieur à c (exclusif)<br>';
    }

    // Utilisation de else if et else
    // SI $a est égal à 8
    if ($a == 8) {
        echo 'a est égal à 8<br>';
    }
    // SINON SI $a est différent de 10
    else if ($a != 10) {
        echo 'a est différent de 10<br>';
    }
    // SINON
    else {
        echo 'condition par défaut<br>';
    }

    // Vérification de l'existence d'une variable avec isset
    $var = 'qqchose';
    // Si la variable $var existe (n'est pas NULL)
    if (isset($var)) {
        echo 'oui<br>';
    } else {
        echo 'non<br>';
    }

    // Différence entre l'opérateur == (égalité) et === (égalité stricte)
    $vara = 1;
    $varb = '1';
    // Est-ce que $vara a la même valeur que $varb ?
    if ($vara == $varb) {
        echo 'Les variables ont la même valeur<br>';
    }

    // Est-ce que $vara et $varb ont la même valeur ET le même type ?
    if ($vara === $varb) {
        echo 'Les variables ont la même valeur et le même type<br>';
    } else {
        // Ce message est affiché si $vara et $varb ne sont pas du même type.
        echo 'Les variables ne correspondent pas, INTEGER et STRING<br>';
    }

    // = pour donner une valeur à une variable
    // == pour comparer les valeurs
    // === pour comparer les valeurs et le type

    // Utilisation de la condition switch pour tester plusieurs valeurs
    $couleur = 'jaune';

    // Vérification de la valeur de $couleur avec switch
    switch ($couleur) {
        // Premier cas : si $couleur est 'bleu'
        case 'bleu':
            echo 'Vous aimez le bleu<br>';
            break;
        // Deuxième cas : si $couleur est 'rouge'
        case 'rouge':
            echo 'Vous aimez le rouge<br>';
            break;
        // Troisième cas : si $couleur est 'vert'
        case 'vert':
            echo 'Vous aimez le vert<br>';
            break;
        // Quatrième cas : si $couleur est 'jaune'
        case 'jaune':
            echo 'Vous aimez le jaune<br>';
            break;
        // Cas par défaut : si aucune des valeurs testées n'est correcte
        default:
            echo 'Vous n\'aimez pas les couleurs testées<br>';
            break;
    }

    
echo '<hr>';
echo '<h2>8 Fonctions predfinies</h2>';

    // https://www.php.net/manual/fr/indexes.functions.php : lien vers la documentation officielle des fonctions prédéfinies en PHP

    // Déclaration de la variable $phrase qui contient une longue chaîne de texte
    $phrase = 'texte1 texte2 texte3 texte4 texte5 texte6 texte7 texte8 texte9';
    // Affiche la chaîne $phrase, suivie d'un saut de ligne HTML
    echo $phrase . '<br>';

    // Afficher le nombre de caractères dans la phrase $phrase
    // iconv_strlen() : Fonction qui retourne la longueur d'une chaîne en nombre de caractères
    echo iconv_strlen($phrase) . '<br>'; // Affiche la longueur de $phrase

    // Exemple de vérification du nombre de caractères dans un mot de passe
    $password = 'pdzaodjazdzaojhgregrokegjhreg';
    // Utilisation de iconv_strlen() pour obtenir le nombre de caractères du mot de passe $password
    $nbcaractere = iconv_strlen($password);

    // Vérification si le mot de passe contient moins de 10 caractères
    if ($nbcaractere < 10) {
        echo 'Mot de passe trop petit<br>'; // Affiche un message si le mot de passe est trop court
    }

    // Afficher le début de la chaîne $phrase
    // substr() : Fonction qui retourne une portion d'une chaîne
    // substr($phrase, 0, 27) : Extrait les 27 premiers caractères de $phrase, en commençant à l'index 0
    echo substr($phrase, 0, 27) . '...<br>'; // Affiche les 27 premiers caractères de $phrase suivis de "..."

    // Afficher l'année actuelle
    // date() : Fonction qui retourne la date au format spécifié
    // 'd-m-Y' : Le format pour afficher la date (jour-mois-année)
    echo date('d-m-Y') . '<br>'; // Affiche la date actuelle sous le format jour-mois-année
    

echo '<hr>';
echo '<h2>9 Les Fonctions Utilisateur </h2>';
    

echo '<h2>9 Les Fonctions Utilisateur </h2>';

    // Les fonctions Utilisateur sont des fonctions créées par le développeur en PHP, permettant de regrouper du code réutilisable.

    // Création d'une fonction simple
    // Il est nécessaire de toujours utiliser des parenthèses () pour que le serveur reconnaisse qu'il s'agit d'une fonction, même si elles sont vides.
    function bonjour() {
        // Affiche un message à l'écran
        echo 'Bonjour l\'équipe<br>';
    }
    // Exécution de la fonction
    // Appelle la fonction "bonjour", qui exécute le code à l'intérieur et affiche "Bonjour l'équipe".
    bonjour();

    // Fonction avec un paramètre
    // La fonction bonjour2 prend un argument $x, qui sera utilisé à l'intérieur de la fonction.
    function bonjour2($x) {
        // Affiche "Bonjour [valeur de $x], ça va ?"
        echo ' Bonjour ' . $x . ' ca va ? <br>';
    }

    // Exécution de la fonction bonjour2 avec différents arguments
    // Ici, on passe "Richard" comme argument à la fonction.
    bonjour2('Richard'); // Affiche "Bonjour Richard ca va ?"
    // Ici, on passe "Anisse" comme argument à la fonction.
    bonjour2('Anisse');  // Affiche "Bonjour Anisse ca va ?"

    // Variables locales
    // Une variable locale est une variable créée à l'intérieur d'une fonction, et elle n'est accessible qu'à l'intérieur de cette fonction.
    function jourSemaine() {
        // $jour est une variable locale, elle n'est disponible que dans cette fonction
        $jour = 'mercredi <br>';
    }
    // Appelle la fonction jourSemaine, mais elle ne fait rien visible car elle ne retourne pas de valeur ni n'affiche le contenu.
    jourSemaine();

    // Essayer d'accéder à $jour ici génèrerait une erreur car $jour est locale à la fonction.
    // echo $jour; // Cela ne fonctionnera pas, car $jour est une variable locale à la fonction jourSemaine.


    // Récupérer la valeur d'une variable locale avec "return"
    // Le mot-clé "return" permet de sortir une valeur d'une fonction et de l'utiliser ailleurs dans le code.
    function jourSemaine2() {
        // Cette fonction retourne la chaîne "mercredi <br>"
        $jour = 'mercredi <br>';
        return $jour; // On retourne la valeur de la variable locale $jour
    }
    // Affiche la valeur retournée par la fonction jourSemaine2, c'est-à-dire "mercredi"
    echo jourSemaine2(); // Résultat : "mercredi <br>"

    // Réutiliser la valeur d'une fonction
    // On peut également stocker le résultat d'une fonction dans une variable pour l'utiliser plus tard.
    $r = jourSemaine2(); // La variable $r reçoit la valeur retournée par jourSemaine2, ici "mercredi"
    echo $r; // Affiche la valeur de $r, soit "mercredi"
    echo '<br>'; // Affiche un saut de ligne

    // Variables globales
    // Une variable globale est une variable déclarée en dehors de toute fonction. Elle est accessible partout dans le script, sauf à l'intérieur des fonctions à moins d'utiliser le mot-clé "global".
    $pays = 'France'; // Déclare une variable globale $pays

    // Cette fonction tente d'accéder à la variable globale $pays, mais cela ne fonctionne pas.
    function affichagePays() {
        // echo $pays; // Cela ne fonctionne pas car $pays est global, et la fonction n'y a pas directement accès.
    }

    // Pour utiliser une variable globale à l'intérieur d'une fonction, il faut utiliser le mot-clé "global".
    function affichagePays2() {
        global $pays; // Déclare que la fonction doit utiliser la variable globale $pays
        echo $pays;   // Affiche la valeur de $pays, ici "France"
    }

    // Appelle la fonction qui accède à la variable globale $pays et affiche "France".
    affichagePays2(); // Résultat : "France"
    

echo '<hr>';
echo '<h2>10 Structure iterative (boucle) </h2>';
    
    // C'est un code qui va se répéter un nombre de fois défini (boucle)

    // WHILE :
    // Une boucle "while" permet de répéter un bloc de code tant qu'une condition est vraie.

    // $i = 0 :
    // $i est une variable qui sert d'indice ou de compteur. Elle est initialisée à 0, c'est-à-dire que la boucle commencera à 0.
    $i = 0;

    // while($i <= 5) :
    // Tant que $i est inférieur ou égal à 5, le bloc de code à l'intérieur de la boucle sera exécuté.
    while ($i <= 5) {
        // echo 'bonjour' . $i . '...' : 
        // On utilise echo pour afficher du texte. Ici, on concatène 'bonjour' avec la valeur de $i suivie de '...'.
        // Cela affichera "bonjour0...", "bonjour1...", etc.
        echo 'bonjour' . $i . '...';

        // $i += 1 :
        // C'est un raccourci pour $i = $i + 1. On ajoute 1 à la valeur de $i à chaque tour de boucle.
        $i += 1;
    }

    // echo '<br>' : 
    // Affiche un saut de ligne HTML pour séparer les résultats dans le navigateur.
    echo '<br>';

    // Refaire la même boucle, sans afficher les derniers tirets "..."

    $i = 0; // Réinitialise la variable $i à 0 pour recommencer la boucle.
    while ($i <= 5) {
        // if ($i == 5) :
        // Si la valeur de $i est égale à 5, on exécute le code à l'intérieur des accolades.
        if ($i == 5) {
            // echo ' Bonjour ' . $i :
            // Affiche "Bonjour" suivi de la valeur de $i sans tirets "..." pour la dernière itération.
            echo ' Bonjour ' . $i;
        } else {
            // Sinon, pour toutes les autres valeurs de $i (de 0 à 4), on affiche avec des tirets "..."
            echo 'Bonjour' . $i . '---';
        }
        // $i++ :
        // Incrémente $i de 1 à chaque tour de boucle.
        $i++;
    }

    // OU (alternative de la boucle précédente)

    $i = 0; // Réinitialise $i à 0
    while ($i <= 5) {
        // if ($i < 5) :
        // Si $i est inférieur à 5, on affiche "Bonjour" suivi de tirets "..."
        if ($i < 5) {
            echo ' Bonjour ' . $i . '---';
            $i++; // Incrémente $i
        } else {
            // Si $i est égal à 5, on affiche sans les tirets.
            echo 'Bonjour' . $i;
            $i++; // Incrémente $i
        }
    }

    /*
    Explication du déroulement de la boucle :
    - i = 0 : La variable d'indice commence à 0.
    - while = La boucle "while" vérifie la condition $i <= 5.
    - Si $i est inférieur à 5, la boucle continue et on affiche "Bonjour" suivi des tirets.
    - À chaque tour, $i augmente de 1 jusqu'à atteindre 5.
    - Lorsque $i est égal à 5, on n'affiche pas de tirets.
    */

    // Autre alternative de la boucle while

    $i = 0; // Réinitialise $i à 0
    while ($i < 5) {
        // Affiche "Bonjour" suivi de $i et des tirets pour les valeurs inférieures à 5
        echo 'Bonjour' . $i . '---';
        $i++; // Incrémente $i
        // if ($i == 5) :
        // Lorsque $i est égal à 5, on affiche "Bonjour5" sans les tirets "..."
        if ($i == 5) {
            echo 'Bonjour' . $i;
        }
    }
    echo '<br>'; // Saut de ligne

    // FOR :
    // La boucle "for" permet de faire des itérations avec une structure compacte. Elle se compose de trois parties : initialisation, condition et incrémentation.
    for ($i = 0; $i <= 5; $i++) {
        // echo 'Tour numéro : ' . $i :
        // Affiche le numéro du tour (l'indice $i) à chaque itération de la boucle.
        echo 'Tour numéro : ' . $i . '<br>';
    }

    // Exercice : Créer un menu déroulant (select) qui affiche les années de l'année actuelle jusqu'à 1920

    echo '<select>'; // Démarre un élément HTML <select> pour créer un menu déroulant
    // for ($i = date('Y'); $i >= 1920; $i--) :
    // La boucle commence à l'année actuelle (date('Y')) et décrémente jusqu'à 1920.
    for ($i = date('Y'); $i >= 1920; $i--) {
        // echo '<option>' . $i . '</option>' :
        // Affiche une balise <option> pour chaque année entre l'année actuelle et 1920.
        echo '<option>' . $i . '</option>';
    }
    echo '</select>'; // Ferme l'élément <select>

    echo '<br>'; // Saut de ligne

    // Deuxième exemple de menu déroulant
    echo '<select>'; // Démarre un deuxième élément <select>
    for ($i = date('Y'); $i >= 1920; $i--) {
        echo '<option>' . $i . '</option>'; // Crée une option pour chaque année
    }
    echo '</select>'; // Ferme l'élément <select>

    // Exercice : Créer un tableau HTML de 10 lignes et 10 colonnes, avec des cellules numérotées de 00 à 99

    echo '<table border="1">'; // Démarre un tableau HTML avec une bordure
    // for ($ligne = 0; $ligne < 10; $ligne++) :
    // Boucle extérieure pour créer 10 lignes dans le tableau
    for ($ligne = 0; $ligne < 10; $ligne++) {
        echo '<tr>'; // Démarre une nouvelle ligne du tableau (<tr>)
        // for ($collone = 0; $collone < 10; $collone++) :
        // Boucle intérieure pour créer 10 colonnes dans chaque ligne
        for ($collone = 0; $collone < 10; $collone++) {
            // echo '<td>' . $ligne . $collone . '</td>' :
            // Crée une cellule dans le tableau (<td>) avec un numéro unique basé sur la ligne et la colonne (ex : 00, 01, 02, ..., 99)
            echo '<td>' . $ligne . $collone . '</td>';
        }
        echo '</tr>'; // Ferme la ligne du tableau
    }
    echo '</table>'; // Ferme le tableau HTML

echo '<hr>';
echo '<h2>11 Inclusions de fichier</h2>';
    
    // INCLUDE :
        // Permet d'inclure le contenu d'un autre fichier.
        // Si le fichier spécifié n'est pas trouvé, une erreur est générée, mais le script continue son exécution.
        include('fichier.php'); // Inclut le fichier 'fichier.php' si disponible.

    // REQUIRE :
        // Permet d'inclure le contenu d'un autre fichier comme "include".
        // Cependant, si le fichier spécifié n'est pas trouvé, une erreur fatale est générée et le script s'arrête immédiatement.
        require('fichier.php'); // Inclut le fichier 'fichier.php' si disponible. Si le fichier est manquant, le script ne continue pas.
    

echo '<hr>';
echo '<h2>12 Array</h2>';
    
    // Je crée un array (tableau) :
    // Un array est une structure de données qui permet de stocker plusieurs valeurs sous une seule variable.
    // Ici, l'array $liste contient des chaînes de caractères représentant des couleurs.
    $liste = array('rouge', 'bleu', 'orange', 'jaune', 'rose');

    // Afficher l'array :
    // print_r() est utilisé pour afficher la structure de l'array de manière lisible, avec les indices et les valeurs.
    print_r($liste);
    echo '<br>';

    // var_dump() est plus détaillé, il affiche le type des valeurs, leur longueur et leur contenu.
    var_dump($liste);
    echo '<br>';

    // Afficher un seul élément de l'array :
    // On accède à un élément du tableau en utilisant son indice entre crochets []. Ici, l'indice 2 correspond à "orange".
    echo $liste[2] . '<br>'; // Affiche "orange"

    // Autre manière pour créer un array :
    // Ici, on crée un array en ajoutant des éléments un à un. Le tableau $tab se construit avec des pays.
    $tab[] = 'France';
    $tab[] = 'Italie';
    $tab[] = 'Espagne';
    $tab[] = 'Angleterre';

    // Afficher le tableau $tab avec print_r pour voir les pays et leurs indices.
    print_r($tab);
    echo '<br>';

    // 3ème manière de créer un array :
    // On peut aussi créer un array en utilisant la syntaxe courte [], introduite à partir de PHP 5.4.
    $test = ['France', 'Italie'];
    var_dump($test); // Affiche le type et les valeurs du tableau $test
    echo '<br>';

    // Boucle foreach pour parcourir un array :
    // La boucle foreach permet de parcourir un tableau et d'exécuter du code pour chaque élément.
    // $indice correspond à l'indice de l'élément, et $valeur correspond à la valeur associée à cet indice.
    foreach($tab as $indice => $valeur) {
        // On affiche l'indice et la valeur à chaque itération.
        echo $indice . ' : ' . $valeur . '<br>';
    }
    echo '<br>';

    // Fonction pour voir le nombre d'éléments dans un array :
    // La fonction count() retourne le nombre d'éléments dans le tableau $tab.
    echo count($tab) . '<br>'; // Affiche le nombre d'éléments dans $tab (ici 4)

    // Tableau multidimensionnel :
    // Un tableau multidimensionnel est un tableau qui contient d'autres tableaux. Ici, chaque élément du tableau $tab_multi contient un autre tableau avec deux valeurs : 'prenom' et 'nom'.
    $tab_multi = array(
        0 => array('prenom' => 'Richard', 'nom' => 'Bonnegent'),
        1 => array('prenom' => 'Abdlekader', 'nom' => 'Bakouche')
    );

    // Affichage détaillé du tableau multidimensionnel avec var_dump.
    var_dump($tab_multi);
    echo '<br>';

    // Accéder aux valeurs dans un tableau multidimensionnel :
    // On accède aux éléments des sous-tableaux en utilisant plusieurs indices. Ici, $tab_multi[0]['prenom'] accède au prénom du premier tableau.
    echo $tab_multi[0]['prenom']; // Affiche "Richard"
    echo '<br>';
    echo $tab_multi[1]['prenom']; // Affiche "Abdlekader"
    echo '<br>';

    // Optimisation des requêtes SQL :
    // Pour afficher les informations plus simplement, il vaut mieux rendre les requêtes SQL plus simples,
    // en récupérant uniquement les informations nécessaires (comme les prénoms ici).
    // Cela permet d'alléger le code et de rendre l'exécution plus rapide en évitant de traiter des données inutiles.