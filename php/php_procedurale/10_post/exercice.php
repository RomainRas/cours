<h2>Exercices</h2>
<br>
<p>Créer un formulaire d'inscription prenant en compte les champs suivants :</p>
<ul>
    <li>Nom</li>
    <li>Prenom</li>
    <li>Adresse mail</li>
    <li>Mot de passe</li>
</ul>
<p>Quand on valide le formulaire, une liste HTML apparaît pour récapituler les informations saisies, et le formulaire disparaît.</p>

<?php
// Si le formulaire a été soumis
if ($_POST) {
    // Récupération des données du formulaire
    $nom = ($_POST['Nom']);
    $prenom = ($_POST['prenom']);
    $mail = ($_POST['mail']);
    
    // Affichage des données sous forme de liste
    echo "<ul>";
    echo "<li>Nom : " . $nom . "</li>";
    echo "<li>Prénom : " . $prenom . "</li>";
    echo "<li>Adresse Mail : " . $mail . "</li>";
    echo "</ul>";
} else {
    // Si le formulaire n'est pas encore soumis, on affiche le formulaire d'inscription
    echo '<form method="post">';
    echo '<label>Nom</label>';
    echo '<input type="text" name="Nom" required>';
    echo '<br><br>';
    echo '<label>Prenom</label>';
    echo '<input type="text" name="prenom" required>';
    echo '<br><br>';
    echo '<label>Adresse Mail</label>';
    echo '<input type="email" name="mail" required>';
    echo '<br><br>';
    echo '<label>Mot de passe</label>';
    echo '<input type="password" name="mdp" required>';
    echo '<br><br>';
    echo '<input type="submit" value="Poster">';
    echo '</form>';
}
?>

    // OU

<?php
// Si le formulaire a été validé
if (isset($_POST['validation'])) {
    // Si le formulaire est validé, on affiche un récapitulatif des informations saisies
    echo '<p>Votre inscription est validée. Voici le récapitulatif de vos informations :</p>';
    echo '<ul>';
    echo '<li>Nom : ' . $_POST['nom'] . '</li>';
    echo '<li>Prénom : ' . $_POST['prenom'] . '</li>';
    echo '<li>Adresse mail : ' . $_POST['email'] . '</li>';
    // Le mot de passe est hashé avant d'être affiché pour des raisons de sécurité
    echo '<li>Mot de passe : ' . password_hash($_POST['password'], PASSWORD_DEFAULT) . '</li>';
    echo '</ul>';
} else {
    // Si le formulaire n'a pas été soumis, on affiche le formulaire d'inscription
?>

    <form method="post">
        <!-- Champ pour le nom -->
        <input type="text" name="nom" placeholder="Nom">
        <br><br>

        <!-- Champ pour le prénom -->
        <input type="text" name="prenom" placeholder="Prénom">
        <br><br>

        <!-- Champ pour l'adresse mail -->
        <input type="email" name="email" placeholder="Adresse mail">
        <br><br>

        <!-- Champ pour le mot de passe -->
        <input type="password" name="password" placeholder="Mot de passe">
        <br><br>

        <!-- Bouton de validation -->
        <input type="submit" value="S'inscrire" name="validation">
    </form>

<?php
}
?>
Formulaire de commentaire avec explications en commentaires
<?php
// Si le formulaire a été validé
if (isset($_POST['validation'])) {
    // Affichage d'un message de confirmation après l'envoi du commentaire
    echo '<p>Merci pour votre commentaire !</p>';
} else {
    // Si le formulaire n'a pas encore été soumis, affichage du formulaire de commentaire
?>
    <h1>Commentaires</h1>

    <form method="post">
        <!-- Champ pour le pseudo -->
        <label>Pseudo :</label><br>
        <input type="text" name="pseudo"><br><br>

        <!-- Champ pour le message -->
        <label>Message :</label><br>
        <textarea name="message"></textarea><br><br>

        <!-- Bouton d'envoi du formulaire -->
        <input type="submit" value="Envoyer" name="validation">
    </form>

<?php
}
?>