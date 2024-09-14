<?php 

/*
    Les traits ont été inventés pour repousser les limites de l'héritage.
    En effet, une classe peut hériter d'une seule autre classe en utilisant le mot-clé "extends".
    Cependant, une classe peut importer plusieurs traits, ce qui permet de combiner les fonctionnalités de plusieurs "mini-classes".
    
    Un trait n'est pas instanciable. Il sert uniquement à injecter des fonctionnalités dans une classe.
    L'idée est de permettre à une classe d'avoir des méthodes et propriétés définies dans plusieurs traits sans avoir besoin de recourir à l'héritage multiple.
*/

// Déclaration du premier trait "Test"
trait Test 
{
    // Propriété publique "proprieteTest" 
    // Accessible partout (dans et en dehors de la classe)
    public $proprieteTest = 'test';

    // Méthode publique "functionTest"
    // Retourne la chaîne de caractères "function test"
    public function functionTest(): string
    {
        return 'function test'; // Retourne la chaîne "function test"
    }
}

// Déclaration du second trait "Kiwi"
trait Kiwi 
{
    // Propriété publique "proprieteKiwi"
    public $proprieteKiwi = 'kiwi';

    // Méthode publique "functionKiwi"
    // Retourne la chaîne de caractères "function kiwi"
    public function functionKiwi(): string
    {
        return 'function kiwi'; // Retourne la chaîne "function kiwi"
    }
}

// Déclaration de la classe "Testing"
class Testing 
{
    // Utilisation des traits "Test" et "Kiwi"
    use Test;  // Ajoute les propriétés et méthodes du trait "Test" à cette classe
    use Kiwi;  // Ajoute les propriétés et méthodes du trait "Kiwi" à cette classe
    // Les traits permettent à cette classe de "composer" avec plusieurs fonctionnalités
}

// Création d'une instance de la classe "Testing"
$testing = new Testing(); // Instanciation d'un objet de la classe "Testing"

// Affichage des propriétés et méthodes de la classe via l'objet $testing
echo $testing->proprieteTest; // Affiche la propriété "proprieteTest" héritée du trait "Test"
echo '<br>';
echo $testing->functionTest(); // Appelle la méthode "functionTest" héritée du trait "Test"
echo '<br>';
echo $testing->proprieteKiwi; // Affiche la propriété "proprieteKiwi" héritée du trait "Kiwi"
echo '<br>';
echo $testing->functionKiwi(); // Appelle la méthode "functionKiwi" héritée du trait "Kiwi"


/*
    Explication des termes utilisés :
    
    1. `trait` :
        - Un trait est une fonctionnalité de PHP qui permet d'inclure des méthodes dans des classes. 
        - Il aide à réutiliser des fonctionnalités communes dans plusieurs classes.
        - Ici, `Test` et `Kiwi` sont des traits qui fournissent des méthodes et des propriétés que les classes peuvent utiliser.

    2. `use` :
        - Le mot-clé `use` permet à une classe d'importer un trait. 
        - Dans notre cas, la classe `Testing` utilise deux traits : `Test` et `Kiwi`. Cela permet à la classe de bénéficier des fonctionnalités de ces traits.

    3. `public` :
        - Les méthodes et propriétés publiques peuvent être appelées depuis l'extérieur de la classe.
        - Par exemple, `$testing->proprieteTest` ou `$testing->functionTest()` sont des appels externes aux propriétés et méthodes publiques.

    4. `$this` :
        - `$this` est utilisé dans les méthodes de classe pour faire référence à l'objet actuel.
        - Dans le cas de `return $this->proprieteTest;`, il fait référence à la propriété de l'objet en cours d'exécution.

    5. `new` :
        - Le mot-clé `new` est utilisé pour créer une nouvelle instance d'une classe.
        - Ici, `$testing = new Testing();` crée un objet de la classe `Testing`.

    6. `echo` :
        - La commande `echo` permet d'afficher une sortie. Par exemple, `echo $testing->proprieteTest;` affiche la valeur de la propriété `proprieteTest`.
        
    7. `return` :
        - Le mot-clé `return` est utilisé pour retourner une valeur à partir d'une méthode. 
        - Par exemple, `return 'function test';` dans `functionTest()` retourne la chaîne de caractères 'function test'.
*/
