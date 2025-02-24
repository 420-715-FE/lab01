<?php
  $noExemple = 17;

  // On peut utiliser des nombres directement
  $a = 3 + 5;
  $b = $a / 2;
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
      echo "
        <p>3 + 5 = $a</p>
        <p>$a / 2 = $b</p>
      ";
    ?>
  </body>
</html>
