<?php

$erreur = false;

if (isset($_GET['prenom']) && isset($_GET['nom'])) {
    $prenom = $_GET['prenom'];
    $nom = $_GET['nom'];
    $bonjour = "Bonjour $prenom $nom!";
} else {
    $erreur = true;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratoire 01</title>
    <link rel="stylesheet" href="water.css">
</head>
<body>
    <nav>
        <a href="index.html">Retour</a>
    </nav>       
    <p>
        <?php

        if ($erreur) {
            echo "Erreur: les paramètres 'prenom' et 'nom' sont obligatoires.";
        } else {
            echo $bonjour;
        }
        
        ?>
    </p>
</body>
</html>
