<?php

// Exercice 1
    /*  Part1 :
        1. Créer une class véhicule qui conteindra une propriété privée litre (elle aura son get et son set)

        2. Créer egalement une methode info qui afficher une phrase de type : le véhicule a ... litres d'essence

        3. Créer un objet de la class véhicule et vous lui attribuerait 5 Litres d'essence ( vous pouvez par le setteur ou le construct)

        4. Afficher la phrase

        5. Créer une classe pompe qui contiendra une propriete privée reservoir (elle aura egalement son get et son set)

        6. Créer la methode info qui affichera le reservoir de la pompe : la pompe à essence a ... litres d'essence

        7. Créer un objet de la class pompe et vous lui afffecterait une quantité de 800 litres

        8. Afficher la phrase

        Part2
        1. Créer une methode public 'transfert'

        On dira que toutes les voiture ont une capacité de 40 litres

        Le but est que les véhicules viennent a la pompe a essence faire le On fait le plein
        (40 - la quantitié d'essence dans le véhicule) cette quantitié est a extraire de la quantité de la pompe
    */

// On créer la classe pour lui donner des proprieté qu'heriterons les objets
class Vehicule {
    
    // On declare les proprietées de la class
        // Propriete privé = accessible uniquement à l'interieur de la class
        // Le nombre de litre qu'il y a dans le reservoir
    private $litre;
    private $capacite;

    public function getCapacite() :int 
    {
        return $this->capacite;
    }

    public function setCapacite(int $paramCapacite) :void
    {
        $this->capacite =$paramCapacite;
    }
    // Constructeur = Créer le nombre de litre qu'il y a dans le véhicule
    public function __construct(int $litre = null) 
    {
        $this->litre = $litre;
    }
    
    // Getter = Recupere la valeur de la propriété "$litre"
        // Type = Int = nombre entier ou null
        // return = pour retourner hors de la fonction
        // this-> = affecte la valeur fourni par l'argument "litre" et comme vu plus haut dans __construct, pour $litre
    public function getLitre(): int 
    {
        return $this->litre;
    }

    // Setter = Modifie la valeur de la propriété "$litre"
        // Argument = $argumentLitre
        // Type = Int (integer)
        // this-> = affecte la valeur fourni par l'argument "$argumentLitre"
    public function setLitre(int $litre): void 
    {
        $this->litre = $litre;
    }
    
    // Methode info = afficher la quantité d'essence dans le véhicule
        // String = chaine de caracteres
        // on concatene pour avoir la valeur "$this->litre" en une phrase complete
    public function info() : string 
    {
        return ' Le véhicule a ' . $this->litre . ' litres d\'essence';
    }

    }

class Pompe {

    private $pompe;

    // Construct = Methode special
        // Argument = pompe
        // Type = Int = nombre entier ou null
        // this-> = affecte la valeur fourni par "private $pompe" de la class
    public function __construct(int $pompe = null) {
        $this->pompe = $pompe;
    }

    // Getter = Recupere la valeur de la propriété "$pompe"
        // Type = Int = nombre entier ou null
        // return = pour retourner hors de la fonction
        // this-> = affecte la valeur fourni par l'argument "$pompe"
        public function getPompe(): int {
            return $this->pompe;
        }
    
    // Setter = Modifie la valeur de la propriété "$pompe"
        // Argument = $argumentPompe
        // Type = Int (integer)
        // this-> = affecte la valeur fourni par l'argument "$argumentPompe"
    public function setPompe(int $argumentPompe): void {
        $this->pompe = $argumentPompe;
    }

    // Methode(info) = qui permet de retourner la chaine de caracteres
        // String = chaine de caracteres
        // on concatene pour avoir la valeur "$this->pompe" en une phrase complete
    public function info() : string {
        return ' la pompe à essence a ' . $this->pompe . ' litres d\'essence';
    }

    /* Voiture 5L sur 40L : 40 - 5 = 35L
       Pompe 800L - 35L
       Voiture 5L + 35L
    */

    public function transfert(Vehicule $vehicule): void {
        /*
            voiture 5L sur 40L, 40 - 5 = 35L
            pompe 800L - 35L
            voiture  5 + 35L 
        */

        // Calculer la quantité d'essence à transférer
        $quantiteTransfert = 40 - $vehicule->getLitre();
        //                   40 - 5

        // Rajouter la quantité dans la voiture
        $newQuantiteVoiture = $vehicule->getLitre() + $quantiteTransfert;
        //                           5            +      35
        $vehicule->setLitre($newQuantiteVoiture);
        
        // Soustraire la quantité de la pompe
        $newQuantitePompe = $this->pompe - $quantiteTransfert;
        //                     800           -      35
        $this->pompe = $newQuantitePompe;
    }
}

// Exercice part1
    echo 'Exercice Part 1' . '<br>';

    // Creation de l'objet vehicule1
    $vehicule1 = new vehicule();

    // la methode setLitre() nous permet de modifier la quantité de $vehicule1
    $vehicule1->setLitre(5);

    // La methode info() retourne la phrase 
        // Le véhicule a 5 litres d'essence
    echo $vehicule1->info() . '<br>';

    // Creation de l'objet de la pompe
    $pompe1 = new pompe();

    // la methode setPompe() nous permet de modifier la quantité de $pompe1
    $pompe1->setPompe(800);

    // La methode info() retourne la phrase 
        // La pompe a essence a 800 litres d'essences
    echo $pompe1->info() . '<br>';


    echo '<hr>';

// Exercice part2
    echo ' Exercice Part 2' .'<br>';

    // La methode info() retourne la phrase 
        // Le véhicule a 5 litres d'essence
    echo $vehicule1->info() . '<br>';

    // La methode info() retourne la phrase 
        // La pompe a essence a 800 litres d'essences
    echo $pompe1->info() . '<br>';

    echo ' On fait le plein ' . '<br>';

    // On appelle la méthode transfert() sur l'objet $pompe1 (qui représente une pompe à essence).
        // $vehicule1 est passé comme argument à la méthode transfert().
        // Cette methode rempli $vehicule1 d'essence jusuqu'a qu'il atteingne sa capacité maximale de 40 litres ( voir la fonction dans la class pompe )
    $pompe1->transfert($vehicule1) . '<br>';

    // La methode info() retourne la phrase 
        // Le véhicule a 40 litres d'essence car nous avons utiliser la methode transfer() plus haut soit :
            // Rajouter la quantité dans la voiture
            // $newQuantiteVoiture = $vehicule->getLitre() + $quantiteTransfert;
            //                                5            +       35
            // $vehicule->setLitre($newQuantiteVoiture);
    echo $vehicule1->info() . '<br>';

        // La methode info() retourne la phrase 
            // La pompe a essence a 765 litres d'essences car nous avons utiliser la methode transfert() plus haut soit :
                // Soustraire la quantité de la pompe
                // $newQuantitePompe = $this->pompe - $quantiteTransfert;
                //                         800       -      35
                //  $this->pompe = $newQuantitePompe; */
    echo $pompe1->info() . '<br>';

    echo '<hr>';


    echo ' Avec un autre vehicule ';

    // Creation de l'objet vehicule2
    $vehicule2 = new Vehicule(14);
    echo '<br>';

    // La methode info() retourne la phrase 
        // Le véhicule a 14 litres d'essence
        //
    echo $vehicule2->info() . '<br>';

    // La methode info() retourne la phrase 
        // La pompe a essence a 765 litres d'essence
    echo $pompe1->info() . '<br>';

    // On réaplique la meme methode transfer pour modifier les valeur avec le vehicule à 14 litre d'essence
    $pompe1->transfert($vehicule2) . '<br>';
    echo 'On fait le plein';

    // La methode info() nous retourne la nouvelle valeur
        // Le véhicule a 40 litres d'essence
        // Rajouter la quantité dans la voiture
            // $newQuantiteVoiture = $vehicule->getLitre() + $quantiteTransfert;
            //                           14            +           26
            // $vehicule->setLitre($newQuantiteVoiture);
    echo $vehicule2->info() . '<br>';

    // La methode info() retourne la phrase 
            // La pompe a essence a 800 litres d'essences car nous avons utiliser la methode transfert() plus haut soit :
                // Soustraire la quantité de la pompe
                //  $newQuantitePompe = $this->pompe - $quantiteTransfert;
                //                           765     -      26
                //  $this->pompe = $newQuantitePompe;
    echo $pompe1->info() . '<br>';

    echo '<hr>';

