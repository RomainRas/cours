<?php

// Déclaration de la classe finale "Application"
// final = Empêche cette classe d'être héritée par une autre classe
final class Application
{   
    // Méthode publique "lancementApplication"
    // Cette méthode retourne une chaîne de caractères
    // public = Accès libre dans n'importe quelle portée (objet ou classe externe)
    public function lancementApplication()
    {
        return 'L\'application est lancée'; // Retourne le message indiquant que l'application est lancée
    }
}

// Création d'une instance de la classe "Application"
$appli = new Application(); // new = mot-clé utilisé pour instancier la classe
// Appelle la méthode "lancementApplication" de l'objet $appli et affiche son résultat
echo $appli->lancementApplication();

// Explications supplémentaires :
// Une classe finale ne peut pas être héritée, ce qui signifie que personne ne peut créer une sous-classe de cette classe.
// Le mot-clé "final" sert à protéger la classe contre l'héritage.
// De plus, une méthode marquée comme "final" dans une classe empêche toute redéfinition de cette méthode dans une sous-classe.

// Tentative d'héritage d'une classe finale (commenté car provoque une erreur)
/* class Extension extends Application
{
    // Cette classe ne peut pas hériter de "Application" car elle est marquée "final"
} */

// Déclaration de la classe "Extension"
class Extension
{
    // Méthode finale "lancementExtension"
    // final = Empêche toute sous-classe de redéfinir cette méthode
    // Cette méthode retourne une chaîne de caractères indiquant que l'extension est lancée
    final public function lancementExtension()
    {
        return 'L\'extension est lancée'; // Retourne le message indiquant que l'extension est lancée
    }
}

// Déclaration de la classe "Extension2" qui hérite de "Extension"
class Extension2 extends Extension
{
    // Tentative de redéfinition d'une méthode finale (commenté car provoque une erreur)
    /*public function lancementExtension()
    {
        return 'Lancement différent';
    } */
    // Comme la méthode "lancementExtension" est marquée "final" dans la classe parente, il est impossible de la redéfinir ici.
}
