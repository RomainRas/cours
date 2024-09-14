<?php

// Fonction division()
// Cette fonction prend deux paramètres : $a (dividende) et $b (diviseur).
// Elle effectue une division et lance une exception si le diviseur est égal à zéro.
function division($a, $b)
{
    // Vérification si le diviseur $b est égal à 0.
    // Si $b est 0, on lance une exception à l'aide du mot-clé throw.
    if ($b == 0) {
        // throw : utilisé pour déclencher une exception avec un message personnalisé.
        throw new Exception('On ne peut pas diviser par zéro');
    }
    // Si la condition n'est pas remplie (b différent de 0), on retourne le résultat de la division.
    return $a / $b;
}

// Bloc try
// Le bloc try contient du code qui pourrait potentiellement déclencher une exception.
try {
    // Appel de la fonction division() avec les valeurs 10 et 0.
    // Cela va générer une exception car $b vaut 0.
    echo division(10, 0);
} 
// Bloc catch
// Si une exception est levée dans le bloc try, le bloc catch est exécuté.
// Ici, $e représente l'objet de l'exception qui a été levée.
catch (Exception $e) {
    // getMessage() : méthode de l'objet Exception qui retourne le message de l'erreur.
    echo 'Erreur : ' . $e->getMessage();
    
    // Affichage de détails supplémentaires de l'exception
    // $e->getLine() : retourne la ligne où l'exception a été levée.
    // $e->getCode() : retourne le code de l'erreur (par défaut 0, sauf si spécifié autrement).
    // echo 'Ligne : ' . $e->getLine();
    // echo 'Code : ' . $e->getCode();

    // Affiche les méthodes disponibles dans l'objet Exception.
    // get_class_methods($e) retourne un tableau avec les noms des méthodes de l'objet.
    echo '<pre>';
    print_r(get_class_methods($e));
    echo '</pre>';
}

/*
division($a, $b) : Fonction qui divise $a par $b, mais qui vérifie d'abord si $b est égal à 0. Si c'est le cas, elle lance une exception.
throw : Utilisé pour déclencher une exception manuellement. Ici, on l'utilise pour signaler une tentative de division par zéro.
try : Bloc de code qui contient du code pouvant potentiellement déclencher une exception. Si une exception est levée, le contrôle passe au bloc catch.
catch (Exception $e) : Capture l'exception levée par le bloc try. L'objet $e contient toutes les informations sur l'exception, comme le message d'erreur, la ligne où elle s'est produite, etc.
$e->getMessage() : Méthode qui retourne le message d'erreur associé à l'exception.
get_class_methods($e) : Retourne un tableau contenant les noms de toutes les méthodes disponibles pour l'objet $e (ici, un objet de type Exception).
