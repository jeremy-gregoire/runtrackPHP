<?php

/**
 * Pas de GET car tous les informations des saisies seront affiché dans l'URL.
 * Cela veut que si c'est une saisie de mot de passe, le mot de passe sera affiche en brut dans l'URL.
 * Il faut surtout pas afficher le mot de passe en brut comme ça.
 */
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RuntrackPHP - Jour02 - Job06</title>
</head>

<body>
  <form action="index.php" method="get">
    <label for="nombre">Choisir un nombre: </label>
    <input type="number" min="0" name="nombre" id="nombre" value="<?= empty($_GET["nombre"]) ? "0" : $_GET["nombre"] ?>">
    <input type="submit" value="Vérifier">
    <br />
    <p>
      <?php
      if (isset($_GET["nombre"])) {
        if ($_GET["nombre"] % 2 == 0) {
          echo "Nombre pair\n";
        } else {
          echo "Nombre impair\n";
        }
      }
      ?>
    </p>
  </form>
</body>

</html>