<?php

$fh = fopen($argv[1], "r");
while (!feof($fh)) {
  $nums = fgets($fh);
  $sum += $nums;
}
echo $sum;
fclose($fh);
?>
