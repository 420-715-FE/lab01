<?php
  $noExemple = 21;
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
    <h1>Exemple <?php echo $noExemple; ?></h1>
    <?php
      $prenom = $_GET["prenom"];
      $nom = $_GET["nom"];

      echo "<p>Bonjour $prenom $nom!</p>";

      // On peut aussi créer des liens qui passent des variables dans l'URL
    ?>

    <a href="exemple21.php?nom=Simpson&prenom=Bart">Bart Simpson</a>
  </body>
</html>
