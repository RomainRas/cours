<?php

/*

    Créer une class VehiculeFR qui ne peut pas etre instanciée
    Dans cette class :
        - Créer une methode public demarrer() qui retournera 'demarrage', cette methode ne pourra etre modifiable
        - Créer une methode public carburant() qui devrai obligatiorement etre declarée dans les class enfant
        - Créer une methode public nombreDeTestObligatoire() qui retournera 100(integer)

    créer une class Peugot qui va hériter de VehiculeFR et qui ne peut pas se faire hériter
    dans cette class :
        - Le carburant de peugot est de l'essence (string)
        - Le nombre de test obligatoire chez peugoet est de 170

    créer une class Renault qui va hériter de VehiculeFR et qui ne peut pas se faire hériter
    dans cette class :
        - Le carburant de Renault est du diesel (string)
        - Le nombre de test obligatoire chez renault est de 130

    Créer un objet Peugeot et un objet Renault
    Afficher pour chacun d'eux le demarrage, le carburant et le nombre de test obligatoire
*/

// Création de la class
    // abstract = ne peux pas etre instancié, va servir de modele pour les class enfants
abstract class VehiculeFr_exercice
{
    // Methode
        // Methode demarrer() + return : va retourner la chaine de caractere ( string ) donnée
        // Final = Ne peux pas etre modifier dans les enfants
        // Public = Peux etre utiliser en dehors de la class 
    final public function demarrer() : string
    {
        return 'Demarrage :';
    }

    // Methode
        // abstract = chaque class enfant doit obligatoirement la definir
        // Public = Peux etre utiliser en dehors de la class 
        // String = Doit retourner une chaine de caractere
    abstract public function carburant(): string;   

    // Methode
        // Public = Peux etre utiliser en dehors de la class 
        // Int = Doit retourner un nombre entier non decimal
    public function nombreDeTestObligatoire() : int {
        return 100;
    }
}

// Class
    // Final = Ne peux pas se faire hériter
    // extends = Hérite de VehiculeFR_exercice
final class Peugot_exercice extends VehiculeFr_exercice
{
    // Methode
        // Public = Peux etre utiliser en dehors de la class 
        // String = Doit retourner une chaine de caractere
    public function carburant(): string
    {
        return 'Essence';
    }

    // Methode
        // Public = Peux etre utiliser en dehors de la class 
        // Int = Doit retourner un nombre entier non decimal
    public function nombreDeTestObligatoire(): int
    {
        return 170;
    }
}

// Class
    // Final = Ne peux pas se faire hériter
    // extends = Hérite de VehiculeFR_exercice
final class Renault_exercice extends VehiculeFr_exercice
{
    // Methode
        // Public = Peux etre utiliser en dehors de la class 
        // String = Doit retourner une chaine de caractere
    public function carburant(): string
    {
        return 'Diesel';
    }

    // Methode
        // Public = Peux etre utiliser en dehors de la class 
        // Int = Doit retourner un nombre entier non decimal
    public function nombreDeTestObligatoire(): int
    {
        return 130;
    }
}

// Creation de l'objet
$peugot_exercice = new Peugot_exercice();
echo '<h3>PEUGEOT :</h3>';
// demmarrer retourne ' Demarrage '
echo $peugot_exercice->demarrer();
echo '<br>';
// Carburant retourne ' Essence '
echo $peugot_exercice->carburant();
echo '<br>';
// NombreDeTestObligatoire retourne 170
echo 'Nombre de tests obligatoire :' . $peugot_exercice->nombreDeTestObligatoire();
echo '<br>';

// Creation de l'objet
$renault_exercice = new Renault_exercice();
echo '<h3>RENAULT :</h3>';
// demmarrer retourne ' Demarrage '
echo $renault_exercice->demarrer();
echo '<br>';
// Carburant retourne ' Essence '
echo $renault_exercice->carburant();
echo '<br>';
// NombreDeTestObligatoire retourne 130
echo 'Nombre de tests obligatoire :' . $renault_exercice->nombreDeTestObligatoire();
echo '<br>';



