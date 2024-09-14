<?php

// Exercice 1

// Création de la classe "Vehicules"
class Vehicules
{
    // Propriétés
    // private static $marque : Propriété statique privée, accessible uniquement dans la classe elle-même et partagée par tous les objets de la classe.
    private static $marque = 'BMW';

    // private $couleur : Propriété privée, accessible uniquement à l'intérieur de la classe. Chaque objet a sa propre couleur.
    private $couleur = 'noir';

    // public static $number : Propriété statique publique qui compte le nombre d'objets créés. 
    public static $number = 0;

    // Le constructeur __construct() : Méthode qui est automatiquement appelée lors de la création d'un objet. 
    // Ici, il incrémente la propriété statique $number de 1 à chaque instanciation d'un objet.
    public function __construct()
    {
        ++self::$number; // Incrémentation de la propriété statique $number
    }

    // 1. Création des getters et setters pour les deux propriétés (marque et couleur)

    // Getter pour la propriété statique "marque"
    // static = accessible directement depuis la classe, sans avoir besoin d'instancier un objet
    // return = retourne une chaîne de caractères (string) qui représente la marque
    public static function getMarque(): string 
    {
        return self::$marque; // self:: pour accéder aux propriétés/méthodes statiques
    }

    // Setter pour la propriété statique "marque"
    // static = méthode statique accessible directement depuis la classe
    // string $marque = le type de paramètre attendu est une chaîne de caractères, représentant la nouvelle marque
    // void = la fonction ne retourne aucune valeur
    public static function setMarque(string $marque): void
    {
        self::$marque = $marque; // self:: pour accéder et modifier la propriété statique "marque"
    }

    // Getter pour la propriété privée "couleur"
    // Cette méthode retourne la couleur de l'objet (string)
    public function getCouleur(): string
    {
        return $this->couleur; // $this-> pour accéder aux propriétés non-statiques d'un objet
    }

    // Setter pour la propriété privée "couleur"
    // string $couleur = le type de paramètre attendu est une chaîne de caractères, représentant la nouvelle couleur
    // void = la fonction ne retourne aucune valeur
    public function setCouleur(string $couleur): void
    {
        $this->couleur = $couleur; // $this-> pour accéder et modifier la propriété "couleur" de l'objet
    }
}

// Test d'instanciation d'un objet $vehicule
$vehicule = new Vehicules(); // Création d'un nouvel objet $vehicule
echo ' La marque du véhicule est ' . $vehicule->getMarque(); // Affiche la marque de l'objet
echo '<br>';
echo ' La couleur du véhicule est ' . $vehicule->getCouleur(); // Affiche la couleur de l'objet

// 2. Création d'un nouvel objet $vehicule1 issu de la classe Vehicules
// Affichage : Le véhicule 1 est de marque *** et de couleur ***
$vehicule1 = new Vehicules();
echo ' Le véhicule ' . Vehicules::$number . ' est de marque ' . Vehicules::getMarque() . ' et de couleur ' . $vehicule1->getCouleur() . '<p>';

// 3. Création d'un nouvel objet $vehicule2 et modification de la couleur en rouge
$vehicule2 = new Vehicules();
$vehicule2->setCouleur('rouge'); // Modification de la couleur de l'objet
echo ' Le véhicule ' . Vehicules::$number . ' est de marque ' . Vehicules::getMarque() . ' et de couleur ' . $vehicule2->getCouleur() . '<p>';

// 4. Création d'un nouvel objet $vehicule3 issu de la classe Vehicules
$vehicule3 = new Vehicules();
echo ' Le véhicule ' . Vehicules::$number . ' est de marque ' . Vehicules::getMarque() . ' et de couleur ' . $vehicule3->getCouleur() . '<p>';

// 5. Création d'un nouvel objet $vehicule4, modification de la marque en "Mercedes"
$vehicule4 = new Vehicules();
Vehicules::setMarque('Mercedes'); // Modification de la propriété statique "marque"
echo ' Le véhicule ' . Vehicules::$number . ' est de marque ' . Vehicules::getMarque() . ' et de couleur ' . $vehicule4->getCouleur() . '<p>';

// 6. Création d'un nouvel objet $vehicule5 issu de la classe Vehicules
$vehicule5 = new Vehicules();
echo ' Le véhicule ' . Vehicules::$number . ' est de marque ' . Vehicules::getMarque() . ' et de couleur ' . $vehicule5->getCouleur() . '<p>';

// Observation :
// - Chaque objet a sa propre couleur (grâce à la propriété non-statique "couleur").
// - La propriété "marque" est partagée entre tous les objets (car elle est statique).
// - La propriété "number" compte le nombre total d'objets créés.
?>

