<?php

$prenom = $_GET['prenom'];
$nom = $_GET['nom'];
$bonjour = "Bonjour $prenom $nom!";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratoire 01-A</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <nav>
        <a href="index.html">Accueil</a>
    </nav>       
    <p>     
        <?= $bonjour ?>
    </p>
</body>
</html>