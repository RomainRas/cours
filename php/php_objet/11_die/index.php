<?php

// Fonction recherche()
// Cette fonction prend deux paramètres : un tableau et une valeur à rechercher dans ce tableau.
function recherche($tableau, $valeurRecherche)
{
    // Vérifie si le premier paramètre est bien un tableau
    // is_array() retourne true si la variable est un tableau, sinon false.
    if (!is_array($tableau)) 
    {
        // die() arrête l'exécution du script et affiche un message d'erreur.
        die('Vous devez saisir un tableau'); 
    }

    // Vérifie si la valeur recherchée existe dans le tableau
    // in_array() retourne true si la valeur est trouvée dans le tableau, sinon false.
    if (in_array($valeurRecherche, $tableau)) 
    {
        // Si la valeur est trouvée, on retourne un message disant qu'elle existe.
        return 'Oui, ' . $valeurRecherche . ' existe dans le tableau';
    } 
    else 
    {
        // Sinon, on retourne un message disant que la valeur n'existe pas.
        return 'Non, ' . $valeurRecherche . ' n\'existe pas dans le tableau';
    }
}

// Création d'un tableau de fruits.
$fruits = ['orange', 'fraise', 'banane'];

// Variable $tableauFake qui n'est pas un tableau.
$tableauFake = 10;

// Appel de la fonction recherche() avec le tableau $fruits et la valeur 'fraise'.
// Si 'fraise' est dans le tableau, le message de succès sera affiché.
echo recherche($fruits, 'fraise'); // Résultat : Oui, fraise existe dans le tableau

echo '<hr>';

// Appel de la fonction recherche() avec le tableau $fruits et la valeur 'kiwi'.
// Si 'kiwi' n'est pas dans le tableau, le message indiquant l'absence de la valeur sera affiché.
echo recherche($fruits, 'kiwi'); // Résultat : Non, kiwi n'existe pas dans le tableau

echo '<hr>';

// Appel de la fonction recherche() avec $tableauFake (qui n'est pas un tableau) et une valeur arbitraire.
// Puisque $tableauFake n'est pas un tableau, le script sera arrêté et un message d'erreur sera affiché.
echo recherche($tableauFake, 'zeadazdazdaz'); // Résultat : Vous devez saisir un tableau (et le script s'arrête)

/* 
    - Fonction recherche($tableau, $valeurRecherche) : Cette fonction prend deux paramètres : un tableau et une valeur à rechercher dans ce tableau. Elle vérifie si la valeur existe dans le tableau et renvoie un message correspondant.
    - is_array() : Cette fonction vérifie si une variable est un tableau. Si ce n'est pas le cas, le script est arrêté avec un message d'erreur.
    - in_array() : Cette fonction vérifie si une valeur est présente dans un tableau. Elle retourne true si la valeur est trouvée, sinon false.
    - die() : Arrête l'exécution du script et affiche un message. Utilisé ici pour arrêter le script si le premier paramètre n'est pas un tableau.
    - Tableau $fruits : C'est un tableau contenant trois fruits : 'orange', 'fraise', et 'banane'.
    - Variable $tableauFake : Une variable qui n'est pas un tableau. Utilisée pour tester le comportement de la fonction lorsqu'un mauvais type est passé.
*/
