<!-- SYSTEME DE COMMENTAIRE -->

<!-- 
    1. Création de la base de données :
        - Crée une base de données nommée "commentaires".
        - Crée une table appelée "commentaire" avec les colonnes suivantes :
            - id_commentaire (clé primaire, AUTO_INCREMENT)
            - pseudo (VARCHAR)
            - message (TEXT)
            - date_heure_message (DATETIME ou TIMESTAMP)
-->

<!DOCTYPE html>
<html lang="fr">
<?php
    // Connexion à la base de données MySQL en utilisant PDO
    // Les erreurs SQL seront affichées sous forme d'avertissements et les échanges avec la base de données seront encodés en UTF-8.
    $pdo = new PDO('mysql:host=localhost;dbname=commentaires', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Systeme de commentaire</title>
    </head>
<body>
    <?php
    // Vérification si le formulaire a été validé avec la méthode POST
    if (isset($_POST['validation'])) {
        // Récupération du pseudo et du message avec addslashes pour gérer les apostrophes
        $pseudo = addslashes($_POST['pseudo']);
        $message = addslashes($_POST['message']);
        // Récupération de la date actuelle pour l'insertion dans la base de données
        $date_heure_message = date('Y-m-d');

        // Insertion du pseudo, message et date dans la table "commentaire" de la base de données
        $pdo->exec("INSERT INTO commentaire (pseudo, message, date_heure_message) 
                    VALUES ('$pseudo', '$message', '$date_heure_message')");

        // Affichage d'un message de confirmation après la soumission du commentaire
        echo '<h3>Merci pour votre commentaire !</h3>';
        echo ' <b>Votre message en dessous :</b><br>';
        echo '<br>';

        // Récupération et affichage de tous les commentaires stockés dans la base de données
        $r = $pdo->query('SELECT * FROM commentaire');
        while($commentaire = $r->fetch(PDO::FETCH_ASSOC)) {
            // Affichage du pseudo et du message de chaque commentaire
            echo '<b>Message de ' . $commentaire['pseudo'] . ':</b><br>' . $commentaire['message'] . '<br>';
            echo '<br>';
        }
        echo '<br>';
    } else {
        // Si le formulaire n'a pas encore été soumis, affichage du formulaire de commentaire
    ?>
    <h1>Laissez-nous un commentaire !</h1>
    <form method="post">
        <!-- Champ pour saisir le pseudo -->
        <label>Pseudo :</label><br>
        <input type="text" name="pseudo" placeholder="Votre pseudo" required><br><br>

        <!-- Champ pour saisir le message -->
        <label>Message :</label><br>
        <textarea name="message" placeholder="Votre commentaire" required></textarea><br><br>

        <!-- Bouton pour soumettre le formulaire -->
        <input type="submit" value="Envoyer" name="validation">
    </form>
    <?php
    }
    ?>
</body>
</html>

<!-- VERSION ALTERNATIVE -->
<?php
// Connexion à la base de données "dialogue" en utilisant PDO
$pdo = new PDO('mysql:host=localhost;dbname=dialogue', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

// Si le formulaire a été posté, on récupère et stocke les données
if($_POST) {
    // Gestion des apostrophes pour éviter des erreurs SQL avec addslashes()
    $_POST['message'] = addslashes($_POST['message']);
    $_POST['pseudo'] = addslashes($_POST['pseudo']);

    // Insertion du pseudo, message et de la date/heure actuelle dans la base de données
    $pdo->exec("INSERT INTO commentaire (pseudo, message, date_heure_message) 
                VALUES ('$_POST[pseudo]', '$_POST[message]', NOW())");
}

// Affichage des messages existants dans la base de données
$r = $pdo->query('SELECT * FROM commentaire');
while($commentaire = $r->fetch(PDO::FETCH_ASSOC)) {
    // Affichage de chaque commentaire avec le pseudo et le message
    echo $commentaire['pseudo'] . ' : ' . $commentaire['message'] . '<br>';
}
?>

<hr>

<!-- Formulaire pour poster un nouveau commentaire -->
<form method="post">
    <!-- Champ pour le pseudo -->
    <input type="text" name="pseudo" placeholder="Pseudo" required><br><br>

    <!-- Champ pour le message -->
    <textarea name="message" placeholder="Commentaire" required></textarea><br><br>

    <!-- Bouton pour poster le commentaire -->
    <input type="submit" value="Poster">
</form>
