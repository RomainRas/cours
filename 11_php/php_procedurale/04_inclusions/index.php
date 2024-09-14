<?php
include('fonctions/fonctions.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Page d'accueil</title>
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>

        <?php
            include('view/header.php')
        ?>

        <?php
            include('view/nav.php')
        ?>

		<section>
			<h2>Accueil</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</section>

        <?php
            include('view/footer.php')
        ?>
		<script src="script/script.js"></script>
	</body>
</html>

<!-- Créer un fichier distinct pour :
  - header, 
  - nav 
  - footer 
  - dans le dossier 'view' et l'inclure sur les differentes pages -->