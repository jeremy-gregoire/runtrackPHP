<?php
session_start();
$produits = [];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RuntrackPHP - Jour03 - Job04</title>
</head>

<body>
  <form action="index.php" method="get">
    <fieldset>
      <legend>Ajout d'un produit</legend>

      <label for="nom">Nom du produit : </label>
      <input type="text" name="nom" id="nom" value="<?= $_GET["nom"] ?>">

      <label for="prixDeBase">Prix de base : </label>
      <input type="number" name="prixDeBase" id="prixDeBase" value="<?= empty($_GET["prixDeBase"]) ? "0" : $_GET["prixDeBase"] ?>">

      <label for="quantite">Quantité : </label>
      <input type="number" min="0" step="0.01" name="quantite" id="quantite" value="<?= empty($_GET["quantite"]) ? "0" : $_GET["quantite"] ?>">

      <label for="reduction">Réduction (en %) : </label>
      <input type="number" min="0" max="100" step="0.01" name="reduction" id="reduction" value="<?= empty($_GET["reduction"]) ? "0" : $_GET["reduction"] ?>">

      <input type="submit" value="Ajouter">
    </fieldset>
    <p>
      <?php
      if (!empty($_GET["nom"])) {
        array_push($produits, ["nom" => $_GET["nom"], "prixDeBase" => $_GET["prixDeBase"], "quantite" => $_GET["quantite"], "reduction" => $_GET["reduction"]]);
      } else {
        echo "Le nom du produit doit être renseinger !\n";
      }
      ?>
    </p>
  </form>

  <table>
    <thead>
      <tr>
        <th>Nom</th>
        <th>Prix de base</th>
        <th>Quantité</th>
        <th>Réduction (en %)</th>
        <th>Montant</th>
      </tr>
    </thead>
    <?php foreach ($produits as $produit) { ?>
      <tr>
        <input type="hidden" name="index" value="<?= $i ?>">
        <td><?= $produit["nom"] ?></td>
        <td><?= $produit["prixDeBase"] ?> €</td>
        <td><?= $produit["quantite"] ?></td>
        <td><?= $produit["reduction"] ?> %</td>
        <td><?= ($produit["prixDeBase"] * (1 - ($produit["reduction"] / 100))) * $produit["quantite"] ?> €</td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</body>

</html>