<?php
include('init.php'); // Inclusion du fichier d'initialisation
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <?php
    // Si l'utilisateur est connecté (présence de données dans la session)
    if (isset($_SESSION['membre'])) {
        // Affichage du prénom de l'utilisateur connecté
        echo '<h1>Bonjour ' . $_SESSION['membre']['prenom'] . '</h1>';
        // Lien de déconnexion
        echo '<a href="?action=deconnexion">Déconnexion</a>';
    } else {
        // Si l'utilisateur n'est pas connecté, affichage des liens vers l'inscription et la connexion
    ?>
   
    <a href="inscription.php">Inscription</a>
    <a href="connexion.php">Connexion</a>
    <?php
    }
    ?>
</body>
</html>
