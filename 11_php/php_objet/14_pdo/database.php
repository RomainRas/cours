<?php

// Déclaration de la classe Database pour gérer la connexion à la base de données.
class Database 
{
    // Propriétés privées pour stocker les informations de connexion.
    private $host = 'localhost'; // Nom d'hôte du serveur de base de données.
    private $dbName = 'pdoPoo'; // Nom de la base de données.
    private $username = 'root'; // Nom d'utilisateur pour se connecter à la base de données.
    private $password = ''; // Mot de passe pour se connecter à la base de données.
    private $config = [
        // Configuration des attributs PDO pour la connexion.
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // Attribut pour définir le mode de gestion des erreurs : les avertissements seront affichés.
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" // Commande SQL pour forcer l'encodage en UTF-8.
    ];
    private $pdo; // Propriété pour stocker l'instance PDO.

    // Méthode pour établir la connexion à la base de données.
    public function connexion()
    {
        // Création d'une nouvelle instance PDO pour se connecter à la base de données.
        // La chaîne de connexion contient le type de base de données, l'hôte et le nom de la base de données.
        // Les informations d'identification (nom d'utilisateur et mot de passe) sont également fournies.
        // La configuration des attributs PDO est passée en quatrième argument.
        $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->dbName}", $this->username, $this->password, $this->config);

        // Retourne l'instance PDO pour être utilisée ailleurs.
        return $this->pdo;
    }
}
