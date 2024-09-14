<?php 

// Interface Publieur
// Une interface est un plan de conception qui impose à une classe d'implémenter certaines méthodes publiques sans en fournir le contenu.
// Ici, toute classe qui implémente "Publieur" doit avoir une méthode "publier" qui retourne une chaîne de caractères.
interface Publieur 
{
    // Déclaration de la méthode "publier"
    public function publier(): string;
}

// Classe abstraite Document
// Une classe abstraite ne peut pas être instanciée. Elle sert de modèle pour ses classes enfants.
// Les classes qui héritent de Document doivent obligatoirement implémenter les méthodes abstraites définies ici.
abstract class Document
{
    // Propriétés de la classe
    protected string $titre; // $titre est une chaîne de caractères et est protégée (accessible seulement dans les classes qui héritent de Document).
    protected string $auteur; // $auteur est également une chaîne de caractères et protégée.
    const MIN_PAGES = 50; // Constante de la classe représentant le nombre minimum de pages.

    // Le constructeur de la classe
    // __construct est une méthode spéciale appelée automatiquement lors de l'instanciation d'un objet. 
    // Ici, il prend un titre et un auteur et les assigne aux propriétés correspondantes.
    public function __construct(string $titre, string $auteur)
    {
        $this->titre = $titre; // Attribue la valeur passée en argument à la propriété $titre.
        $this->auteur = $auteur; // Attribue la valeur passée en argument à la propriété $auteur.
    }

    // Getter pour récupérer la valeur de $titre.
    public function getTitre(): string
    {
        return $this->titre;
    }

    // Setter pour modifier la valeur de $titre.
    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    // Getter pour récupérer la valeur de $auteur.
    public function getAuteur(): string
    {
        return $this->auteur;
    }

    // Setter pour modifier la valeur de $auteur.
    public function setAuteur(string $auteur): void
    {
        $this->auteur = $auteur;
    }

    // Méthode abstraite, elle doit être implémentée dans les classes filles.
    abstract public function afficherInfos(): string;
}

// Classe Livre qui hérite de Document et implémente l'interface Publieur.
// Cela signifie qu'elle doit contenir la méthode publier() définie dans l'interface Publieur et implémenter les méthodes abstraites de Document.
class Livre extends Document implements Publieur
{
    private int $nbPages; // Nombre de pages du livre, c'est une propriété privée (accessible uniquement dans la classe Livre).

    // Constructeur de la classe Livre qui appelle le constructeur de la classe parent (Document) via parent::__construct.
    public function __construct(string $titre, string $auteur, int $nbPages)
    {
        parent::__construct($titre, $auteur); // Appel au constructeur parent.

        // Si $nbPages est inférieur à la constante MIN_PAGES, alors $nbPages prendra la valeur de MIN_PAGES (50), sinon il gardera sa valeur.
        $this->nbPages = $nbPages < self::MIN_PAGES ? self::MIN_PAGES : $nbPages;
    }

    // Méthode afficherInfos() qui retourne une chaîne contenant des informations sur le livre.
    public function afficherInfos(): string
    {
        return '<p>Livre : ' . $this->titre . '</p>
                <p>Auteur : ' . $this->auteur . '</p>
                <p>Nombre de pages : ' . $this->nbPages . '</p>';
    }

    // Implémentation de la méthode publier() définie dans l'interface Publieur.
    public function publier(): string
    {
        return "<h3>Le livre {$this->titre} de l'auteur {$this->auteur} est publié avec un nombre de {$this->nbPages} pages</h3>";
    }
}

// Trait FormatteurTitre
// Un trait est un mécanisme permettant de réutiliser du code dans plusieurs classes. Il est utilisé ici pour formater un titre en majuscules.
trait FormatteurTitre
{
    public function formaterTitreMajuscule(): string
    {
        return mb_strtoupper($this->titre); // mb_strtoupper() est une fonction qui convertit une chaîne de caractères en majuscules.
    }
}

// Classe Article qui hérite de Document et utilise le trait FormatteurTitre pour formater le titre.
class Article extends Document implements Publieur
{
    use FormatteurTitre; // Utilisation du trait FormatteurTitre dans cette classe.

    private string $contenu; // Contenu de l'article.

    // Constructeur de la classe Article qui appelle également le constructeur parent.
    public function __construct(string $titre, string $auteur, string $contenu)
    {
        parent::__construct($titre, $auteur); // Appel du constructeur parent.
        $this->contenu = $contenu; // Attribue le contenu passé en argument à la propriété $contenu.
    }

    // Méthode publier() définie dans l'interface Publieur.
    public function publier(): string
    {
        // Utilisation du trait pour formater le titre en majuscules.
        return "L'article {$this->formaterTitreMajuscule()} de l'auteur {$this->auteur} est publié avec le contenu {$this->contenu}";
    }

    // Méthode afficherInfos() qui retourne des informations sur l'article.
    public function afficherInfos(): string
    {
        return '<p>Article : ' . $this->titre . '</p>
                <p>Auteur : ' . $this->auteur . '</p>
                <p>Contenu : ' . $this->contenu . '</p>';
    }
}

// Classe Bibliotheque avec une méthode statique.
// Une méthode statique peut être appelée sans créer d'objet à partir de la classe.
class Bibliotheque
{
    public static function compterCaracteres(string $texte): int
    {
        return strlen($texte); // strlen() compte le nombre de caractères dans une chaîne.
    }
}

// Classe finale Encyclopedie qui hérite de Document et implémente Publieur.
// La classe finale ne peut pas être héritée par d'autres classes.
final class Encyclopedie extends Document implements Publieur
{
    private string $edition; // Propriété représentant l'édition de l'encyclopédie.

    // Constructeur qui appelle également le constructeur parent.
    public function __construct(string $titre, string $auteur, string $edition)
    {
        parent::__construct($titre, $auteur); // Appel du constructeur parent.
        $this->edition = $edition; // Attribue la valeur d'édition.
    }

    // Méthode publier() définie dans l'interface Publieur.
    public function publier(): string
    {
        return "L'encyclopédie {$this->titre}, édition {$this->edition} de l'auteur {$this->auteur} a été publiée";
    }

    // Méthode afficherInfos() qui retourne des informations sur l'encyclopédie.
    public function afficherInfos(): string
    {
        return '<p>Encyclopédie : ' . $this->titre . '</p>
                <p>Auteur : ' . $this->auteur . '</p>
                <p>Édition : ' . $this->edition . '</p>';
    }
}

// Test des différentes classes

$livre = new Livre('Les misérables', 'Victor Hugo', 500);
echo $livre->publier();
echo $livre->afficherInfos();
echo '<h2>Nombre de caractères dans le livre : ' . Bibliotheque::compterCaracteres($livre->getTitre()) . '</h2>';

echo '<hr>';

$article = new Article('Actualités sur les jeux vidéos', 'Paul icier', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.');
echo $article->publier();
echo $article->afficherInfos();
echo '<h2>Nombre de caractères dans l\'article : ' . Bibliotheque::compterCaracteres($article->getTitre()) . '</h2>';

echo '<hr>';

$encyclopedie = new Encyclopedie('L\'encyclopédie des sciences', 'Isaac Newton', '2023');
echo $encyclopedie->publier();
echo $encyclopedie->afficherInfos();
echo '<h2>Nombre de caractères dans l\'encyclopédie : ' . Bibliotheque::compterCaracteres($encyclopedie->getTitre()) . '</h2>';

/* 
    - Les interfaces définissent des signatures de méthodes que les classes doivent implémenter.
    - Les classes abstraites permettent de définir un modèle avec des méthodes concrètes et abstraites.
    - Les traits permettent de réutiliser du code commun à plusieurs classes.
    - Les classes finales ne peuvent pas être étendues.
    - Les méthodes statiques peuvent être appelées sans avoir à instancier la classe.
    - Le tout est intégré dans le code avec les explications appropriées pour chaque terme et logique


/*

    TP bibliotheque
    ---------------

    Création de l'interface Publieur

        > Cette interface va définir une méthode publier() que toutes les entités capables de publier (livres, articles) devront implémenter.


    Création d'une classe abstraite Document

        > Cette classe abstraite sera la base des classes qui représenteront différents types de documents. Elle contiendra des propriétés communes comme le titre et l'auteur, ainsi qu'une constante (MIN_PAGES) pour le nombre minimum de pages.

        > Implémentez un constructeur pour cette classe, et des méthodes getter et setter pour les propriétés.

        > Créer une méthode afficherInfos() qui sera obligatoirement déclarée dans les class enfants


    Création de la classe Livre qui étend Document

    > Cette classe représente un livre. Elle ajoute des propriétés spécifiques comme le nombre de pages et implémente la méthode publier() de l'interface Publieur.

    
        > Pour information, dans la méthode publier on retounr une phrase de type : le livre **titre du livre** de **auteur** est publié avec un nombre de **nombre de pages** pages
        et pour la méthode afficherInfos on s'attend plutôt à une association : 
            livre : ****
            auteur : ****
            nombre de pages : ****



        > Utilisez la constante MIN_PAGES pour valider le nombre de pages.
            Si l'argument du nombre de pages est inférieur à la constante vous devez définir la constante comme valeur à la propriété sinon c'est l'argument à insérer


    Création d'un Trait pour l'édition
        > Créer un trait FormatteurTitre qui va contenir une méthode formaterTitreMajuscule() permettant de formater le titre d'un document en majuscules.

    Utilisation du Trait dans la classe Article
        > Créer une classe Article qui hérite de Document et implémente l'interface Publieur. Elle doit utiliser le trait FormatteurTitre
        > Elle contient une propriété contenu
        > Pour information, dans la méthode publier on retounr une phrase de type : l'article ** titre en MAJUSCULE ** de **auteur** est publié avec pour contenu **contenu**
        et pour la méthode afficherInfos on s'attend plutôt à une association : 
            article : ****
            auteur : ****
            contenu : ****

    Ajout d'une méthode static dans une classe Bibliotheque
        > Créer une classe Bibliotheque qui contient une méthode static compterCaracteres() permettant de compter le nombre de caractères d'un contenu donné.


    Création d'une classe finale Encyclopedie
        > Créer une classe finale Encyclopedie qui hérite de Document et implémente Publieur. Cette classe ne doit pas pouvoir être étendue. 
        Elle contient une propriété edition
        > Pour information, dans la méthode publier on retounr une phrase de type : l'encyclopédie **encyclopédie**, édition **edition** de **auteur** est publié
        et pour la méthode afficherInfos on s'attend plutôt à une association : 
            Encyclopédie : ****
            auteur : ****
            édition : ****

    --------------------------------------------------------------------------------------------------------------

    Créer un objet livre et afficher les méthodes publier() et afficherInfos()
    Créer un objet article et afficher les méthodes publier() et afficherInfos()
    Créer un objet encyclopedie et afficher les méthodes publier() et afficherInfos()
    Afficher le nombre de caractères dans le contenu du titre de l'article
*/
