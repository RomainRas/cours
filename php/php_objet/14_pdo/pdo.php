<?php 

// Connexion directe à une base de données en utilisant PDO sans classe personnalisée.

// Création d'une nouvelle instance PDO pour se connecter à la base de données.
// La chaîne de connexion spécifie le type de base de données (mysql), l'hôte et le nom de la base de données.
// Les informations d'identification (nom d'utilisateur et mot de passe) sont fournies.
// Un tableau d'options est passé en dernier argument pour configurer PDO.
$pdo = new PDO(
    'mysql:host=localhost; dbname=pdopoo', // Chaîne de connexion : type de base de données, hôte et nom de la base de données.
    'root', // Identifiant pour se connecter à la base de données.
    '', // Mot de passe pour se connecter à la base de données.
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // Gestion des erreurs : les avertissements seront affichés.
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', // Commande SQL pour forcer l'encodage en UTF-8.
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // Mode de récupération par défaut des résultats : tableau associatif.
    ] // Tableau d'options pour configurer le comportement de PDO.
);

// Affichage des méthodes disponibles pour l'objet $pdo en utilisant print_r pour explorer l'objet PDO.
echo '<pre>';
echo print_r(get_class_methods($pdo));
echo '</pre>';

// Explications:
// - 'new PDO()' crée une instance de la classe PDO pour établir une connexion à la base de données avec les paramètres fournis.
// - 'get_class_methods($pdo)' retourne un tableau des méthodes disponibles pour l'objet PDO.
// - 'print_r()' est utilisé pour afficher ces méthodes dans un format lisible.

