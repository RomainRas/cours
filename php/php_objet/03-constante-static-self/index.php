<?php

// Une classe en PHP commence toujours par une majuscule.
class Maison {

    // Les propriétés statiques appartiennent à la classe elle-même et non à l'objet instancié. 
    // Elles sont partagées entre tous les objets créés à partir de la classe.
    private static $nbPiece = 7; // Propriété statique privée, accessible uniquement dans la classe
    public static $espaceTerrain = 500; // Propriété statique publique, accessible dans toute la classe et ses objets
    public $couleur = 'blanc'; // Propriété publique, accessible dans les objets instanciés

    // Une constante est une valeur fixe, définie avec `const` et écrite en majuscules par convention.
    // Les constantes appartiennent à la classe, tout comme les propriétés statiques.
    const HAUTEUR = 10; // Constante de la classe, accessible directement par la classe

    // Propriété privée non-statique. Chaque objet a sa propre valeur pour cette propriété.
    private $nbPorte = 10;

    // Méthode statique, accessible directement par la classe sans avoir besoin d'instancier un objet.
    // self:: = utilisé pour accéder aux propriétés ou méthodes statiques de la classe à l'intérieur de celle-ci.
    public static function getNbPiece(): int {
        return self::$nbPiece; // self:: fait référence à la classe elle-même
    }

    // Méthode publique non-statique, accessible uniquement par un objet instancié de la classe.
    // $this-> = utilisé pour accéder aux propriétés et méthodes non-statiques de l'objet actuel.
    public function getNbporte(): int {
        return $this->nbPorte; // $this fait référence à l'objet actuel
    }
}

// Instanciation d'un objet $maison à partir de la classe Maison
$maison = new Maison(); // Création d'un objet

// Affichage de la couleur (propriété publique) de l'objet $maison
echo 'La couleur de la maison est ' . $maison->couleur;
echo '<br>';

// Appel de la méthode non-statique getNbporte() pour afficher le nombre de portes de l'objet $maison
echo 'Le nombre de portes dans la maison est ' . $maison->getNbporte();
echo '<br>';

// Accès à une propriété statique (accessible directement par la classe) pour afficher l'espace du terrain
echo 'L\'espace du terrain est de ' . Maison::$espaceTerrain;
echo '<br>';

// Accès à la constante de la classe avec :: (accessible directement par la classe)
echo 'La hauteur de la maison est ' . Maison::HAUTEUR;
echo '<br>';

// Appel d'une méthode statique getNbPiece() pour afficher le nombre de pièces (via la classe)
echo 'Le nombre de pièces dans la maison est ' . Maison::getNbPiece();
