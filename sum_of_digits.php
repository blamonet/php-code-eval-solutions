<?php
function sum_of_digits($nums) {
    $sum = 0;
      for ($i = 0; $i < strlen($nums); $i++) {
             $sum += $nums[$i];
               }
      return $sum;
}

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
    $nums = fgets($fh);
      echo sum_of_digits($nums) . "\n";
}
fclose($fh);
?>
