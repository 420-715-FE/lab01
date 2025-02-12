<?php

$a = $_GET['a'];
$b = $_GET['b'];

$addition = $a + $b;
$soustraction = $a - $b;
$multiplication = $a * $b;
$division = $a / $b;
$modulo = $a % $b;

$aPrecedent = $a - 1;
$aSuivant = $a + 1;
$bPrecedent = $b - 1;
$bSuivant = $b + 1;
$aCarre = $a ** 2;
$bCarre = $b ** 2;
$racineA = sqrt($a);
$racineB = sqrt($b);

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
    <ul>
        <li><a href="?a=<?= $aPrecedent; ?>&b=<?= $bPrecedent; ?>">-</a></li>
        <li><?= $a ?> + <?= $b ?> = <?= $addition ?></li>
        <li><?= $a ?> - <?= $b ?> = <?= $soustraction ?></li>
        <li><?= $a ?> * <?= $b ?> = <?= $multiplication ?></li>
        <li><?= $a ?> / <?= $b ?> = <?= $division ?></li>
        <li><?= $a ?> % <?= $b ?> = <?= $modulo ?></li>
        <li><a href="?a=<?= $aSuivant; ?>&b=<?= $bSuivant; ?>">+</a></li>
        <li><a href="?a=<?= $aCarre; ?>&b=<?= $bCarre; ?>">^2</a></li>
        <li><a href="?a=<?= $racineA; ?>&b=<?= $racineB; ?>">√</a></li>
    </ul>
</body>
</html>