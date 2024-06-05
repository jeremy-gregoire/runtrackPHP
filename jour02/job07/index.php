<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RuntrackPHP - Jour02 - Job07</title>
</head>

<body>
  <form action="index.php" method="get">
    <label for="largeur">Largeur : </label>
    <input type="number" min="10" name="largeur" id="largeur" value="<?= empty($_GET["largeur"]) ? "10" : $_GET["largeur"] ?>">
    <label for="hauteur">Hauteur : </label>
    <input type="number" min="5" name="hauteur" id="hauteur" value="<?= empty($_GET["hauteur"]) ? "5" : $_GET["hauteur"] ?>">
    <input type="submit" value="Construire la maison">
  </form>
</body>

</html>