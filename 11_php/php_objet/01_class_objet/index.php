<?php
// 01 INTRO

    /* Definitions
        Une class est un regroupement d'informations, comprenant :
                - propriétés ( variables )
                - méthodes ( fonctions )
                - constantes

        Le contenu de la class aborde le meme sujet
        exemple : la classe PDO aborde le sujet de la base de donnéees
                la class DateTime aborde le sujet de la date et le temps

        On n'utilise pas directement la class, celle-ci est un modele
        On genere une instance/objet de la class (un exemplaire)
        On peux créer autant d'objet que l'on veux
        Un objet hérite de toutes les informations de la class
            Class1 (voiture) -> Objet1 ( audi )
                            -> Objet2 ( bmw )
                            -> Objet3 ( mercedes )

        Pour generer la syntaxe on utilise le mot-clé 'new'
        exemple : $objet = new Class

        Les informations
            Private = l'informations est accessible que dans la class
            Protected
            Public  = l'information est accessible de partout
                on distingue 3 localisations 
                    - dans la class
                    - dlans la class heritiere
                    - dans l'objet
            
            la visiblité private est accessible que depuis la class
            la visibilité protected est accessible dans la class et les class heritieres
            la visibilité public est accessible dans la class, les class héritieres et les objets
    */
    /* Exemple */
        
        // Creation de class
            // On créer la classe pour lui donner des proprieté qu'heriterons les objets
                // c'est donc un modele pour créer des objet avec des proprieté ( variables ) et des methodes ( fonctions )
            class voiture_index1
            {
                // On declare les proprietées de la class ( variables )
                    // Propriete public = accessible dans la class, les class héritieres et les objets
                    // Le nombre de litre qu'il y a dans le reservoir
                public $marque;

                    // Propriete privé = accessible uniquement à l'interieur de la class
                private $carburant;

                // On declare les methodes de la class ( methodes )
                    // public = accessible dans la class, les class héritieres et les objets
                    // return = pour retourner hors de la fonction
                public function demarrage(){
                    return 'voiture allumée';
                }

                // On declare les methodes de la class ( methodes )
                    // Privé = accessible uniquement à l'interieur de la class
                    // return = pour retourner hors de la fonction
                private function turbo() {
                    return 'turbo';
                }
                
                // On declare les methodes de la class ( methodes )
                    // return = pour retourner hors de la fonction
                    // this-> = Permet d'accéder aux propriétés ou méthodes de cet objet. Cela accède à la propriété marque de l'objet actuel.
                public function info() {
                    return 'la marque du véhicule est ' . $this->marque;
                }
            }
        // Création de l'objet

            // On créer l'objet qui aura les proprieté que nous avons donné à sa class plus haut
                // "echo $voiture1" ne fonctionnerais pas car on ne peux pas afficher un objet sur le navigateur
                // $ est utilisé pour indiquer une variable
                $voiture1 = new voiture_index1();
            // -> ( Uniquement apres un objet )
            // => ( Uniquement dans des tableau )

        // Affectation

            // $voiture1 = objet.
            // ->        = l'opérateur utilisé pour accéder à une propriété ou méthode d'un objet.
            // marque    = propriété de cet objet.
            // 'audi'    = la valeur affectée à la propriété marque de l'objet.
            // Attribue la valeur 'audi' à la propriété marque de l'objet $voiture1, ce qui signifie que cet objet représente une voiture de marque Audi.
            $voiture1->marque = 'audi';

        // Affichage

            // echo $voiture1->turbo;
                // On ne peut pas acceder a une propriété privée depuis l'objet
            echo 'la voiture 1 est de la marque ' . $voiture1->marque. '<br>';

            // La methode info() retourne la phrase 
                // return 'la marque du véhicule est ' . $this->marque;
                    // la marque du véhicule est audi
                // car $voiture1->marque = 'audi';
                echo $voiture1->info();

