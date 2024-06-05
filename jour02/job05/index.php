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
  <title>RuntrackPHP - Jour02 - Job05</title>
</head>

<body>
  <form action="index.php" method="post">
    <label for="username">Nom d'utilisateur: </label>
    <input type="text" name="username" id="username" value="<?= $_POST["username"] ?>">
    <label for="password">Mot de passe: </label>
    <input type="password" name="password" id="password">
    <input type="submit" value="Se connecter">
    <input type="reset" value="Réinitialiser">
    <br />
    <p>
      <?php
      if (isset($_POST["username"]) && !empty($_POST["username"])) {
        if (isset($_POST["password"]) && !empty($_POST["password"])) {
          if ($_POST["username"] == "John" && $_POST["password"] == "Rambo") {
            echo "ce n'est pas ma guerre\n";
          } else {
            echo "votre pire cauchemar\n";
          }
        } else {
          echo "Le mot de passe dsoit être spécifier !\n";
        }
      } else {
        echo "Le nom d'utisateur doit être spécifier !\n";
      }
      ?>
    </p>
  </form>
</body>

</html>