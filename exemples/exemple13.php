<?php
  $noExemple = 13;

  $prenom = 'Homer';
  $nom = 'Simpson';
  $anneeNaissance = 1956;

  // Concaténation avec les apostrophes incluant un int
  $presentation = 'Bonjour, mon nom est <strong>'
    . $prenom. ' ' . $nom . '</strong> '
    . 'et je suis né en ' . $anneeNaissance . '.';
    ;
?>

<!DOCTYPE html>
<html>
  <head>
    <title>
      Exemple <?php echo $noExemple; ?>
    </title>
    <link rel="stylesheet" href="../water.css">
  </head>
  <body>
    <nav><a href="index.php">Retour</a></nav>
    <h1>Exemple <?php echo $noExemple; ?></h1>
    <?php echo $presentation; ?>
  </body>
</html>
