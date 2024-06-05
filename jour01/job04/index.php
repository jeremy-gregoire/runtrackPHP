<?php
for ($i = 0; $i <= 1337; $i++) {
  if ($i == 42) {
    echo "<b><u>" . $i . "</u></b>\n";
    continue;
  }

  echo $i . "\n";
}
