<h1>Page 2</h1>
<hr>

<?php
// Vérification si les informations sur le produit sont présentes dans l'URL
if(isset($_GET['produit']) && isset($_GET['couleur']) && isset($_GET['prix'])) {
    // Affiche les valeurs envoyées via l'URL avec la méthode GET
    echo $_GET['produit'] . '<br>';
    echo $_GET['couleur'] . '<br>';
    echo $_GET['prix'] . '<br>';
}
?>

<?php
// Vérification si toutes les informations (produit, couleur, prix) sont présentes dans l'URL
if (isset($_GET['produit']) && isset($_GET['couleur']) && isset($_GET['prix'])) {
    // Récupération des valeurs des paramètres de l'URL
    $produit = $_GET['produit'];
    $couleur = $_GET['couleur'];
    $prix = $_GET['prix'];

    // Affichage de la phrase personnalisée avec les informations du produit
    echo 'Vous avez choisi le ' . $produit .  ' de couleur ' . $couleur . ' au prix de ' . $prix . ' €.';
} else {
    // Si aucune information n'est présente dans l'URL, on affiche un message par défaut
    echo 'Aucun produit sélectionné';
}
?>