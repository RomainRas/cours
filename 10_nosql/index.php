<html>
    <head>

    </head>
    <body>
        <h1>Formulaire du projet</h1>

        <form action="recupForm.php" method="post">
        //* get = affiche les données sur l'url /
        //* post = envoie les données dans le body, elles sont donc cachées /
            <input type="text" name="nom" placeholder="Votre nom">
            <input type="text" name="prenom" placeholder="Votre prenom">
            <input type="number" name="age" placeholder="Votre age">
            //* il doit toujours y avoir un nom /
            //* placeholder rajoute du texte qui va disparaitre lors de la saisie 
            <input type="submit" value="Envoyer">

        </form>


    </body>
</html>