<?php
  $noExemple = 19;
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
    <?php
      // On peut déclarer des variables n'importe où dans le fichier
      $a = 3 + 5;
      echo "<p>3 + 5 = $a</p>";
    ?>
  </body>
</html>
