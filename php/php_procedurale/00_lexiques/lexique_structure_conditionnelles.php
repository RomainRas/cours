<?php
    // 1. if : 
        // Teste une condition. Si elle est vraie, le bloc de code est exécuté.

    // 2. else : 
        // Si la condition dans if est fausse, le bloc else est exécuté.

    // 3. else if : 
        // Permet de tester une nouvelle condition si la première est fausse.

    // 4. Conditions imbriquées : 
        // Permet de placer une condition à l'intérieur d'une autre.

    // 5. Opérateur logique AND (&&) : 
        // Toutes les conditions doivent être vraies pour que le bloc de code soit exécuté.

    // 6. Opérateur logique OR (||) : 
        // Au moins une des conditions doit être vraie pour que le bloc de code soit exécuté.

    // 7. Opérateur XOR : 
        // Une seule des deux conditions doit être vraie, mais pas les deux.

    // 8. Comparaison == vs === : 
        // == compare la valeur uniquement, 
        // === compare la valeur et le type.

    // 9. switch : 
        // Teste plusieurs valeurs possibles d'une variable et exécute un bloc de code correspondant à la valeur trouvée.
        

// 1. Structure if
    // Description : L'instruction if permet de vérifier une condition. Si cette condition est vraie, le code est exécuté.
    $a = 10;
    if ($a > 5) {
        // Si $a est supérieur à 5, cette ligne sera exécutée.
        echo "1. a est supérieur à 5<br>";
    }

// 2. Structure else
    // Description : L'instruction else permet d'exécuter un code alternatif lorsque la condition de if est fausse.
    $b = 3;
    if ($b > 5) {
        // Cette condition est fausse, donc ce bloc ne sera pas exécuté.
        echo "2. b est supérieur à 5<br>";
    } else {
        // Ce bloc est exécuté car la condition précédente est fausse.
        echo "2. b n'est pas supérieur à 5<br>";
    }

// 3. Structure else if
    // Description : else if permet de tester une autre condition si la première est fausse.
    $c = 5;
    if ($c > 5) {
        echo "3. c est supérieur à 5<br>";
    } else if ($c == 5) {
        // Ce bloc est exécuté si la condition précédente est fausse et celle-ci est vraie.
        echo "3. c est égal à 5<br>";
    } else {
        echo "3. c est inférieur à 5<br>";
    }

// 4. Structure imbriquée
    // Description : On peut imbriquer des structures conditionnelles les unes dans les autres.
    $d = 8;
    $e = 6;
    if ($d > 5) {
        echo "4. d est supérieur à 5<br>";
        if ($e > 5) {
            // Cette condition est vérifiée seulement si la première est vraie.
            echo "4. e est également supérieur à 5<br>";
        }
    }

// 5. Opérateur logique AND (&&)
    // Description : Utilisé pour combiner plusieurs conditions qui doivent toutes être vraies.
    $f = 7;
    $g = 3;
    if ($f > 5 && $g < 5) {
        // Les deux conditions doivent être vraies pour que ce bloc soit exécuté.
        echo "5. f est supérieur à 5 ET g est inférieur à 5<br>";
    }

// 6. Opérateur logique OR (||)
    // Description : Utilisé pour combiner plusieurs conditions où l'une d'elles suffit pour être vraie.
    $h = 4;
    $i = 8;
    if ($h > 5 || $i > 5) {
        // Au moins une des deux conditions doit être vraie.
        echo "6. h est supérieur à 5 OU i est supérieur à 5<br>";
    }

// 7. Opérateur XOR (OU exclusif)
    // Description : XOR retourne vrai si une seule des deux conditions est vraie, mais pas les deux.
    $j = 10;
    $k = 3;
    if ($j == 10 XOR $k < 5) {
        // Ce bloc est exécuté uniquement si une seule des conditions est vraie.
        echo "7. Soit j est égal à 10, soit k est inférieur à 5, mais pas les deux<br>";
    }

// 8. L'opérateur de comparaison == et ===
    // Description : == compare uniquement la valeur, === compare à la fois la valeur et le type.
    $l = 1;  // Nombre entier
    $m = '1';  // Chaîne de caractères

    if ($l == $m) {
        // Cette condition est vraie car les valeurs sont égales (mais pas les types).
        echo "8. l est égal à m en termes de valeur<br>";
    }

    if ($l === $m) {
        echo "8. l est strictement égal à m en termes de valeur et de type<br>";
    } else {
        // Ce bloc est exécuté car les types sont différents (INTEGER et STRING).
        echo "8. l et m ont des types différents<br>";
    }

// 9. Structure switch
    // Description : Permet de tester la valeur d'une variable contre plusieurs cas.
    $couleur = 'rouge';

    switch ($couleur) {
        case 'bleu':
            echo "9. La couleur est bleu<br>";
            break;
        case 'rouge':
            echo "9. La couleur est rouge<br>";
            break;
        case 'vert':
            echo "9. La couleur est vert<br>";
            break;
        default:
            echo "9. Aucune couleur correspondante<br>";
            break;
    }

