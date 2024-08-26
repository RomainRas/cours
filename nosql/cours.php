telecharger mongodb
xampp

https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.1.6/xampp-windows-x64-8.1.6-0-VS16-installer.exe/download
https://pecl.php.net/package/mongodb/1.19.3/windows

telecharger "8.1 Thread Safe (TS) x64"

copier le fichier php_mongodb.dll dans c:/xampp8-1/php/ext  
ouvrire le fichier php.init qui ce trouve dans le répertoire c:/xampp8-1/php/
ajouter la ligne 
extension=php_mongodb


https://getcomposer.org/Composer-Setup.exe


----------------------------------------------
Pour initialiser un projet

1- deplacer le terminal dans le répertoire c:/xampp/htdocs/projet1    commande : > cd c:/xampp8-1/htdocs/projet1  (projet1 doit être vide)
2- > composer init
3- > composer require mongodb/mongodb --ignore-platform-reqs
4- > composer require ext-mongodb --ignore-platform-reqs
<?php

// import toute les bib de composer que j'ai installer
require "../vendor/autoload.php"; // composer autoload

// Connexion a la base de donnee
$mongo = new MongoDB\Driver\Manager("mongodb://127.0.0.1:27017");

/*
 * mysql : 3306
 * mongodb : 27017
 * http : 80
 * https : 443
 * ftp : 21
 * ssh : 22
 */



$database  = "ma_database"; // nom base de donnée
$collection = "ma_collection"; // nom de la table

$datas = [
    // clé => valeur
    "nom" => "mounir",
    "prenom" => "boumil",
    "age" => 38,
    "adresse" => "10 rue je c pas ou"
];


$bulk = new MongoDB\Driver\BulkWrite(); // creation de l'objet
$bulk->insert($datas); // insert dans la table
$result = $mongo->executeBulkWrite($database . "." . $collection, $bulk); // execution de l'insertion