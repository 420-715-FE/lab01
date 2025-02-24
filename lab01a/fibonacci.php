<?php

$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$n3 = $n1 + $n2;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retour</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <nav>
        <a href="index.html">Retour</a>
    </nav>
    <h1>Fibonacci</h1>
    <p>
        <?= $n3; ?>
        <a href="fibonacci.php?n1=<?= $n2; ?>&n2=<?= $n3; ?>">&gt;</a>
    </p>
</body>
</html>