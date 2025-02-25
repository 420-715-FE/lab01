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

    <h1>Rotisserie</h1>

    <?php

    if (!isset($_GET['prenom'])) {
        echo "<p>Le paramètre 'prenom' est manquant.</p>";
        echo '</body></html>';
        exit;
    }
    if (!isset($_GET['repas'])) {
        echo "<p>Le paramètre 'repas' est manquant.</p>";
        echo '</body></html>';
        exit;
    }
    if (!isset($_GET['accompagnement'])) {
        echo "<p>Le paramètre 'accompagnement' est manquant.</p>";
        echo '</body></html>';
        exit;
    }
    if (!isset($_GET['salade'])) {
        echo "<p>Le paramètre 'salade' est manquant.</p>";
        echo '</body></html>';
        exit;
    }
    if (!isset($_GET['ustensiles'])) {
        echo "<p>Le paramètre 'ustensiles' est manquant.</p>";
        echo '</body></html>';
        exit;
    }
    if (!isset($_GET['type'])) {
        echo "<p>Le paramètre 'type' est manquant.</p>";
        echo '</body></html>';
        exit;
    }

    $prenom = $_GET['prenom'];
    $repas = $_GET['repas'];
    $accompagnement = $_GET['accompagnement'];
    $salade = $_GET['salade'];
    $ustensiles = $_GET['ustensiles'];
    $type = $_GET['type'];

    if ($repas != 1 && $repas != 2) {
        echo "<p>Le paramètre 'repas' doit être 1 ou 2.</p>";
        echo '</body></html>';
        exit;
    }
    if ($accompagnement != 1 && $accompagnement != 2) {
        echo "<p>Le paramètre 'accompagnement' doit être 1 ou 2.</p>";
        echo '</body></html>';
        exit;
    }
    if ($salade != 1 && $salade != 2) {
        echo "<p>Le paramètre 'salade' doit être 1 ou 2.</p>";
        echo '</body></html>';
        exit;
    }
    if ($ustensiles != 0 && $ustensiles != 1) {
        echo "<p>Le paramètre 'ustensiles' doit être 0 ou 1.</p>";
        echo '</body></html>';
        exit;
    }
    if ($type != 1 && $type != 2) {
        echo "<p>Le paramètre 'type' doit être 1 ou 2.</p>";
        echo '</body></html>';
        exit;
    }

    if ($type == 1) {
        if (!isset($_GET['paiement'])) {
            echo "<p>Le paramètre 'paiement' est obligatoire lorsque le type est 1.</p>";
            echo '</body></html>';
            exit;
        }
        $paiement = $_GET['paiement'];
        if ($paiement != 1 && $paiement != 2) {
            echo "<p>Le paramètre 'paiement' doit être 1 ou 2.</p>";
            echo '</body></html>';
            exit;
        }
    }

    if ($repas == 1) {
        $texteRepas = 'Poitrine';
    } else {
        $texteRepas = 'Cuisse';
    }

    if ($accompagnement == 1) {
        $texteAccompagnement = 'des frites';
    } else {
        $texteAccompagnement = 'du riz';
    }

    if ($salade == 1) {
        $texteSalade = 'crémeuse';
    } else {
        $texteSalade = 'traditionnelle';
    }

    if ($ustensiles == 0) {
        $texteUstensiles = 'Vous avez demandé des ustensiles.';
    } else {
        $texteUstensiles = "Vous n'avez pas demandé d'ustensiles.";
    }
    
    ?>

    <p>Bonjour <?= $prenom ?>.</p>
    <p>
        Vous avez commandé un repas
        <strong><?= $texteRepas ?></strong>
        avec
        <strong><?= $texteAccompagnement ?></strong>
        et une salade
        <strong><?= $texteSalade ?></strong>.
    </p>
    <p><?= $texteUstensiles ?></p>
    <p>
        Votre commande est
        <?php
            if ($type == 1) {
                echo '<strong>pour une livraison</strong>';
                if ($paiement == 1) {
                    echo ' et vous paierez <strong>en argent comptant</strong>.';
                } else {
                    echo ' et vous paierez <strong>avec une carte</strong>.';
                }
            } else {
                echo '<strong>pour emporter</strong>.';
            }
        ?>
    </p>
</body>
</html>
