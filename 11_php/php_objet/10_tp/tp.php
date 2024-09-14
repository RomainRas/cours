<?php

// Creation de l'interface Publieur
interface Publieur_tp
{
    // Methode(fonction) publier
        // Public : fonctionne en dehors de sa class
        // Function : publier() a implementer dans les entitées capables de publier ( livres, articles)
    public function publier_tp();
}

// Class Document
    // Abstract : Class qui ne peux pas etre instanciée (pas d'objet)
abstract class Document_tp
{
    // Propriété(variable)
        // Protected : ne sera pas accessible directement de l'exterieur de la class mais à l'interieur ou dans les class qui hérite de celle ci
    protected $titre_tp;

    protected $auteur_tp;

    protected $pages_tp;

    // Propriété 
        // Constante (MIN_PAGES) qui definit le nombre minimal de page
    const MIN_PAGES_tp = 15;

     public function __construct(string $titre_tp = null, string $auteur_tp = null,  $pages_tp = null) {
        $this->titre_tp = $titre_tp;
        $this->auteur_tp = $auteur_tp;
        // Conditions 
            // if : Si la valeur definit par ($pages_tp) est superieur ou egal à la constante (self::MIN_PAGES_tp)
                // Si la propriété est vrai, ($pages_tp) de l'objet ($this->pages_tp) est assigné avec la valeur de ($pages_tp)
            // else : Si la condition est fausse on execute le bloc else
                // ($this->pages = self::MIN_PAGES) au lieu que ($page_tps) de l'objet ($this->pages_tp) soit assigné avec la valeur ($pages_tp) elle sera assigné avec la valeur (self::MIN_PAGES_tp)
        if ($pages_tp >= self::MIN_PAGES_tp) {
            $this->pages_tp = $pages_tp;
        } else {
            echo 'Nombre de pages minimum non autorisé. Le nombre de pages est réglé à ' . self::MIN_PAGES_tp . '.<br>';
            $this->pages_tp = self::MIN_PAGES_tp;
        }

        /*$this->titre_tp = $titre_tp ?? 'Titre non spécifié';
        $this->auteur_tp = $auteur_tp ?? 'Auteur non spécifié';
        // Conditions
            // if ($pages !== null && $pages >= self::MIN_PAGES) : Condition qui utilise deux vérifications avec (&&)
            // ($pages !== null) verifie que $pages n'est pas null,qu'elle existe et n'est pas vide, ca evite de lancer d'autres comparaison et donc passer au else
            // ($pages >= self::MIN_PAGES) verifie que ($pages) est superieur ou egal à la valeur minimal defini par la constante (self::MIN_PAGES)
                // Si les deux conditions son vrai, la propriété de ($pages) de l'objet ($this->pages) sera assigné avec la valeurs de ($pages)
            // else : Si la condition est fausse, c'est à dire si ($pages) est inferieur à la constante (MIN_PAGES) le message d'erreur s'affiche
        if ($pages_tp !== null && $pages_tp >= self::MIN_PAGES_tp) {
            $this->pages_tp = $pages_tp;
        } else {
            echo 'Nombre de pages minimum non autorisé ou non fourni. Le nombre de pages est réglé à ' . self::MIN_PAGES_tp . '.<br>';
            $this->pages_tp = self::MIN_PAGES_tp;
        } */
    }

    // Getteur ($titre)
        // Getter = Recupere la valeur de la propriété $titre pour l'afficher
            // Type = String = chaine de caractere
            // return = pour retourner hors de la fonction la chaine de caractere
            // this-> = permet d'acceder aux proprieté dans l'objet prenom
    public function getTitre_tp(): string 
    {
        return $this->titre_tp;
    }

    // Setteur ($titre)
        // Setter = permet d'attribuer une valeur à la propriete prenom
            // Type = String = chaine de caractere
            // return = pour retourner hors de la fonction la chaine de caractere
            // this-> = permet d'acceder aux proprieté dans l'objet prenom
            // void est un type de retour qui signifie 'vide' ou 'aucune valeur'. Il est utilisé pour indiquer qu'une fonction ou méthode ne renvoie aucune valeur.
    public function setTitre_tp(string $titre_tp): void 
    {
        $this->titre_tp = $titre_tp;
    }

    // Getteur ($auteur)
    public function getAuteur_tp(): string
    {
        return $this->auteur_tp;
    }

    // Setteur ($auteur)
    public function setAuteur_tp(string $auteur_tp): void 
    {
        $this->auteur_tp = $auteur_tp;
    }

    // Getteur ($pages)
        // (Int) : Type qui retourne un nombre entier non decimale
    public function getPages_tp(): int 
    {
        return $this->pages_tp;
    }

    // Setteur ($pages)
    public function setPages_tp(int $pages_tp): void
    {
        $this->pages_tp = $pages_tp;
    }
}

class Livre_tp extends Document_tp implements Publieur_tp
{

    public function __construct(string $titre_tp = null, string $auteur_tp = null, int $pages_tp = null)
    {
        parent::__construct($titre_tp, $auteur_tp, $pages_tp);
    }

    public function publier_tp(): string
    {
        return  '<h4>Explication : </h4>' .
                'Le livre ' . $this->titre_tp . ' de ' . $this->auteur_tp . ' est publié avec un nombre de ' . $this->pages_tp . ' pages.';
    }

    public function afficherInfos_tp(): string
    {
        return  '<h4>Details Livre: </h4>' .
                'Titre du livre : ' . $this->titre_tp . "<br>" .
                'Auteur : ' . $this->auteur_tp . "<br>" .
                'Nombre de pages : ' . $this->pages_tp . "<br>";
    }
}

trait FormateurTitre_tp
{
    public function formaterTitreMajuscule_tp($titre_tp): string
    {
        return strtoupper($titre_tp);
    }
}

class Article_tp extends Document_tp implements Publieur_tp
{
    use FormateurTitre_tp;
    protected $contenu_tp;

    public function __construct(string $titre_tp = null, string $auteur_tp = null, string $contenu_tp = null)
    {
        parent::__construct($titre_tp,$auteur_tp, null);
        $this->contenu_tp = $contenu_tp;
    }

    public function publier_tp(): string
    {
        $titreEnMajuscule_tp = $this->formaterTitreMajuscule_tp($this->titre_tp);
        return  '<h4>Explication : </h4>' .
                ' L\'article ' . $titreEnMajuscule_tp . ' de ' . $this->auteur_tp . ' est publié avec pour contenu : ' . $this->contenu_tp . ".";
    }

    public function afficherInfos_tp(): string
    {
        return  '<h4>Details Article :</h4>' .
                'Article : ' . $this->titre_tp . '<br>' .
                'Auteur : ' . $this->auteur_tp . '<br>' .
                'Contenu : ' . $this->contenu_tp . '<br>';
    }
}

class Bibliotheque_tp
{
    // Méthode statique pour compter le nombre de caractères dans un contenu donné
    public static function compterCaracteres_tp(string $contenu_tp): int
    {
        return strlen($contenu_tp); // Utilise strlen() pour retourner la longueur de la chaîne
    }
}

final class Encyclopedie_tp extends Document_tp implements Publieur_tp
{
    protected $encyclopedie_tp;
    protected $edition_tp;

    public function __construct(string $titre_tp = null, string $auteur_tp = null, string $edition_tp = null)
    {   
        parent::__construct($titre_tp, $auteur_tp, null);
        $this->edition_tp = $edition_tp;
    }
    public function publier_tp(): string
    {
        return  '<h4>Explication : </h4>' .
                'L\'encyclopedie ' . $this->encyclopedie_tp . ' edition de ' . $this->edition_tp . ' de ' . $this->auteur_tp . ' est publié.';
    }

    public function afficherInfos_tp(): string
    {
        return  '<h4>Details Encyclopedie : </h4>' .
                'Encyclopédie : ' . $this->encyclopedie_tp . '<br>' .
                'Edition : ' . $this->edition_tp . '<br>' .
                 'Auteur : ' . $this->auteur_tp . '<br>';
    }
}

// Creation de l'objet
$livre_tp = new Livre_tp("1958", "George Orwell", 328);
// Affichage des informations du livre
echo $livre_tp->afficherInfos_tp();
// Publication du livre
echo $livre_tp->publier_tp();

echo '<br>';

$article_tp = new Article_tp(' Les technologies modernes et l\'education ',' Jean Dupont ',' Cet article explore l\'impact des technologies modernes sur les méthodes d\'enseignement et l\'apprentissage des étudiants. ',
);
// Affichage des informations de l'article
echo $article_tp->afficherInfos_tp();
// Publication de l'article
echo $article_tp->publier_tp();

// Creation de l'objet
$encyclopedie_tp = new Encyclopedie_tp('Encyclopedie de la science','John Smith','Galimard');
echo $encyclopedie_tp->afficherInfos_tp();
echo $encyclopedie_tp->publier_tp();
