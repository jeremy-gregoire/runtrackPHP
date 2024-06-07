<?php
// Par défaut, il n'y a pas de connexion à la base de données
$connexion = null;

// Fait une tentative de connexion à une base de données
try {
  $connexion = new PDO('mysql:host=localhost;dbname=jour05', "root", "");
} catch (PDOException $e) {
  throw $e;
}

// Crée la requête SQL, la prépare, et l'execute
$sql = "select prenom, nom, naissance, sexe, email from etudiant;";
$request = $connexion->prepare($sql);
$request->execute();

// Récupère toutes les données
$students = $request->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RuntrackPHP - Jour05 - Job03</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <table class="simple-style">
    <thead>
      <tr>
        <th>Prénom</th>
        <th>Nom de famille</th>
        <th>Date de naissance</th>
        <th>Sexe</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($students as $student) { ?>
        <tr>
          <td><?= $student["prenom"] ?></td>
          <td><?= $student["nom"] ?></td>
          <td><?= $student["naissance"] ?></td>
          <td><?= $student["sexe"] ?></td>
          <td><?= $student["email"] ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>

</html>