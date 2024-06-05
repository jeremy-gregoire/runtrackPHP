<?php
function bonjour(bool $jour)
{
  if ($jour) {
    echo "Bonjour\n";
  } else {
    echo "Bonsoir\n";
  }
}

bonjour(true);
bonjour(false);
