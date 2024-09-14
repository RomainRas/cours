
<?php
    // Exercice
    //1. 
        //1.1Créez une classe Vehicle qui a les propriétés suivantes :
            // marque (string)
            // modele (string) 
            // vitesseMax (int) 
            // (quelle visibilité ?)

        //1.2
        // Créez un constructeur qui initialise ces propriétés lors de l'instanciation.

        //1.3   
        //Ajoutez une méthode afficherDetails() qui affiche les détails du véhicule (marque, modèle et vitesse maximale).

        //1.4
        // Ajoutez une méthode rouler($vitesse) qui retourne un message indiquant que le véhicule roule à une certaine vitesse.
    
    //2.
        //2.1
        //Créez une classe Voiture qui hérite de Vehicle.

        //2.2
        //Ajoutez une propriété spécifique nombreDePortes (int) pour indiquer combien de portes la voiture 1.

        //2.3
        // Surchargez la méthode afficherDetails() pour inclure également le nombre de portes dans l'affichage.

    //3.
        //3.1
        //Créez une classe Moto qui hérite de Vehicle.

        //3.2
        //Ajoutez une propriété spécifique typeMoto (string) pour indiquer le type de moto (ex. : "Sport", "Cruiser").

        //3.3
        //Surchargez la méthode afficherDetails() pour inclure le type de moto dans l'affichage.

    //4.
        // Instanciez une (ou plusieurs) voiture et une (ou plusieurs) moto, puis appelez leurs méthodes afficherDetails() et rouler() pour vérifier que tout fonctionne correctement.

        // Instanciez une (ou plusieurs) voiture et une (ou plusieurs) moto, puis appelez leurs méthodes afficherDetails() et rouler() pour vérifier que tout fonctionne correctement.


    // On créer la classe pour lui donner des proprieté qu'heriterons les objets
    class Vehicle{

        // On declare les proprietées de la class
            // Propriete protected : propriété qui est accessible uniquement à l'intérieur de la classe où elle est définie et dans les classes qui en héritent 
            // $marque,$modele$,vitesseMax : On definit des valeurs par defaut
            // private : Propriete qui ne peux etre modifié ou consltée qu'a l'interieur de la class
            // $vitesse : Vitesse actuelle du véhicule initialisée a 0
        protected $marque = 'BMW';
        protected $modele = 'M5';
        protected $vitesseMax = 200;
        private $vitesse = 0;

        //Methode : __construct() est une méthode spéciale ( voir plus haut)
            // Constructeur de la classe Vehicle. Il est appelé automatiquement lors de la création d'un nouvel objet de cette classe.
            // Trois arguments : $marque, $modele, $vitesseMax et les affecte aux propriétés de l'objet via $this.
            // String : Chaine de caractere
            // Int : Nombre entier
        public function __construct(string $marque, string $modele, int $vitesseMax) {
            $this->marque = $marque;
            $this->modele = $modele;
            $this->vitesseMax = $vitesseMax;
        }

        // Methode : Retourne une chaîne de caractères contenant la marque, le modèle et la vitesse maximale du véhicule.
            // string : chaine de caractere
            // return : retourne la chaine de caractere hors de la fonction/methode
            // this-> : affecte les valeur fourni par marque,modele,vitesseMax
        public function afficherDetails() : string
        {
            return 
            'Marque : ' . $this->marque . '<br>' .
            'Modele : ' . $this->modele . '<br>' .
            'Vitesse maximale : '. $this->vitesseMax . ' km/h' . '<br>';
        }

        // Methode : getMarque() retourne la valeur de la propriété marque.
            // String : Chaine de caractere
            // return : ressort la valeur en dehors de sa fonction et l'affecte à la propriete de l'objet via $this->marque
        public function getMarque() : string
        {
            return $this->marque;
        }

        // Methode : SetMarque() definit une valeur a la propriete marque
            // public : accessible en dehors de la class
            // string : chaine de caractere
            // argument : $marque
            // void : signifie "vide" ou "aucune valeur". Il est utilisé pour indiquer qu'une fonction ou méthode ne renvoie aucune valeur, car c'est un setteur qui definit et non un getteur qui retourne
            // return : ressort la valeur en dehors de sa fonction pour pouvoir l'affecter à la propriete de l'objet via $this->$marque(argument)
        public function setMarque(string $marque) : void
        {
            $this->marque = $marque;
        }

        // Methode : getVitesse() retourne la valeur de la propriété vitesse.
            // Int : Nombre entier non decimal
            // return : ressort la valeur en dehors de sa fonction et l'affecte à la propriete de l'objet via $this->vitesse
        public function getVitesse() : int
        {
            return $this->vitesse;
        }

        // Methode : setVitesse() definit une valeur à la propriete vitesse
            // Int : Nombre entier non decimal
            // void : signifie "vide" ou "aucune valeur". Il est utilisé pour indiquer qu'une fonction ou méthode ne renvoie aucune valeur, car c'est un setteur qui definit et non un getteur qui retourne
            // if/else : definit la vitesse du véhicule a condition qu'elle ne depasse pas la vitesseMax. Si la vitesse depasse la limite, le message est affiché
        public function setVitesse(int $vitesse) : void
        {
            if ($vitesse <= $this->vitesseMax) 
            {
                $this->vitesse = $vitesse; 
            }
            else
            {
                echo ' La vitesse dépasse la vitesse maximale du véhicule.' . '<br>';
            }
        }

        // Methode : rouler qui retourne une chaine de caractere indiquand la vitesse actuelle de la voiture
            // return : ressort la chaine de caractere en dehors de la fonction
            // $this-> : permet d'acceder aux proprieté dans les objet marque et vitesse
        public function rouler() : string
        {
            return ' La ' . $this->marque . ' roule à ' . $this->vitesse . ' km/h';
        }
        
    }

    // Creation de l'objet $vehicle1 avec les parametres de la methode magique construct (marque, modele, vitesseMax)
    $vehicle1 = new Vehicle('BMW','M5',200);
    echo 'Informations du véhicule :<br>';
    // affiche les details du vehicule grace à la methode afficherDetails
    echo ''. $vehicle1->afficherDetails() .'';
    echo '<br>';
    echo 'Vitesse du véhicule : <br>';
    // Definit la vitesse du véhicule a 100 grace au setteur (setVitesse)
    $vehicle1->setVitesse(100);
    // affiche la vitesse du véhicule grace à la methode rouler
    echo $vehicle1->rouler();

    echo '<br>';
    echo '<br>';

    class Vago extends Vehicle{
        
        private $nombreDePortes;

        public function getNombreDePortes() : int
        {
            return $this->nombreDePortes;
        }

        public function setNombreDePortes(int $nombreDePortes) : void
        {
            $this->nombreDePortes = $nombreDePortes;
        }
        
        // 
            // On surcharge la class Vago grace à la meme class parent hérité de Vehicle
        public function afficherDetails() : string
        {
            return parent::afficherDetails() .' Nombres de portes :'. $this->nombreDePortes .'';

        }
    }

    $voiture2 = new Vago('Renault','c100',200);
    $voiture2->setNombreDePortes(4);
    echo $voiture2->afficherDetails();
    echo '<br>';
    echo '<br>';

    class Moto extends Vehicle {
        
        private $typeMoto;

        public function getTypeMoto() : string
        {
            return $this->typeMoto;
        }

        public function setTypeMoto(string $typeMoto) : void
        {
            $this->typeMoto = $typeMoto;
        }
        public function afficherDetails() : string
        {
            return parent::afficherDetails() .' Type de Moto : '. $this->typeMoto .'';

        }
    }

    // $moto1 = new Moto('Aprilla','Z650',250);
    $moto1->setTypeMoto('Routiere');
    echo $moto1->afficherDetails();

