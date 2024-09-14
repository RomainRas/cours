<?php
// Petite Exemple

    // On créer la class
    class eleve
    {
        // les variables en public
        public $prenom;
        public $nom;

        // Pas de methode
    }

    // On créer l'objet
    $eleve1 = new eleve();
    // On assigne les valeur aux proprietes de l'objet
        // -> nous permet d'acceder aux proprieté dans l'objet $etudiant1 qui contient prenom et nom, donc jean et bal; definit par sa class
    $eleve1->prenom = 'jean';
    $eleve1->nom = 'bal';

    // On concatene pour faire apelle aux variables qu'on a créer plus
    echo 'Petit Exemple' . '<br>';
    echo 'l\'eleve 1 s\'appelle ' . $eleve1->prenom . ' ' . $eleve1->nom . '<br>';
    echo '<hr>';


// NOTE 

    // il faut prendre l'habitude de tiper, mettre quelle type de type cela va retourner, ca evite les erreur et securise encore plus
    // il faut prendre l'habitude d'indenter
    // il faut prendre l'habitude de prendre des notes

    // Comment bien écrire une méthode
        // - Commenter
        // - nom explicite (de préférence en anglais)
        // - typer
        // - indenter
?>
<?php

// Getter et Setter
    class etudiant
    {
        private $prenom;
        private $nom;
        // les propriété prénom et nom sont de visibilité privé, autrement dit, elles ne sont qu'accessible que depuis la class elle meme
            // get permet d'afficher
            // set permet d'atribuer
            // Pour pouvoir afficher ou attribuer des valeurs a ses proprietés depuis l'objet, on utilisera des getters et des setteurs

        // Afficher une valeur
            // Getter = Recupere la valeur de la propriété $prenom pour l'afficher
                    // Type = String = chaine de caractere
                    // return = pour retourner hors de la fonction la chaine de caractere
                    // this-> = permet d'acceder aux proprieté dans l'objet prenom
            public function getPrenom() :string {
                return $this->prenom;
            }

        // Attribuer une valeur
            // Setter = permet d'attribuer une valeur à la propriete prenom
            // Type = String = chaine de caractere
            // return = pour retourner hors de la fonction la chaine de caractere
            // this-> = permet d'acceder aux proprieté dans l'objet prenom
            // void est un type de retour qui signifie "vide" ou "aucune valeur". Il est utilisé pour indiquer qu'une fonction ou méthode ne renvoie aucune valeur.
        public function setPrenom(string $argumentPrenom) :void {
            $this->prenom = $argumentPrenom;
        }

        public function getNom(): string {
            return $this->nom;    
        }

        public function setNom(string $nom): void {
            $this->nom = $nom;
        }

        public function info() : string {
            return 'L\'étudiant s\'appelle ' . $this->prenom . ' ' . $this->nom . '.';
        }
    }

        // Exemple
            echo 'Exemple :' . '<br>';
            // Création de l'objet $etudiant1
            $etudiant1 = new etudiant();
            
            // La methode setPrenom() nous permet de modifier la variable $prenom de la class etudiant
            $etudiant1->setPrenom('jean');

            // La methode getPrenom() nous permet maintenant de l'afficher
            echo $etudiant1->getPrenom() . '<br>';

            $etudiant2 = new etudiant();
            $etudiant2->setNom('brasse'); 
            echo $etudiant2->getNom();
            // le -> ne peux que cibler :
                // $objet->propriete 
                // $objet->methode()
            echo '<hr>';



// Exercice :
    
    // 1. Créer le getter et le setter de la propriété nom
         // dans l'objet 1 définir un nom et l'afficher
         // écrire une phrase sur l'etudiant 1
         // créer un nouvel objet etudiant2, définir nom et prénom et afficher la phrase*/

        /*      public function getNom(): string
                {
                    return $this->nom;    
                }

                public function setNom(string $nom): void 
                {
                    $this->nom = $nom
                }
        */
    $etudiant1->setNom('Brasse');

    echo 'L\'étudiant N*1 s\'appelle ' . $etudiant1->getPrenom();
    echo '<br>';

    // 2.créer une méthode info() qui retounre la phrase : l'étudiant s'appelle .....

        /*
            public function info() : string
            {
                return ' L\'étudiant s\'appelle ' . $this->prenom; . ' ' . $this->nom;
            }
        */
        echo $etudiant1->info();
        echo '<br>';

// Construct
    // __construct() est une méthode spéciale en PHP, appelée constructeur. Elle est automatiquement exécutée lorsqu'un nouvel objet est créé à partir de la classe. Autrement dit, lorsque vous faites : $variable = new class('argument', 'argument');

    class matiere{

        private $matiere;
        private $prof;

        // __construct() est une méthode spéciale ( voir plus haut)
            // public = accessible depuis l'exterieur de la class
            // string = chaine de caractere
            // null   = si il n'y a aucune valeur, ce sera null ( ceci permet de créer l'objet sans fournir d'argument )
            //          permet de verifier si la variable est null, et si c'est le cas on lui assigne un valeur par defaut ' matiere non specifiée '
        public function __construct(string $matiere = null, string $prof = null) {
            $this->matiere = $matiere ?? 'matiere non spécifié';
            $this->prof = $prof ?? 'professeur non spécifié';
        }
        
        // Methode info() = renvoi des informations sur l'objet créer
            // Public = accessible depuis l'exterieur de la class
            // function = mot-clé php = definir une methode de la class
            // info = nom de la methode = renvoie des information sur l'objet, ici matiere et professeur
            // string = type = chaine de caractere
            // return = renvoi la valeur la ou la methode est apellé
            // $this-> = fait ref a la propriete de l'objet apellé
        public function info() : string {
            return ' La matiere : ' . $this->matiere . ' est enseigné par : ' . $this->prof . '.' ;
        }
    }

    // On crée l'objet
        // $matiere1 = variable
        // new = instancier le nouvel objet
        // matiere = nom de la class defini
        // liste d'argument à donner grace à la methode magique __construct  
    $matiere1 = new matiere('maths', 'M Dupont');
    echo $matiere1->info();
    echo '<br>';

    $matiere2 = new matiere('Sport');
    echo $matiere2->info();
