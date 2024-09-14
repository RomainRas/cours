<?php

// require_once('L.php');
// require_once('M.php');
// require_once('N.php');

require_once('autoload.php');

// Autoloading automatique des classes dans le projet pour éviter de faire des require_once pour chaque fichier manuellement.
// On utilise un fichier autoload.php pour gérer automatiquement le chargement des classes dès qu'elles sont appelées.

// Le fichier autoload.php doit être inclus dans l'index.php. Cela permet d'éviter de charger manuellement chaque fichier de classe.
// require_once('autoload.php');

// Création des objets de chaque classe. Cela déclenche l'instanciation des classes et exécute le code du constructeur de chaque classe.
$objetL= new L();
$objetM= new M();
$objetN= new N();
$objetN= new O();


?>