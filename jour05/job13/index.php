<?php
$connexion = null;

try {
  $connexion = new PDO('mysql:host=localhost;dbname=jour05', "root", "");
} catch (PDOException $e) {
  throw $e;
}

$sql = "select avg(capacite) as capacite_moyenne from salle;";
$request = $connexion->prepare($sql);
$request->execute();

$result = $request->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RuntrackPHP - Jour05 - Job13</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <table class="simple-style">
    <thead>
      <tr>
        <th>Capacité Moyenne de Salle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?= $result["capacite_moyenne"] ?></td>
      </tr>
    </tbody>
  </table>
</body>

</html>