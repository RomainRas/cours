<?php

// Fonction d'autoloading : Cette fonction est déclenchée chaque fois qu'une classe est utilisée pour la première fois.
// Elle permet de charger automatiquement la classe correspondant au nom donné sans avoir besoin de require_once manuellement.
function inclusionAutomatique($nomClass)
{
    // Cette fonction prend en paramètre le nom de la classe appelée.
    
    // Les classes sont généralement stockées dans des fichiers qui portent le même nom que la classe. 
    // Nous utilisons ici le nom de la classe pour localiser le fichier correspondant.
    require_once($nomClass . '.php');
    echo '<p>la class ' . $nomClass . ' a été integré</p>';
}

spl_autoload_register('inclusionAutomatique');


/*
    la fonction predefini PHP spl_autoload_register est executée automatiquement a chaque fois qu'il y a le mot-clé 'new' dans le code ( Rappel : le mot-clé 'new' permet de generer un objet, le terme qui suit le new est le nom de la class)

    l'objectif de la fonction spl_autoload_register est d'appeler une autre fonction, c'est le nom (str) de cette derniere qui doit etre definit comme argument
    L'autoload est un mecanisme qui detecte l'instanciation d'objet et integre la class de l'objet

    La fonction predefinie php spl_autoload_register() permet d'executer une fonction (argument de la fonction spl_autoload_register()) Lorsque l'interpreteur va voir passer le terme 'new'
*/