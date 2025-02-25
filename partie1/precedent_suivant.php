<?php

$nombre = $_GET['nombre'];
$nombrePrecedent = $_GET['nombre'] - 1;
$nombreSuivant = $nombre + 1;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retour</title>
    <link rel="stylesheet" href="water.css">
</head>
<body>
    <nav>
        <a href="index.html">Retour</a>
    </nav>
    <ul>
        <li><a href="?nombre=<?= $nombrePrecedent; ?>"><?= $nombrePrecedent; ?></a></li>
        <li><?= $nombre; ?></li>
        <li><a href="?nombre=<?= $nombreSuivant; ?>"><?= $nombreSuivant; ?></a></li>
    </ul>
</body>
</html>
