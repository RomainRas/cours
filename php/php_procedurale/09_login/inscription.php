<?php
include('init.php'); // Inclusion du fichier d'initialisation

// Si le formulaire a été posté et que l'utilisateur n'est pas déjà connecté
if (isset($_SESSION['membre'])) {
    // Redirection vers l'accueil si l'utilisateur est déjà connecté
    header('location: index.php');
}

if ($_POST) {
    // Variable pour stocker les messages d'erreur
    $erreur = '';

    // Vérification de la longueur du prénom (entre 3 et 20 caractères)
    if (strlen($_POST['prenom']) < 3 || strlen($_POST['prenom']) > 20) {
        $erreur .= '<p>Votre prénom est trop court ou trop long.</p>';
    }

    // Vérification si l'adresse e-mail existe déjà dans la base de données
    $r = $pdo->query("SELECT * FROM membre WHERE email = '$_POST[email]'");

    if ($r->rowCount() >= 1) {
        $erreur .= '<p>Votre adresse e-mail est déjà utilisée.</p>';
    }

    // Gestion des apostrophes dans les champs du formulaire pour éviter les erreurs SQL
    foreach ($_POST as $indice => $valeur) {
        $_POST[$indice] = addslashes($valeur);
    }

    // Hachage du mot de passe avec password_hash
    $_POST['mdp'] = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

    // Si aucune erreur n'est détectée, insertion des données dans la base de données
    if (empty($erreur)) {
        $pdo->exec("
            INSERT INTO membre (nom, prenom, email, mdp) 
            VALUES ('$_POST[nom]', '$_POST[prenom]', '$_POST[email]', '$_POST[mdp]')
        ");

        // Message de succès après l'inscription
        $content .= '<p>Inscription validée !</p>';
        header('location:index.php'); // Redirection après inscription réussie
    }

    // Affichage des messages d'erreur
    $content .= $erreur;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>

    <?php
    // Affichage du contenu (messages d'erreur ou de succès)
    echo $content;
    ?>
    
    <!-- Formulaire d'inscription avec les champs nom, prénom, e-mail et mot de passe -->
    <form action="" method="post">
        <input type="text" name="nom" placeholder="Nom" required>
        <br><br>
        <input type="text" name="prenom" placeholder="Prénom" required>
        <br><br>
        <input type="email" name="email" placeholder="Adresse Mail" required>
        <br><br>
        <input type="password" name="mdp" placeholder="Mot de passe" required>
        <br><br>
        <input type="submit" value="S'inscrire">
    </form>
    
</body>
</html>
