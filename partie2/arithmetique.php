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

    <?php

    if (!isset($_GET['a']) || !isset($_GET['b'])) {
        echo "<p>Erreur: Les paramètres 'a' et 'b' sont obligatoires.</p>";
        echo '</body></html>';
        exit;
    } else if (!is_numeric($_GET['a']) || !is_numeric($_GET['b'])) {
        echo "<p>Erreur: Les paramètres 'a' et 'b' doivent être des nombres.</p>";
        echo '</body></html>';
        exit;
    }

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
