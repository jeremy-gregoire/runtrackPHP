<?php
session_start();

if (!isset($_SESSION["nbVisites"])) {
  $_SESSION["nbVisites"] = 0;
}

if (isset($_POST["reinitialiser"])) {
  $_SESSION["nbVisites"] = 0;
} else {
  $_SESSION["nbVisites"] += 1;
}

echo $_SESSION["nbVisites"] . "\n";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RuntrackPHP - Jour04 - Job01</title>
</head>

<body>
  <form action="index.php" method="post">
    <input type="submit" name="reinitialiser" value="Réinitialiser" />
  </form>
</body>

</html>