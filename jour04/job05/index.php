<?php
include_once "./tictactoe.php";
$game = new TicTacToe();
?>

<pre>
<code><?= var_dump($game->getGrid()); ?></code>
</pre>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RuntrackPHP - Jour04 - Job05</title>
</head>

<body>
  <form action="index.php" method="post">
    <table>
      <tbody>
        <?php for ($i = 0; $i < $game->getRows(); $i++) { ?>
          <tr>
            <?php for ($j = 0; $j < $game->getColumns(); $j++) { ?>
              <td>
                <button type="submit" name="gridButtons" value="<?= $i . "," . $j ?>"><?= $i . "," . $j ?></button>
              </td>
            <?php } ?>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </form>
</body>

</html>