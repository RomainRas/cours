<?php
// Si tu veux accéder aux variables de session sur cette page, il est nécessaire de démarrer la session
session_start();

// Exemple d'accès aux variables de session (si elles ne sont pas encore détruites)
if (isset($_SESSION['prenom'])) {
    echo 'Bonjour ' . $_SESSION['prenom'] . '<br>';
} else {
    echo 'Aucune session de prénom trouvée.<br>';
}

// La session ayant été détruite dans index.php, le prénom ne sera accessible que si la session n'a pas encore été fermée.
?>