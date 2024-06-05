<?php
for ($i = 1; $i <= 100; $i++) {
  if ($i % 3 == 0 && $i % 5 == 0) {
    echo "<p>FizzBuzz</p>\n";
  } else if ($i % 3 == 0) {
    echo "<p>Fizz</p>\n";
  } else if ($i % 5 == 0) {
    echo "<p>Buzz</p>\n";
  } else {
    echo "<p>" . $i . "</p>\n";
  }
}
