<?php
include('init.php'); // Inclusion du fichier d'initialisation pour la connexion à la base de données et la gestion des sessions

// Si le formulaire a été posté et que l'utilisateur n'est pas encore connecté :
if (isset($_SESSION['membre'])) {
    // Si l'utilisateur est déjà connecté, on le redirige vers la page d'accueil
    header('location:index.php');
}

if ($_POST) {
    // On récupère les informations du membre à partir de l'adresse e-mail fournie
    $r = $pdo->query("SELECT * FROM membre WHERE email = '$_POST[email]'");

    // Si le membre existe (1 ou plusieurs résultats)
    if ($r->rowCount() >= 1) {
        $content .= '<p>Connexion réussie !</p>';
        // On stocke les informations du membre sous forme de tableau associatif
        $membre = $r->fetch(PDO::FETCH_ASSOC);

        // Vérification du mot de passe avec password_verify (comparaison entre le mot de passe saisi et celui stocké dans la base)
        if (password_verify($_POST['mdp'], $membre['mdp'])) {
            $content .= '<p>Mot de passe correct.</p>';
            // Enregistrement des informations du membre dans la session
            $_SESSION['membre']['nom'] = $membre['nom'];
            $_SESSION['membre']['prenom'] = $membre['prenom'];
            $_SESSION['membre']['email'] = $membre['email'];

            // Redirection vers la page d'accueil après la connexion
            header('location:index.php');
        } else {
            // Si le mot de passe est incorrect
            $content .= '<p>Le mot de passe est incorrect.</p>';
        }
    } else {
        // Si l'adresse e-mail n'existe pas dans la base de données
        $content .= '<p>Adresse e-mail inexistante.</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>

    <?php
    // Affichage du contenu (message de succès ou d'erreur)
    echo $content;
    ?>
    <!-- Formulaire de connexion avec les champs e-mail et mot de passe -->
    <form method="post">
        <input type="email" name="email" placeholder="Adresse Mail" required>
        <input type="password" name="mdp" placeholder="Mot de passe" required>
        <input type="submit" value="Se connecter">
    </form>
    
</body>
</html>
