<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="get" action="#">
    <label for="txtNom">Nom</label>
    <input type="text" name="txtNom" id="txtNom">
    <label for="txtPrenom">Prénom</label>
    <input type="text" name="txtPrenom" id="txtPrenom">
    <label for="txtMessage">Message</label>
    <input type="text" name="txtMessage" id="txtMessage">
    <input type="submit" value="Envoyer">
    <input type="reset" value="Réinitialiser">
  </form>
</body>

</html>

<pre>
<code><?php var_dump($_GET); ?></code>
</pre>

<?php
echo "Nombre d'arguments : " . sizeof($_GET);
?>