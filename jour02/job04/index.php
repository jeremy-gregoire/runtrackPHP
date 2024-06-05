<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RuntrackPHP - Jour02 - Job04</title>
</head>

<body>
  <form action="index.php" method="post">
    <input type="text" name="txt1">
    <input type="text" name="txt2">
    <input type="text" name="txt3">
    <input type="text" name="txt4">
    <input type="submit" value="Envoyer">
  </form>
  <table>
    <thead>
      <tr>
        <th>Key</th>
        <th>Value</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($_POST as $key => $value) { ?>
        <tr>
          <td><?= $key ?></td>
          <td><?= $value == "" ? "vide" : $value ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>

</html>