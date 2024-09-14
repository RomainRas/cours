<!DOCTYPE html>
<html lang="fr">
<?php
    // Connexion à la base de données "bibliotheque" via PDO
    // PDO est utilisé pour établir une connexion sécurisée avec la base de données.
    // Ici, on se connecte à une base de données MySQL locale (localhost) nommée "bibliotheque", avec l'utilisateur "root" sans mot de passe.
    $pdo = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    // Vérification si une requête de suppression est passée via l'URL avec le paramètre "suprimmer"
    // isset($_GET['suprimmer']) vérifie si le paramètre "suprimmer" est présent dans l'URL
    if (isset($_GET['suprimmer'])) {
        // La variable $suprimmer est convertie en entier avec intval() pour éviter les injections SQL
        $suprimmer = intval($_GET['suprimmer']);
        // Exécution de la requête SQL pour supprimer le livre dont l'ID correspond à $suprimmer
        $pdo->exec("DELETE FROM livre WHERE id_livre = $suprimmer");
        // Après suppression, redirection vers index.php pour éviter une suppression multiple si la page est actualisée
        header('Location: index.php'); 
        exit; // Terminer le script après la redirection
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>  
<div class="container">
        <h1>Ajouter un Nouveau Livre</h1>
        <!-- Formulaire permettant d'ajouter un nouveau livre -->
        <form method="post">
            <!-- Champ pour le titre du livre -->
            <label for="titre">Titre du Livre:</label>
            <input type="text" name="titre" required>
            <!-- Le champ "titre" est obligatoire -->

            <!-- Champ pour l'auteur du livre -->
            <label for="auteur">Auteur du Livre:</label>
            <input type="text"  name="auteur" required>
            <!-- Le champ "auteur" est également obligatoire -->

            <!-- Bouton pour soumettre le formulaire et ajouter un livre -->
            <input type="submit" value="Ajouter">
        </form>

        <?php
            // Traitement du formulaire d'ajout lorsqu'il est soumis
            if ($_POST) {
                // Gestion des apostrophes dans le titre et l'auteur avec addslashes() pour éviter les erreurs SQL
                $_POST['titre'] = addslashes($_POST['titre']);
                $_POST['auteur'] = addslashes($_POST['auteur']);

                // Insertion du nouveau livre dans la base de données
                // La méthode exec() est utilisée ici pour exécuter la requête INSERT
                $pdo->exec (
                    "INSERT INTO livre (titre, auteur) 
                    VALUES ('$_POST[titre]', '$_POST[auteur]')");
                // La requête ajoute le nouveau livre avec le titre et l'auteur dans la table "livre"
            }
        ?>

        <h2>Liste des Livres</h2>
        <!-- Tableau HTML pour afficher les livres existants dans la base de données -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Action</th> <!-- Colonne pour l'action de suppression -->
                </tr>
            </thead>
            <tbody>
                <?php
                    // Récupération des livres de la base de données
                    $r = $pdo->query('SELECT * FROM livre'); // Sélection de tous les livres dans la table "livre"
                    
                    // Boucle pour parcourir et afficher chaque livre dans le tableau HTML
                    while($livre = $r->fetch(PDO::FETCH_ASSOC)) {
                        echo '<tr>';
                        // Affichage de l'ID du livre dans la première colonne
                        echo '<td>' . $livre['id_livre'] . '</td>';
                        // Affichage du titre du livre dans la deuxième colonne
                        echo '<td>' . $livre['titre'] . '</td>';
                        // Affichage de l'auteur du livre dans la troisième colonne
                        echo '<td>' . $livre['auteur'] . '</td>';
                        // Affichage d'un lien pour supprimer le livre dans la dernière colonne
                        // Ce lien contient une confirmation avant la suppression
                        echo '<td><a href="?suprimmer=' . $livre['id_livre'] . '" class="delete-button" onclick="return confirm(\'Êtes-vous sûr de vouloir supprimer ce livre ?\');">Supprimer</a></td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
