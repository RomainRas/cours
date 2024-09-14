<?php

// Déclaration de l'interface Authentificate
interface Authentificate
{
    // Méthode "connection"
    // Obligatoire pour toute classe qui implémente cette interface
    public function connection(): string;

    // Méthode "disconnection"
    // Obligatoire pour toute classe qui implémente cette interface
    public function disconnection(): string;

    // Méthode "forgot_password"
    // Obligatoire pour toute classe qui implémente cette interface
    public function forgot_password(): string;

    // Méthode "remember_me"
    // Obligatoire pour toute classe qui implémente cette interface
    public function remember_me(): string;
}

// Déclaration de l'interface Profil
interface Profil
{
    // Méthode "seeProfil"
    // Obligatoire pour toute classe qui implémente cette interface
    public function seeProfil(): string;

    // Méthode "editProfil"
    // Obligatoire pour toute classe qui implémente cette interface
    public function editProfil(): string;

    // Méthode "changePassword"
    // Obligatoire pour toute classe qui implémente cette interface
    public function changePassword(): string;

    // Méthode "deleteProfil"
    // Obligatoire pour toute classe qui implémente cette interface
    public function deleteProfil(): string;
}

/*
    Une interface est une structure qui définit les méthodes qu'une classe doit implémenter.
    - Une classe peut implémenter plusieurs interfaces en utilisant le mot-clé "implements".
    - Les interfaces ne contiennent que des déclarations de méthodes publiques sans contenu (pas d'accolades ni de logique à l'intérieur des méthodes).
    - L'objectif est de fournir une structure pour les méthodes, en imposant une certaine organisation aux classes qui implémentent ces interfaces.
*/

// Déclaration de la classe "User" qui implémente deux interfaces : Authentificate et Profil
class User implements Authentificate, Profil
{
    // Implémentation de la méthode "connection"
    // Cette méthode retourne une chaîne indiquant "Connexion"
    public function connection(): string
    {
        return 'Connexion'; // Retourne la chaîne de caractères "Connexion"
    } 

    // Implémentation de la méthode "disconnection"
    // Cette méthode retourne une chaîne indiquant "Déconnexion"
    public function disconnection(): string
    {
        return 'Déconnexion'; // Retourne la chaîne de caractères "Déconnexion"
    }

    // Implémentation de la méthode "forgot_password"
    // Cette méthode retourne une chaîne indiquant "Mot de passe oublié"
    public function forgot_password(): string
    {
        return 'Mot de passe oublié'; // Retourne la chaîne "Mot de passe oublié"
    }

    // Implémentation de la méthode "remember_me"
    // Cette méthode retourne une chaîne indiquant "Se souvenir de moi"
    public function remember_me(): string
    {
        return 'Se souvenir de moi'; // Retourne la chaîne "Se souvenir de moi"
    }

    // Implémentation de la méthode "seeProfil"
    // Cette méthode retourne une chaîne indiquant "Voir le profil"
    public function seeProfil(): string
    {
        return 'Voir le profil'; // Retourne la chaîne "Voir le profil"
    }

    // Implémentation de la méthode "editProfil"
    // Cette méthode retourne une chaîne indiquant "Éditer le profil"
    public function editProfil(): string
    {
        return 'Éditer le profil'; // Retourne la chaîne "Éditer le profil"
    }

    // Implémentation de la méthode "changePassword"
    // Cette méthode retourne une chaîne indiquant "Changer le mot de passe"
    public function changePassword(): string
    {
        return 'Changer le mot de passe'; // Retourne la chaîne "Changer le mot de passe"
    }

    // Implémentation de la méthode "deleteProfil"
    // Cette méthode retourne une chaîne indiquant "Supprimer le profil"
    public function deleteProfil(): string
    {
        return 'Supprimer le profil'; // Retourne la chaîne "Supprimer le profil"
    }
}
