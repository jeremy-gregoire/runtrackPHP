<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RuntrackPHP - Jour01 - Job14</title>
</head>

<body>
  <form method="post">
    <input type="text" name="txtStr">
    <select name="sltModeTransformation">
      <option value="gras">Gras</option>
      <option value="césar">César</option>
      <option value="plateforme">Plateforme</option>
    </select>
    <input type="submit" value="Transformer">
  </form>
</body>

</html>

<?php
function ceasarCipher(string $str, int $shift = 2)
{
  $output = "";
  $chars = str_split($str);

  foreach ($chars as $char) {
    if (!ctype_alpha($char)) {
      $output .= $char;
    } else {
      $offset = ord(ctype_upper($char) ? 'A' : 'a');
      $output .= chr(fmod(((ord($char) + $shift) - $offset), 26) + $offset);
    }
  }

  return $output;
}

switch ($_POST["sltModeTransformation"]) {
  case 'gras':
    $mots = explode(" ", $_POST["txtStr"]);

    foreach ($mots as $mot) {
      if (ctype_upper($mot[0])) {
        echo "<b>" . $mot . "</b>\n";
      } else {
        echo $mot . "\n";
      }
    }
    break;
  case 'césar':
    echo "<p>" . ceasarCipher($_POST["txtStr"]) . "</p>\n";
    echo "<p>" . ceasarCipher($_POST["txtStr"], 3) . "</p>\n";
    echo "<p>" . ceasarCipher($_POST["txtStr"], 4) . "</p>\n";
    echo "<p>" . ceasarCipher($_POST["txtStr"], 5) . "</p>\n";
    break;
  case 'plateforme':
    $mots = explode(" ", $_POST["txtStr"]);

    foreach ($mots as $mot) {
      if (substr($mot, strlen($mot) - 2, strlen($mot)) == "me") {
        echo $mot . "_\n";
      } else {
        echo $mot . "\n";
      }
    }
    break;
}
