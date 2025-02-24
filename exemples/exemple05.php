<!DOCTYPE html>
<html>
  <head>
    <title>Exemple 05</title>
    <link rel="stylesheet" href="../water.css">
  </head>
  <body>
    <nav><a href="index.php">Retour</a></nav>
    <h1>Bonjour</h1>
    <?php
      // Une chaîne de caractères peut être écrite sur plusieurs lignes.
      echo '
        Ce texte est généré par PHP.
        <br /><strong>PHP peut aussi utiliser des balises HTML.</strong>
        <br />J\'aime les chats.
        <br />Le chat dit: "Miaou!"
      ';
    ?>
  </body>
</html>
