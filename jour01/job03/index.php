<?php
$entier = 4;
$flottant = 6.4;
$booleen = false;
$liste = array(4, 6, 7, 97, 41);
$chaine = "La chaine";
$objet = (object) array("nom" => "Philippe");
$null = NULL;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RuntrackPHP - Jour01 - Job03</title>
</head>

<body>
  <table>
    <thead>
      <tr>
        <th>Type</th>
        <th>Nom</th>
        <th>Valeur(s)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?= gettype($entier) ?></td>
        <td>$entier</td>
        <td><?= $entier ?></td>
      </tr>
      <tr>
        <td><?= gettype($flottant) ?></td>
        <td>$flottant</td>
        <td><?= $flottant ?></td>
      </tr>
      <tr>
        <td><?= gettype($booleen) ?></td>
        <td>$booleen</td>
        <td><?= $booleen ? "true" : "false" ?></td>
      </tr>
      <tr>
        <td><?= gettype($liste) ?></td>
        <td>$liste</td>
        <td><?= var_dump($liste) ?></td>
      </tr>
      <tr>
        <td><?= gettype($chaine) ?></td>
        <td>$chaine</td>
        <td><?= $chaine ?></td>
      </tr>
      <tr>
        <td><?= gettype($objet) ?></td>
        <td>$objet</td>
        <td><?= var_dump($objet) ?></td>
      </tr>
      <tr>
        <td><?= gettype($null) ?></td>
        <td>$null</td>
        <td><?= $null ? "Non null" : "null" ?></td>
      </tr>
    </tbody>
  </table>
</body>

</html>