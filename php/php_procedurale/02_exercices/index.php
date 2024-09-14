<?php
// 1. Créer une variable 'pays' qui stocker l'information France.

    // Variable
        //$pays : Ceci est une variable en PHP. En PHP, toutes les variables commencent par le signe dollar ($).
        // = 'France'; : Cette partie signifie que tu assignes la valeur 'France' à la variable $pays. La valeur 'France' est une chaîne de caractères, donc elle est entourée de guillemets simples.
        $pays = 'France';


// 2. Vérifier le type de cette variable 

    // fonction
        // gettype() est une fonction native de PHP qui renvoie le type de la variable passée en argument ($pays). Dans ce cas, elle retourne le type de la variable $pays.
        echo gettype($pays) . '<br>';


// 3. Modifier cette variable pour qu'elle stock 'Espagne' 

    // $pays : variable : variable qui est utilisée pour stocker une information. Dans ce cas, il s'agit du nom d'un pays.
    // = : Opérateur d'assignation = signifie que tu assignes une valeur à la variable
    // 'Espagne' : Chaîne de caractères 'Espagne', qui représente le nom du pays.

    $pays = 'Espagne'; // Cette ligne affecte la valeur 'Espagne' à la variable $pays.


// 4. Afficher la phrase 'Bienvenu en (variable pays)' 

    // echo : fonction utilisée pour afficher du texte ou des variables à l'écran.
    // "Bienvenu en $pays<br>" : chaîne de caractères avec interpolation de variable ($pays).
    // $pays : ici, la variable $pays est directement intégrée dans la chaîne grâce aux guillemets doubles.
    // <br> : balise HTML insérée pour un saut de ligne (utile en sortie HTML).
    echo "Bienvenu en $pays<br>"; // Affiche : Bienvenu en Espagne (avec un saut de ligne).

    // echo : fonction utilisée pour afficher du texte ou des variables à l'écran.
    // 'Bienvenu en ' : chaîne de caractères avec guillemets simples, pas d'interpolation possible.
    // . : opérateur de concaténation qui permet de lier plusieurs morceaux de texte et de variables ensemble.
    // $pays : ici, la variable est concaténée avec la chaîne de caractères.
    // '<br>' : autre chaîne de caractères contenant la balise HTML <br> pour un saut de ligne.
    echo 'Bienvenu en ' . $pays . '<br>'; // Affiche également : Bienvenu en Espagne (avec un saut de ligne).


// 5.Créer la constante CAPITALE qui stockera 'Madrid' 

    // 'CAPITALE' : le nom de la constante, il est recommandé de l'écrire en majuscules pour la distinguer des variables.
    // 'Madrid' : la valeur de la constante, ici une chaîne de caractères représentant le nom d'une capitale.
        define('CAPITALE', 'Madrid'); // Définit la constante CAPITALE avec la valeur 'Madrid'.


// 6. Afficher la phrase 'La capitale du pays (variable pays) est (constante CAPITALE)' 
    
    // echo : fonction utilisée pour afficher du texte ou des variables à l'écran.
    // 'La capitale du pays ' : chaîne de caractères entre guillemets simples, pas d'interpolation possible ici.
    // . : opérateur de concaténation qui lie la chaîne de caractères avec la variable suivante.
    // $pays : la variable $pays, qui contient le nom du pays (précédemment assigné à 'Espagne').
    // . : concatène la variable $pays avec la chaîne suivante.
    // ' est ' : chaîne de caractères ajoutant du texte statique après la variable.
    // . : concatène cette chaîne avec la constante suivante.
    // CAPITALE : constante définie avec la valeur 'Madrid', elle représente la capitale.
    // . : concatène la constante avec la chaîne suivante.
    // '<br>' : chaîne contenant la balise HTML <br> pour un saut de ligne dans le navigateur.

    echo 'La capitale du pays ' . $pays . ' est ' . CAPITALE . '<br>'; // Affiche : La capitale du pays Espagne est Madrid (avec un saut de ligne).


// 7. Créer une variable nbFrance qui stockera le nombre d'habitant en France (67970000) et une autre variable nbEspagne qui stockera le nombre d'habitants en Espagne (47780000) 
   
    // $nbFrance : variable utilisée pour stocker le nombre d'habitants en France.
    // = : opérateur d'assignation qui affecte une valeur à la variable.
    // 67970000 : nombre entier représentant la population de la France.
    $nbFrance = 67970000;

    // $nbEspagne : variable utilisée pour stocker le nombre d'habitants en Espagne.
    // = : opérateur d'assignation qui affecte une valeur à la variable.
    // 47780000 : nombre entier représentant la population de l'Espagne.
    $nbEspagne = 47780000;


// 8. Créer une condition pour comparer nbFrance et nbEspagne et afficher 'Il y a plus d'habitants en France' ou 'Il y a plus d'habitants en Espagne 

    // if ($nbFrance > $nbEspagne) : condition qui vérifie si le nombre d'habitants en France est supérieur à celui de l'Espagne.
    // $nbFrance > $nbEspagne : comparaison des variables $nbFrance et $nbEspagne.
    // { ... } : délimite le bloc de code à exécuter si la condition est vraie.

    if ($nbFrance > $nbEspagne) {
        // echo 'Il y a plus d\'habitants en France<br>'; : si la condition est vraie, affiche ce texte avec un saut de ligne HTML.
        echo 'Il y a plus d\'habitants en France<br>';
    } else {
        // else : sinon, si la condition est fausse (population de l'Espagne égale ou supérieure), exécute le bloc suivant.
        // echo 'Il y a plus d\'habitants en Espagne<br>'; : affiche ce texte si la condition initiale est fausse.
        echo 'Il y a plus d\'habitants en Espagne<br>';
    }


// 9. Afficher la phrase 'En France, il y a (Différence du nombre d'habitants) d'habitants en plus qu'en Espagne' 

    // if ($nbFrance > $nbEspagne) : condition qui compare les deux variables.
    // $nbFrance > $nbEspagne : vérifie si le nombre d'habitants en France est supérieur à celui de l'Espagne.
    // { ... } : délimite le bloc de code qui s'exécute si la condition est vraie.

    // echo 'Il y a plus d\'habitants en France<br>'; : si la condition est vraie, ce message sera affiché.
    // else : sinon, si la condition est fausse, on exécute le bloc de code suivant.
    // echo 'Il y a plus d\'habitants en Espagne<br>'; : message affiché si la population de l'Espagne est plus grande ou égale à celle de la France.

    if ($nbFrance > $nbEspagne) {
        echo 'Il y a plus d\'habitants en France<br>';
    } else {
        echo 'Il y a plus d\'habitants en Espagne<br>';
    }


// 10. Créér un fonction HabitantsFrance qui affichera 'Il y a 67970000 habitants en France' et l'éxectuer : 

    // function HabitantsFrance() : déclaration d'une fonction appelée HabitantsFrance.
    // { ... } : délimite le bloc de code qui sera exécuté lorsque la fonction est appelée.

    // global $nbFrance : indique que la fonction utilise la variable globale $nbFrance définie en dehors de la fonction.
    // echo ' Il y a ' . $nbFrance . ' habitants en France' . '<br>'; : concatène le texte avec la variable $nbFrance et l'affiche, suivi d'un saut de ligne.

    // HabitantsFrance() : appelle la fonction pour exécuter son contenu.
    function HabitantsFrance()
    {
        global $nbFrance;
        echo ' Il y a ' . $nbFrance . ' habitants en France' . '<br>';
    }

    HabitantsFrance(); // Exécution de la fonction, affichant le nombre d'habitants en France.


// 11. Verifier combien il y a de caractere dans la variable pays : 

    // iconv_strlen($pays) : fonction qui retourne la longueur (nombre de caractères) de la chaîne contenue dans la variable $pays.
    // $pays : variable qui contient le nom d'un pays (ex. : 'Espagne').

    echo iconv_strlen($pays); // Affiche la longueur de la chaîne 'Espagne', qui est 7.



