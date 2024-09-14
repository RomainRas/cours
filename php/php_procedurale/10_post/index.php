<?php
// Formulaire de saisie des informations
?>

<form method="post">
    <!-- Champ pour saisir le prénom -->
    <label>Prenom</label>
    <input type="text" name="prenom">
    <br><br>
    
    <!-- Champ pour saisir la description -->
    <label>Description</label>
    <textarea name="description"></textarea>
    <br><br>
    
    <!-- Bouton pour soumettre le formulaire -->
    <input type="submit" value="Poster">
</form>

<?php
// Vérification si le formulaire a été soumis avec la méthode POST
// Cela permet d'éviter les erreurs quand les champs ne sont pas encore remplis
if ($_POST) {
    // Affichage des valeurs des champs prénom et description
    echo $_POST['prenom'] . '<br>';
    echo $_POST['description'] . '<br>';
}
?>