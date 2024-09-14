<?php

// Definition des classes et héritage
    // Une class peut hériter d'une autre class
    // Les classes qui héritent sont appelées respectivement class mère et class fille
    // Pour définir cet héritage, on utilise le mot-clé "extends"

    // La méthode de la classe fille écrase toujours celle de la classe mère si elles portent le même nom (surchargement)
    // Une class peut hériter d'une class qui hérite aussi d'une autre
    // Exemple :
    // Class A 
    // Class B extends A
    // Class C extends B
    // Donc C hérite de B et de A

    // Important: Une classe ne peut hériter que d'une seule autre classe
class Animal{

    // Propriétés privées et protégées de la classe Animal
    private $propertyPrivate = 'Property private'; // Propriété privée, accessible uniquement dans la classe Animal
    protected $propertyProtected = 'Property protected'; // Propriété protégée, accessible dans Animal et ses classes filles
    public $propertyPublic = 'Property public'; // Propriété publique, accessible partout

    // Méthode publique "manger"
    public function manger()
    {
        // Retourne un message indiquant que l'animal mange
        return 'je mange';
    }

    // Méthode publique "dormir"
    public function dormir()
    {
        // Retourne un message indiquant que l'animal dort
        return 'ZzzzZzzzZ';
    }
}

// Classe fille "Chien" qui hérite de "Animal"
class Chien extends Animal
{
    // Méthode publique "aboyer" propre à la classe Chien
    public function aboyer()
    {
        // Aucune implémentation pour le moment
    }

    // Surcharge de la méthode "manger" de la classe mère Animal
    public function manger()
    {
        // Utilise la méthode "manger" de la classe mère puis ajoute "un os"
        return parent::manger() . ' un os';
    }

    // Accès à la propriété protégée de la classe mère
    public function getPropertyProtected()
    {
        return $this->propertyProtected;
    }

    // Tentative d'accès à la propriété privée de la classe mère (ne fonctionnera pas)
    // public function getPropertyPrivate()
    // {
    //     return $this->propertyPrivate; // Erreur car $propertyPrivate est privée
    // }
}

// Classe fille "Chat" qui hérite de "Animal"
class Chat extends Animal
{
    // Méthode publique "miauler" propre à la classe Chat
    public function miauler()
    {
        // Aucune implémentation pour le moment
    }

    // Surcharge de la méthode "manger" de la classe mère Animal
    public function manger()
    {
        // Utilise la méthode "manger" de la classe mère puis ajoute "une souris"
        return parent::manger() . ' une souris';
    }
}

// Classe "Chiot" qui hérite de "Chien" (donc aussi de "Animal")
class Chiot extends Chien
{
    // Hérite de toutes les méthodes et propriétés de Chien et indirectement de Animal
}

// Création d'un objet "Chien"
$chien1 = new Chien();

// Accès à la propriété publique "propertyPublic"
echo $chien1->propertyPublic;
echo '<br>';

// Accès à la propriété protégée via une méthode getter
echo $chien1->getPropertyProtected();
echo '<br>';

// Utilisation de la méthode surchargée "manger" dans la classe Chien
echo $chien1->manger();
echo '<br>';

// Création d'un objet "Chat"
$chat1 = new Chat();
echo $chat1->dormir(); // Utilise la méthode "dormir" héritée de Animal
echo '<br>';

// Création d'un objet "Chiot" qui hérite de Chien
$chiot1 = new Chiot();
echo $chiot1->manger(); // Utilise la méthode surchargée "manger" héritée de Chien
echo '<br>';

// Heritage sans extends

class A
{
    // Méthode publique "bonjour"
    public function bonjour(): string
    {
        return 'Bonjour';
    }
}

// Classe B ne peut pas hériter de A, mais peut instancier A dans son constructeur
class B 
{
    public $a;

    // Le constructeur crée un objet de la classe A à l'intérieur de la classe B
    public function __construct()
    {
        $this->a = new A();
    }

    // Méthode qui retourne le résultat de la méthode "bonjour" de l'objet A
    public function recuperation()
    {
        return $this->a->bonjour();
    }
}

// Création d'un objet B et accès à la méthode de l'objet A
$b = new B();
echo $b->recuperation();

?>
