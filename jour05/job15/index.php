<?php
$connexion = null;

try {
  $connexion = new PDO('mysql:host=localhost;dbname=jour05', "root", "");
} catch (PDOException $e) {
  throw $e;
}

$sql = 'select salle.nom as nom_salle, etage.nom as nom_etage from salle inner join etage on salle.id_etage = etage.id;';
$request = $connexion->prepare($sql);
$request->execute();

$rooms = $request->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RuntrackPHP - Jour05 - Job15</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <table class="simple-style">
    <thead>
      <tr>
        <th>Nom de la salle</th>
        <th>Nom de l'étage</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($rooms as $room) { ?>
        <tr>
          <td><?= $room["nom_salle"] ?></td>
          <td><?= $room["nom_etage"] ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>

</html>