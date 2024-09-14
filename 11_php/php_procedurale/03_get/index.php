<html>
<h>Index</h>
<hr>

<!-- Lien vers page2.php avec des paramètres dans l'URL pour un jean bleu à 10€ -->
<a href="page2.php?produit=jean&couleur=bleu&prix=10">Page 2</a>

<!-- 
    Créer 3 liens pour différents produits :
    - Un T-shirt rouge à 14€
    - Un pantalon blanc à 25€
    - Un chapeau violet à 30€
    Ces liens envoient des paramètres (produit, couleur, prix) à la page page2.php via l'URL.
-->
<h1>Produits</h1>
<ul>
    <!-- Chaque lien envoie les informations du produit via l'URL en utilisant la méthode GET -->
    <li><a href="page2.php?produit=T-shirt&couleur=rouge&prix=14">T-shirt rouge à 14€</a></li>
    <li><a href="page2.php?produit=pantalon&couleur=blanc&prix=25">Pantalon blanc à 25€</a></li>
    <li><a href="page2.php?produit=chapeau&couleur=violet&prix=30">Chapeau violet à 30€</a></li>
</ul>
</html>