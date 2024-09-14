<?php
// 1. Introduction à PDO
    /* DEFINITION:
        - PDO (PHP Data Objects) est une extension en PHP qui permet de se connecter à une base de données de manière sécurisée.
        - Un objet en PHP est une instance d'une classe, et PDO est une classe qui permet de manipuler des bases de données.
    */

    // Connexion à la base de données MySQL en utilisant PDO
    $pdo = new PDO(
        'mysql:host=localhost;dbname=entreprise', // Connexion à une base MySQL située sur le serveur local
        'root', // Utilisateur MySQL avec les droits d'administration
        '', // Mot de passe vide (en local, il n'y a souvent pas de mot de passe pour root)
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // Affichage des erreurs SQL sous forme d'avertissements
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' // Définit l'encodage en UTF-8 pour les échanges avec la base de données
        )
    );

    /* Explication :
        - $pdo : Variable qui stocke l'objet PDO, soit la connexion à la base de données.
        - new PDO : Crée une nouvelle instance (objet) de la classe PDO pour la connexion à la base de données.
        - mysql:host=localhost : Spécifie que le serveur de base de données est sur la même machine (localhost).
        - dbname=entreprise : Nom de la base de données à laquelle nous nous connectons.
        - 'root' : Nom d'utilisateur MySQL.
        - '' : Mot de passe vide pour l'utilisateur root.
        - array(...) : Options pour gérer les erreurs et l'encodage des échanges avec la base.
    */

// APPLICATION
    // Exemples d'opérations sur la base de données :
    
    // 1. Insérer un nouvel employé dans la table "employes"
        /*
        $pdo->exec('INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) 
                    VALUES ("Alexandre", "Dupond", "m", "commercial", "2020-08-30", 2000)');
        */
        // Cette commande insère un nouvel employé avec les informations spécifiées dans la table "employes".

    // 2. Modifier un employé existant :
        /*
        $pdo->exec('UPDATE employes SET prenom = "Alex" WHERE id_employes = 991');
        */
        // Cette commande modifie le prénom de l'employé dont l'ID est 991, en changeant "Alexandre" en "Alex".

    // 3. Supprimer un employé de la base de données :
        /*
        $pdo->exec('DELETE FROM employes WHERE id_employes = 991');
        */
        // Cette commande supprime l'employé dont l'ID est 991 de la table "employes".

    // 4. Afficher un employé sur la page :
        // - Je crée une variable $r pour stocker le résultat de la requête SQL :
        $r = $pdo->query('SELECT * FROM employes WHERE id_employes = 990');
        // - Je stocke dans la variable $employe les informations de l'employé sous forme d'un tableau associatif :
        $employe = $r->fetch(PDO::FETCH_ASSOC);
        // - Afficher toutes les informations de l'employé (Stephanie, ID = 990) sous forme de tableau :
        print_r($employe); // Affiche le tableau associatif contenant toutes les données de l'employé
        echo '<br>';

    // Exercice :
        // Afficher uniquement le prénom et le nom de l'employé.
        
        echo $employe['prenom'] . ' ' . $employe['nom'] . '<br>'; // Affiche le prénom et le nom de l'employé

        // Le faire avec toute la table des employés :

        // - Requête pour sélectionner tous les employés de la base :
        $r = $pdo->query('SELECT * FROM employes');
        // Nous allons utiliser une boucle pour parcourir chaque employé dans la table et afficher son prénom et nom :
        while ($employe = $r->fetch(PDO::FETCH_ASSOC)) { 
            // $employe contient un tableau associatif pour chaque employé récupéré dans la boucle
            echo $employe['prenom'] . ' ' . $employe['nom'] . '<br>'; // Affiche le prénom et le nom de chaque employé
        }


