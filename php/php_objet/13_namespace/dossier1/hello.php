<?php

// Déclaration du namespace 'dossier1' pour organiser le code et éviter les conflits de noms de classes.
namespace dossier1;

// Déclaration de la classe Hello dans le namespace 'dossier1'.
class Hello
{
    // Constructeur de la classe Hello.
    // Le constructeur est appelé lorsque vous créez une instance de la classe.
    public function __construct()
    {
        // Affichage d'un message indiquant que l'objet Hello du namespace dossier1 a été instancié.
        echo 'Je suis un objet de la class hello du dossier 1 <br>';
    }
}

// Le fichier de la classe Hello est maintenant disponible pour être utilisé dans d'autres fichiers.

// On suppose que ce fichier est enregistré dans 'namespace/dossier1/hello.php'