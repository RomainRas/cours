<?php

// Connexion à la base de données "bibliotheque" avec PDO
// PDO (PHP Data Objects) est une classe PHP qui permet de se connecter à une base de données.
// Ici, nous nous connectons à une base de données MySQL hébergée sur le serveur local (localhost).
// La base de données s'appelle "bibliotheque", l'utilisateur est "root", et il n'y a pas de mot de passe.
// Les options passées à PDO sont : 
// - PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING : Pour afficher les erreurs SQL sous forme d'avertissements (utile pour le débogage).
// - PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' : Pour s'assurer que les échanges entre la base de données et PHP se font en UTF-8.
$pdo = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', '', array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // Affiche les erreurs SQL sous forme d'avertissements.
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' // Définit l'encodage en UTF-8 pour les échanges avec la base de données.
));

// Si le formulaire a été soumis (méthode POST)
if ($_POST) {
    // La fonction addslashes() ajoute des barres obliques avant les apostrophes pour éviter les erreurs SQL
    // Cela permet de protéger les valeurs envoyées contre les caractères spéciaux qui pourraient causer des problèmes.
    $_POST['titre'] = addslashes($_POST['titre']); // Gère les apostrophes dans le titre du livre
    $_POST['auteur'] = addslashes($_POST['auteur']); // Gère les apostrophes dans le nom de l'auteur

    // Insertion des informations du nouveau livre (titre et auteur) dans la base de données
    // La méthode exec() est utilisée ici pour exécuter des requêtes SQL sans retour de données.
    // Elle est idéale pour les requêtes INSERT, UPDATE ou DELETE.
    $pdo->exec("INSERT INTO livre (titre, auteur) VALUES ('$_POST[titre]', '$_POST[auteur]')");
    // La requête SQL ajoute un nouveau livre dans la table "livre" avec les valeurs envoyées via le formulaire.
}

?>

<!-- Création d'un tableau HTML pour afficher les livres stockés dans la base de données -->
<table border="1">
    <tr>
        <!-- En-tête du tableau : colonnes pour le titre et l'auteur des livres -->
        <th>Titre</th>
        <th>Auteur</th>
    </tr>
    
    <?php
    // Récupération des livres présents dans la base de données
    // La méthode query() est utilisée pour envoyer une requête SQL SELECT à la base de données.
    // Ici, elle récupère tous les livres dans la table "livre".
    $r = $pdo->query('SELECT * FROM livre');

    // Boucle pour parcourir chaque livre et afficher ses informations dans le tableau HTML
    // fetch(PDO::FETCH_ASSOC) permet de récupérer chaque ligne de résultat sous forme de tableau associatif (clé-valeur).
    while ($livre = $r->fetch(PDO::FETCH_ASSOC)) {
        // Pour chaque livre, on crée une nouvelle ligne dans le tableau HTML
        echo '<tr>';
        // On affiche le titre du livre dans la première cellule
        echo '<td>' . $livre['titre'] . '</td>';
        // On affiche l'auteur du livre dans la deuxième cellule
        echo '<td>' . $livre['auteur'] . '</td>';
        echo '</tr>'; // Fin de la ligne du tableau pour ce livre
    }
    ?>
</table>

<hr>

<!-- Formulaire HTML pour ajouter un nouveau livre à la base de données -->
<form method="post">
    <!-- Champ pour saisir le titre du livre -->
    <input type="text" name="titre" placeholder="Titre" required>
    
    <!-- Champ pour saisir l'auteur du livre -->
    <input type="text" name="auteur" placeholder="Auteur" required>
    
    <!-- Bouton pour soumettre le formulaire et ajouter le livre -->
    <input type="submit" value="Ajouter">
</form>
