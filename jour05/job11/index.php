<?php
$connexion = null;

try {
  $connexion = new PDO('mysql:host=localhost;dbname=jour05', "root", "");
} catch (PDOException $e) {
  throw $e;
}

$sql = "select salle.nom as nom_salle, etage.nom as nom_etage, capacite, numero, superficie from salle inner join etage on salle.id_etage = etage.id order by salle.id desc;";
$request = $connexion->prepare($sql);
$request->execute();

$rooms = $request->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RuntrackPHP - Jour05 - Job11</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <table class="simple-style">
    <thead>
      <tr>
        <th colspan="3">Salle</th>
        <th colspan="2">Étage</th>
      </tr>
      <tr>
        <th>Numéro</th>
        <th>Nom</th>
        <th>Capacité</th>
        <th>Nom</th>
        <th>Superficie</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($rooms as $room) { ?>
        <tr>
          <td><?= $room["numero"] ?></td>
          <td><?= $room["nom_salle"] ?></td>
          <td><?= $room["capacite"] ?></td>
          <td><?= $room["nom_etage"] ?></td>
          <td><?= $room["superficie"] ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>

</html>