<?php
function calcule(int | float $nombre1, string $opérateur, int | float $nombre2)
{
  switch ($opérateur) {
    case '+':
      echo ($nombre1 + $nombre2) . "\n";
      break;
    case '-':
      echo ($nombre1 - $nombre2) . "\n";
      break;
    case '*':
      echo ($nombre1 * $nombre2) . "\n";
      break;
    case '/':
      echo ($nombre1 / $nombre2) . "\n";
      break;
    case '%':
      echo ($nombre1 % $nombre2) . "\n";
      break;
    default:
      echo "L'opérateur spécifié n'existe pas !\n";
      break;
  }
}

calcule(7, "+", 4);
calcule(7, "-", 4);
calcule(7, "*", 4);
calcule(7, "/", 4);
calcule(7, "%", 4);
