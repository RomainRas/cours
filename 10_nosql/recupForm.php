<?php

require "../vendor/autoload.php";

$mongo = new MongoDB\Driver\Manager("mongodb://localhost:27017"); // chemin vers notre base de donnée

$database  = "ma_database"; // nom base de donnée
$collection = "contact"; // nom de la table

// $_POST = les données que j'ai recupérer à parti du formulaire avec la méthode post
$data = [
    // clé => valeur
    'nom' => $_POST['nom'], //  $_POST['nom'] la valeur que l'utilisateur va saisir
    'prenom' => $_POST['prenom'],
    'age' => $_POST['age']
];


$bulk = new MongoDB\Driver\BulkWrite(); // creation de l'objet
$bulk->insert($data); // insert dans la table
$result = $mongo->executeBulkWrite($database . "." . $collection, $bulk); // execution de l'insertion

header('Location: contact.php'); // redirection vers la page contact