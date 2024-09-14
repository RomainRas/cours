<?php

// Définition de la classe abstraite "Individu"
abstract class Individu
{
    // Méthode publique "manger"
    public function manger()
    {
        // Cette méthode est normale, c'est-à-dire qu'elle a un corps, même si elle ne fait rien ici
    }

    // Méthode publique "boire"
    public function boire()
    {
        // Une méthode normale peut être définie dans une classe abstraite
    }

    // Méthode publique "dormir"
    public function dormir()
    {
        // Les classes filles peuvent hériter et utiliser ces méthodes
    }

    // Méthode abstraite "prenom"
    // Elle est déclarée, mais sans contenu. Elle DOIT être définie dans les classes filles
    abstract public function prenom();
}

// Classe "Homme" qui hérite d'Individu
class Homme extends Individu
{
    // La classe fille "Homme" est obligée de définir la méthode abstraite "prenom"
    public function prenom()
    {
        // Le contenu de la méthode est défini dans la classe fille
        return 'Jean';
    }
}

// Classe "Femme" qui hérite d'Individu
class Femme extends Individu
{
    // La classe fille "Femme" doit aussi définir la méthode abstraite "prenom"
    public function prenom()
    {
        // La méthode peut avoir un contenu différent
        return 'Marie';
    }
}

// Important :
// Une classe abstraite NE PEUT PAS être instanciée directement. On ne peut pas faire $individu = new Individu();

// On peut cependant instancier les classes filles, qui héritent de "Individu"
$homme = new Homme();
echo $homme->prenom(); // Affichera "Jean"

echo '<br>';

$femme = new Femme();
echo $femme->prenom(); // Affichera "Marie"

/*
    Explications :
    
    1. **Classe abstraite** :
        - Une classe abstraite ne peut pas être instanciée. Elle sert de modèle pour les classes qui l'héritent.
        - Elle peut contenir des méthodes abstraites (déclarées sans contenu) et des méthodes normales (avec un contenu).

    2. **Méthode abstraite** :
        - Une méthode abstraite est déclarée sans contenu dans une classe abstraite.
        - Les classes qui héritent de la classe abstraite sont obligées de définir ces méthodes.
        - Exemple ici : la méthode `prenom()` est abstraite dans "Individu" et doit être définie dans "Homme" et "Femme".

    3. **Méthode normale** :
        - Les méthodes "manger", "boire", et "dormir" sont des méthodes normales définies dans la classe abstraite "Individu".
        - Elles peuvent être utilisées telles quelles ou surchargées dans les classes filles.

    4. **Héritage** :
        - "Homme" et "Femme" héritent de "Individu" et ont l'obligation de définir la méthode `prenom()`, tout en héritant des autres méthodes (comme "manger" ou "boire").
*/
