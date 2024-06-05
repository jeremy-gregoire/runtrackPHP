<?php
function occurences(string $str, string $char)
{
  return substr_count($str, $char);
}

echo occurences("Bonjour", "o") . "\n";
echo occurences("Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti dolor laudantium voluptatem eaque hic impedit possimus officiis, delectus non ratione eius necessitatibus numquam obcaecati adipisci! Beatae aut quis consectetur aperiam?", "a") . "\n";
