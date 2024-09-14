<?php
// Connexion à la base de données
// Utilisation de PDO pour gérer la connexion à la base MySQL
$pdo = new PDO('mysql:host=localhost;dbname=09_login', 'root', '', array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // Affiche les erreurs SQL sous forme d'avertissements
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' // Définit l'encodage en UTF-8 pour les échanges de données
));

// Ouverture de la session pour l'ensemble du site
session_start();

// Gestion de la déconnexion
// Si l'URL contient le paramètre action=deconnexion, on détruit la session et on redirige vers la page d'accueil
if (isset($_GET['action']) && $_GET['action'] == 'deconnexion') {
    session_destroy(); // Destruction de toutes les variables de session
    header('location: index.php'); // Redirection vers l'accueil
}

// Variable $content pour stocker les messages à afficher (succès, erreur, etc.)
$content = '';
?>
