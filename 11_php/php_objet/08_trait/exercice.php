<?php

// Déclaration de l'interface EtreVivant : cette interface impose une structure commune à toutes les classes qui l'implémentent.
// Chaque classe doit définir les méthodes respirer, dormir, manger et boire.
interface EtreVivant
{
    public function respirer(): string; // Définir la fonction respirer qui doit retourner une chaîne de caractères.

    public function dormir(): string; // Définir la fonction dormir qui doit retourner une chaîne de caractères.

    public function manger(): string; // Définir la fonction manger qui doit retourner une chaîne de caractères.

    public function boire(): string; // Définir la fonction boire qui doit retourner une chaîne de caractères.
}

// Déclaration de l'interface Renseignement : impose aux classes qui l'implémentent de définir des méthodes pour obtenir l'espèce, le sexe et l'âge de l'être vivant.
interface Renseignement
{
    public function espece(): string; // Définir la fonction espece qui retourne une chaîne de caractères représentant l'espèce.

    public function sexe(): bool; // Définir la fonction sexe qui retourne un booléen (vrai pour femelle, faux pour mâle).

    public function age(): int; // Définir la fonction age qui retourne un entier représentant l'âge.
}

// Trait Voler : permet d'ajouter une fonctionnalité à une classe qui "utilise" ce trait.
trait Voler
{
    public function voler(): string // Cette méthode retourne une chaîne de caractères indiquant que l'animal peut voler.
    {
        return 'Cet animal peut voler';
    }
}

// Trait Pondre : permet d'ajouter une fonctionnalité de ponte d'œufs à une classe.
trait Pondre
{
    public function pondre(): string // Cette méthode retourne une chaîne de caractères indiquant que l'animal pond des œufs.
    {
        return 'Cet animal peut pondre';
    }
}

// Trait Vivipare : permet d'indiquer qu'un animal ne pond pas d'œufs.
trait Vivipare
{
    public function vivipare(): string // Cette méthode retourne une chaîne de caractères indiquant que l'animal est vivipare.
    {
        return 'Cet animal ne pond pas d\'oeufs';
    }
}

// Trait Ramper : utilisé pour ajouter la capacité de ramper à une classe.
trait Ramper {
    public function ramper() // Retourne une chaîne indiquant que l'animal peut ramper.
    {
        return 'Cet animal peut ramper';
    }
}

// Trait Quadrupede : indique que l'animal a quatre pattes.
trait Quadrupede {
    public function quadrupede() // Retourne une chaîne indiquant que l'animal a quatre pattes.
    {
        return 'Cet animal a 4 pattes';
    }
}

// Trait Nager : utilisé pour ajouter la capacité de nager à une classe.
trait Nager {
    public function nager() // Retourne une chaîne indiquant que l'animal peut nager.
    {
        return 'Cet animal peut nager';
    }
}

// Trait Marcher : permet d'ajouter la capacité de marcher à une classe.
trait Marcher {
    public function marcher() // Retourne une chaîne indiquant que l'animal peut marcher.
    {
        return 'Cet animal peut marcher';
    }
}

// Classe PoissonRouge implémente les interfaces EtreVivant et Renseignement, et utilise les traits Nager et Pondre.
class PoissonRouge implements EtreVivant,Renseignement
{
    use Nager; // Utilisation du trait Nager qui permet au poisson rouge de nager.
    use Pondre; // Utilisation du trait Pondre pour indiquer que le poisson pond des œufs.

    // La méthode respirer retourne une chaîne indiquant comment le poisson respire.
    public function respirer(): string
    {
        return ' Le poisson rouge respire avec ses branchies.';
    }

    // La méthode dormir retourne une chaîne indiquant comment le poisson dort.
    public function dormir(): string
    {   
        return ' Le poisson rouge dort dans l\'eau';
    }

    // La méthode manger retourne une chaîne indiquant ce que le poisson mange.
    public function manger(): string
    {
        return ' Le poisson rouge mange des trucs';
    }

    // La méthode boire retourne une chaîne indiquant que le poisson absorbe de l'eau.
    public function boire(): string
    {
        return 'Le poisson rouge absorbe de l\'eau.';
    }

    // La méthode espece retourne l'espèce du poisson.
    public function espece(): string
    {
        return ' Poisson';
    }

    // La méthode sexe retourne true (femelle) ou false (mâle) pour indiquer le sexe.
    public function sexe(): bool
    {
        return true; // true pour femelle, false pour male
    }

    // La méthode age retourne l'âge du poisson (ici 1 an).
    public function age(): int
    {
        return 1;
    }

    // La méthode afficherDetails retourne tous les détails sur le poisson.
    public function afficherDetails(): string
    {
        $sexeTexte = $this->sexe() ? 'Femelle' : 'Male'; // Détermination du sexe en texte (femelle ou mâle).
        return $this->respirer() . '<br>' .
               $this->dormir() . '<br>' .
               $this->manger() . '<br>' .
               $this->boire() . '<br>' .
               "Espèce: " . $this->espece() . '<br>' .
               "Sexe: " . $sexeTexte . '<br>' .
               "Age: " . $this->age() . '<br>' .
               $this->nager() . '<br>' . // Affichage des capacités du poisson (nager).
               $this->pondre() . '<br>'; // Affichage de la capacité de pondre.
    }
}

// D'autres classes similaires suivent la même logique, comme Baleine, Boa, Chien et Aigle.

$poissonRouge = new PoissonRouge(); // Création d'un objet PoissonRouge.
echo '<h3> Poisson Rouge </h3>';
echo $poissonRouge->afficherDetails(); // Affichage des détails du poisson rouge.

