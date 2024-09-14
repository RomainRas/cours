<?php 


// Inclusion des fichiers nécessaires avec 'require_once' pour garantir qu'ils sont chargés une seule fois.
// Il faut spécifier le chemin correct relatif à la racine ou absolu si nécessaire.
require_once('/dossier1/hello.php'); // Inclut le fichier contenant la classe Hello du namespace dossier1.
require_once('/dossier2/hello.php'); // Inclut le fichier contenant la classe Hello du namespace dossier2.

use dossier1\Hello as HelloDossier1; // Utilisation de la classe Hello du namespace dossier1 sous un alias 'HelloDossier1'.
use dossier2\Hello; // Utilisation de la classe Hello du namespace dossier2 (sans alias ici).

// Création d'une instance de la classe Hello du namespace dossier1 avec l'alias 'HelloDossier1'.
$hello1 = new HelloDossier1(); 

// Création d'une instance de la classe Hello du namespace dossier2.
$hello2 = new Hello();

// Explications:
// - 'use' permet d'importer des classes spécifiques d'un namespace afin de les utiliser dans le code.
// - 'as' permet de donner un alias à une classe importée, ce qui est utile lorsque plusieurs classes portent le même nom mais viennent de namespaces différents.
// - 'require_once' assure que chaque fichier est inclus une seule fois, évitant ainsi les doublons et les erreurs de chargement.

/*
    Explications sur les namespaces en PHP :
    
    - Un namespace est un mécanisme qui permet d'organiser et de regrouper des classes, fonctions, et constantes en groupes logiques.
    - Il est déclaré en utilisant le mot-clé 'namespace' suivi du nom du namespace.
    - Les namespaces permettent de résoudre les conflits de noms en créant un espace de noms distinct.
    - Lorsqu'il y a plusieurs classes avec le même nom dans différents namespaces, on peut utiliser des alias pour éviter les conflits en utilisant le mot-clé 'as' lors de l'importation.

    - extension PHP Namespace Resolver qui permet d'importer les class, (clic droit import)
    - un namespace est un mécanisme qui permet d'organiser et de regrouper des classes.
    - le namespace se place au dessus de la class, et contient l'arborescence (chemin) depuis la racine du projet
    - Grâce aux namespaces, on peut distinguer nos classes, si jamais plusieurs portaient le même nom.
    - En cas d'importation de plusieurs classes du même nom, pour éviter tout conflit, on peut les renommer en utilisant le mot clé 'as' à la suite de l'importation 

    
*/