<?php
if (isset($_POST["connexion"]) && !empty($_POST["prenom"])) {
  $_COOKIE["prenom"] = $_POST["prenom"];
  setcookie("prenom", $_COOKIE["prenom"]);
}

if (isset($_POST["deco"]) && isset($_COOKIE["prenom"])) {
  $_COOKIE["prenom"] = "";
  setcookie("prenom", $_COOKIE["prenom"]);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RuntrackPHP - Jour04 - Job04</title>
</head>

<body>
  <?php if (!isset($_COOKIE["prenom"]) || empty($_COOKIE["prenom"])) { ?>
    <form action="index.php" method="post">
      <fieldset>
        <legend>Se connecter</legend>
        <label for="prenom">Prénom : </label>
        <input type="text" name="prenom" id="prenom" value="<?= $_POST["prenom"] ?>">
        <input type="submit" name="connexion" value="Connexion">
      </fieldset>
    </form>
  <?php } else { ?>
    <p>Bonjour <?= $_COOKIE["prenom"] ?> !</p>
    <form action="index.php" method="post">
      <input type="submit" name="deco" value="deco">
    </form>
  <?php } ?>
</body>

</html>