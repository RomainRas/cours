<?php

// Inclusion du fichier Database.php pour pouvoir utiliser la classe Database.
require_once('Database.php');

// Création d'une instance de la classe Database.
$database = new Database();

// Appel de la méthode connexion() sur l'objet $database pour établir une connexion à la base de données.
// La méthode connexion() retourne une instance PDO.
$pdo = $database->connexion();

// Création d'une nouvelle instance de la classe Database pour démontrer que la connexion est indépendante.
// Appel de la méthode connexion() sur le nouvel objet $pdoObject.
$pdoObject = new Database();
$pdoObject->connexion();

// Explications:
// - 'require_once' inclut le fichier contenant la définition de la classe Database pour qu'elle soit disponible.
// - 'new Database()' crée une nouvelle instance de la classe Database.
// - La méthode 'connexion()' de la classe Database est appelée pour établir une connexion à la base de données et retourne l'instance PDO pour l'utiliser ailleurs.

