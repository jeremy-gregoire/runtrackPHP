<?php
for ($i = 0; $i <= 100; $i++) {
  if ($i == 42) {
    echo "La Plateforme_\n";
  } else if ($i >= 0 && $i <= 20) {
    echo "<b>" . $i . "</b>\n";
  } else if ($i >= 25 && $i <= 50) {
    echo "<u>" . $i . "</u>\n";
  } else {
    echo $i . "\n";
  }
}
