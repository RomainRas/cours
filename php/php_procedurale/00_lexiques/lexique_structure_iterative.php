<?php
// Sommaire :
    // 1. Boucle while : 
        // Répète l'exécution d'un bloc de code tant qu'une condition est vraie.

    // 2. Boucle do...while : 
        // Exécute le bloc de code au moins une fois, puis vérifie la condition à la fin de chaque itération.

    // 3. Boucle for : 
        // Répète l'exécution d'un bloc de code un nombre défini de fois.

    // 4. Boucle foreach : 
        // Parcourt chaque élément d'un tableau et exécute un bloc de code pour chaque élément.


// 1. Boucle while : 
    
    // La boucle "while" continue d'exécuter un bloc de code tant qu'une condition donnée est vraie.
    // Dans cet exemple, la boucle s'exécute tant que la variable $i est inférieure à 5.

    $i = 0; // Initialisation de la variable $i à 0
    while ($i < 5) { // Tant que $i est inférieur à 5, la boucle continue de tourner
        echo 'Valeur de $i : ' . $i . '<br>'; // Affiche la valeur actuelle de $i
        $i++; // Incrémentation de $i de 1 à chaque tour de boucle
    }

// 2. Boucle do...while : 
   
    // La boucle "do...while" fonctionne de manière similaire à "while", mais elle garantit que le code à l'intérieur sera exécuté au moins une fois.
    // La condition est vérifiée à la fin de chaque itération, donc la boucle s'exécute une première fois avant la vérification.

    $i = 0; // Réinitialisation de la variable $i à 0
    do {
        echo 'Valeur de $i : ' . $i . '<br>'; // Affiche la valeur actuelle de $i
        $i++; // Incrémentation de $i de 1 à chaque tour
    } while ($i < 5); // Continue de tourner tant que $i est inférieur à 5

// 3. Boucle for :
    
    // La boucle "for" permet d'itérer un nombre défini de fois. Elle combine trois parties : initialisation, condition, et incrémentation dans une seule ligne.
    // Dans cet exemple, la boucle s'exécute 5 fois, de $i = 0 à $i = 4.

    for ($i = 0; $i < 5; $i++) { // Initialisation de $i à 0, la boucle tourne tant que $i est inférieur à 5, et $i est incrémenté de 1 à chaque tour.
        echo 'Tour numéro : ' . $i . '<br>'; // Affiche le numéro de tour, correspondant à la valeur de $i
    }

// 4. Boucle foreach : 
    
    // La boucle "foreach" est utilisée pour parcourir chaque élément d'un tableau.
    // Elle permet d'exécuter un bloc de code pour chaque élément du tableau.

    $fruits = ['pomme', 'banane', 'cerise']; // Déclaration d'un tableau contenant trois fruits
    foreach ($fruits as $fruit) { // La boucle "foreach" parcourt chaque élément du tableau $fruits
        echo 'Fruit : ' . $fruit . '<br>'; // Affiche chaque fruit du tableau à chaque itération
    }