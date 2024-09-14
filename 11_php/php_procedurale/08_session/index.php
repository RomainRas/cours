<?php
// J'ouvre une session
// La fonction session_start() démarre une nouvelle session ou reprend une session existante. 
// Elle doit être appelée en haut de chaque page où l'on veut accéder aux variables de session.
session_start();

// J'enregistre des informations dans la session
// Les variables de session sont stockées dans l'array superglobal $_SESSION.
// Ici, je stocke le prénom et le nom dans la session.
$_SESSION['prenom'] = 'Amin'; // Enregistre "Amin" comme prénom dans la session
$_SESSION['nom'] = 'HUSSEIN'; // Enregistre "HUSSEIN" comme nom dans la session

// Je supprime une information de la session
// La fonction unset() est utilisée pour retirer une variable de session spécifique.
// Ici, on supprime seulement la variable "nom" de la session.
unset($_SESSION['nom']); // Supprime uniquement le nom stocké dans la session

// Je détruis complètement la session
// La fonction session_destroy() détruit toutes les informations de la session actuelle.
// Après cette fonction, aucune des variables de session ne sera accessible.
session_destroy(); // Détruit complètement la session (toutes les variables de session sont supprimées)
?>