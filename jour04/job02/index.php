<?php
if (!isset($_COOKIE["nbVisites"])) {
  setcookie("nbVisites", 0);
} else {
  $_COOKIE["nbVisites"] += 1;
  setcookie("nbVisites", $_COOKIE["nbVisites"],);
}

if (isset($_POST["reinitialiser"])) {
  $_COOKIE["nbVisites"] = 0;
  setcookie("nbVisites", $_COOKIE["nbVisites"]);
}

echo $_COOKIE["nbVisites"] . "\n";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RuntrackPHP - Jour04 - Job02</title>
</head>

<body>
  <form action="index.php" method="post">
    <input type="submit" name="reinitialiser" value="Réinitialiser" />
  </form>
</body>

</html>