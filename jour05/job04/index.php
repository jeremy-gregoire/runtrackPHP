<?php
$connexion = null;

try {
  $connexion = new PDO('mysql:host=localhost;dbname=jour05', "root", "");
} catch (PDOException $e) {
  throw $e;
}

$sql = "select nom, capacite from salle;";
$request = $connexion->prepare($sql);
$request->execute();

$salles = $request->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RuntrackPHP - Jour05 - Job04</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <table class="simple-style">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Capacité</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($salles as $salle) { ?>
        <tr>
          <td><?= $salle["nom"] ?></td>
          <td><?= $salle["capacite"] ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>

</html>