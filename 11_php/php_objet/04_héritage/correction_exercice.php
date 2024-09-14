<?php

// Classe de base "Vehicle" qui définit un véhicule générique
class Vehicle 
{
    // Propriétés protégées (accessible uniquement dans la classe et ses sous-classes)
    
    // $marque : La marque du véhicule (ex: Audi, Suzuki)
    protected $marque;

    // $modele : Le modèle du véhicule (ex: A3, GSXR)
    protected $modele;

    // $vitesseMax : La vitesse maximale du véhicule en km/h
    protected $vitesseMax;

    // Constructeur (__construct)
    // Le constructeur est une méthode spéciale appelée lorsqu'un objet est créé à partir de cette classe.
    // Il initialise les propriétés du véhicule avec des valeurs fournies au moment de l'instanciation.
    public function __construct(string $marque, string $modele, int $vitesseMax)
    {
        // $this->marque : Attribue la valeur de $marque à la propriété de l'objet "marque".
        $this->marque = $marque;

        // $this->modele : Attribue la valeur de $modele à la propriété de l'objet "modele".
        $this->modele = $modele;

        // $this->vitesseMax : Attribue la valeur de $vitesseMax à la propriété de l'objet "vitesseMax".
        $this->vitesseMax = $vitesseMax;
    }

    // Méthode afficherDetails()
    // Cette méthode renvoie une chaîne de caractères avec les détails du véhicule : sa marque, son modèle et sa vitesse maximale.
    public function afficherDetails(): string
    {
        // return : Retourne une chaîne de caractères HTML avec les propriétés de l'objet.
        return "<p>Marque : {$this->marque} </p>
                <p>Modèle :  {$this->modele} </p>
                <p>Vitesse Max : {$this->vitesseMax} km/h </p>";
    }

    // Méthode rouler()
    // Cette méthode simule la conduite du véhicule à une certaine vitesse et renvoie un message approprié.
    public function rouler(int $vitesse): string
    {
        // Condition pour vérifier si la vitesse demandée dépasse la vitesse maximale du véhicule.
        if ($vitesse > $this->vitesseMax) {
            // Si la vitesse dépasse, retourne un message d'erreur.
            return '<h2>Impossible de rouler à cette vitesse, elle dépasse la vitesse maximale</h2>';
        } else {
            // Sinon, retourne un message indiquant que le véhicule roule à la vitesse donnée.
            return '<h2>Le véhicule roule à ' . $vitesse . ' km/h</h2>';
        }
    }
}

// Classe Voiture qui hérite de la classe Vehicle
class Voiture extends Vehicle
{
    // Propriété privée pour le nombre de portes de la voiture
    // private $nombreDePortes : Chaque voiture a un nombre de portes défini.
    private $nombreDePortes;

    // Constructeur de la classe Voiture
    // Prend en plus des paramètres hérités, le nombre de portes
    public function __construct(string $marque, string $modele, int $vitesseMax, int $nombreDePortes)
    {
        // parent::__construct : Appelle le constructeur de la classe parente (Vehicle) pour initialiser les propriétés héritées.
        parent::__construct($marque, $modele, $vitesseMax);

        // Initialise la propriété spécifique $nombreDePortes de la voiture.
        $this->nombreDePortes = $nombreDePortes;
    }

    // Méthode afficherDetails()
    // Redéfinit la méthode parent pour ajouter le nombre de portes aux détails de la voiture.
    public function afficherDetails(): string
    {
        // parent::afficherDetails() : Appelle la méthode afficherDetails() de la classe parente pour réutiliser son contenu.
        // Ajoute ensuite les détails spécifiques à la voiture.
        return parent::afficherDetails() . '<p>Nombre de portes : ' . $this->nombreDePortes . '</p>';
    }
}

// Classe Moto qui hérite de la classe Vehicle
class Moto extends Vehicle
{
    // Constantes : Définissent les différents types de motos possibles
    const SPORT = 'Sport'; // Constante pour les motos de type Sport
    const ROADSTER = 'Roadster'; // Constante pour les motos de type Roadster
    const CRUISER = 'Cruiser'; // Constante pour les motos de type Cruiser

    // Propriété privée pour le type de moto (Sport, Roadster ou Cruiser)
    private $typeMoto;

    // Constructeur de la classe Moto
    // Prend en plus des paramètres hérités, le type de moto
    public function __construct(string $marque, string $modele, int $vitesseMax, string $typeMoto)
    {
        // Appelle le constructeur parent pour initialiser les propriétés héritées
        parent::__construct($marque, $modele, $vitesseMax);

        // Initialise la propriété spécifique $typeMoto
        $this->typeMoto = $typeMoto;
    }

    // Méthode afficherDetails()
    // Redéfinit la méthode parent pour ajouter le type de moto aux détails de la moto
    public function afficherDetails(): string
    {
        // Appelle la méthode afficherDetails() de la classe parente et ajoute les détails spécifiques à la moto
        return parent::afficherDetails() . '<p>Type Moto : ' . $this->typeMoto . '</p>';
    }
}

// Création d'un objet Voiture
// Instancie un objet Voiture avec les paramètres de la marque, du modèle, de la vitesse maximale et du nombre de portes.
$voiture1 = new Voiture('Audi', 'A3', 250, 3);

// Affiche les détails de la voiture en appelant la méthode afficherDetails() de l'objet $voiture1
echo $voiture1->afficherDetails();

// Simule la conduite de la voiture en appelant la méthode rouler() de l'objet $voiture1
echo $voiture1->rouler(270); // Essaie de rouler à 270 km/h, ce qui dépasse la vitesse maximale de 250 km/h

// Séparateur entre les tests
echo '<hr>';

// Création d'un objet Moto
// Instancie un objet Moto avec les paramètres de la marque, du modèle, de la vitesse maximale et du type de moto (utilisation d'une constante)
$moto1 = new Moto('Suzuki', 'GSXR', 280, Moto::CRUISER); // Moto de type Cruiser

// Affiche les détails de la moto en appelant la méthode afficherDetails() de l'objet $moto1
echo $moto1->afficherDetails();

// Simule la conduite de la moto en appelant la méthode rouler() de l'objet $moto1
echo $moto1->rouler(240); // Roule à 240 km/h (dans la limite de la vitesse maximale de 280 km/h)
?>
