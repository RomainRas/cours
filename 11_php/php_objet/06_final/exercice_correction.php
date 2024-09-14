<?php 

// Définition de la classe abstraite VehiculeFr
abstract class VehiculeFr
{
    // Constante : Déclaration des types de carburant
    const CARBURANT_ESSENCE = 'essence'; // Constante qui représente l'essence
    const CARBURANT_DIESEL = 'diesel';   // Constante qui représente le diesel

    // Méthode finale "demarrer"
    // final = Empêche la redéfinition de cette méthode dans les classes filles
    // public = accessible depuis n'importe où
    public final function demarrer(): string 
    {
        return 'Démarrage'; // Retourne la chaîne de caractères "Démarrage"
    }

    // Méthode abstraite "carburant"
    // abstract = Doit être définie dans chaque classe fille
    // string = Le type de retour de la méthode est une chaîne de caractères
    abstract public function carburant(): string;

    // Méthode publique "nombreDeTestObligatoire"
    // Cette méthode peut être redéfinie (surchargée) dans les classes filles
    // int = Le type de retour de la méthode est un entier
    public function nombreDeTestObligatoire(): int 
    {
        return 100; // Retourne l'entier 100, représentant les tests obligatoires de base
    }
    
    // Méthode abstraite "afficherDetails"
    // abstract = doit être implémentée dans les classes filles
    // string = Cette méthode renverra une chaîne de caractères
    abstract public function afficherDetails(): string;
}

// Classe "Peugeot" qui hérite de VehiculeFr
// final = Empêche cette classe d'être héritée
final class Peugeot extends VehiculeFr 
{
    // Constante définissant la marque de la voiture
    const MARQUE = 'Peugeot';

    // Définition de la méthode "carburant"
    // Cette méthode est une implémentation de la méthode abstraite de la classe mère
    // Elle retourne le type de carburant (essence ici)
    public function carburant(): string
    {
        return 'essence'; // Retourne la chaîne "essence"
        // ou on pourrait utiliser : return VehiculeFr::CARBURANT_ESSENCE;
    }

    // Redéfinition (surcharge) de la méthode "nombreDeTestObligatoire"
    // parent:: permet d'appeler la méthode de la classe mère
    // int = Retourne un entier qui est 170 (100 + 70)
    public function nombreDeTestObligatoire(): int
    {
        return parent::nombreDeTestObligatoire() + 70; 
        // Appelle la méthode de la classe mère et y ajoute 70
    }

    // Méthode "afficherDetails"
    // string = Retourne une chaîne de caractères contenant les détails
    public function afficherDetails(): string
    {
        // Retourne les informations en appelant les méthodes appropriées de l'objet
        return "<p>{$this->demarrer()}</p>
                <p>{$this->carburant()}</p>
                <p>{$this->nombreDeTestObligatoire()}</p>";
    }
}

// Classe "Renault" qui hérite de VehiculeFr
// final = Empêche cette classe d'être héritée
final class Renault extends VehiculeFr 
{
    // Constante définissant la marque de la voiture
    const MARQUE = 'Renault';

    // Définition de la méthode "carburant"
    // Cette méthode est une implémentation de la méthode abstraite de la classe mère
    // string = Retourne le type de carburant (diesel ici)
    public function carburant(): string
    {
        return 'diesel'; // Retourne la chaîne "diesel"
        // ou on pourrait utiliser : return VehiculeFr::CARBURANT_DIESEL;
    }

    // Redéfinition de la méthode "nombreDeTestObligatoire"
    // parent:: permet d'appeler la méthode de la classe mère
    // int = Retourne un entier qui est 130 (100 + 30)
    public function nombreDeTestObligatoire(): int
    {
        return parent::nombreDeTestObligatoire() + 30;
    }

    // Méthode "afficherDetails"
    // string = Retourne une chaîne de caractères contenant les détails
    public function afficherDetails(): string
    {
        // Retourne les informations en appelant les méthodes appropriées de l'objet
        return "<p>{$this->demarrer()}</p>
                <p>{$this->carburant()}</p>
                <p>{$this->nombreDeTestObligatoire()}</p>";
    }
}

// Instanciation de la classe "Peugeot"
// new = mot-clé qui crée un objet à partir d'une classe
$peugeot1 = new Peugeot();
echo $peugeot1->afficherDetails(); // Appelle la méthode afficherDetails() et affiche les informations

echo '<br>'; // Saut de ligne pour la lisibilité

// Instanciation de la classe "Renault"
// new = mot-clé qui crée un objet à partir d'une classe
$renault1 = new Renault();
echo $renault1->afficherDetails(); // Appelle la méthode afficherDetails() et affiche les informations

?>
