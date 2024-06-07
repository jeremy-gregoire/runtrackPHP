<?php
session_start();

if (!isset($_SESSION["prenoms"])) {
  $_SESSION["prenoms"] = [];
}

if (isset($_GET["reinitialiser"])) {
  $_SESSION["prenoms"] = [];
} else {
  if (isset($_GET["valider"]) && !empty($_GET["prenom"])) {
    array_push($_SESSION["prenoms"], $_GET["prenom"]);
    $_GET["prenom"] = "";
  }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RuntrackPHP - Jour04 - Job03</title>
</head>

<body>
  <form action="index.php" method="get">
    <fieldset>
      <legend>Ajouter une prénom</legend>
      <label for="prenom">Prénom : </label>
      <input type="text" name="prenom" id="prenom" value="<?= $_GET["prenom"] ?>">
      <input type="submit" name="valider" value="Valider">
    </fieldset>
  </form>

  <br />

  <form action="index.php" method="get">
    <input type="submit" name="reinitialiser" value="Réinitialiser la list">
  </form>

  <br />

  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>Prénom</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($_SESSION["prenoms"] as $key => $value) { ?>
        <tr>
          <td><?= $key ?></td>
          <td><?= $value ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>

</html>