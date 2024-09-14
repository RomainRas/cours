<?php
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
