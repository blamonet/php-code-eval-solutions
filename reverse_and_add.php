<?php

function sum_palindrome($num, $ct) {
  if ($ct > 1000) {
    return;
  }

  $new_sum = $num + (int)strrev($num);
  if ($new_sum == (int)strrev($new_sum)) {
    return "$ct $new_sum";
  }

  $ct++;
  return sum_palindrome($new_sum, $ct);
}

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
  $test = trim(fgets($fh));
  if ($test != "") {
    echo sum_palindrome($test, 1) . "\n";
  }
}
fclose($fh);
?>
