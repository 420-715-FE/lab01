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
    <h1>Fibonacci</h1>
    <?php

    if (!isset($_GET['n1']) || !isset($_GET['n2'])) {
        echo "<p>Erreur: Les paramètres 'n1' et 'n2' sont obligatoires.</p>";
        echo '</body></html>';
        exit;
    }
    if (!is_numeric($_GET['n1']) || !is_numeric($_GET['n2'])) {
        echo "<p>Erreur: Les paramètres 'n1' et 'n2' doivent être des nombres.</p>";
        echo '</body></html>';
        exit;
    }

    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $n3 = $n1 + $n2;

    ?>    
    <p>
        <?= $n3; ?>
        <a href="fibonacci.php?n1=<?= $n2; ?>&n2=<?= $n3; ?>">&gt;</a>
    </p>
</body>
</html>
