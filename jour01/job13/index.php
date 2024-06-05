<?php
function leetSpeak(string $str)
{
  $alphabet = array(
    "A" | "a",
    "B" | "b",
    "C" | "c",
    "D" | "d",
    "E" | "e",
    "F" | "f",
    "G" | "g",
    "H" | "h",
    "I" | "i",
    "J" | "j",
    "K" | "k",
    "L" | "l",
    "M" | "m",
    "N" | "n",
    "O" | "o",
    "P" | "p",
    "Q" | "q",
    "R" | "r",
    "S" | "s",
    "T" | "t",
    "U" | "u",
    "V" | "v",
    "W" | "w",
    "X" | "x",
    "Y" | "y",
    "Z" | "z",
  );
  $leet = array(
    "4",
    "8",
    "(",
    "[)",
    "3",
    "|",
    "6",
    "#",
    "1",
    "_|",
    "X",
    "1",
    "|",
    "^/",
    "0",
    "|*",
    "(_,)",
    "2",
    "5",
    "7",
    "(_)",
    "\/",
    "\/",
    "><",
    "7",
    "≥"
  );
  return str_replace($alphabet, $leet, $str);
}

echo leetSpeak("test") . "<br>\n";
echo leetSpeak("Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti dolor laudantium voluptatem eaque hic impedit possimus officiis, delectus non ratione eius necessitatibus numquam obcaecati adipisci! Beatae aut quis consectetur aperiam") . "\n";
